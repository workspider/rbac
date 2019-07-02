<?php
namespace app\sky\validate;

class ZiYanZhengQi extends BaseValidate
{
    protected $rule = [
        // TP手册 -> 验证 -> 内置规则 -> 查看有哪些验证规则
        'name' => 'require|max:10|isInteger',
        'email' => 'email'
    ];

//    protected $msg  =   [
//        'name.require' => '名字必填',
//        'name.max'     => '名称最多不能超过10个字符',
//        'email'        => '邮箱格式错误',
//    ];
    
    // 可以自定义验证规则：isInteger
    protected function isInteger($value, $rule='', $data='', $field='')
    {
        if(is_numeric($value) && is_int($value+0) && ($value+0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }

//$rule= [
//    'lvshifei_type'  => 'require',
//    'lvshifei_content'   => 'require',
//    'lvshifei_money' => 'require|float'
//];
//$msg = [
//'lvshifei_type.require' => '基础类型不能为空',
//'lvshifei_content.require'     => '基础描述不能为空',
//'lvshifei_money.require'   => '基础金额不能为空',
//'lvshifei_money.float'   => '基础金额只能为数字'
//];


}