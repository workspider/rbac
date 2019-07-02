<?php
namespace app\sky\model;

use app\common\model\Base;
use think\Model;

class Task extends Base
{
    protected $table = 'task';
    protected $pk = 'idtask';
    
    public static function getBannerByID($idtask){
        //TODO:根据Banner ID号，获取信息，数据库查询操作
        echo $idtask;
        //制造异常
//        try{
//            1/0;
//        }catch (Exception $e){
//            // 抛出异常
//            throw $e;
//        }
//        echo "1111111111111111111";

//        $result = self::get($idtask);

//        return $result;
        return '22222222222222';
    }
}

