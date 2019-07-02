<?php
namespace app\sky\model;
use app\common\model\Base;

class Talk extends Base
{
//    protected $table = 'anjian';
//    protected $pk = 'idanjian';
    
    public static function getBannerByID($id){
        //TODO:根据Banner ID号，获取信息，数据库查询操作
        self::get($id);
        return 'Banner info';
    }
}

