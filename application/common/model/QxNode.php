<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/9
 * Time: 10:53
 */

namespace app\common\model;

use think\Model;

class QxNode extends Model
{
    protected $table = 'qx_node';
    protected $pk = 'id';

    protected $hidden = ['is_menu', 'is_auth', 'is_login', 'create_at', 'create_time', 'delete_time', 'pivot'];
}