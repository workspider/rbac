<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/10
 * Time: 10:57
 */

namespace app\admin\controller;
use app\common\controller\Backend;

use think\facade\Request;
use think\facade\Validate;

use app\common\model\QxMenu as MenuModel;

use app\common\controller\GetTree;
use app\common\controller\GetNode;

class Menu extends Backend
{
    var $requestData;
    var $returnMag = [
        '100' => '获取数据失败',
        '200' => '获取数据成功',
    ];

    /**
     * 自动加载
     */
    protected function initialize()
    {
        parent::initialize();
        $this->requestData = Request::instance()->param();
    }

    /**
     * 获取菜单列表
     */
    public function menu_list()
    {
        $rule= [
            'uid'   => 'require|integer',
            'tag'   => 'require|integer',
        ];
        $msg = [
            'uid.require' => 'uid不能为空',
            'uid.integer' => 'uid必须为整数',
            'tag.require' => 'tag不能为空',
            'tag.integer' => 'tag必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 获取所有显示的菜单
        $menu = MenuModel::where( [ ['type','=',0], ['category','=',2] ] )->all()->toArray();
        $menu_all = GetTree::infiniteTree($menu, 0);
        // 获取用户所拥有的节点
        $uid = $this->requestData['uid'];
        $node_url = GetNode::getMenuNode($uid, $category=2);
        // 超级管理员返回整个菜单
        if ($uid === '1'){
            $list = $menu_all;
        }else{
            // 处理菜单列表，显示所拥有权限的菜单列表，菜单的url 在不在 节点列表里 -> 所以不能用菜单的id 在不在 节点id的列表里 -> 菜单id和节点id不对应
            $list = GetNode::buildMenuData($menu_all, $node_url, $category=2);
        }
        // 获取所有菜单数据
        $tag = $this->requestData['tag'];
        if($tag==1){
            $list = $menu_all;
        }
        $list_array = GetTree::key_sort($list);
        $list = $list_array;
        if(empty($list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $list);
        }
    }

    // 获取菜单详情
    public function menu_detail(){
        $rule= [
            'mid'   => 'require|integer',
        ];
        $msg = [
            'mid.require' => 'mid不能为空',
            'mid.integer' => 'mid必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 获取菜单详情
        $mid = $this->requestData['mid'];
        $menu = MenuModel::where( [ ['id','=',$mid], ['category','=',2] ] )->all()->toArray();
        if(empty($menu)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $menu);
        }
    }

    /**
     * 菜单增加
     */
    public function menu_add()
    {
        $rule= [
            'pid'  => 'require|integer',
            'title'  => 'require',
            'url'   => 'require',
            'sort' => 'require|integer',
            'type'  => 'require|integer',
            'category'  => 'require|integer',
            'status'  => 'require|integer',
        ];
        $msg = [
            'pid.require'   => 'pid不能为空',
            'pid.integer'   => 'pid必须为整数',
            'title.require' => 'title不能为空',
            'url.require'   => 'url不能为空',
            'sort.require'   => 'sort不能为空',
            'sort.integer'   => 'sort必须为整数',
            'type.require'   => 'type不能为空',
            'type.integer'   => 'type必须为整数',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
            'status.require'   => 'status不能为空',
            'status.integer'   => 'status必须为整数',
        ];
        // 验证
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 增加
        $list = MenuModel::create($this->requestData, ['pid', 'title', 'url', 'sort', 'type', 'category', 'status', 'tag']);
        if($list){
            return returnAjax(200,'添加数据成功', $list);
        }else{
            return returnAjax(100,'添加数据失败');
        }
    }

    /**
     * 菜单更新
     */
    public function menu_update()
    {
        $rule= [
            'mid'  => 'require|integer',
            'pid'  => 'require|integer',
            'title'  => 'require',
            'url'   => 'require',
            'sort' => 'require|integer',
            'type'  => 'require|integer',
            'category'  => 'require|integer',
            'status'  => 'require|integer',
        ];
        $msg = [
            'pid.require'   => 'pid不能为空',
            'pid.integer'   => 'pid必须为整数',
            'mid.require'   => 'mid不能为空',
            'mid.integer'   => 'mid必须为整数',
            'title.require' => 'title不能为空',
            'url.require'   => 'url不能为空',
            'sort.require'   => 'sort不能为空',
            'sort.integer'   => 'sort必须为整数',
            'type.require'   => 'type不能为空',
            'type.integer'   => 'type必须为整数',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
            'status.require'   => 'status不能为空',
            'status.integer'   => 'status必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 更新
        $menu = MenuModel::get($this->requestData['mid']);
        $menu->pid = $this->requestData['pid'];
        $menu->title = $this->requestData['title'];
        $menu->url = $this->requestData['url'];
        $menu->sort = $this->requestData['sort'];
        $menu->type = $this->requestData['type'];
        $menu->category = $this->requestData['category'];
        $menu->status = $this->requestData['status'];
        $menu->tag = $this->requestData['tag'];
        $menu->save();
        if ($menu) {
            return returnAjax(200, '更新数据成功', $menu);
        } else {
            return returnAjax(400, '更新数据失败');
        }
    }

    /**
     * 菜单删除
     */
    public function menu_delete()
    {
        $rule= [
            'mid'  => 'require|integer'
        ];
        $msg = [
            'mid.require' => 'mid不能为空',
            'mid.integer'     => 'mid必须为整数'
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 删除
        $menu = MenuModel::get($this->requestData['mid']);
        $menu->delete();

        if($menu){
            return returnAjax(200,'删除数据成功',$menu);
        }else{
            return returnAjax(100,'删除数据失败');
        }

    }


}