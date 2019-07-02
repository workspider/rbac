<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/9
 * Time: 14:40
 */
namespace app\admin\controller;

use app\common\controller\Backend;
use think\facade\Request;
use think\facade\Validate;

use app\common\model\QxRole as RoleModel;

class Role extends Backend
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
     * 角色列表
     */
    public function role_list()
    {
        $rule= [
            'rid'   => 'integer',
        ];
        $msg = [
            'rid.integer' => 'rid必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        $rid = $this->requestData['rid'];
        if(empty($rid)){
            $role = RoleModel::where('category','=',2)->all()->toArray();
        }else{
            $role = RoleModel::where([ ['id','=',$rid], ['category','=',2] ])->all()->toArray();
        }
        if(empty($role)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $role);
        }
    }

    /**
     * 角色增加
     */
    public function role_add()
    {
        $rule= [
            'title'  => 'require',
            'status'   => 'require|integer',
            'category'  => 'require|integer',
            'sort'  => 'require|integer',
        ];
        $msg = [
            'title.require' => 'title不能为空',
            'status.require'   => 'status不能为空',
            'status.integer'   => 'status必须为整数',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
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
        $list = RoleModel::create($this->requestData, ['title', 'status', 'desc', 'category', 'sort']);
        if($list){
            return returnAjax(200,'添加数据成功', $list);
        }else{
            return returnAjax(100,'添加数据失败');
        }
    }

    /**
     * 角色更新
     */
    public function role_update()
    {
        $rule= [
            'rid'   => 'require|integer',
            'title'   => 'require',
            'desc'   => 'require',
            'category'  => 'require|integer',
            'sort'  => 'require|integer',
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer' => 'rid必须为整数',
            'title.require' => 'title不能为空',
            'desc.require' => 'desc不能为空',
            'category.require'   => 'category不能为空',
            'category.integer'   => 'category必须为整数',
            'sort.require'   => 'sort不能为空',
            'sort.integer'   => 'sort必须为整数',
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 更新
        $role = RoleModel::get($this->requestData['rid']);
        $role->title = $this->requestData['title'];
        $role->desc = $this->requestData['desc'];
        $role->category = $this->requestData['category'];
        $role->sort = $this->requestData['sort'];
        $role->save();
        if ($role) {
            return returnAjax(200, '更新数据成功', $role);
        } else {
            return returnAjax(400, '更新数据失败');
        }
    }

    /**
     * 角色删除
     */
    public function role_delete()
    {
        $rule= [
            'rid'  => 'require|integer'
        ];
        $msg = [
            'rid.require' => 'rid不能为空',
            'rid.integer'     => 'rid必须为整数'
        ];
        $validate = Validate::make($rule)->message($msg);
        $result = $validate->check($this->requestData);
        if(!$result){
            return returnAjax(201,$validate->getError());
        }
        // 删除
        $role = RoleModel::get($this->requestData['rid']);
        $role->delete();

//        $data['delete_time']=date('Y-m-d H:i:s');
//        $role=model('QxRole')->where('id',$this->requestData['rid'])->update($data);
        if($role){
            return returnAjax(200,'删除数据成功',$role);
        }else{
            return returnAjax(100,'删除数据失败');
        }

    }


}