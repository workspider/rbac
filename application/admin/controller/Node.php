<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/9
 * Time: 11:54
 */

namespace app\admin\controller;

use think\facade\Request;
use think\facade\Validate;

use app\common\controller\Backend;
use app\common\controller\GetTree;

use app\common\model\QxNode as NodeModel;
use app\common\model\QxRole as RoleModel;

class Node extends Backend
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
     * 获取父级节点
     */
    public function node_list_header()
    {
        $rule= [
            'pid'  => 'integer',
        ];
        $msg = [
            'pid.integer'   => 'pid必须为整数',
        ];
        // 验证
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $pid = $this->requestData['pid'];
        $node = NodeModel::where([ ['pid', '=', $pid], ['category','=',2] ])->all()->toArray();
        if(empty($node)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $node);
        }
    }

    /**
     * 权限节点列表
     */
    public function node_list()
    {
        $rule= [
            'id'  => 'integer',
            'rid'   => 'require|integer',
        ];
        $msg = [
            'id.integer'   => 'id必须为整数',
            'rid.require'   => 'rid不能为空',
            'rid.integer'   => 'rid必须为整数',
        ];
        // 验证
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $pid = $this->requestData['id'];
        $rid = $this->requestData['rid'];
        // 获取角色所拥有的权限节点
        $node_node = RoleModel::with(['nodes'])->where([ ['id','=',$rid ], ['category','=',2] ])->all();
        if(!($node_node->isEmpty())) {
            // 先将对象序列化成json,再转化成数组
            $node_node = json_decode(json_encode($node_node), true);
            // 获取所有的节点id
            $node_id = [];
            foreach ($node_node as $key => $val) {
                foreach ($val['nodes'] as $k => $v) {
                    $node_id[] = $v['id'];
                }
            }
        }
        // 获取所有节点
        if(empty($pid)){
            $node = NodeModel::where('category','=',2)->all()->toArray();
        }else{
            $node = NodeModel::where([ ['id|pid','=',$pid], ['category','=',2] ])->all()->toArray();
        }
        // 拥有的节点checked标记为true
        foreach ($node as $key => $value){
            if( in_array($value['id'], $node_id) ){
                $node[$key]['checked'] = true;
            }else{
                $node[$key]['checked'] = false;
            }
        }
        $node_list = GetTree::infiniteTree($node, 0);
        if(empty($node_list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $node_list);
        }
    }

    /**
     * 所有节点列表
     */
    public function node_list_all()
    {
        // 获取所有节点
        $node = NodeModel::where('category','=',2)->all()->toArray();
        $node_list = GetTree::infiniteTree($node, 0);
        if(empty($node_list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $node_list);
        }
    }
    /**
     * 节点详情
     */
    public function node_detail()
    {
        $rule= [
            'id'  => 'require|integer',
        ];
        $msg = [
            'id.require'   => 'id不能为空',
            'id.integer'   => 'id必须为整数',
        ];
        // 验证
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 获取所有节点
        $id = $this->requestData['title'];
        $node = NodeModel::where([ ['id','=',$id], ['category','=',2] ])->all()->toArray();
        if(empty($node)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $node);
        }
    }

    /**
     * 节点增加
     */
    public function node_add()
    {
        $rule= [
            'node'   => 'require',
            'title'  => 'require',
            'category'  => 'require|integer',
            'pid'  => 'require|integer',
            'sort'  => 'require|integer',
        ];
        $msg = [
            'node.require'   => 'node不能为空',
            'title.require' => 'title不能为空',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
            'pid.require'   => 'pid不能为空',
            'pid.integer'   => 'pid必须为整数',
            'sort.require'   => 'sort不能为空',
            'sort.integer'   => 'sort必须为整数',
        ];
        // 验证
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 增加
        $list = NodeModel::create($this->requestData, ['node', 'title', 'mapping', 'category', 'pid', 'sort']);
        if($list){
            return returnAjax(200,'添加数据成功', $list);
        }else{
            return returnAjax(100,'添加数据失败');
        }
    }

    /**
     * 节点更新
     */
    public function node_update()
    {
        $rule= [
            'nid'   => 'require|integer',
            'title'   => 'require',
            'mapping'   => 'require',
            'node'   => 'require',
            'category'  => 'require|integer',
            'pid'  => 'require|integer',
            'sort'  => 'require|integer',
        ];
        $msg = [
            'nid.require' => 'nid不能为空',
            'nid.integer' => 'nid必须为整数',
            'title.require' => 'title不能为空',
            'mapping.require'   => 'mapping不能为空',
            'node.require'   => 'node不能为空',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
            'pid.require'   => 'pid不能为空',
            'pid.integer'   => 'pid必须为整数',
            'sort.require'   => 'sort不能为空',
            'sort.integer'   => 'sort必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 更新
        $node = NodeModel::get($this->requestData['nid']);
        $node->title = $this->requestData['title'];
        $node->desc = $this->requestData['desc'];
        $node->mapping = $this->requestData['mapping'];
        $node->node = $this->requestData['node'];
        $node->category = $this->requestData['category'];
        $node->pid = $this->requestData['pid'];
        $node->sort = $this->requestData['sort'];
        $node->save();

        if ($node) {
            return returnAjax(200, '更新数据成功', $node);
        } else {
            return returnAjax(400, '更新数据失败');
        }
    }

    /**
     * 节点删除
     */
    public function node_delete()
    {
        $rule= [
            'nid'  => 'require|integer'
        ];
        $msg = [
            'nid.require' => 'nid不能为空',
            'nid.integer'     => 'nid必须为整数'
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 删除
        $node = NodeModel::get($this->requestData['nid']);
        $node->delete();

//        $data['delete_time']=date('Y-m-d H:i:s');
//        $role=model('QxRole')->where('id',$this->requestData['nid'])->update($data);
        if($node){
            return returnAjax(200,'删除数据成功',$node);
        }else{
            return returnAjax(100,'删除数据失败');
        }

    }

}