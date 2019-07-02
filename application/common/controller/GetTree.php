<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/10
 * Time: 10:49
 */

namespace app\common\controller;
use app\common\model\QxRole as RoleModel;
use app\common\model\Zhiwei as ZhiweiModel;

class GetTree
{
    /**
     * 一维数据数组生成数据树
     * @param array $list 数据列表
     * @param string $id 父ID Key
     * @param string $pid ID Key
     * @param string $son 定义子数据Key
     * @return array
     */
    public static function arr2tree($list, $id = 'id', $pid = 'pid', $son = 'sub')
    {
        list($tree, $map) = [[], []];
        foreach ($list as $item) $map[$item[$id]] = $item;
        foreach ($list as $item) if (isset($item[$pid]) && isset($map[$item[$pid]])) {
            $map[$item[$pid]][$son][] = &$map[$item[$id]];
        } else $tree[] = &$map[$item[$id]];
        unset($map);
        return $tree;
    }

    /**
     *一维数组转树形结构，无限级树
     */
    public static function infiniteTree($data,$pid){
        if (!is_array($data) || empty($data) ) return false;
        $tree = array();
        foreach ($data as $k => $v) {
            // 找出所有的儿子
            if ($v['pid'] == $pid) {
                // 将儿子数据赋值给sub键，递归看看儿子还有没有孙子
                $v['sub'] = self::infiniteTree($data,$v['id']);
                $tree[] = $v;
                // 删除遍历过的数组数据
                unset($data[$k]);
            }
        }
        return $tree;
    }

    /**
     * sub键值排序,返给前端数组
     */
    public static function key_sort($data){
        if (!is_array($data) || empty($data) ) return false;
        $array_key_sort = array();
        foreach ($data as $key => $value){
            if ( isset($value['sub']) ){
                $value['sub'] = array_values($value['sub']);
                $array_key_sort[] = $value;
                // 删除遍历过的数组数据
                // unset($data[$key]);
                foreach ($value['sub'] as $k => $v){
                    if ( isset($v['sub']) ){
                        self::key_sort($v);
                    }
                }
            }
        }
        return $array_key_sort;
    }

    /**
     * 处理user键值
     */
    public static function user_key_sort($data){
        if (!is_array($data) || empty($data) ) return false;
        $array_key_sort = array();
        foreach ($data as $key => $value){
            $role_name = RoleModel::where([ ['id','=',$value['role']], ['category','=',2] ])->column('title');
            $zhiwei_name = ZhiweiModel::where('idzhiwei','=',$value['user']['zhiweiid'])->column('zhiwei_name');
            $value['user'] = [
                'iduser'=>$value['user']['iduser'],
                'user_realname'=>$value['user']['user_realname'],
                'role_name'=>$role_name['0'],
                'zhiwei_name'=>$zhiwei_name['0']
            ];
            $array_key_sort[] = $value;
        }
        return $array_key_sort;
    }

    /**
     * 一维数据数组生成数据树
     * @param array $list 数据列表
     * @param string $id ID Key
     * @param string $pid 父ID Key
     * @param string $path
     * @param string $ppath
     * @return array
     */
    public static function arr2table(array $list, $id = 'id', $pid = 'pid', $path = 'path', $ppath = '')
    {
        $tree = [];
        foreach (self::arr2tree($list, $id, $pid) as $attr) {
            $attr[$path] = "{$ppath}-{$attr[$id]}";
            $attr['sub'] = isset($attr['sub']) ? $attr['sub'] : [];
            $attr['spt'] = substr_count($ppath, '-');
            $attr['spl'] = str_repeat("　├　", $attr['spt']);
            $sub = $attr['sub'];
            unset($attr['sub']);
            $tree[] = $attr;
            if (!empty($sub)) $tree = array_merge($tree, self::arr2table($sub, $id, $pid, $path, $attr[$path]));
        }
        return $tree;
    }

    /**
     * 获取数据树子ID
     * @param array $list 数据列表
     * @param int $id 起始ID
     * @param string $key 子Key
     * @param string $pkey 父Key
     * @return array
     */
    public static function getArrSubIds($list, $id = 0, $key = 'id', $pkey = 'pid')
    {
        $ids = [intval($id)];
        foreach ($list as $vo) if (intval($vo[$pkey]) > 0 && intval($vo[$pkey]) === intval($id)) {
            $ids = array_merge($ids, self::getArrSubIds($list, intval($vo[$key]), $key, $pkey));
        }
        return $ids;
    }
    
}