<?php
namespace app\sky\lib\exception;

use Exception;
use think\exception\Handle;
use think\facade\Request;
use think\Log;

// Handle类是TP自带的异常处理类，现在我们要继承它，重写这个类，自定义一些异常处理
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    // 需要返回客户端当前请求的URL路径

    // 重写render()方法
    public function render(Exception $e)
    {
        if($e instanceof BaseException){
            // 如果是自定义异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
//            $this->code = 500;
//            $this->msg = '服务器内部错误，不想告诉你';
//            $this->errorCode = 999;
            //在这里可以记录日志
            // $this->recordErrorLog($e);
        }
        // 客户端当前请求的URL路径
        $request_url = Request::instance()->url();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request_url
        ];
        return json($result, $this->code);
    }
//    // 自定义写错误日志函数
//    private function recordErrorLog(Exception $e){
//        Log::init([
//            'type'  => 'File',
//            'path'  => LOG_PATH,
//            'level' => ['error'],
//        ]);
//        Log::record($e->getMessage(), 'error');
//    }
}
