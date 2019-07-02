<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/10
 * Time: 15:17
 */

namespace app\common\model;

use think\Model;

class QxUserRole extends Model
{
    protected $table = 'qx_user_role';
    protected $pk = 'id';

    // 获取用户下所有的角色
    public function role(){
        return $this->belongsTo('QxRole', 'role', 'id');
    }
    // 获取角色下所有的用户
    public function user(){
        return $this->belongsTo('User', 'user', 'iduser');
    }
}