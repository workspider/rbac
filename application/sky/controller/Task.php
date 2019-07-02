<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/5
 * Time: 15:45
 */

namespace app\sky\controller;

use app\common\controller\Backend;
use app\sky\lib\exception\BannerMissException;
use app\sky\validate\ZiYanZhengQi;


class Task extends Backend
{
    public function kekai($id)
    {
        // 在controller层，验证
        (new ZiYanZhengQi())->goCheck();
        // 在controller层，数据库操作
        $list = model("Task")->select()->toArray();
        dump( model('task')->getLastSql() );

//        $list = model("Task")->select()->toArray();
        // 在controller层，抛出异常
//        if (!$banner){
//              throw new BannerMissException();
//        }
//        return json($list);
        return '1111111111111111111111111111111';
    }
}
