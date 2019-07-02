<?php /*a:2:{s:62:"/var/www/manager_cmlaw/application/sky/view/anjian/shenpi.html";i:1545186980;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
    案件签批
</h2>

<div class="row pagetitle">


    <div class="col-md-12 text-right">
        <form class="form-inline">

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">状态：</div>
                    <select class="form-control" name="anjian_status">
                        <?php if($data['search']['anjian_status'] == '2'): ?>
                        <option value="2" selected>待签批</option>
                        <?php else: ?>
                        <option value="2">待签批</option>
                        <?php endif; if($data['search']['anjian_status'] == '3'): ?>
                        <option value="3" selected>已签批</option>
                        <?php else: ?>
                        <option value="3">已签批</option>
                        <?php endif; if($data['search']['anjian_status'] == '4'): ?>
                        <option value="4" selected>已驳回</option>
                        <?php else: ?>
                        <option value="4">已驳回</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>

            <?php if(is_array($viewConfig['searchBar']) || $viewConfig['searchBar'] instanceof \think\Collection || $viewConfig['searchBar'] instanceof \think\Paginator): $i = 0; $__LIST__ = $viewConfig['searchBar'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><?php echo htmlentities($search['title']); ?>：</div>
                    <?php switch($search['type']): case "text": ?>
                    <input type="text" class="form-control" name="<?php echo htmlentities($search['key']); ?>"
                           value="<?php echo $data['search'][$search['key']]?>">
                    <?php break; case "select": ?>
                    <select class="form-control" name="<?php echo htmlentities($search['key']); ?>">
                        <?php if(is_array($search['data']) || $search['data'] instanceof \think\Collection || $search['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if($select['id'] == $data['search'][$search['key']]):?>
                        <option value="<?php echo htmlentities($select['id']); ?>" selected><?php echo htmlentities($select['value']); ?></option>
                        <?php else:?>
                        <option value="<?php echo htmlentities($select['id']); ?>"><?php echo htmlentities($select['value']); ?></option>
                        <?php endif;?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <?php break; default: ?>
                    <?php endswitch; ?>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

            <button type="submit" class="btn btn-primary">检索</button>
        </form>
    </div>
</div>


<div class="table-responsive">

    <table class="table table-striped table-hover table-border-book">
        <thead>
        <tr>
            <th>位置</th>
            <th>案件编号</th>
            <th>案件</th>
            <th>客户名称</th>
            <th>立案日期</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="text-left"><?php echo htmlentities($list['fensuo_name']); ?></td>
            <!-- <td class="text-left"><?php echo htmlentities($list['zhonglei_name']); ?></td>-->
            <td class="text-left">
                <?php if(in_array(($list['anjian_status']), explode(',',"3,9"))): ?>
                <?php echo htmlentities($list['anjian_number']); ?>
                <?php endif; ?>
            </td>
            <td class="text-left">
                名称：<?php echo htmlentities($list['anjian_title']); ?><br>
                类型：<?php echo htmlentities($list['zhonglei_name']); ?>
            </td>
            <td><?php echo htmlentities($list['kehu_name']); ?></td>
            <td class="text-left">
                <?php echo htmlentities($list['user_realname']); ?>律师<br>
                <?php echo htmlentities($list['anjian_date']); ?>
            </td>
            <td class="text-right width160">
                <?php if($list['anjian_status'] == '2'): ?>
                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                    <button type="button" data-align="tools" data-target="shenpi" data-bind="<?php echo htmlentities($list['idanjian']); ?>"
                            class="btn btn-danger btn-default">签批
                    </button>
                </div>
                <?php else: ?>
                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                    <button type="button" data-align="tools" data-target="shenpi" data-bind="<?php echo htmlentities($list['idanjian']); ?>"
                            class="btn btn-info btn-default">查看
                    </button>
                </div>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <?php echo $data['page']; ?>
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
        // 初始化日历选择器
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
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true
        });

        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        $(document).on('click', 'button', function (event) {
            var align = $(this).attr('data-align');
            var target = $(this).attr('data-target');
            var bind = $(this).attr('data-bind');
            var dom = $(this);
            switch (align) {
                case 'tools':
                    switch (target) {
                        case 'read':
                            $(window).attr('location', web_url + "/home/anjian/read/id/" + bind);
                            break;
                        case 'update':
                            $(window).attr('location', web_url + "/home/anjian/create/number/" + bind);
                            break;
                        case 'delete':
                            if (confirm('确定删除吗？') == true) {
                                $.post(web_url + '/home/anjian/delete/', {id: bind}, function (obj, status) {
                                    if (status === 'success') {
                                        if (obj.status === '1001') {
                                            dom.parent().parent().parent().remove();
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
                        case 'shenpi':
                            $(window).attr('location', web_url + "/home/anjian/shenpiRead/id/" + bind);
                            break;
                    }
                    break;
            }
        });

    });
</script>

</body>
</html>
