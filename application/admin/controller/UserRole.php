<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/13
 * Time: 11:24
 */

namespace app\admin\controller;

use think\facade\Request;
use think\facade\Validate;

use app\common\controller\Backend;
use app\common\controller\GetTree;
use app\common\model\QxUserRole as UserRoleModel;

class UserRole extends Backend
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
     * 用户下的所有角色
     */
    public function user_role_list()
    {
        $uid=1;
        $list = UserRoleModel::with(['role'])->where([ ['user','=',$uid], ['category','=',2] ])->all()->order('id asc');
        if(empty($list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200, $this->returnMag['200'], $list);
        }
    }

    /**
     * 角色下的所有用户
     */
    public function role_user_list()
    {
        $rule= [
            'rid'   => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];
        $list = UserRoleModel::with(['user'])->where([ ['role','=',$rid], ['category','=',2] ])->all()->toArray();
        $list_array = GetTree::user_key_sort($list);
        $list = $list_array;
        if(empty($list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200, $this->returnMag['200'], $list);
        }
    }

    /**
     * 给用户分角色
     * 用户id：uid，角色id：rid=1,2,3
     */
    public function user_role_save()
    {
        $rule= [
            'uid'   => 'require|integer',
            'category'   => 'require|integer',
        ];
        $msg = [
            'uid.require' => 'uid不能为空',
            'uid.integer' => 'uid必须为整数',
            'category.require' => 'category不能为空',
            'category.integer' => 'category必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $uid = $this->requestData['uid'];
        $rid = $this->requestData['rid'];
        $category = $this->requestData['category'];
        $role = explode(',', $rid);
        foreach ($role as $key=>$value){
            $data[] = ['user'=>$uid, 'category'=>$category, 'role'=>$value];
        }
        UserRoleModel::where([ ['user','=',$uid], ['category','=',$category] ])->delete();
        if(empty($rid)){
            $list = $uid;
        }else{
            $list = model('QxUserRole')->saveAll($data);
        }
        if ($list) {
            return returnAjax(200, '成功', $list);
        } else {
            return returnAjax(400, '失败');
        }
    }

    /**
     * 给角色加用户(新增)
     * 角色id：rid，用户id：uid=1,2,3
     */
    public function role_user_add()
    {
        $rule= [
            'rid'   => 'require|integer',
            'uid'   => 'require',
            'category'   => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
            'uid.require' => 'uid不能为空',
            'category.require' => 'category不能为空',
            'category.integer' => 'category必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];
        $uid = $this->requestData['uid'];
        $category = $this->requestData['category'];
        $user = explode(',', $uid);
        foreach ($user as $key=>$value){
            $data[] = ['user'=>$value, 'category'=>$category, 'role'=>$rid];
        }
        if(empty($uid)){
            $list = $rid;
        }else{
            $list = model('QxUserRole')->saveAll($data);
        }
        if ($list) {
            return returnAjax(200, '成功', $list);
        } else {
            return returnAjax(400, '失败');
        }
    }

    /**
     * 获取角色待添加用户
     */
    public function user_list()
    {
        $rule= [
            'rid'   => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];

        $user_list = UserRoleModel::where([ ['role','=',$rid], ['category','=',2] ])->all();
        $user_id = [];
        foreach ($user_list as $key => $value){
            $user_id[] =  $value['user'];
        }
        $field='iduser,user_realname';
        $list =model('User')->field($field)->where('iduser','not in',$user_id)->select()->toArray();
        if(empty($list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200, $this->returnMag['200'], $list);
        }
    }

    /**
     * 删除角色下的用户
     */
    public function user_delete()
    {
        $rule= [
            'ruid'  => 'require|integer'
        ];
        $msg = [
            'ruid.require' => 'ruid不能为空',
            'ruid.integer'     => 'ruid必须为整数'
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 删除
        $role = UserRoleModel::get($this->requestData['ruid']);
        $role->delete();

        if($role){
            return returnAjax(200,'删除数据成功',$role);
        }else{
            return returnAjax(100,'删除数据失败');
        }
    }

}