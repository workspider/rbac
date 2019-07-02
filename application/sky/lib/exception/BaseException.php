<?php
namespace app\sky\lib\exception;

use think\Exception;

class BaseException extends Exception
{
    // HTTP 状态吗 404，200
    public $code = 400;
    // 错误信息
    public $msg = '参数错误';
    // 自定义错误码
    public $errorCode = 10000;
}