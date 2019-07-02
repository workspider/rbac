<?php /*a:2:{s:63:"/var/www/manager_cmlaw/application/home/view/anjian/create.html";i:1545186980;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
                <?php if(is_array($menu['menu']) || $menu['menu'] instanceof \think\Collection || $menu['menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;if($m['title'] == $menu['key']): ?>
                <li class="active"><?php else: ?>
                <li><?php endif; ?>
                    <a href="<?php echo url($m['title']); ?>"><?php echo htmlentities($m['name']); ?></a></li>
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

                <?php if(is_array($menu['fmenu']) || $menu['fmenu'] instanceof \think\Collection || $menu['fmenu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['fmenu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;if($m['title'] == $menu['menukey']): ?>
                <li class="active"><?php else: ?>
                <li><?php endif; ?>
                    <a href="<?php echo url($m['title']); ?>"><?php echo htmlentities($m['name']); ?></a></li>
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
    案件添加
</h2>

<div class="col-md-12">
    <div class="mt-element-step">
        <div class="row step-line">
            <div class="col-md-6 mt-step-col first done">
                <div class="mt-step-number bg-white">1</div>
                <div class="mt-step-title uppercase font-grey-cascade">客户信息</div>
            </div>
            <div class="col-md-6 mt-step-col last active">
                <div class="mt-step-number bg-white">2</div>
                <div class="mt-step-title uppercase font-grey-cascade">案件详细信息</div>
            </div>
        </div>
    </div>
</div>

<form method="post" id="anjianCreateForm" novalidate="novalidate">
    <div class="row">
        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span>
                    <?php if($data['info']['yewuleixing_name'] == "民商案件"): ?>
                    民商案件关键信息
                    <?php elseif($data['info']['yewuleixing_name'] =="仲裁案件"): ?>
                    仲裁案件关键信息
                    <?php elseif($data['info']['yewuleixing_name'] =="刑事案件"): ?>
                    刑事案件关键信息
                    <?php elseif($data['info']['yewuleixing_name'] =="行政案件"): ?>
                    行政案件关键信息
                    <?php elseif($data['info']['zhonglei_name'] =="非诉案件"): ?>
                    非诉案件关键信息
                    <?php elseif($data['info']['zhonglei_name'] =="法律顾问"): ?>
                    法律顾问案件关键信息
                    <?php elseif($data['info']['zhonglei_name'] =="预立案"): ?>
                    预立案关键信息
                    <?php endif; ?>
                </div>
                <div class="create-tools">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr style="display: none;">
                    <td style="width: 20%" class="input-title text-right"><span>案件编号：</span></td>
                    <td style="width: 80%" >
                        <div class="width-80">
                            <input type="hidden" name="anjian_number" class="form-control" readonly
                                   value="<?php echo htmlentities($data['number']); ?>"/>
                            <input type="hidden" name="lichongid" class="form-control"
                                   value="<?php echo htmlentities($data['info']['lichongid']); ?>"/>
                            <input type="hidden" name="idanjian" class="form-control"
                                   value="<?php echo htmlentities($data['info']['idanjian']); ?>"/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>归属办公室：</span></td>
                    <td style="width: 80%" >
                        <div class="width-30">
                            <select id="fensuoid" name="fensuoid" class="form-control chosen-select"
                                    data-placeholder="选择分所">
                                <option value=""></option>
                                <?php if(is_array($data['fensuo']) || $data['fensuo'] instanceof \think\Collection || $data['fensuo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['fensuo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fensuo): $mod = ($i % 2 );++$i;if($fensuo['id'] == $data['info']['fensuoid']): ?>
                                <option value="<?php echo htmlentities($fensuo['id']); ?>" selected><?php echo htmlentities($fensuo['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($fensuo['id']); ?>"><?php echo htmlentities($fensuo['value']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>案件名称：</span></td>
                    <td>
                        <div class="width-70">
                            <input name="anjian_title" type="text" class="form-control"
                                   value="<?php echo htmlentities($data['info']['anjian_title']); ?>">
                        </div>
                    </td>
                </tr>

                <!--非诉案件表-->
                <?php if($data['info']['zhonglei_name'] =="非诉案件"): ?>
                <tr>
                    <td class="input-title text-right"><span>我方代理方：</span></td>
                    <td>
                        <div class="width-70">
                            <input name="feisu_dailifang" class="form-control" value="<?php echo htmlentities($data['info']['kehu']); ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>业务类型：</span></td>
                    <td>
                        <div class="width-100">
                            <select name="yewuleixing_name" class="form-control chosen-select" data-placeholder="请选择业务类型" >
                                <option value=""></option>
                                <?php if(is_array($data['yewuleixingFeisu']) || $data['yewuleixingFeisu'] instanceof \think\Collection || $data['yewuleixingFeisu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['yewuleixingFeisu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yw): $mod = ($i % 2 );++$i;if($yw['yewuleixing_name'] == $data['info']['yewuleixing_name']): ?>
                                <option value="<?php echo htmlentities($yw['yewuleixing_name']); ?>" selected><?php echo htmlentities($yw['yewuleixing_name']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($yw['yewuleixing_name']); ?>"><?php echo htmlentities($yw['yewuleixing_name']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <!--法律顾问表-->
                <?php elseif($data['info']['zhonglei_name'] =="法律顾问"): ?>
                <tr>
                    <td class="input-title text-right"><span>代理方：</span></td>
                    <td>
                        <div class="width-70">
                            <input name="falv_dailifang" class="form-control" value="<?php echo htmlentities($data['info']['kehu']); ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>服务期限：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="falv_qixian_kaishi" class="form-control form_datetime"
                                   value="<?php echo htmlentities($data['info']['falv_qixian_kaishi']); ?>">
                        </div>
                        <div class="width-10" style="text-align: center;"> ~ </div>
                        <div class="width-30">
                            <input name="falv_qixian_jieshu" class="form-control form_datetime"
                                   value="<?php echo htmlentities($data['info']['falv_qixian_jieshu']); ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>是否自动续期：</span></td>
                    <td>

                        <?php switch($data['info']['anjian_xuqi']): case "否": ?>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="是"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="否" checked> 否
                        </label>
                        <?php break; case "是": ?>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="是" checked> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="否"> 否
                        </label>
                        <?php break; default: ?>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="是"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="anjian_xuqi" value="否"> 否
                        </label>
                        <?php endswitch; ?>
                    </td>
                </tr>
                <!--民商案件表-->
                <?php elseif($data['info']['yewuleixing_name'] == "民商案件"): ?>
                <tr>
                    <td class="input-title text-right"><span>审级：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhengyi_jibie" data-placeholder="请选择审级">
                                <option value=""></option>
                                <option value="一审">一审</option>
                                <option value="二审">二审</option>
                                <option value="再审">再审</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>代理方：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhengyi_dailifang_type"
                                    data-placeholder="请选择代理何方">
                                <option value=""></option>
                                <option value="被告">被告</option>
                                <option value="原告">原告</option>
                                <option value="第三人">第三人</option>
                            </select>
                        </div>
                        <div class="width-5">&nbsp;</div>
                        <div class="width-30">
                            <input name="zhengyi_dailifang" class="form-control" value="<?php echo htmlentities($data['info']['kehu']); ?>" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>审理法院：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhengyi_fayuan_jibie"
                                    data-placeholder="请选择审理法院">
                                <option value=""></option>
                                <option value="初级">初级</option>
                                <option value="中级">中级</option>
                                <option value="高级">高级</option>
                                <option value="最高院">最高院</option>
                            </select>
                        </div>
                        <div class="width-5">&nbsp;</div>
                        <div class="width-30">
                            <input name="zhengyi_fayuan" class="form-control" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <tr class="zhengyi">
                    <td class="input-title text-right"><span>案由：</span></td>
                    <td>

                        <div class="width-30">
                            <select name="zhengyi_anyou[]" data-src="1" class="form-control chosen-select "
                                    data-placeholder="请选择案由">
                                <option value=""></option>
                                <?php if(is_array($data['anyou']) || $data['anyou'] instanceof \think\Collection || $data['anyou'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['anyou'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anyou): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($anyou['idanyou']); ?>"><?php echo htmlentities($anyou['anyou_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="width-5">&nbsp;</div>
                        <div class="width-30" id="anyou2"></div>
                        <div class="width-5">&nbsp;</div>
                        <div class="width-30" id="anyou3"></div>


                    </td>
                </tr>
                <!-- 仲裁案件表-->
                <?php elseif($data['info']['yewuleixing_name'] == "仲裁案件"): ?>
                <tr>
                    <td class="input-title text-right"><span>仲裁类型：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhongcai_type" data-placeholder="请选择仲裁类型">
                                <option value=""></option>
                                <option value="民商仲裁">民商仲裁</option>
                                <option value="劳动仲裁">劳动仲裁</option>
                                <option value="涉外仲裁">涉外仲裁</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>代理方：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhongcai_dailifang"
                                    data-placeholder="请选择仲裁代理方">
                                <option value=""></option>
                                <option value="申请人">申请人</option>
                                <option value="被申请人">被申请人</option>
                                <option value="第三方">第三方</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>冲裁机构名称：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="zhengyi_zhongcaijigou" class="form-control" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <tr class="zhengyi">
                    <td class="input-title text-right"><span>事由：</span></td>
                    <td>

                        <div class="width-30">
                            <input name="zhengyi_shiyou" class="form-control" data-placeholder="请输入客户关键字">
                        </div>

                    </td>
                </tr>
                <!--刑事案件表-->
                <?php elseif($data['info']['yewuleixing_name'] == "刑事案件"): ?>
                <tr>
                    <td class="input-title text-right"><span>客户名称：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="xingshi_kehuname" class="form-control" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>审级：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhengyi_jibie" data-placeholder="请选择审级">
                                <option value=""></option>
                                <option value="一审">一审</option>
                                <option value="二审">二审</option>
                                <option value="再审">再审</option>
                            </select>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>审理法院：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhengyi_fayuan_jibie"
                                    data-placeholder="请选择审理法院">
                                <option value=""></option>
                                <option value="初级">初级</option>
                                <option value="中级">中级</option>
                                <option value="高级">高级</option>
                                <option value="最高院">最高院</option>
                            </select>
                        </div>
                        <div class="width-5">&nbsp;</div>
                        <div class="width-30">
                            <input name="zhengyi_fayuan" class="form-control" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <tr class="zhengyi">
                    <td class="input-title text-right"><span>起诉理由：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="zhengyi_xingshi_shiyou" class="form-control" data-placeholder="请输入客户关键字">
                        </div>
                    </td>
                </tr>
                <!--预立案表-->
                <?php elseif($data['info']['zhonglei_name'] == "预立案"): ?>
                <tr>
                    <td class="input-title text-right"><span>代理方：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="yu_dailifang" class="form-control">
                        </div>
                    </td>
                </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>

        <?php if($data['info']['zhonglei_name'] =="非诉案件"): ?>
        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span>
                    交易对手/相关方信息
                </div>
            </div>
        </div>
        <?php endif; if($data['info']['zhonglei_name'] =="争议解决"): ?>
        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span>
                    相关方/相对方信息
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-md-12">

            <?php if($data['info']['zhonglei_name'] =="非诉案件"): ?>
            <table class="table table-no-bordered">
                <tbody>
                <?php if(empty($data['info']['anjian_jiaoyiduishou']) || (($data['info']['anjian_jiaoyiduishou'] instanceof \think\Collection || $data['info']['anjian_jiaoyiduishou'] instanceof \think\Paginator ) && $data['info']['anjian_jiaoyiduishou']->isEmpty())): ?>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>交易对手：</span></td>
                    <td style="width: 80%" >
                        <div class="width-60">
                            <input name="anjian_jiaoyiduishou[]" type="text" class="form-control"
                                   value="<?php echo htmlentities($data['info']['anjian_jiaoyiduishou']); ?>">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php else: if(is_array($data['info']['anjian_jiaoyiduishou']) || $data['info']['anjian_jiaoyiduishou'] instanceof \think\Collection || $data['info']['anjian_jiaoyiduishou'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['info']['anjian_jiaoyiduishou'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jiaoyiduishou): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>交易对手：</span></td>
                    <td style="width: 80%" >
                        <div class="width-60">
                            <input name="anjian_jiaoyiduishou[]" type="text" class="form-control"
                                   value="<?php echo htmlentities($jiaoyiduishou); ?>">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <?php endif; ?>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="jiaoyiduishou2"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加交易对手
                            </button>
                        </div>
                    </td>
                </tr>

                <?php if(empty($data['info']['anjian_xiangguanfang']) || (($data['info']['anjian_xiangguanfang'] instanceof \think\Collection || $data['info']['anjian_xiangguanfang'] instanceof \think\Paginator ) && $data['info']['anjian_xiangguanfang']->isEmpty())): ?>
                <tr>
                    <td class="input-title text-right"><span>相关方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="anjian_wofang[]" type="text" class="form-control">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php else: if(is_array($data['info']['anjian_xiangguanfang']) || $data['info']['anjian_xiangguanfang'] instanceof \think\Collection || $data['info']['anjian_xiangguanfang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['info']['anjian_xiangguanfang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiangguanfang): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="input-title text-right"><span>相关方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="anjian_wofang[]" type="text" class="form-control" value="<?php echo htmlentities($xiangguanfang); ?>">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <?php endif; ?>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="wofang"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加相关方
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php endif; if($data['info']['zhonglei_name'] =="争议解决"): ?>
            <table class="table table-no-bordered">
                <tbody>

                <?php if(empty($data['info']['anjian_xiangduifang']) || (($data['info']['anjian_xiangduifang'] instanceof \think\Collection || $data['info']['anjian_xiangduifang'] instanceof \think\Paginator ) && $data['info']['anjian_xiangduifang']->isEmpty())): ?>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>相对方：</span></td>
                    <td style="width: 80%" >
                        <div class="width-60">
                            <input name="anjian_xiangduifang[]" type="text" class="form-control"
                                   value="">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php else: if(is_array($data['info']['anjian_xiangduifang']) || $data['info']['anjian_xiangduifang'] instanceof \think\Collection || $data['info']['anjian_xiangduifang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['info']['anjian_xiangduifang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiangduifang): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>相对方：</span></td>
                    <td style="width: 80%" >
                        <div class="width-60">
                            <input name="anjian_xiangduifang[]" type="text" class="form-control"
                                   value="<?php echo htmlentities($xiangduifang); ?>">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="xiangguanfangdelete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="xiangduifang"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加相对方
                            </button>
                        </div>
                    </td>
                </tr>

                <?php if(empty($data['info']['anjian_xiangguanfang']) || (($data['info']['anjian_xiangguanfang'] instanceof \think\Collection || $data['info']['anjian_xiangguanfang'] instanceof \think\Paginator ) && $data['info']['anjian_xiangguanfang']->isEmpty())): ?>
                <tr>
                    <td class="input-title text-right"><span>相关方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="anjian_xiangguanfang[]" type="text" class="form-control"
                                   value="">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="xiangguanfangdelete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php else: if(is_array($data['info']['anjian_xiangguanfang']) || $data['info']['anjian_xiangguanfang'] instanceof \think\Collection || $data['info']['anjian_xiangguanfang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['info']['anjian_xiangguanfang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiangguanfang2): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="input-title text-right"><span>相关方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="anjian_xiangguanfang[]" type="text" class="form-control"
                                   value="<?php echo htmlentities($xiangguanfang2); ?>">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="tools" data-target="delete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="xiangguanfang"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加相关方
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-12">

            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span>
                    附加信息
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>是否保密：</span></td>
                    <td style="width: 80%" >
                        <div class="width-100">
                            <?php switch($data['info']['anjian_shewai']): case "否": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="否" checked> 否
                            </label>
                            <?php break; case "是": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="是" checked> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="否"> 否
                            </label>
                            <?php break; default: ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_shewai" value="否"> 否
                            </label>
                            <?php endswitch; ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>是否重大：</span></td>
                    <td>
                        <div class="width-100">

                            <?php switch($data['info']['anjian_zhongda']): case "否": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="否" checked> 否
                            </label>
                            <?php break; case "是": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="是" checked> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="否"> 否
                            </label>
                            <?php break; default: ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_zhongda" value="否"> 否
                            </label>
                            <?php endswitch; ?>


                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>是否敏感：</span></td>
                    <td>
                        <div class="width-100">

                            <?php switch($data['info']['anjian_mingan']): case "否": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="否" checked> 否
                            </label>
                            <?php break; case "是": ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="是" checked> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="否"> 否
                            </label>
                            <?php break; default: ?>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="是"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_mingan" value="否"> 否
                            </label>
                            <?php endswitch; ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>立案日期：</span></td>
                    <td>
                        <div class="width-30">
                            <?php if(empty($data['info']['anjian_date']) || (($data['info']['anjian_date'] instanceof \think\Collection || $data['info']['anjian_date'] instanceof \think\Paginator ) && $data['info']['anjian_date']->isEmpty())): ?>
                            <input name="anjian_date" readonly type="text" class="form-control form_datetime"
                                   value="<?php echo date('Y-m-d'); ?>">
                            <?php else: ?>
                            <input name="anjian_date" readonly type="text" class="form-control form_datetime"
                                   value="<?php echo htmlentities($data['info']['anjian_date']); ?>">
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>案件描述：</span></td>
                    <td>
                        <div class="width-80">
                            <textarea name="anjian_content" class="form-control"
                                      rows="6"><?php echo htmlentities($data['info']['anjian_content']); ?></textarea>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-md-12">

            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span>
                    参与团队
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%"  class="input-title text-right"><span>负责合伙人：</span></td>
                    <td style="width: 80%" >
                        <div class="width-30">
                            <select name="hehuorenid" class="form-control chosen-select"
                                    data-placeholder="选择负责合伙人">
                                <option value=""> 选择负责合伙人</option>
                                <?php if(is_array($data['hehuoren']) || $data['hehuoren'] instanceof \think\Collection || $data['hehuoren'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['hehuoren'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if($select['id'] == $data['info']['hehuorenid']): ?>
                                <option value="<?php echo htmlentities($select['id']); ?>" selected>【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($select['id']); ?>">【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['value']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>合伙人团队：</span></td>
                    <td>

                        <select name="hehuoren[]" multiple class="form-control chosen-select"
                                data-placeholder="选择负责合伙人">
                            <option value=""> 选择负责合伙人</option>
                            <?php if(is_array($data['hehuoren']) || $data['hehuoren'] instanceof \think\Collection || $data['hehuoren'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['hehuoren'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if(in_array(($select['id']), is_array($data['info']['user'])?$data['info']['user']:explode(',',$data['info']['user']))): ?>
                            <option value="<?php echo htmlentities($select['id']); ?>" selected>【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['value']); ?></option>
                            <?php else: ?>
                            <option value="<?php echo htmlentities($select['id']); ?>">【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['value']); ?></option>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>团队：</span></td>
                    <td height="auto">
                        <select name="user[]" multiple class="form-control chosen-select" data-placeholder="选择团队">
                            <option value=""> 选择团队</option>
                            <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if(in_array(($select['id']), is_array($data['info']['user'])?$data['info']['user']:explode(',',$data['info']['user']))): ?>
                            <option value="<?php echo htmlentities($select['id']); ?>" selected>【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['zhiwei_name']); ?> -
                                <?php echo htmlentities($select['value']); ?>
                            </option>
                            <?php else: ?>
                            <option value="<?php echo htmlentities($select['id']); ?>">【<?php echo htmlentities($select['bumen_name']); ?>】- <?php echo htmlentities($select['zhiwei_name']); ?> -
                                <?php echo htmlentities($select['value']); ?>
                            </option>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12" style="margin-top: 60px;">
            <div class="text-center">
                <a href="<?php echo url('anjian/kehu'); ?>" class="btn btn-lg btn-yeelibaray">返回上一步</a>
                <button type="submit" name="submit" value="anjian" class="btn btn-lg btn-yeelibaray"> 下一步，提交审核</button>
            </div>


        </div>
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

        $(document).on('change', '.chosen-select', function (e, params) {
            var src = $(e.target).attr('data-src');
            switch ($(e.target).attr('name')) {
                case 'zhengyi_anyou[]':
                    $.ajax({
                        url: web_url + '/home/anjian/getAnyou',
                        type: "post",
                        dataType: "json",
                        data: {id: params.selected},
                        success: function (obj) {
                            if (obj.status == '1001') {
                                if (src == 1) {
                                    $("#anyou2").html("");
                                    $("#anyou3").html("");
                                    var srcd = 2;
                                }
                                else if (src == 2) {
                                    var srcd = 3;
                                }
                                else if (src == 3) {
                                    var srcd = 4;
                                }
                                var str = '<select data-placeholder="请选择案由" data-src="' + srcd + '" name=\'zhengyi_anyou[]\' class=\'form-control chosen-select\'><option value=""></option>';
                                $.each(obj.data, function (k, v) {
                                    str += "<option value='" + v.idanyou + "'>" + v.anyou_name + "</option>";
                                });
                                str += '</select>';

                                if (src < 4) {
                                    $("#anyou" + srcd).html(str);
                                }
                                $("body .chosen-select").chosen({
                                    no_results_text: "无结果!",
                                    search_contains: true,
                                    allow_single_deselect: true
                                });
                            }
                        }

                    });
                    break;
                default:
            }
        });

        $(document).on('click', 'button', function (e) {
            var dom = $(this);
            var align = dom.attr('data-align');
            var target = dom.attr('data-target');
            switch (align) {
                case 'tools':
                    switch (target) {
                        case 'jiaoyiduishou2':
                            var str = '<tr>' +
                                '<td class="input-title text-right">' +
                                '<span>交易对手：</span>' +
                                '</td>' +
                                '<td><div class="width-60">' +
                                '<input type="text" name="anjian_jiaoyiduishou[]" class="form-control">' +
                                '</div>' +
                                '<div class="width-20">' +
                                '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                            dom.parent().parent().parent().before(str);
                            break;
                        case 'wofang':
                            var str = '<tr>' +
                                '<td class="input-title text-right">' +
                                '<span>相关方：</span>' +
                                '</td>' +
                                '<td><div class="width-60">' +
                                '<input type="text" name="anjian_wofang[]" class="form-control">' +
                                '</div>' +
                                '<div class="width-20">' +
                                '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                            dom.parent().parent().parent().before(str);
                            break;
                        case 'xiangguanfangdelete':
                            dom.parent().parent().parent().remove();
                            break;
                        case 'delete':
                            dom.parent().parent().parent().remove();
                            break;
                    }
                    break;
            }
        });

        $(document).on('click', 'button', function (e) {
            var dom = $(this);
            var align = dom.attr('data-align');
            var target = dom.attr('data-target');
            switch (align) {
                case 'tools':
                    switch (target) {
                        case 'xiangguanfang':
                            var str = '<tr>' +
                                '<td class="input-title text-right">' +
                                '<span>相关方：</span>' +
                                '</td>' +
                                '<td><div class="width-60">' +
                                '<input type="text" name="anjian_xiangguanfang[]" class="form-control">' +
                                '</div>' +
                                '<div class="width-20">' +
                                '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                            dom.parent().parent().parent().before(str);
                            break;
                        case 'xiangduifang':
                            var str = '<tr>' +
                                '<td class="input-title text-right">' +
                                '<span>相对方：</span>' +
                                '</td>' +
                                '<td><div class="width-60">' +
                                '<input type="text" name="anjian_xiangduifang[]" class="form-control">' +
                                '</div>' +
                                '<div class="width-20">' +
                                '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                            dom.parent().parent().parent().before(str);
                            break;
                        case 'xiangguanfangdelete':
                            dom.parent().parent().parent().remove();
                            break;
                        case 'xiangguanfangdelete':
                            dom.parent().parent().parent().remove();
                            break;

                    }
                    break;
            }
        });

        $('.form_datetime').datetimepicker({
            language: 'zh-CN',
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            weekStart: 1,
            minuteStep: 10,
            startView: 2,
            minView: 2,
            maxView: 2,
            todayBtn: true
        });

        // 初始化带检索的下拉框
        $("body .chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });

        $("input[name='zhengyi_type']:radio").click(function () {
            if ($(this).val() == '民事案件') {
                $(".leixing").show();
            }
            else {
                $(".leixing").hide();
            }
        });

        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        $("#anjianCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                anjian_title: {
                    required: true
                },
                zhongleiid: {
                    required: true
                },

                fensuoid: {
                    required: true
                },
                hehuorenid: {
                    required: true
                },
                anjian_date: {
                    required: true
                },
                "user[]": {
                    required: true
                },
                "hehuoren[]": {
                    required: true
                },
                anjian_shewai:{
                    required: true
                },
                anjian_zhongda:{
                    required: true
                },
                anjian_mingan:{
                    required: true
                },
                falv_qixian_kaishi:{
                    required: true
                },
                falv_qixian_jieshu:{
                    required: true
                }
            },
            messages: {
                anjian_title: {
                    required: "请输入案件名称"
                },

                zhongleiid: {
                    required: "请选择案件种类"
                },

                fensuoid: {
                    required: "请选择分所"
                },
                hehuorenid: {
                    required: "请选择负责合伙人"
                },
                anjian_date: {
                    required: "请输入立案日期"
                },
                "user[]": {
                    required: "请选择团队成员"
                },
                "hehuoren[]": {
                    required: "请选择合伙人成员"
                },
                anjian_shewai:{
                    required: '请选择是否保密'
                },
                anjian_zhongda:{
                    required: '请选择是否重大'
                },
                anjian_mingan:{
                    required: '请选择是否敏感'
                },
                falv_qixian_kaishi:{
                    required: '请输入服务期限开始日期'
                },
                falv_qixian_jieshu:{
                    required: '请输入服务期限结束日期'
                }

            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                $.ajax({
                    url: web_url + '/home/anjian/save',
                    type: "post",
                    dataType: "json",
                    data: $('#anjianCreateForm').serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#anjianCreateForm').parent().prepend(str);
                            $(window).attr('location', web_url + "/home/anjian/manage");
                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#anjianCreateForm').parent().prepend(str);
                        }
                        setTimeout(function () {
                            $("#formMsg").remove();
                        }, 1000);

                    }
                });
            }
        });
    });
</script>

</body>
</html>
