<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/home/view/auth/index.html";i:1559036260;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    菜单管理
    <button type="button" class="btn btn-success pull-right" data-toggle="tools" data-align="url"
            data-bind="<?php echo url('auth/create'); ?>">
        <span class="glyphicon glyphicon-plus"></span>
        添加菜单
    </button>
</h2>

<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <button type="button" data-toggle="ajax" data-align="url" data-bind="<?php echo url('auth/index'); ?>"
                    class="list-group-item">根据目录
            </button>

            <?php if(is_array($data['rule']) || $data['rule'] instanceof \think\Collection || $data['rule'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['rule'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <button type="button" data-toggle="ajax" data-align="url" data-bind="<?php echo url('auth/index',['id'=>$list['id']]); ?>"
                    class="list-group-item">|--- <?php echo htmlentities($list['title']); ?>
            </button>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="col-md-10">
        <div class="layui-table-body layui-table-main">
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>菜单名称</th>
                    <th>菜单地址</th>
                    <th class="text-center">类型</th>
                    <th class="text-center">排序</th>
                    <th class="text-center">状态</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($l['id']); ?></td>
                    <td><?php echo htmlentities($l['title']); ?></td>
                    <td><?php echo htmlentities($l['url']); ?></td>
                    <td class="text-center"><?php if(in_array(($l['type']), explode(',',"0"))): ?>菜单<?php else: ?>操作<?php endif; ?></td>
                    <td class="text-center"><?php echo htmlentities($l['sort']); ?></td>
                    <td class="text-center"><?php if(in_array(($l['status']), explode(',',"1"))): ?>开启<?php else: ?>关闭<?php endif; ?></td>
                    <td class="text-right">
                        <div class="btn-group btn-group-xs">
                            <button type="button" data-toggle="tools" data-align="edit" data-bind="<?php echo url('auth/edit',['id'=>$l['id']]); ?>" class="btn btn-link btn-default">修改</button>
                            <?php if(count($l["sub"])==0):?>
                            <button type="button" data-toggle="tools" data-align="delete" data-bind="<?php echo url('auth/delete',['id'=>$l['id']]); ?>" data-content-id="<?php echo htmlentities($l['id']); ?>" class="btn btn-link btn-default">删除</button>
                            <?php endif;?>
                        </div>
                    </td>
                </tr>
                <?php if(is_array($l['sub']) || $l['sub'] instanceof \think\Collection || $l['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $l['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($l['id']); ?></td>
                    <td>|------ <?php echo htmlentities($l['title']); ?></td>
                    <td><?php echo htmlentities($l['url']); ?></td>
                    <td class="text-center"><?php if(in_array(($l['type']), explode(',',"0"))): ?>菜单<?php else: ?>操作<?php endif; ?></td>
                    <td class="text-center"><?php echo htmlentities($l['sort']); ?></td>
                    <td class="text-center"><?php if(in_array(($l['status']), explode(',',"1"))): ?>开启<?php else: ?>关闭<?php endif; ?></td>
                    <td class="text-right">
                        <div class="btn-group btn-group-xs">
                            <button type="button" data-toggle="tools" data-align="edit" data-bind="<?php echo url('auth/edit',['id'=>$l['id']]); ?>" class="btn btn-link btn-default">修改</button>
                            <button type="button" data-toggle="tools" data-align="delete" data-bind="<?php echo url('auth/delete',['id'=>$l['id']]); ?>" data-content-id="<?php echo htmlentities($l['id']); ?>" class="btn btn-link btn-default">删除</button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
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

<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/extend/jquery.validate.min.js"></script>
<script>
    var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
    $(document).on('click', 'button[type="button"]', function (event) {
        var toggle = $(event.target).attr('data-toggle');
        var align = $(event.target).attr('data-align');
        var bind = $(event.target).attr('data-bind');
        var id = $(event.target).attr('data-content-id');
        var dom = $(this);
        switch (toggle) {
            case 'tools':
                switch (align) {
                    case 'create':
                        $(location).attr('href', web_url + bind);
                        break;
                    case 'edit':
                        $(location).attr('href', web_url + bind);
                        break;
                    case 'url':
                        $(location).attr('href', web_url + bind);
                        break;
                    case 'delete':
                        layer.confirm('确定要删除吗', function(index) {
                            $.post(web_url + bind,{id:id}, function (obj, status) {
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
                            layer.close(index);
                        });
                        break;
                    default:
                        $.growl.error({message: "没有相关操作!"});
                }
                break;

            case 'ajax':
                switch (align) {
                    case 'url':
                        $(location).attr('href', web_url + bind);
                        break;
                    default:
                        $.growl.error({message: "没有相关操作!"});
                }
                break;
        }
    });

</script>

</body>
</html>
