<?php

namespace app\home\controller;

use app\common\controller\Backend;
use think\Validate;

class Hr extends Backend
{
    protected function initialize()
    {
        parent::initialize();
        $this->model = model('UserView');
        $this->modelPost = model('User');
    }

    /**
     * 用户信息列表入口
     * @return \think\response\View
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $action = $this->request->param();
        $where = [];

        $where[] = ['user_lizhi','=',0];
        if (!empty($action['user_realname'])) {
            $user_realname = urldecode($action['user_realname']);
            $where[] = array('user_realname', 'like', '%' . urldecode($action['user_realname']) . '%');
        } else {
            $user_realname = '';
        }
        if (!empty($action['user_phone'])) {
            $user_phone = $action['user_phone'];
            $where[] = array('user_phone|user_tel|user_fenjihao', 'like', '%' . $action['user_phone'] . '%');
        } else {
            $user_phone = '';
        }



        if (!empty($action['user_email'])) {
            $user_email = $action['user_email'];
            $where[] = array('user_email', 'like', '%' . $action['user_email'] . '%');
        } else {
            $user_email = '';
        }

        if (!empty($action['bumen_name'])) {
            $bumen_name = $action['bumen_name'];
            $where[] = array('bumen_name', 'like', '%' . $action['bumen_name'] . '%');
        } else {
            $bumen_name = '';
        }


        $search = array(
            'query' => [
                'user_realname' => urldecode($user_realname),
                'user_phone' => $user_phone,
                'user_email' => $user_email,
                'bumen_name' => $bumen_name
            ]
        );
        $list = $this->model->where($where)->paginate(10, false, $search);
        $data = array(
            'list' => $list,
            'page' => $list->render(),
            'search' => $search['query'],
            'bumen'=>model('Bumen')->select()
        );
        $this->assign('data', $data);
        return $this->fetch('hr/user:index');
    }

    /**
     * 用户信息添加入口
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function create()
    {
        $type = strtolower($this->request->param('type'));
        switch ($type) {
            case 'info':
                break;
            case 'ziliao':
                break;
            default:
                $zhiwei = db("zhiwei")->where('zhiwei_delete', 0)->field('idzhiwei,zhiwei_name')->select();
                $fensuo = db("fensuo")->where('fensuo_delete', 0)->field('idfensuo,fensuo_name')->select();
                $bumen = db("bumen")->where('bumen_delete', 0)->field('idbumen,bumen_name')->select();
                $lingyu = db('lingyu')->where('lingyu_delete', 0)->field('idlingyu,lingyu_name')->select();
                $data = array(
                    'zhiwei' => $zhiwei,
                    'fensuo' => $fensuo,
                    'bumen' => $bumen,
                    'lingyu' => $lingyu
                );
                $this->assign('data', $data);
                return $this->fetch('hr/user:create');
        }

    }

    /**
     * 员工信息保存
     * @return \type
     */
    public function save()
    {
        if ($this->request->isAjax()) {
            if (empty($this->modelPost)) {
                $this->modelPost = $this->model;
            }
            if (empty($this->request->param('id'))) {
                $insterData = $this->request->param();

                if(!empty($insterData['user_lingyu'])){
                    $insterData['user_lingyu'] = implode(',', $insterData['user_lingyu']);
                }
                $login_name = explode('@',$insterData['user_email']);

                $insterData['login_name'] = $login_name[0];

                if ($this->modelPost->allowField(true)->save($insterData)) {
                    return returnAjax('1001', '保存成功');
                } else {
                    return returnAjax('4001', '保存失败');
                }
            } else {
                $insterData = $this->request->param();

                if(!empty($insterData['user_lingyu'])){
                    $insterData['user_lingyu'] = implode(',', $insterData['user_lingyu']);
                }
                if ($this->modelPost->allowField(true)->save($insterData, ['iduser' => $insterData['id']])) {
                    return returnAjax('1001', '修改成功');
                } else {
                    return returnAjax('4001', '修改失败');
                }
            }
        }
    }

    /**
     * 用户信息查看入口
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function read($id)
    {
        $iduser = $this->request->param('id');
        if (empty($iduser)) {
            return $this->fetch('public:error');
        } else {
            $data = db("user_view")->where('iduser', $iduser)->find();
            $this->assign('data', $data);
            return $this->fetch('hr/user:read');
        }
    }

    /**
     * 用户信息更新入口
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function update()
    {

        $iduser = (int)$this->request->param('id');
        if (empty($iduser)) {
            return $this->fetch('public:error');
        } else {
            $info = db("user")->where('iduser', $iduser)->find();
            $zhiwei = db("zhiwei")->where('zhiwei_delete', 0)->field('idzhiwei,zhiwei_name')->select();
            $fensuo = db("fensuo")->where('fensuo_delete', 0)->field('idfensuo,fensuo_name')->select();
            $bumen = db("bumen")->where('bumen_delete', 0)->field('idbumen,bumen_name')->select();
            $lingyu = db('lingyu')->where('lingyu_delete', 0)->field('idlingyu,lingyu_name')->select();

            $data = array(
                'zhiwei' => $zhiwei,
                'fensuo' => $fensuo,
                'bumen' => $bumen,
                'info' => $info,
                'lingyu' => $lingyu
            );
            $this->assign('data', $data);
            return $this->fetch('hr/user:update');
        }
    }

    /**
     * 人力资源-修改入口
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function systemEdit()
    {
        $type = $this->request->param('type');
        $id = $this->request->param('id');
        if (in_array($type, ['fensuo', 'bumen', 'zhiwei', 'lingyu'])) {
            $list = db($type)->where($type . '_delete', 0)->select();
            $info = db($type)->where('id' . $type, $id)->find();
            $data = array(
                'list' => $list,
                'info' => $info
            );
            $this->assign('data', $data);
            return $this->fetch('hr/system:' . $type);
        } else {
            return $this->fetch('public:error');
        }
    }

    /**
     * 人力资源-设置入口
     *
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function system()
    {
        $type = $this->request->param('type');
        if (empty($type)) {
            $type = 'fensuo';
        }
        if (in_array($type, ['fensuo', 'bumen', 'zhiwei', 'lingyu'])) {
            $list = db($type)->where($type . '_delete', 0)->select();
            $data = array(
                'list' => $list
            );
            $this->assign('data', $data);
            return $this->fetch('hr/system:' . $type);
        } else {
            return $this->fetch('public:error');
        }

    }

    /**
     * 分所信息添加修改
     * @return \type
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function saveFensuoInfo()
    {

        if (!$this->request->isAjax()) {
            return returnAjax('4001', '请求类型不正确');
        }
        $rule = [
            'name' => 'require',
            'biaoshi' => 'require'
        ];
        $msg = [
            'name.require' => '分所名称必须填写',
            'biaoshi.require' => '分所标识必须填写'
        ];
        $validate = new Validate($rule, $msg);
        $data = $this->request->param();
        if (!$validate->check($data)) {
            return returnAjax('4002', $validate->getError());
        }

        $insData = array(
            'fensuo_name' => $data['name'],
            'fensuo_biaoshi' => $data['biaoshi'],
            'fensuo_beizhu' => $data['beizhu']
        );

        if (!empty($data['id'])) {
            $insData['update_time'] = date("Y-m-d H:i:s");
            $where[] = ['idfensuo', '=', $data['id']];
            if (db('fensuo')->where('fensuo_name', $data['name'])->where('idfensuo', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '分所名称已存在。');
            }

            if (db('fensuo')->where('fensuo_biaoshi', $data['biaoshi'])->where('idfensuo', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '分所标识已存在。');
            }

            if (db('fensuo')->where($where)->update($insData)) {
                return returnAjax('1001', '分所信息修改成功');
            } else {
                return returnAjax('2001', '分所信息失败,请联系管理员');
            }
        } else {
            if (db('fensuo')->where('fensuo_name', $data['name'])->count()) {
                return returnAjax('2002', '分所名称已存在。');
            }

            if (db('fensuo')->where('fensuo_biaoshi', $data['biaoshi'])->count()) {
                return returnAjax('2002', '分所标识已存在。');
            }

            if (db('fensuo')->insert($insData)) {
                return returnAjax('1001', '分所添加成功');
            } else {
                return returnAjax('2001', '分所添加失败,请联系管理员');
            }
        }
    }

    /**
     * 部门信息添加修改
     * @return \type
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function saveBumenInfo()
    {
        if (!$this->request->isAjax()) {
            return returnAjax('4001', '请求类型不正确');
        }
        $rule = [
            'name' => 'require'
        ];
        $msg = [
            'name.require' => '部门名称必须填写'
        ];
        $validate = new Validate($rule, $msg);
        $data = $this->request->param();
        if (!$validate->check($data)) {
            return returnAjax('4002', $validate->getError());
        }

        $insData = array(
            'bumen_name' => $data['name'],
            'bumen_beizhu' => $data['beizhu']
        );
        if (!empty($data['id'])) {
            $insData['update_time'] = date("Y-m-d H:i:s");
            $where[] = ['idbumen', '=', $data['id']];
            if (db('bumen')->where('bumen_name', $data['name'])->where('idbumen', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '部门名称已存在。');
            }
            if (db('bumen')->where($where)->update($insData)) {
                return returnAjax('1001', '部门信息修改成功');
            } else {
                return returnAjax('2001', '部门信息修改失败,请联系管理员');
            }
        } else {
            if (db('bumen')->where('bumen_name', $data['name'])->count()) {
                return returnAjax('2002', '部门名称已存在。');
            }
            if (db('bumen')->insert($insData)) {
                return returnAjax('1001', '部门添加成功');
            } else {
                return returnAjax('2001', '部门添加失败,请联系管理员');
            }
        }
    }

    /**
     * 职位信息添加修改
     * @return \type
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function saveZhiweiInfo()
    {
        if (!$this->request->isAjax()) {
            return returnAjax('4001', '请求类型不正确');
        }
        $rule = [
            'name' => 'require'
        ];
        $msg = [
            'name.require' => '职位名称必须填写'
        ];
        $validate = new Validate($rule, $msg);
        $data = $this->request->param();
        if (!$validate->check($data)) {
            return returnAjax('4002', $validate->getError());
        }

        $insData = array(
            'zhiwei_name' => $data['name'],
            'zhiwei_beizhu' => $data['beizhu']
        );

        if (!empty($data['id'])) {
            $insData['update_time'] = date("Y-m-d H:i:s");
            $where[] = ['idzhiwei', '=', $data['id']];
            if (db('zhiwei')->where('zhiwei_name', $data['name'])->where('idzhiwei', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '部门名称已存在。');
            }
            if (db('zhiwei')->where($where)->update($insData)) {
                return returnAjax('1001', '部门信息修改成功');
            } else {
                return returnAjax('2001', '部门信息修改失败,请联系管理员');
            }
        } else {
            if (db('zhiwei')->where('zhiwei_name', $data['name'])->count()) {
                return returnAjax('2002', '部门名称已存在。');
            }
            if (db('zhiwei')->insert($insData)) {
                return returnAjax('1001', '部门添加成功');
            } else {
                return returnAjax('2001', '部门添加失败,请联系管理员');
            }
        }
    }

    /**
     * 领域信息添加修改
     * @return \type
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function saveLingyuInfo()
    {
        if (!$this->request->isAjax()) {
            return returnAjax('4001', '请求类型不正确');
        }
        $rule = [
            'name' => 'require',
            'biaoshi' => 'require'
        ];
        $msg = [
            'name.require' => '业务领域名称必须填写',
            'biaoshi.require' => '业务领域标识必须填写'
        ];
        $validate = new Validate($rule, $msg);
        $data = $this->request->param();
        if (!$validate->check($data)) {
            return returnAjax('4002', $validate->getError());
        }
        $insData = array(
            'lingyu_name' => $data['name'],
            'lingyu_biaoshi' => $data['biaoshi'],
            'lingyu_beizhu' => $data['beizhu']
        );

        if (!empty($data['id'])) {
            $insData['update_time'] = date("Y-m-d H:i:s");
            $where[] = ['idlingyu', '=', $data['id']];
            if (db('lingyu')->where('lingyu_name', $data['name'])->where('idlingyu', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '业务领域名称已存在。');
            }

            if (db('lingyu')->where('lingyu_biaoshi', $data['biaoshi'])->where('idlingyu', 'NEQ', $data['id'])->count()) {
                return returnAjax('2002', '业务领域标识已存在。');
            }

            if (db('lingyu')->where($where)->update($insData)) {
                return returnAjax('1001', '业务领域信息修改成功');
            } else {
                return returnAjax('2001', '业务领域信息失败,请联系管理员');
            }
        } else {
            if (db('lingyu')->where('lingyu_name', $data['name'])->count()) {
                return returnAjax('2002', '业务领域名称已存在。');
            }

            if (db('lingyu')->where('lingyu_biaoshi', $data['biaoshi'])->count()) {
                return returnAjax('2002', '业务领域标识已存在。');
            }

            if (db('lingyu')->insert($insData)) {
                return returnAjax('1001', '业务领域添加成功');
            } else {
                return returnAjax('2001', '业务领域添加失败,请联系管理员');
            }
        }
    }

    /**
     * 人力资源-设置相关信息删除操作
     * @return \type
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function deleteSystemInfo()
    {
        if (!$this->request->isAjax()) {
            return returnAjax('4001', '请求类型不正确');
        }
        $rule = [
            'id' => 'require|number',
            'type' => 'require',
        ];
        $msg = [
            'id.require' => '参数不能为空',
            'id.number' => '参数格式不正确',
            'type.require' => '参数违法'
        ];
        $validate = new Validate($rule, $msg);
        $data = $this->request->param();
        if (!$validate->check($data)) {
            return returnAjax('4002', $validate->getError());
        }
        $type = $data['type'];
        $mess = ['fensuo' => '分所信息', 'bumen' => '部门信息', 'zhiwei' => '职位信息', 'lingyu' => '领域信息'];
        if (in_array($type, ['fensuo', 'bumen', 'zhiwei', 'lingyu'])) {
            $yn = db($type)->where('id' . $type, $data['id'])->update([$type . '_delete' => 1, 'delete_time' => date("Y-m-d H:i:s")]);
            $msg = $mess[$type];
            if ($yn) {
                return returnAjax('1001', $msg . '删除成功。');
            } else {
                return returnAjax('2001', $msg . '删除失败，请联系管理员。');
            }
        } else {
            return returnAjax('4003', '参数错误。');
        }

    }

    public function ziliao(){
        return $this->redirect('hr/index');
    }
}
