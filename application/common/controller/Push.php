<?php
/**
 * Created by PhpStorm.
 * User: 86183
 * Date: 2019/4/26
 * Time: 9:25
 */

namespace app\common\controller;

use JPush\Client;

class Push extends Backend
{
    protected $client;
    protected function initialize()
    {
//        parent::initialize();
        $this->client=new Client(config('JPUSH_USER_KEY'),config('JPUSH_USER_SECRET'));
    }

    public function test()
    {
        $this->push_all(array('app_4'),'jpush 测试',array('title'=>'测试','content_type'=>'test','extras'=>['aaa'=>'app_user']));
    }


    /**发给平台所有人
     * @param $alies
     * @param $string
     * @param $arr
     */
    public function push_all($all,$string,$arr)
    {
        try{
            $push=$this->client->push()
                ->setPlatform('all')
                ->addAllAudience($all)
                ->setNotificationAlert($string)
                ->message($string,$arr)
                ->send();
            return true;
        }catch (\Exception $exception){
//            dump($exception->getMessage());
            return false;
        }

    }

    /**发给某个用户根据标识
     * @param $alies
     * @param $string
     * @param $arr
     */
    public function push_user($id,$string,$arr)
    {
        try{
            $push=$this->client->push()->setPlatform('ios')
                ->addRegistrationId($id)
                ->setNotificationAlert($string)
                ->message($string,$arr)
                ->send();
            return true;
        }catch (\Exception $exception){
//            dump($exception->getMessage());
            return false;
        }

    }

    /**
     * 发给每个标签下的用户
     */
    public function push_tag($tag,$string,$arr)
    {
        try{
            $push=$this->client->push()->setPlatform('ios')
                ->addTag($tag)
                ->setNotificationAlert($string)
                ->message($string,$arr)
                ->send();
            return true;
        }catch (\Exception $exception){
//            dump($exception->getMessage());
            return false;
        }
    }


    /**
     * 发给别名下的用户
     */
    public function push_alias($alies,$string,$arr)
    {
        try{
            $push=$this->client->push()->setPlatform('ios')
                ->addAlias($alies)
                ->setNotificationAlert($string)
                ->message($string,$arr)
                ->send();
            return true;
        }catch (\Exception $exception){
//            $exception->getMessage();
            return false;
        }
    }

    public function add_alias($alias)
    {
        $push=$this->client->addAlias('user_'.$alias);
    }
}