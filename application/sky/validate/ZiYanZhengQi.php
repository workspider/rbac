<?php
namespace app\sky\validate;

class ZiYanZhengQi extends BaseValidate
{
    protected $rule = [
        // TP手册 -> 验证 -> 内置规则 -> 查看有哪些验证规则
        'name' => 'require|max:10|isInteger',
        'email' => 'email'
    ];
    // 可以自定义验证规则：isInteger
    protected function isInteger($value, $rule='', $data='', $field='')
    {
        if(is_numeric($value) && is_int($value+0) && ($value+0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }
}