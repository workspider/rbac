<?php /*a:2:{s:58:"/var/www/manager_cmlaw/application/sky/view/kehu/read.html";i:1545186981;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
    企业客户详情
</h2>

<div class="row">
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 客户信息
            </div>
            <div class="create-tools">
                最后更新日期:<?php echo htmlentities($data['info']['update_time']); ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="read-title text-right"><span>名称：</span></td>
                <td colspan="3">
                    <?php echo htmlentities($data['info']['kehu_name']); ?>
                </td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>信用代码：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_xinyongdaima']); ?></td>
                <td class="read-title text-right"><span>经营状态：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_zaiye']); ?></td>

            </tr>

            <tr>
                <td class="input-title text-right"><span>公司类型</span></td>
                <td>
                    <?php echo htmlentities($data['info']['kehu_leixing']); ?>
                </td>
                <td class="input-title text-right"><span>法定代表人</span></td>
                <td>
                    <?php echo htmlentities($data['info']['kehu_faren']); ?>
                </td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>注册资本：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_ziben']); ?></td>
                <td class="read-title text-right"><span>成立日期：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_chengliriqi']); ?></td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>营业期限：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_kashiriqi']); ?> ~ <?php echo htmlentities($data['info']['kehu_jieshuriqi']); ?></td>
                <td class="read-title text-right"><span>登记机关</span></td>
                <td>
                    <?php echo htmlentities($data['info']['kehu_gongshangju']); ?>
                </td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>企业地址：</span></td>
                <td><?php echo htmlentities($data['info']['kehu_dizhi']); ?></td>
                <td class="read-title text-right">所属行业</td>
                <td><?php echo htmlentities($data['info']['kehu_industry']); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>经营范围：</span></td>
                <td colspan="3"><?php echo htmlentities($data['info']['kehu_jingyingfanwei']); ?></td>
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
                <td class="input-title text-right"><span>自定义行业</span></td>
                <td>
                    <div class="width-100">
                        <?php echo htmlentities($data['info']['kehu_hangye']); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>常用通讯地址</span></td>
                <td>
                    <div class="width-100">
                        <?php echo htmlentities($data['info']['kehu_changyongdizhi']); ?>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 客户案件
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
                <th>位置</th>
                <th>案件编号</th>
                <!--<th>种类</th>-->
                <th>案件名</th>
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
        <table class="table table-bordered">
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

<script>

    $(function () {

        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true
        });


    });
</script>

</body>
</html>
