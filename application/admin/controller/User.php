<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/12
 * Time: 11:12
 */

namespace app\admin\controller;

use think\facade\Request;
use think\facade\Validate;

use app\common\controller\Backend;
use app\common\controller\GetNode;

use app\common\model\QxUserRole as UserRoleModel;

class User extends Backend
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
     * 用户列表
     */
    public function user_list()
    {
        $field='iduser,user_realname';

        $list =model('User')->field($field)->order('iduser ASC')->select()->toArray();
        if(empty($list)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $list);
        }
    }

    /**
     * 检查用户访问权限，（已弃用）
     * @param 用户id：uid , 访问url：admin/index/main（菜单列表）
     * @return boolean
     */
    public function user_permission()
    {
        $uid = $this->requestData['uid'];
        $url = $this->requestData['url'];
        // 判断用户访问权限
        if (stripos($url, 'admin/index') === 0){
            // 后台入口无需要验证权限
            $bool=true;
        } elseif (session('user.username') === 'admin'){
            // 超级管理员无需要验证权限
            $bool=true;
        }elseif (!in_array($url, GetNode::getNode())){
            // 未配置权限的节点默认放行
            $bool=true;
        }elseif (in_array($url, GetNode::getAuthNode($uid))){
            // 用户指定角色授权放行
            $bool=true;
        }else{
            $bool=false;
        }
        if(empty($bool)){
            return  returnAjax(100,$this->returnMag['100']);
        }else{
            return returnAjax(200,$this->returnMag['200'], $bool);
        }
    }


}