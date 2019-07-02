<?php

/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/10
 * Time: 10:53
 */
namespace app\common\model;

use think\Model;

class QxMenu extends Model
{
    protected $table = 'qx_menu';
    protected $pk = 'id';

    protected $hidden = ['icon', 'params', 'target', 'create_at', 'delete_time', 'node'];
}