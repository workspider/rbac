<?php

namespace app\common\controller;

use think\Controller;
use think\Db;
use think\facade\Request;
use think\response\Redirect;
use think\facade\Session;

use app\common\model\QxMenu as MenuModel;

class Auth extends Controller
{

    /**
     * 获取菜单
     */
    public function menu($uid, $category)
    {
        // 获取所有显示的菜单
        $menu = MenuModel::where( [ ['type','=',0], ['category','=',$category] ] )->all()->toArray();
        $menu_all = GetTree::arr2tree($menu);
        // 获取用户所拥有的节点
        $node_url = GetNode::getAuthNode($uid, $category);
        
        // 超级管理员返回整个菜单
        if ($uid === 1){
            $list = $menu_all;
        }else{
            // 处理菜单列表，显示所拥有权限的菜单列表
            $list = GetNode::buildMenuData($menu_all, $node_url, $category);
        }
        // 当前路径
        $url = strtolower($this->request->controller()) . '/' . strtolower($this->request->action());
        // 处理菜单列表，适应前台遍历模式
        $furl = GetNode::getFatherKey($url);
        $menu_handle = GetNode::handleMenu($list, $furl);
        $this->assign('menu', ['menu_father' => $menu_handle['father'], 'fatherkey' => $furl, 'menu_son' => $menu_handle['son'], 'sonkey' => $url]);
    }

    // 权限验证
    public function user_permission($uid, $url, $category)
    {
        // 判断用户访问权限
        if (stripos($url, 'home') === 0){
            // 后台入口无需要验证权限
            $bool=true;
        } elseif ($uid === 1){
            // 超级管理员无需要验证权限
            $bool=true;
        }elseif (!in_array($url, GetNode::getNode($category))){
            // 未配置权限的节点默认放行
            $bool=true;
        }elseif (in_array($url, GetNode::getAuthNode($uid, $category))){
            // 用户指定角色授权放行
            $bool=true;
        }else{
            $bool=false;
        }
        return $bool;
    }

    public function user()
    {
        $info = model("UserView")->where("iduser", session("USERID", '', 'lawyer'))->find();
        return $info;
    }

}
