<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/5
 * Time: 15:45
 */

namespace app\sky\controller;

use app\common\controller\Backend;
use app\sky\validate\ZiYanZhengQi;
use app\sky\model\Talk as TalkModel;


class Test extends Backend
{
    public function kekai($id)
    {
        // 在controller层，验证
        (new ZiYanZhengQi())->goCheck();
        // 在controller层，数据库操作
         $banner = TalkModel::getBannerByID($id);
        return $banner;
    }
}
