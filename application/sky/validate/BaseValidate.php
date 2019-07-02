<?php
namespace app\sky\validate;

use think\Exception;
use think\facade\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //1.获取http传入的所有参数
        $request = Request::instance();
        $params = $request->param();
        //2.对这些参数做检验
        $result = $this->check($params);
        // 主要处理不通过情况，如果不通过，返回错误信息抛出
        if(!$result){
            $error = $this->error;
            // 把错误信息抛出
            throw new Exception($error);
        }else{
            // 如果通过就不会报错，也不用处理
            return true;
        }
    }
}