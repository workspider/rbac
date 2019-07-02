<?php

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Base extends Model
{
    use SoftDelete;
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
    protected $deleteTime = 'delete_time';
}
