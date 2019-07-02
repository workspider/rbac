<?php /*a:2:{s:59:"/var/www/manager_cmlaw/application/home/view/hr/update.html";i:1546067570;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>澄明则正律师事务所 V1.0</title>
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/css/dashboard.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/css/jquery.growl.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/iconfont/iconfont.css">
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/chosen/chosen.css" rel="stylesheet">

    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/css/step.css" rel="stylesheet">

    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/jquery.min.js"></script>
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/layer/layer.js"></script>

    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/bootstrap-datetimepicker/bootstrap-datetimepicker.css"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/html5shiv.min.js"></script>
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">yeelawyer v1.0</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="margin-left: 20px;">
                <img src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/img/yeelibaray-logo.png"/>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <?php if(is_array($menu['menu_father']) || $menu['menu_father'] instanceof \think\Collection || $menu['menu_father'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['menu_father'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;if($f['url'] == $menu['fatherkey']): ?>
                <li class="active"><?php else: ?>
                <li><?php endif; ?>
                    <a href="<?php echo url($f['url']); ?>"><?php echo htmlentities($f['title']); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#"><img src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/img/touxiang.jpg" class="img-circle"> </a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?php echo htmlentities($system['user']['user_realname']); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url('user/userinfo'); ?>">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo url('login/outlogin'); ?>">安全退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">

        <div class="sidebar">
            
            <ul class="nav nav-sidebar">

                <?php if(is_array($menu['menu_son']) || $menu['menu_son'] instanceof \think\Collection || $menu['menu_son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['menu_son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;if($son['url'] == $menu['sonkey']): ?>
                <li class="active"><?php else: ?>
                <li><?php endif; ?>
                    <a href="<?php echo url($son['url']); ?>"><?php echo htmlentities($son['title']); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            
            
        </div>

        <div class="main">
            <!--<ul class="breadcrumb">-->
            <!--<li><a href="#">管理平台</a></li>-->
            <!--<li class="active">最后登录时间：<?php echo date("Y-m-d H:i:s"); ?></li>-->
            <!--</ul>-->
            <!--<div class="space-top-20"></div>-->
            
            
<h2 class="sub-header">

    员工档案修改
    <a href="<?php echo url('hr/index'); ?>" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-list"></span>
        返回员工档案列表
    </a>
</h2>
<form method="post" id='userCreateForm'>
<div class="row">

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 员工信息
            </div>
            <div class="create-tools"></div>
        </div>
    </div>

    <div class="col-md-12">
        <table class="table table-no-bordered">
            <tbody>
            <tr>
                <td class="input-title text-right"><span>选择用户：</span></td>
                <td class="5">
                    <div class="width-100">
                        <input type="hidden" name="iduser" value="<?php echo htmlentities($data['info']['iduser']); ?>">
                        <input type="text" readonly class="form-control" value="<?php echo htmlentities($data['info']['user_realname']); ?>">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 入职信息
            </div>
            <div class="create-tools"></div>
        </div>
    </div>
    <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 12%" class="input-title text-right"><span>入职日期：</span></td>
                    <td style="width: 21%">
                        <div class="width-100">
                            <input name="ruzhi_time" type="text" class="form-control form_datetime1" value="<?php echo htmlentities($data['info']['ruzhi_time']); ?>">
                        </div>
                    </td>
                    <td style="width: 12%" class="input-title text-right"><span>入职地点：</span></td>
                    <td style="width: 21%" style="width: 200px;">
                        <div class="width-100">

                            <select name="ruzhi_didian" class="form-control chosen-select" data-placeholder="选择入职地点">
                                <option value=""></option>
                                <?php if(is_array($data['fensuo']) || $data['fensuo'] instanceof \think\Collection || $data['fensuo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['fensuo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fensuo): $mod = ($i % 2 );++$i;if($fensuo['fensuo_name'] == $data['info']['ruzhi_didian']): ?>
                                <option value="<?php echo htmlentities($fensuo['fensuo_name']); ?>" selected><?php echo htmlentities($fensuo['fensuo_name']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($fensuo['fensuo_name']); ?>"><?php echo htmlentities($fensuo['fensuo_name']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                    <td style="width: 12%" class="input-title text-right"><span>职务：</span></td>
                    <td style="width: 22%" style="width: 200px;">
                        <div class="width-100">
                            <select name="zhiweiid" class="form-control chosen-select" data-placeholder="选择职务">
                                <option value=""></option>
                                <?php if(is_array($data['zhiwei']) || $data['zhiwei'] instanceof \think\Collection || $data['zhiwei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhiwei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhiwei): $mod = ($i % 2 );++$i;if($zhiwei['idzhiwei'] == $data['info']['zhiweiid']): ?>
                                <option value="<?php echo htmlentities($zhiwei['idzhiwei']); ?>" selected><?php echo htmlentities($zhiwei['zhiwei_name']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($zhiwei['idzhiwei']); ?>"><?php echo htmlentities($zhiwei['zhiwei_name']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 员工基本信息
            </div>
            <div class="create-tools"></div>
        </div>
    </div>

    <div class="col-md-12">
        <table class="table table-no-bordered">
            <tbody>
            <tr>
                <td style="width: 12%" class="input-title text-right"><span>姓名：</span></td>
                <td style="width: 21%">
                    <div class="width-100">
                        <input name="user_realname" type="text" class="form-control"  value="<?php echo htmlentities($data['info']['user_realname']); ?>">
                    </div>
                </td>
                <td style="width: 12%" class="input-title text-right"><span>性别：</span></td>
                <td style="width: 21%">
                    <div class="width-100">

                        <?php if($data['info']['user_sex'] == '男'): ?>
                        <label class="radio-inline">
                            <input type="radio" name="user_sex" value="男" checked > 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="user_sex" value="女"> 女
                        </label>

                        <?php else: ?>

                        <label class="radio-inline">
                            <input type="radio" name="user_sex" value="男" > 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="user_sex" value="女" checked> 女
                        </label>

                        <?php endif; ?>
                    </div>
                </td>
                <td style="width: 12%" class="input-title text-right"><span>民族：</span></td>
                <td style="width: 22%">
                    <div class="width-100">
                        <input name="user_mingzu" type="text" class="form-control" value="<?php echo htmlentities($data['info']['user_mingzu']); ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="input-title text-right"><span>户籍：</span></td>
                <td>
                    <div class="width-100">
                        <input name="user_huji" type="text" class="form-control" value="<?php echo htmlentities($data['info']['user_huji']); ?>">
                    </div>
                </td>
                <td class="input-title text-right"><span>证件类型：</span></td>
                <td>
                    <div class="width-100">
                        <select name="user_zhengjianleixing" class="form-control chosen-select" data-placeholder="选择证件类型">
                            <option value=""></option>
                            <?php if($data['info']['user_zhengjianleixing'] == '身份证'): ?>
                            <option value="身份证" selected>身份证</option>
                            <?php else: ?>
                            <option value="身份证" >身份证</option>
                            <?php endif; if($data['info']['user_zhengjianleixing'] == '护照（外籍人士）'): ?>
                            <option value="护照（外籍人士）" selected>护照（外籍人士）</option>
                            <?php else: ?>
                            <option value="护照（外籍人士）" >护照（外籍人士）</option>
                            <?php endif; if($data['info']['user_zhengjianleixing'] == '港澳台居民往来通行证'): ?>
                            <option value="港澳台居民往来通行证" selected>港澳台居民往来通行证</option>
                            <?php else: ?>
                            <option value="港澳台居民往来通行证" >港澳台居民往来通行证</option>
                            <?php endif; if($data['info']['user_zhengjianleixing'] == '其他'): ?>
                            <option value="其他" selected>其他</option>
                            <?php else: ?>
                            <option value="其他" >其他</option>
                            <?php endif; ?>

                        </select>
                    </div>
                </td>
                <td class="input-title text-right"><span>证件号码：</span></td>
                <td>
                    <div class="width-100">
                        <input name="zhengjianhaoma" type="text" class="form-control" value="<?php echo htmlentities($data['info']['zhengjianhaoma']); ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>户籍地址：</span></td>
                <td colspan="3">
                    <div class="width-100">
                        <input name="hujidizhi" type="text" class="form-control" value="<?php echo htmlentities($data['info']['hujidizhi']); ?>">
                    </div>
                </td>
                <td class="input-title text-right"><span>出生日期：</span></td>
                <td>
                    <div class="width-100">
                        <input name="chusheng_time" type="text" class="form-control form_datetime1" value="<?php echo htmlentities($data['info']['chusheng_time']); ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>现住址：</span></td>
                <td colspan="3">
                    <div class="width-100">
                        <input name="xian_zhuzhi" type="text" class="form-control" value="<?php echo htmlentities($data['info']['xian_zhuzhi']); ?>">
                    </div>
                </td>
                <td class="input-title text-right"><span>政治面貌：</span></td>
                <td>
                    <div class="width-100">
                        <select name="zhengzhimianmao" class="form-control chosen-select" data-placeholder="选择政治面貌">
                            <option value=""></option>
                            <?php if($data['info']['zhengzhimianmao'] == '党员'): ?>
                            <option value="党员" selected>党员</option>
                            <?php else: ?>
                            <option value="党员" >党员</option>
                            <?php endif; if($data['info']['zhengzhimianmao'] == '群众'): ?>
                            <option value="群众" selected>群众</option>
                            <?php else: ?>
                            <option value="群众" >群众</option>
                            <?php endif; if($data['info']['zhengzhimianmao'] == '民主党派'): ?>
                            <option value="民主党派" selected>民主党派</option>
                            <?php else: ?>
                            <option value="民主党派" >民主党派</option>
                            <?php endif; if($data['info']['zhengzhimianmao'] == '其他'): ?>
                            <option value="其他" selected>其他</option>
                            <?php else: ?>
                            <option value="其他" >其他</option>
                            <?php endif; ?>

                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>婚姻状况：</span></td>
                <td>
                    <div class="width-100">

                        <select name="hunyin_state" class="form-control chosen-select" data-placeholder="选择婚姻状况">
                            <option value=""></option>
                            <?php if($data['info']['hunyin_state'] == '已婚'): ?>
                            <option value="已婚" selected>已婚</option>
                            <?php else: ?>
                            <option value="已婚" >已婚</option>
                            <?php endif; if($data['info']['hunyin_state'] == '未婚'): ?>
                            <option value="未婚" selected>未婚</option>
                            <?php else: ?>
                            <option value="未婚" >未婚</option>
                            <?php endif; if($data['info']['hunyin_state'] == '离异'): ?>
                            <option value="离异" selected>离异</option>
                            <?php else: ?>
                            <option value="离异" >离异</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </td>
                <td class="input-title text-right"><span>生育状况：</span></td>
                <td>
                    <div class="width-100">

                        <select name="shengyu_state" class="form-control chosen-select" data-placeholder="选择生育状况">
                            <option value=""></option>
                            <?php if($data['info']['shengyu_state'] == '已育'): ?>
                            <option value="已育" selected>已育</option>
                            <?php else: ?>
                            <option value="已育" >已育</option>
                            <?php endif; if($data['info']['shengyu_state'] == '未育'): ?>
                            <option value="未育" selected>未育</option>
                            <?php else: ?>
                            <option value="未育" >未育</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </td>
                <td class="input-title text-right"><span>兴趣/特长：</span></td>
                <td>
                    <div class="width-100">
                        <input name="xingqutechang" type="text" class="form-control" value="<?php echo htmlentities($data['info']['xingqutechang']); ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>紧急联络人：</span></td>
                <td>
                    <div class="width-100">
                        <input name="jinjilianxiren" type="text" class="form-control" value="<?php echo htmlentities($data['info']['jinjilianxiren']); ?>">
                    </div>
                </td>
                <td class="input-title text-right"><span>关系：</span></td>
                <td>
                    <div class="width-100">

                        <select name="lianxiren_guanxi" class="form-control chosen-select" data-placeholder="选择关系">
                            <option value=""></option>
                            <?php if($data['info']['lianxiren_guanxi'] == '父母'): ?>
                            <option value="父母" selected>父母</option>
                            <?php else: ?>
                            <option value="父母" >父母</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '夫妻'): ?>
                            <option value="夫妻" selected>夫妻</option>
                            <?php else: ?>
                            <option value="夫妻" >夫妻</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '兄弟姐妹'): ?>
                            <option value="兄弟姐妹" selected>兄弟姐妹</option>
                            <?php else: ?>
                            <option value="兄弟姐妹" >兄弟姐妹</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '亲戚'): ?>
                            <option value="亲戚" selected>亲戚</option>
                            <?php else: ?>
                            <option value="亲戚" >亲戚</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '同学'): ?>
                            <option value="同学" selected>同学</option>
                            <?php else: ?>
                            <option value="同学" >同学</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '朋友'): ?>
                            <option value="朋友" selected>朋友</option>
                            <?php else: ?>
                            <option value="朋友" >朋友</option>
                            <?php endif; if($data['info']['lianxiren_guanxi'] == '同事'): ?>
                            <option value="同事" selected>同事</option>
                            <?php else: ?>
                            <option value="同事" >同事</option>
                            <?php endif; ?>

                        </select>
                    </div>
                </td>
                <td class="input-title text-right"><span>联系电话：</span></td>
                <td>
                    <div class="width-100">
                        <input name="lianxiren_tel" type="text" class="form-control" value="<?php echo htmlentities($data['info']['lianxiren_tel']); ?>">
                    </div>
                </td>
            </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 语言
            </div>
            <div class="create-tools">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#yuyanModal" >添加语言</button>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">语种</th>
                <th class="text-center">熟练程度</th>
                <th class="text-center">专业证书</th>
                <th class="text-center" style="width: 80px;">操作</th>
            </tr>
            </thead>
            <tbody id="yuyanList">
            <?php if(is_array($data['yuyan']) || $data['yuyan'] instanceof \think\Collection || $data['yuyan'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['yuyan'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['user_yuzhong']); ?></td>
                <td><?php echo htmlentities($list['shulianchengdu']); ?></td>
                <td><?php echo htmlentities($list['zhengshu']); ?></td>
                <td>
                    <button type="button" data-align="delete" data-bind="<?php echo htmlentities($list['id']); ?>" data-type="yuyan" class="btn btn-danger btn-xs">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 证书
            </div>
            <div class="create-tools">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#zhengshuModal" >添加证书</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">证书名称</th>
                <th class="text-center">职称</th>
                <th class="text-center">颁发机构</th>
                <th class="text-center">取得时间</th>
                <th class="text-center">备注</th>
                <th class="text-center" style="width: 80px;">操作</th>
            </tr>
            </thead>
            <tbody id="zhengshuList">
            <?php if(is_array($data['zhengshu']) || $data['zhengshu'] instanceof \think\Collection || $data['zhengshu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhengshu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['zhengshu']); ?></td>
                <td><?php echo htmlentities($list['zhicheng']); ?></td>
                <td><?php echo htmlentities($list['jigou']); ?></td>
                <td><?php echo htmlentities($list['zhengshu_time']); ?></td>
                <td><?php echo htmlentities($list['beizhu']); ?></td>
                <td>
                    <button type="button" data-align="delete" data-bind="<?php echo htmlentities($list['id']); ?>" data-type="zhengshu" class="btn btn-danger btn-xs">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 教育背景
            </div>
            <div class="create-tools">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#jiaoyuModal" >添加教育背景</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">起止年月</th>
                <th class="text-center">学校名称</th>
                <th class="text-center">学历</th>
                <th class="text-center">专业</th>
                <th class="text-center">是否是全日制</th>
                <th class="text-center" style="width: 80px;">操作</th>
            </tr>
            </thead>
            <tbody id="jiaoyuList">
            <?php if(is_array($data['jiaoyu']) || $data['jiaoyu'] instanceof \think\Collection || $data['jiaoyu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['jiaoyu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['jiaoyu_time']); ?> ~ <?php echo htmlentities($list['jiaoyu_end_time']); ?></td>
                <td><?php echo htmlentities($list['xuexiao_name']); ?></td>
                <td><?php echo htmlentities($list['xueli']); ?></td>
                <td><?php echo htmlentities($list['zhuanye']); ?></td>
                <td><?php echo htmlentities($list['quanrizhi']); ?></td>
                <td>
                    <button type="button" data-align="delete" data-bind="<?php echo htmlentities($list['id']); ?>" data-type="jiaoyu" class="btn btn-danger btn-xs">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 工作经历
            </div>
            <div class="create-tools">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#gongzuoModal" >添加工作经历</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">起止年月</th>
                <th class="text-center">公司名称</th>
                <th class="text-center">最后职务</th>
                <th class="text-center">年薪</th>
                <th class="text-center">证明人</th>
                <th class="text-center">联系方式</th>
                <th class="text-center" style="width: 80px;">操作</th>
            </tr>
            </thead>
            <tbody id="gongzuoList">
            <?php if(is_array($data['gongzuo']) || $data['gongzuo'] instanceof \think\Collection || $data['gongzuo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['gongzuo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['gongzuo_time']); ?> ~ <?php echo htmlentities($list['gongzuo_end_time']); ?></td>
                <td><?php echo htmlentities($list['gongsi_name']); ?></td>
                <td><?php echo htmlentities($list['zuihou_zhiwu']); ?></td>
                <td><?php echo htmlentities($list['nianxin']); ?></td>
                <td><?php echo htmlentities($list['zhengmingren']); ?></td>
                <td><?php echo htmlentities($list['zhengmingren_tel']); ?></td>
                <td>
                    <button type="button" data-align="delete" data-bind="<?php echo htmlentities($list['id']); ?>" data-type="gongzuo" class="btn btn-danger btn-xs">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 家庭成员
            </div>
            <div class="create-tools">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#jiatingModal" >添加家庭成员</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">姓名</th>
                <th class="text-center">工作单位</th>
                <th class="text-center">职务</th>
                <th class="text-center">关系</th>
                <th class="text-center">联系方式</th>
                <th class="text-center" style="width: 80px;">操作</th>
            </tr>
            </thead>
            <tbody id="jiatingList">
            <?php if(is_array($data['jiating']) || $data['jiating'] instanceof \think\Collection || $data['jiating'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['jiating'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['xingming']); ?></td>
                <td><?php echo htmlentities($list['danwei']); ?></td>
                <td><?php echo htmlentities($list['zhiwu']); ?></td>
                <td><?php echo htmlentities($list['guanxi']); ?></td>
                <td><?php echo htmlentities($list['tel']); ?></td>
                <td>
                    <button type="button" data-align="delete" data-bind="<?php echo htmlentities($list['id']); ?>" data-type="jiating" class="btn btn-danger btn-xs">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>


    <div class="col-md-12">
        <div class="clearfix form-actions">
            <div align="center" class="col-md-12">
                <button class="btn btn-info btn-lg" type="submit" style="width: 300px;">
                    <i class="icon-ok bigger-110 "></i>
                    确认提交
                </button>
            </div>
        </div>
    </div>

</div>
</form>




            


        </div>
    </div>

</div>


<!--语言添加-->
<div class="modal fade" id="yuyanModal" tabindex="-1" role="dialog" aria-labelledby="yuyanModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='yuyanCreateForm'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="yuyanModalLabel">添加语言</h4>
            </div>
            <div class="modal-body">

                    <input type="hidden" name="userid" value="<?php echo htmlentities($data['info']['iduser']); ?>" >
                    <input type="hidden" name="type" value="yuyan" >
                    <div class="form-group">
                        <label class="control-label">语言名称:</label>
                        <input type="text" name="user_yuzhong" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">熟练程度:</label>

                        <select name="shulianchengdu" class="form-control chosen-select" data-placeholder="选择熟练程度">
                            <option value=""></option>
                            <option value="母语">母语</option>
                            <option value="流利">流利</option>
                            <option value="普通">普通</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">专业证书:</label>
                        <input type="text" name="zhengshu" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default">重置</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="zhengshuModal" tabindex="-1" role="dialog" aria-labelledby="zhengshuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='zhengshuCreateForm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="zhengshuModalLabel">添加证书</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="userid" value="<?php echo htmlentities($data['info']['iduser']); ?>" >
                    <input type="hidden" name="type" value="zhengshu" >
                    <div class="form-group">
                        <label class="control-label">证书名称:</label>
                        <input type="text" name="zhengshu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">职称:</label>
                        <input type="text" name="zhicheng" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">颁发机构:</label>
                        <input type="text" name="jigou" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">取得时间:</label>
                        <input type="text" name="zhengshu_time" class="form-control form_datetime2">
                    </div>

                    <div class="form-group">
                        <label class="control-label">备注:</label>
                        <input type="text" name="beizhu" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="jiaoyuModal" tabindex="-1" role="dialog" aria-labelledby="jiaoyuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='jiaoyuCreateForm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="jiaoyuModalLabel">添加教育背景</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="userid" value="<?php echo htmlentities($data['info']['iduser']); ?>" >
                    <input type="hidden" name="type" value="jiaoyu" >
                    <div class="form-group">
                        <label class="control-label">起止年月（开始）:</label>
                        <input type="text" name="jiaoyu_time" class="form-control form_datetime2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">起止年月（结束）:</label>
                        <input type="text" name="jiaoyu_end_time" class="form-control form_datetime2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">学校名称:</label>
                        <input type="text" name="xuexiao_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">学历:</label>
                        <input type="text" name="xueli" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">专业:</label>
                        <input type="text" name="zhuanye" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">是否是全日制:</label>
                        <select name="quanrizhi" class="form-control">
                            <option value="是">是</option>
                            <option value="否">否</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="gongzuoModal" tabindex="-1" role="dialog" aria-labelledby="gongzuoModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='gongzuoCreateForm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gongzuoModalLabel">添加工作经历</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="userid" value="<?php echo htmlentities($data['info']['iduser']); ?>" >
                    <input type="hidden" name="type" value="gongzuo" >
                    <div class="form-group">
                        <label class="control-label">起止年月（开始）:</label>
                        <input type="text" name="gongzuo_time" class="form-control form_datetime2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">起止年月（结束）:</label>
                        <input type="text" name="gongzuo_end_time" class="form-control form_datetime2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">公司名称:</label>
                        <input type="text" name="gongsi_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">最后职务:</label>
                        <input type="text" name="zuihou_zhiwu" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="control-label">年薪:</label>
                        <input type="text" name="nianxin" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">证明人:</label>
                        <input type="text" name="zhengmingren" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">联系方式:</label>
                        <input type="text" name="zhengmingren_tel" class="form-control">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="jiatingModal" tabindex="-1" role="dialog" aria-labelledby="jiatingModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='jiatingCreateForm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="jiatingModalLabel">添加家庭成员</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="userid" value="<?php echo htmlentities($data['info']['iduser']); ?>" >
                    <input type="hidden" name="type" value="jiating" >

                    <div class="form-group">
                        <label class="control-label">姓名:</label>
                        <input type="text" name="xingming" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">工作单位:</label>
                        <input type="text" name="danwei" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="control-label">职务:</label>
                        <input type="text" name="zhiwu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">关系:</label>
                        <input type="text" name="guanxi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">联系方式:</label>
                        <input type="text" name="tel" class="form-control">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="footer">
    <?php echo htmlentities(app('config')->get('software_addreviation')); ?>
    <?php echo htmlentities(app('config')->get('software_version')); ?>
</div>


<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/jquery.min.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/bootstrap.min.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/holder.min.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/jquery.growl.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/chosen/chosen.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/jquery.validate.min.js"></script>
<script type="text/javascript"
        src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/bootstrap-datetimepicker/bootstrap-datetimepicker.js"
        charset="UTF-8"></script>
<script type="text/javascript"
        src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/bootstrap-datetimepicker/bootstrap-datetimepicker.zh-CN.js"
        charset="UTF-8"></script>

<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/js/ie10-viewport-bug-workaround.js"></script>

<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/echarts/echarts.min.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/echarts/macarons.js"></script>

<script>
    var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
</script>

<script>
    $(function () {
        $('.form_datetime1').datetimepicker({
            language: 'zh-CN',
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            // weekStart: 2,
            // minuteStep: 10,
             startView: 4,
            minView: 2,
            // maxView: 2,
            todayBtn: true
        });

        $('.form_datetime2').datetimepicker({
            language: 'zh-CN',
            format: "yyyy-mm",
            autoclose: true,
            todayBtn: true,
            // weekStart: 2,
            // minuteStep: 10,
             startView: 4,
            minView: 3,
            // maxView: 2,
            todayBtn: true
        });

        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });
        var fromCreateID = $("#userCreateForm");
        var fromUrl = web_url + '/home/hr/save';
        fromCreateID.validate({
            ignore: ":hidden:not(select)",
            rules: {
                iduser: {
                    required: true
                },
                user_realname: {
                    required: true
                },
                user_phone: {
                    required: true
                },
                user_tel: {
                    required: true
                },
                bumenid: {
                    required: true
                },
                fensuoid: {
                    required: true
                },
                zhiweiid: {
                    required: true
                },
                user_email: {
                    required: true,
                    email: true
                },
                ruzhi_time: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                user_realname: {
                    required: '请输入员工姓名'
                },
                user_phone: {
                    required: "请输入手机号"
                },
                user_tel: {
                    required: "请输入固定电话"
                },
                bumenid: {
                    required: "请选择所在部门"
                },
                fensuoid: {
                    required: "请选择分所信息"
                },
                zhiweiid: {
                    required: "请选择员工职位"
                },
                user_email: {
                    required: "请输入邮箱地址",
                    email: "邮箱地址格式不正确"
                },
                ruzhi_time: {
                    required: "请选择入职日期"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: fromUrl,
                    type: "post",
                    dataType: "json",
                    data: fromCreateID.serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            fromCreateID.parent().prepend(str);
                            $.growl.notice({message: obj.msg});
                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            fromCreateID.parent().prepend(str);
                        }
                        setTimeout(function () {
                            $("#formMsg").remove();
                        }, 1000);
                    }
                });
            }
        });

        $("#yuyanCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                userid: {
                    required: true
                },
                user_yuzhong: {
                    required: true
                },
                shulianchengdu: {
                    required: true
                },
                zhengshu: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                user_yuzhong: {
                    required: '请输入语言名称'
                },
                shulianchengdu: {
                    required: "请输入熟练程度"
                },
                zhengshu: {
                    required: "请输入专业证书"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: web_url + '/home/hr/xiangguanshuju/',
                    type: "post",
                    dataType: "json",
                    data: $("#yuyanCreateForm").serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#yuyanCreateForm .modal-body").prepend(str);
                            $("#yuyanCreateForm input[name='user_yuzhong']").val('');
                            $("#yuyanCreateForm input[name='shulianchengdu']").val('');
                            $("#yuyanCreateForm input[name='zhengshu']").val('');
                            str = '<tr>' +
                                '<td>'+obj.data.user_yuzhong+'</td>' +
                                '<td>'+obj.data.shulianchengdu+'</td>' +
                                '<td>'+obj.data.zhengshu+'</td>' +
                                '<td><button type="button" data-align="delete" data-bind="'+obj.data.id+'" data-type="yuyan" class="btn btn-danger btn-xs">删除</button></td>' +
                                '</tr>';
                            $("#yuyanList").append(str);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#yuyanCreateForm .modal-body").prepend(str);
                        }
                        setTimeout(function () {
                            $("#yuyanCreateForm #formMsg").remove();
                        }, 2000);
                    }
                });
            }
        });

        $("#zhengshuCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                userid: {
                    required: true
                },
                zhengshu: {
                    required: true
                },
                zhicheng: {
                    required: true
                },
                jigou: {
                    required: true
                },
                zhengshu_time: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                zhengshu: {
                    required: '请输入证书名称'
                },
                zhicheng: {
                    required: '请输入职称'
                },
                jigou: {
                    required: '请输入颁发机构'
                },
                zhengshu_time: {
                    required: '请输入取得时间'
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: web_url + '/home/hr/xiangguanshuju/',
                    type: "post",
                    dataType: "json",
                    data: $("#zhengshuCreateForm").serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#zhengshuCreateForm .modal-body").prepend(str);
                            $("#zhengshuCreateForm input[name='zhengshu']").val('');
                            $("#zhengshuCreateForm input[name='zhicheng']").val('');
                            $("#zhengshuCreateForm input[name='jigou']").val('');
                            $("#zhengshuCreateForm input[name='zhengshu_time']").val('');
                            $("#zhengshuCreateForm input[name='beizhu']").val('');
                            str = '<tr>' +
                                '<td>'+obj.data.zhengshu+'</td>' +
                                '<td>'+obj.data.zhicheng+'</td>' +
                                '<td>'+obj.data.jigou+'</td>' +
                                '<td>'+obj.data.zhengshu_time+'</td>' +
                                '<td>'+obj.data.beizhu+'</td>' +
                                '<td><button type="button" data-align="delete" data-bind="'+obj.data.id+'" data-type="zhengshu" class="btn btn-danger btn-xs">' +
                                '删除</button></td>' +
                                '</tr>';
                            $("#zhengshuList").append(str);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#zhengshuCreateForm .modal-body").prepend(str);
                        }
                        setTimeout(function () {
                            $("#zhengshuCreateForm #formMsg").remove();
                        }, 2000);
                    }
                });
            }
        });

        $("#jiaoyuCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                userid: {
                    required: true
                },
                jiaoyu_time: {
                    required: true
                },
                jiaoyu_end_time: {
                    required: true
                },
                xuexiao_name: {
                    required: true
                },
                zhuanye: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                jiaoyu_time: {
                    required: '请输入起止年月'
                },
                jiaoyu_end_time: {
                    required: '请输入起止年月'
                },
                xuexiao_name: {
                    required: '请输入学校名称'
                },
                zhuanye: {
                    required: '请输入学历'
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: web_url + '/home/hr/xiangguanshuju/',
                    type: "post",
                    dataType: "json",
                    data: $("#jiaoyuCreateForm").serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#jiaoyuCreateForm .modal-body").prepend(str);
                            $("#jiaoyuCreateForm input[name='jiaoyu_time']").val('');
                            $("#jiaoyuCreateForm input[name='jiaoyu_end_time']").val('');
                            $("#jiaoyuCreateForm input[name='xuexiao_name']").val('');
                            $("#jiaoyuCreateForm input[name='xueli']").val('');
                            $("#jiaoyuCreateForm input[name='zhuanye']").val('');
                            str = '<tr>' +
                                '<td>'+obj.data.jiaoyu_time+' ~ '+obj.data.jiaoyu_end_time+'</td>' +
                                '<td>'+obj.data.xuexiao_name+'</td>' +
                                '<td>'+obj.data.xueli+'</td>' +
                                '<td>'+obj.data.zhuanye+'</td>' +
                                '<td>'+obj.data.quanrizhi+'</td>' +
                                '<td><button type="button" data-align="delete" data-bind="'+obj.data.id+'" data-type="jiaoyu" class="btn btn-danger btn-xs">' +
                                '删除</button></td>' +
                                '</tr>';
                            $("#jiaoyuList").append(str);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#jiaoyuCreateForm .modal-body").prepend(str);
                        }
                        setTimeout(function () {
                            $("#jiaoyuCreateForm #formMsg").remove();
                        }, 2000);
                    }
                });
            }
        });

        $("#gongzuoCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                userid: {
                    required: true
                },
                gongzuo_time: {
                    required: true
                },
                gongzuo_end_time: {
                    required: true
                },
                gongsi_name: {
                    required: true
                },
                zuihou_zhiwu: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                gongzuo_time: {
                    required: '请输入起止年月'
                },
                gongzuo_end_time: {
                    required: '请输入起止年月'
                },
                gongsi_name: {
                    required: '请输入公司名称'
                },
                zuihou_zhiwu: {
                    required: '请输入最后职务'
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: web_url + '/home/hr/xiangguanshuju/',
                    type: "post",
                    dataType: "json",
                    data: $("#gongzuoCreateForm").serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#gongzuoCreateForm .modal-body").prepend(str);
                            $("#gongzuoCreateForm input[name='gongzuo_time']").val('');
                            $("#gongzuoCreateForm input[name='gongzuo_end_time']").val('');
                            $("#gongzuoCreateForm input[name='gongsi_name']").val('');
                            $("#gongzuoCreateForm input[name='zuihou_zhiwu']").val('');
                            $("#gongzuoCreateForm input[name='nianxin']").val('');
                            $("#gongzuoCreateForm input[name='zhengmingren']").val('');
                            $("#gongzuoCreateForm input[name='zhengmingren_tel']").val('');
                            str = '<tr>' +
                                '<td>'+obj.data.gongzuo_time+' ~ '+obj.data.gongzuo_end_time+'</td>' +
                                '<td>'+obj.data.gongsi_name+'</td>' +
                                '<td>'+obj.data.zuihou_zhiwu+'</td>' +
                                '<td>'+obj.data.nianxin+'</td>' +
                                '<td>'+obj.data.zhengmingren+'</td>' +
                                '<td>'+obj.data.zhengmingren_tel+'</td>' +
                                '<td><button type="button" data-align="delete" data-bind="'+obj.data.id+'" data-type="gongzuo" class="btn btn-danger btn-xs">' +
                                '删除</button></td>' +
                                '</tr>';
                            $("#gongzuoList").append(str);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#gongzuoCreateForm .modal-body").prepend(str);
                        }
                        setTimeout(function () {
                            $("#gongzuoCreateForm #formMsg").remove();
                        }, 2000);
                    }
                });
            }
        });

        $("#jiatingCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                userid: {
                    required: true
                },
                xingming: {
                    required: true
                },
                danwei: {
                    required: true
                }
            },
            messages: {
                iduser: {
                    required: '请选择绑定用户'
                },
                xingming: {
                    required: '请输入姓名'
                },
                danwei: {
                    required: '请输入工作单位'
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                var str = '';
                $.ajax({
                    url: web_url + '/home/hr/xiangguanshuju/',
                    type: "post",
                    dataType: "json",
                    data: $("#jiatingCreateForm").serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#jiatingCreateForm .modal-body").prepend(str);
                            $("#jiatingCreateForm input[name='xingming']").val('');
                            $("#jiatingCreateForm input[name='danwei']").val('');
                            $("#jiatingCreateForm input[name='zhiwu']").val('');
                            $("#jiatingCreateForm input[name='guanxi']").val('');
                            $("#jiatingCreateForm input[name='tel']").val('');
                            str = '<tr>' +
                                '<td>'+obj.data.xingming+'</td>' +
                                '<td>'+obj.data.danwei+'</td>' +
                                '<td>'+obj.data.zhiwu+'</td>' +
                                '<td>'+obj.data.guanxi+'</td>' +
                                '<td>'+obj.data.tel+'</td>' +
                                '<td><button type="button" data-align="delete" data-bind="'+obj.data.id+'" data-type="jiating" class="btn btn-danger btn-xs">' +
                                '删除</button></td>' +
                                '</tr>';
                            $("#jiatingList").append(str);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $("#jiatingCreateForm .modal-body").prepend(str);
                        }
                        setTimeout(function () {
                            $("#jiatingCreateForm #formMsg").remove();
                        }, 2000);
                    }
                });
            }
        });
    });
    // 初始化带检索的下拉框
    $(".chosen-select").chosen({
        no_results_text: "无结果!",
        search_contains: true
    });

    $(document).on('click', 'button', function () {
        var align = $(this).attr('data-align');
        var type = $(this).attr('data-type');
        var bind = $(this).attr('data-bind');
        var dom = $(this);
        switch (align) {
            case 'delete':
                if (confirm('确定删除吗？') == true) {
                    $.post(web_url + '/home/hr/xiangguanDelete/', {id: bind,type:type}, function (obj, status) {
                        if (status === 'success') {
                            if (obj.status === 1001) {
                                dom.parent().parent().remove();
                                $.growl.notice({message: obj.msg});
                            } else {
                                $.growl.error({message: obj.msg});
                            }
                        }
                        else {
                            $.growl.error({message: status});
                        }
                    });
                } else {
                    return false;
                }
                break;
        }
    });



</script>

</body>
</html>
