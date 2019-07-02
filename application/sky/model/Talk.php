<?php
namespace app\sky\model;
//use app\common\model\Base;

use think\Model;

class Talk extends Model
{
//    protected $table = 'talk';
//    protected $pk = 'idtalk';
    
    public static function getBannerByID($idtalk){
        //TODO:根据Banner ID号，获取信息，数据库查询操作
        $result = self::get($idtalk);
        return $result;
    }
}

