<?php

/**
用法:
$content = Curl::instance()->url($url)->get($data);
$content = Curl::instance()->url($url)->post($data);
//保存生成的选项
Curl::instance()->url($url)->header($header)->cookie($cookie)->save();
//下面可以直接用
$content = Curl::instance()->post($data);
$content = Curl::instance()->file('img.jpg')->post();
 */

namespace app\common\controller;

use think\Controller;
use think\Request;

class Curl extends Controller{

    //curl对象
    protected $curl = null;
    //对象实例
    protected static $instance = null;
    //发送的数据
    public $data = '';
    //返回的头信息
    public static $info = array();
    //返回的内容
    public static $content = '';
    //错误消息
    public static $error = '';
    //选项
    public $options = array('debug'=>false, 'sleep'=>0);
    //默认选项
    public $settings = array(

        CURLOPT_HEADER => 0,//是否显示头信息
        CURLOPT_RETURNTRANSFER => 1,//是否返回信息
        CURLOPT_TIMEOUT => 30,//超时
    );


    public static function instance($options = array()){

        if(is_null(self::$instance)) self::$instance = new static($options);
        return self::$instance;
    }


    public function __construct($options = array()){

        $this->curl = curl_init();
        $this->settings = $options + $this->settings;
        $this->options = $this->settings + $this->options;

    }

    public function __call($method, $args){

        $data = empty($args)? '' : current($args);
        $exec = ($data === false)? false : true;

        return $this->method($method)->data($data)->send($exec);
    }

    public static function __callStatic($method, $args){
        return static::instance()->url($args[0])->data($args[1])->$method();

    }

    public function method($method = ''){

        if(func_num_args() == 0) return $this->options[CURLOPT_CUSTOMREQUEST];
        $this->options[CURLOPT_CUSTOMREQUEST] = strtoupper($method);
        return $this;
    }

    /**
     * 设置参数
     * @param $options
     * @param string $value
     * @return $this
     */
    public function set($options, $value = ''){

        if(is_array($options)){
            $this->options = $options + $this->options;
        }else if(isset($this->$options)){
            $this->$options = $value;
        }else{
            $this->options[$options] = $value;
        }
        return $this;
    }


    /**
     * 保留选项
     * @return $this
     */
    public function save(){
        $this->settings = $this->options;
        return $this;
    }



    public function send($exec = true){

        $method = $this->method();

        if(!empty($this->data)) $data = is_array($this->data)? http_build_query($this->data) : $this->data;

        if($method == 'GET'){
            if(!empty($this->data)){

                if(is_string($this->data)){
                    $this->options[CURLOPT_URL] .=  '/'. $this->data;
                }else if(is_numeric(key($this->data))){
                    foreach($this->data as &$value){
                        $value = rawurlencode($value);
                    }
                    $this->options[CURLOPT_URL] .=  '/'.  implode('/', $this->data);
                }else{
                    $link = strpos($this->options[CURLOPT_URL], '?') === false? '?' : '&';
                    $this->options[CURLOPT_URL] .= $link . $data;
                }
            }

        }else{

            if($method == 'POST'){ $this->options[CURLOPT_POST] = 1; }
            //其他请求方式
            $this->options[CURLOPT_CUSTOMREQUEST] = strtoupper($method);

            if(!empty($this->data)){
                if(isset($this->options[CURLOPT_POSTFIELDS]) && !empty($this->options[CURLOPT_POSTFIELDS])){
                    $this->options[CURLOPT_POSTFIELDS] .=  '&' . $data;
                }else{
                    $this->options[CURLOPT_POSTFIELDS] = $data;
                }
            }

        }

        //上传文件时,CURLOPT_POST必须放在CURLOPT_POSTFIELDS之前,这里干脆全部排序
        ksort($this->options);

        $debug = isset($this->options['debug'])? $this->options['debug'] : false;
        $sleep = isset($this->options['sleep'])? $this->options['sleep'] : 0;

        unset($this->options['debug'], $this->options['sleep']);

        if($exec === false){
            $options = $this->options;
        }else{
            curl_setopt_array($this->curl, $this->options);
            if($debug) static::log($this->options);
        }

        //清空
        $this->options = $this->settings;
        $this->data = '';

        //返回
        if($exec === false){ return $options; }

        self::$content = curl_exec($this->curl);
        self::$info = curl_getinfo($this->curl);
        self::$error = curl_error($this->curl);
        curl_reset($this->curl);

        if($debug && !empty(self::$error)) exit(self::$error);
        if($sleep) sleep($sleep);

        return self::$content;

    }



    public static function error(){
        return self::$error;
    }

    /**
     * 超时选项
     * @param int $time
     * @return $this
     */
    public function time($time = 30){
        $this->options[CURLOPT_TIMEOUT] = $time;
        return $this;
    }


    public function url($url){
        $this->options[CURLOPT_URL] = $url;
        return $this;
    }

    /**
     * 证书选项
     * @param string $file
     * @param int $level
     * @return $this
     */
    public function cacert($file = '', $level = 2){

        if(empty($file)){
            $this->options[CURLOPT_SSL_VERIFYPEER] = false; //只信任CA颁布的证书
        }else{
            $this->options[CURLOPT_CAINFO] = $file; //CA根证书（用来验证的网站证书是否是CA颁布）
            $this->options[CURLOPT_SSL_VERIFYPEER] = true; //只信任CA颁布的证书
        }

        //检查证书中是否设置域名和是否与提供的主机名匹配（0:不检查,1:检查域名,2:检查是否匹配）
        $this->options[CURLOPT_SSL_VERIFYHOST] = $level;
        return $this;

    }


    public function cookie($cookie){

        if(strpos($cookie, '=')){
            $this->options[CURLOPT_COOKIE] = $cookie;
        }else{
            $this->options[CURLOPT_COOKIEJAR] = $cookie;
            $this->options[CURLOPT_COOKIEFILE] = $cookie;
        }

        return $this;

    }


    public function header($header = 1, $value = null){

        if(is_numeric($header)){
            $this->options[CURLOPT_HEADER] = $header;//返回头信息
        }else if($value !== null){
            $header = array(ucfirst($header) => $value);
        }else if(is_numeric(key($header))){
            $header = $this->format($header, true);
        }

        if(is_array($header)){

            if(!empty($this->options[CURLOPT_HTTPHEADER])){
                $header = array_merge($this->format($this->options[CURLOPT_HTTPHEADER], true), $header);
            }

            $this->options[CURLOPT_HTTPHEADER] = $this->format($header, true);

        }

        return $this;
    }

    public function body($content = ''){

        if(func_num_args() == 0){
            return isset($this->options[CURLOPT_POSTFIELDS])? $this->options[CURLOPT_POSTFIELDS] : '';
        }
        $this->options[CURLOPT_POSTFIELDS] = $content;
        return $this;
    }


    /**
     * 发送数据
     * @param $args
     * @return $this
     */
    public function data($args = ''){

        if(func_num_args() == 0) return $this->data;

        $args = func_get_args();
        foreach($args as $data){

            if($data === null) $this->data = '';

            if(is_object($data)) $data = (array) $data;
            if($data === '') continue;

            if(is_array($data)){
                if(!is_array($this->data)) $this->data = array();
                $this->data = array_merge($this->data, $data);
            }else{
                $this->data .= $data;
            }

        }

        return $this;

    }


    /**
     * 从浏览器粘贴的 header 信息或表单数据转换成数据
     * @param $data
     * @return array
     */
    public function format($data, $header = false){

        //字符串转数组
        if(is_string($data)){
            $data = explode("\n", trim($data));
            foreach($data as $key => $value){
                $data[$key] = trim($value);
            }
            $format = true;
        }

        $return = array();
        if(($header && is_numeric(key($data))) || isset($format)){

            foreach($data as $value){
                $value = explode(':', trim($value), 2);
                $return[rtrim($value[0])] = ltrim($value[1]);
            }

        }else if($header){
            foreach($data as $key => $value){
                $return[] = "$key: $value";
            }
        }

        return empty($return)? $data : $return;

    }


    public function host($value){

        $this->header('Host', $value);
        return $this;
    }

    public function origin($value){

        $this->header('Origin', $value);
        return $this;
    }

    public function agent($value = ''){

        if(empty($value)) $value = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.86 Safari/537.36';
        $this->header('User-Agent', $value);
        return $this;
    }

    public function accept($value = ''){

        if(empty($value))  $value = 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
        $this->header('Accept', $value);
        return $this;
    }

    public function referer($value){

        $this->header('Referer', $value);
        return $this;
    }

    public function language($value = ''){

        if(empty($value)) $value = 'zh,zh-CN;q=0.9,en;q=0.8,en-US;q=0.7';
        $this->header('Accept-Language', $value);
        return $this;
    }


    public function location($times = 3){

        $this->options[CURLOPT_FOLLOWLOCATION] = 1;//根据返回的Location重定
        $this->options[CURLOPT_MAXREDIRS] = $times;//限制重定向次数
        return $this;
    }


    public function file($file, $upname = 'file',  $mime = '', $name = ''){

        $data = array($upname => curl_file_create(realpath($file), $mime, $name));

        if(isset($this->options[CURLOPT_POSTFIELDS])){
            $this->options[CURLOPT_POSTFIELDS] = $data + $this->options[CURLOPT_POSTFIELDS];
        }else{
            $this->options[CURLOPT_POSTFIELDS] = $data;
        }
        return $this;

    }


    public function sleep($second = 3){

        $this->options['sleep'] = $second;
        return $this;
    }


    public function debug($debug = true){
        $this->options['debug'] = $debug;
        return $this;
    }


    public static function log($args){

        $args = func_get_args();
        $count = func_num_args();
        foreach($args as $key => $data){

            file_put_contents('./log.txt', (is_string($data)? $data : var_export($data, true)), FILE_APPEND | LOCK_EX);
            if($key < $count - 1) file_put_contents('./log.txt', "\n----------------------------------------------------------\n", FILE_APPEND | LOCK_EX);
        }

        file_put_contents('./log.txt', "\n================[time ".date('Y-m-d H:i:s')."]================\n", FILE_APPEND | LOCK_EX);
    }


    public function __destruct(){

        curl_close($this->curl);
    }

}