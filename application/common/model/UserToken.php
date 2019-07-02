<?php
/**
 * Created by PhpStorm.
 * User: 86183
 * Date: 2019/4/26
 * Time: 18:10
 */

namespace app\common\model;


class UserToken extends Base
{
    protected $table = 'user_token';
    protected $pk = 'idtoken';
}