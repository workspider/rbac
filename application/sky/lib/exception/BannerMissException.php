<?php
namespace app\sky\lib\exception;

class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求Banner不存在';
    public $errorCode = 10000;
}
