<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/9
 * Time: 14:43
 */

namespace app\common\model;

use think\Model;

class QxRole extends Model
{
    protected $table = 'qx_role';
    protected $pk = 'id';

    protected $hidden = ['create_at', 'create_time', 'delete_time'];
    public function nodes(){
        return $this->belongsToMany('QxNode', 'QxRoleNode', 'node', 'role');
    }
//    public function items(){
//        return $this->hasMany('QxRoleNode', 'role', 'id');
//    }


}