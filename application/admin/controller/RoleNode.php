<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/13
 * Time: 14:30
 */

namespace app\admin\controller;

use think\facade\Request;
use think\facade\Validate;

use app\common\controller\Backend;
use app\common\model\QxRoleNode as RoleNodeModel;

class RoleNode extends Backend
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

//    /**
//     * 角色权限列表
//     */
//    public function role_node_list()
//    {
//        $list = RoleNodeModel::where('user', '=', 1)->all()->order('id asc');
//        if(empty($list)){
//            return  returnAjax(100,$this->returnMag['100']);
//        }else{
//            return returnAjax(200,$this->returnMag['200'], $list);
//        }
//    }

    /**
     * 给角色分节点
     * @param 角色id：rid，节点id：nid=1,2,3
     * del_nid：删除节点id：nid=1,2,3
     * add_nid：增加节点id：nid=1,2,3
     * @return array
     */
    public function role_node_save1()
    {
        $rule= [
            'rid'   => 'require|integer',
            'category'   => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
            'category.require' => 'category不能为空',
            'category.integer' => 'category必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];
        $del_nid = $this->requestData['del_nid'];
        $add_nid = $this->requestData['add_nid'];
        $category = $this->requestData['category'];

        $del_nid_array = explode(',', $del_nid);
        $add_nid_array = explode(',', $add_nid);
        foreach ($add_nid_array as $key=>$value){
            $data[] = ['role'=>$rid, 'category'=>$category, 'node'=>$value];
        }
        if(!empty($del_nid)){
            RoleNodeModel::where([ ['role','=', $rid], ['category', '=', $category], ['node', 'in', $del_nid_array] ])->delete();
        }
        if(empty($add_nid)){
            $list = $rid;
        }else{
            $list = model('QxRoleNode')->saveAll($data);
        }
        if ($list) {
            return returnAjax(200, '成功', $list);
        } else {
            return returnAjax(400, '失败');
        }
    }
    /**
     * 给角色分节点
     * @param 角色id：rid，节点id：nid=1,2,3
     * @return array
     */
    public function role_node_save()
    {
        $rule= [
            'rid'   => 'require|integer',
            'category'   => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
            'category.require' => 'category不能为空',
            'category.integer' => 'category必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];
        $nid = $this->requestData['nid'];
        $category = $this->requestData['category'];
        $node = explode(',', $nid);
        foreach ($node as $key=>$value){
            $data[] = ['role'=>$rid, 'category'=>$category, 'node'=>$value];
        }
        RoleNodeModel::where([ ['role','=', $rid], ['category', '=', $category] ])->delete();
        if(empty($nid)){
            $list = $rid;
        }else{
            $list = model('QxRoleNode')->saveAll($data);
        }
        if ($list) {
            return returnAjax(200, '成功', $list);
        } else {
            return returnAjax(400, '失败');
        }
    }


}