<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/31
 * Time: 11:33
 */

namespace app\common\controller;

class Tree{
    //要处理的数组
    private $arrSource = array();
    //配置
    private $config = array(
        'key'  => 'id', //主键
        'pKey' => 'pid', //主键父级名称
        'child'=> 'child'//子节点的名称
    );

    /**
     * @param mixed $arrSource
     */
    public function setArrSource($arrSource)
    {
        $this->arrSource = $arrSource;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * 对原始的数组进行排序,保证子节点排在父节点的前面
     */
    public function sortArr(){
        $tempArr = array();
        foreach ($this->arrSource as $k => $v){
            $tempArr[$k] = $v[$this->config['pKey']];
        }
        array_multisort($tempArr,SORT_DESC ,SORT_NUMERIC ,$this->arrSource);
    }

    /**
     * 生成树形结构
     */
    public function getTree(){
        foreach ($this->arrSource as $k => $v){
            if($this->checkParent($v[$this->config['pKey']])){
                //父级元素存在,把本元素放在父级元素里面,然后删除本元素
                $this->pushParent($k);
            }
        }
        return $this->arrSource;
    }

    /**
     * 检查父级是否存在,存在返回true,否则,返回false
     * @param $parentKey
     * @return bool
     */
    private function checkParent($parentKey){
        $parentArr = array_column($this->arrSource,$this->config['key']);
        if(in_array($parentKey,$parentArr)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 把子节点放到对应的父节点里面,并删除子节点
     * @param $key
     */
    private function pushParent($key){
        $current = $this->arrSource[$key];
        foreach ($this->arrSource as $k => $v){
            if($v[$this->config['key']] == $current[$this->config['key']]){
                $childKey = $k;
            }
            if($v[$this->config['key']] == $current[$this->config['pKey']]){
                $parentKey = $k;
            }
        }
        if(isset($childKey) && isset($parentKey)){
            $this->arrSource[$parentKey][$this->config['child']][] = $this->arrSource[$childKey];
            unset($this->arrSource[$childKey]);
        }
    }
}
