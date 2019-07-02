<?php /*a:2:{s:64:"/var/www/manager_cmlaw/application/home/view/kehu/gerenread.html";i:1545186981;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
            
            
<style>
    th {
        font-weight: normal;
        text-align: center;
    }

    .table-hover td {
        text-align: center;
    }
</style>
<h2 class="sub-header">
    个人客户详情
</h2>

<div class="row">
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 基本信息
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="read-title text-right"><span>委托人姓名：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_name']); ?></td>
                <td class="read-title text-right"><span>国籍：</span></td>
                <td>
                    <?php echo htmlentities($data['info']['kehu_diqu']); ?>
                </td>

            </tr>
            <tr>
                <td class="read-title text-right"><span>证件类型：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_zhengjianleixing']); ?></td>
                <td class="read-title text-right"><span>证件号码：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_shenfenzhenghao']); ?></td>


            </tr>
            <tr>
                <td class="read-title text-right"><span>手机：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_dianhua']); ?></td>
                <td class="read-title text-right"><span>电子邮件：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_youxiang']); ?></td>


            </tr>
            <tr>
                <td class="read-title text-right"><span>注册地址：</span></td>
                <td colspan="3"><?php echo htmlentities($data['info']['kehu_dizhi']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 补充信息
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="input-title text-right"><span>常用通讯地址</span></td>
                <td colspan="3" style="font-weight: normal;"><?php echo htmlentities($data['info']['kehu_changyongdizhi']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 补充信息
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-border-book table-hover">
            <thead>
            <?php if(empty($data['anjian']) || (($data['anjian'] instanceof \think\Collection || $data['anjian'] instanceof \think\Paginator ) && $data['anjian']->isEmpty())): ?>
            无案件信息
            <?php else: ?>
            <tr>
                <th>地区</th>
                <th>案件编号</th>
                <th>案件名称</th>
                <th>客户名称</th>
                <th>立案日期</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="">
            <?php if(is_array($data['anjian']) || $data['anjian'] instanceof \think\Collection || $data['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($anjian['user_fensuo']); ?></td>
                <td>
                    <?php echo htmlentities($anjian['anjian_number']); ?>

                </td>
                <td><?php echo htmlentities($anjian['anjian_title']); ?><br>
                    种类：<?php echo htmlentities($anjian['zhonglei_name']); ?>
                </td>
                <td><?php echo htmlentities($anjian['kehu_name']); ?><br>
                    <?php echo htmlentities($anjian['kehu_xinyongdaima']); ?>
                </td>
                <td><?php echo htmlentities($anjian['user_realname']); ?>律师<br>
                    <?php echo htmlentities($anjian['anjian_date']); ?>
                </td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <a href="<?php echo url('anjian/read',['id'=>$anjian['idanjian']]); ?>" class="btn btn-link btn-default">查看
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">


        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 客户联系人
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
            <?php if(empty($data['user']) || (($data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator ) && $data['user']->isEmpty())): ?>

            无联系人

            <?php else: ?>
            <tr>
                <th>职位</th>
                <th>姓名</th>
                <th>电话</th>
                <th>邮箱</th>
            </tr>
            </thead>
            <tbody id="kehuLianxirenList">
            <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($user['lianxiren_zhiwei']); ?></td>
                <td><?php echo htmlentities($user['lianxiren_realname']); ?></td>
                <td><?php echo htmlentities($user['lianxiren_phone']); ?></td>
                <td><?php echo htmlentities($user['lianxiren_email']); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
            </tbody>
        </table>

    </div>

</div>

            


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



</body>
</html>
