<?php

/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/10
 * Time: 12:12
 */

namespace app\common\controller;

use app\common\model\QxMenu as MenuModel;
use app\common\model\QxUserRole as UserRoleModel;
use app\common\model\QxRole as RoleModel;
use app\common\model\QxNode as NodeModel;

class GetNode
{
    /**
     * 权限节点忽略规则
     * @return array
     */
    public static function getIgnore()
    {
        return ['home', 'home/login', 'home/index/index'];
    }
    /**
     * 获取所有节点列表，返回节点url集合
     * @return array
     */
    public static function getNode($category)
    {
        if($category === 1){
            $node = NodeModel::where('category', '=', $category)->all()->column('node');
        }elseif ($category === 2){
            $node = NodeModel::where('category', '=', $category)->all()->column('mapping');
            // 处理mapping，变成一维数组
            $node_list = [];
            foreach ($node as $key=>$value){
                foreach (explode(',', $value) as $k=>$v){
                    $node_list[] = $v;
                }
            }
            $node = $node_list;
        }
        return $node;
    }

    /**
     * 获取用户所拥有的节点，返回节点url集合
     * @return array
     */
    public static function getAuthNode($uid, $category)
    {
        // (1)根据user获取role(user_role)
        $role = UserRoleModel::where([ ['user','=', $uid], ['category', '=', $category] ])->column('role');
        // (2)根据role获取node(role_node)
        $node = RoleModel::with(['nodes'])->where([ ['id', 'in', $role ], ['category', '=', $category] ])->all();

        if(!($node->isEmpty())){
            // 先将对象序列化成json,再转化成数组
            $node = json_decode(json_encode($node), true);
            // 获取所有的节点url
            $node_url = [];
            if($category===1){
                foreach ($node as $key => $val) {
                    foreach ($val['nodes'] as $k => $v){
                        $node_url[] = $v['node'];
                    }
                }
            }else if($category===2){
                foreach ($node as $key => $val) {
                    foreach ($val['nodes'] as $k => $v){
                        $node_url[] = $v['mapping'];
                    }
                }
            }
            // 设置忽略节点
            $node_url = array_merge($node_url, self::getIgnore());
        }else{
            // 设置忽略节点
            $node_url = self::getIgnore();
        }
        if($category===2){
            // 处理mapping，变成一维数组
            $node_url_list = [];
            foreach ($node_url as $key=>$value){
                foreach (explode(',', $value) as $k=>$v){
                    $node_url_list[] = $v;
                }
            }
            $node_url = $node_url_list;
        }
        return $node_url;
    }

    /**
     * 后台主菜单权限过滤
     * @param array $menus 当前菜单列表
     * @param array $nodes 系统权限节点数据
     * @param bool $isLogin 是否已经登录
     * @return array
     */
    public static function buildMenuData($menus, $nodes, $category)
    {
        foreach ($menus as $key => &$menu) {
            if (!empty($menu['sub'])) $menu['sub'] = self::buildMenuData($menu['sub'], $nodes, $category);
            if (preg_match('/^https?\:/i', $menu['url'])) continue;
            elseif ($menu['url'] !== '#') {
                if($category===1){
                    // 未配置权限的节点默认放行
                    if(in_array($menu['url'], GetNode::getNode($category))){
                        // 处理菜单(菜单url 不在节点里，删除这组数据)
                        if (!in_array($menu['url'], $nodes)){
                            unset($menus[$key]);
                        }
                    }
                }else{
                    // 未配置权限的节点默认放行
                    if(in_array($menu['url'], GetNode::api_getNode($category))){
                        // 处理菜单(菜单url 不在节点里，删除这组数据)
                        if (!in_array($menu['url'], $nodes)){
                            unset($menus[$key]);
                        }
                    }
                }
            } else unset($menus[$key]);
        }
        return $menus;
    }

    /**
     * 判断$url是不是顶级列表url，如果不是，查到他的顶级url
     */
    public static function getFatherKey($url)
    {
        $menu_one = MenuModel::where( [ ['url','=',$url], ['pid','=',0], ['type','=',0], ['category','=',1] ] )->find();
        if(!empty($menu_one)) {
            // 肯定是一级显示节点
            $fatherkey = $url;
        } else{
            $menu_two = MenuModel::where( [ ['url','=',$url], ['pid','<>',0], ['type','=',0], ['category','=',1] ] )->find();
            if(!empty($menu_two)){
                // 肯定是二级显示节点
                $menu_father = MenuModel::where('id', '=', $menu_two['pid'])->find();
                $fatherkey = $menu_father['url'];
            }else{
                $menu_three = MenuModel::where( [ ['url','=',$url], ['pid','<>',0], ['type','=',1], ['category','=',1] ] )->find();
                if(!empty($menu_three)){
                    $father_two = MenuModel::where('id', '=', $menu_three['pid'])->find();
                    $father_one = MenuModel::where('id', '=', $father_two['pid'])->find();
                    $fatherkey = $father_one['url'];
                }else{
                    $fatherkey = '';
                }
            }
        }
        return $fatherkey;
    }

    /**
     * 处理菜单列表，适应前台遍历模式
     */
    public static function handleMenu($list, $furl)
    {
        // 获取头部菜单
        $son=array();
        $father = [];
        foreach ($list as $key=>$val){
            if (!isset($val['sub'])){
                $father[] = $val;
            }else{
                // 获取下级菜单
                if($val['url'] == $furl){
                    foreach ($val['sub'] as $k => $v){
                        if($v['pid']==$val['id']){
                            $son[] = $v;
                        }
                    }
                }
                unset($val['sub']);
                $father[] = $val;
            }
        }
        return ['father' => $father, 'son' => $son];
    }

    /**
     * 获取用户所拥有的节点，返回节点url集合
     * api获取菜单调用
     * @return array
     */
    public static function getMenuNode($uid, $category)
    {
        // (1)根据user获取role(user_role)
        $role = UserRoleModel::where([ ['user','=', $uid], ['category', '=', $category] ])->column('role');
        // (2)根据role获取node(role_node)
        $node = RoleModel::with(['nodes'])->where([ ['id', 'in', $role ], ['category', '=', $category] ])->all();
        if(!($node->isEmpty())){
            // 先将对象序列化成json,再转化成数组
            $node = json_decode(json_encode($node), true);
            // 获取所有的节点url
            foreach ($node as $key => $val) {
                foreach ($val['nodes'] as $k => $v){
                    $node_url[] = $v['node'];
                }
            }
            // 设置忽略节点
            $node_url = array_merge($node_url, self::getIgnore());
        }else{
            $node_url = self::getIgnore();
        }
        return $node_url;
    }

    /**
     * 获取所有节点，返回节点url集合
     * api获取菜单调用
     * @return array
     */
    public static function api_getNode($category)
    {
        $node = NodeModel::where('category', '=', $category)->all()->column('node');
        return $node;
    }

}