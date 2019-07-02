<?php

namespace app\common\controller;;

use think\Controller;
use think\Db;
use think\facade\Session;
use think\Model;
use think\facade\Log;


class Backend extends Controller
{

    protected $model = null;
    protected $modelPost = null;
    protected $where = [];
    protected $page = true;
    protected $listPage = '';
    protected $readPage = '';
    protected $editPage = '';
    protected $viewConfig = [];
    protected $viewType = false;
    protected $readConfig = [];
    protected $editConfig = [];

    protected $userid;
    protected $email;
    protected $realname;

    use \app\home\library\traits\Backend;

    /**
     * 自动加载
     */
    protected function initialize()
    {
        $modulename = strtolower($this->request->module());
        $controllername = strtolower($this->request->controller());
        $actionname = strtolower($this->request->action());
        $config = array(
            'modulename' => $modulename,
            'controllername' => $controllername,
            'actionname' => $actionname
        );

        //渲染配置信息
        $this->assign('config', $config);
        // 实例化Auth类
        $auth = new Auth();
        // 登陆验证
        if (!empty(session('USERID','','lawyer'))) {
            $uid = Session::get('USERID','lawyer');
            // 如果是接口形式，只能拿到一条api, 所以只能判断这条url是否合法
            $url = $config['controllername'].'/'.$config['actionname'];
            // 如果是接口形式
            if( in_array($modulename, ['api', 'admin']) ){
                $category=2;
            }else{
                // 前后端不分离模式
               $category=1;
            }
            // 权限验证
            $bool = $auth->user_permission($uid, $url, $category);
            if($bool==true){
                // 获取菜单列表，并赋值给模板变量menu
                $auth->menu($uid, $category);
                $info = $auth->user();
                $this->userid = $info['iduser'];
                $this->email = $info['user_email'];
                $this->realname = $info['user_realname'];
                $system['user'] = model("UserView")->get($this->userid);
                $this->assign('system', $system);
            }else{
                echo json_encode([ 'status' => '400002', 'msg' => '您还没有任何权限，请联系管理员开通！！！', 'data' => '', 'type' => 'json' ]);
                exit();
            }
        } else {
            if( in_array($modulename, ['api', 'admin']) ) {
                echo json_encode([ 'status' => '400001', 'msg' => '该用户未登录', 'data' => '', 'type' => 'json' ]);
                exit();
            } else {
                $this->redirect(config("web_url") . "/home/login/");
            }
        }
    }

    /**
     * 初始化检索值
     * @return mixed
     */
    protected function getSearchKey()
    {
        $w = [];
        foreach ($this->where as $v) {
            if (!empty($this->request->param($v))) {
                $w[$v] = urldecode($this->request->param($v));
            } else {
                $w[$v] = '';
            }
        }
        return $this->where = $w;
    }

    /**
     * 获取选项列表
     * @param $model
     * @param $id
     * @param $value
     * @param string $where
     * @param string $field
     * @return mixed
     */
    protected function getSelectOption($model, $id, $value, $where = [], $field = '')
    {
        $str = "`" . $id . "` as 'id',`" . $value . "` as 'value'";
        if (!empty($field)) {
            $str .= "," . $field;
        }
        if (empty($where)) {
            return model($model)->whereNull('delete_time')->field($str)->select()->toArray();
        } else {
            return model($model)->where($where)->whereNull('delete_time')->field($str)->select()->toArray();
        }
    }


}
