<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/home/view/user/index.html";i:1546067575;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    员工列表
</h2>
<div class="row">
    <div class="col-md-12 text-right">
        <form class="form-inline">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">姓名：</div>
                    <input type="text" class="form-control" name="user_realname" value="<?php echo htmlentities($data['search']['user_realname']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">手机/固话：</div>
                    <input type="text" class="form-control" name="user_phone" value="<?php echo htmlentities($data['search']['user_phone']); ?>">
                </div>
            </div>


            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">邮箱：</div>
                    <input type="text" class="form-control" name="user_email" value="<?php echo htmlentities($data['search']['user_email']); ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group" >
                    <div class="input-group-addon">办公室：</div>

                    <select  name="fensuo_name" class="form-control chosen-select" data-placeholder="选择办公室">

                        <option value=""></option>
                        <?php if(is_array($data['fensuo']) || $data['fensuo'] instanceof \think\Collection || $data['fensuo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['fensuo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fensuo): $mod = ($i % 2 );++$i;if($fensuo['fensuo_name'] == $data['search']['fensuo_name']): ?>
                        <option value="<?php echo htmlentities($fensuo['fensuo_name']); ?>" selected><?php echo htmlentities($fensuo['fensuo_name']); ?></option>
                        <?php else: ?>
                        <option value="<?php echo htmlentities($fensuo['fensuo_name']); ?>"><?php echo htmlentities($fensuo['fensuo_name']); ?></option>
                        <?php endif; ?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">检索</button>
        </form>
    </div>
</div>

<hr class="header-hr"/>
<div class="table-responsive">
    <table class="table table-striped table-hover table-border-book">
        <thead>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>职位</th>
            <th>办公室</th>
            <th>手机</th>
            <th>固话</th>
            <th>邮箱</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <tr>
            <td>#<?php echo htmlentities($list['iduser']); ?></td>
            <td><?php echo htmlentities($list['user_realname']); ?></td>
            <td><?php echo htmlentities($list['user_sex']); ?></td>
            <td><?php echo htmlentities($list['zhiwei_name']); ?></td>
            <td><?php echo htmlentities($list['fensuo_name']); ?></td>
            <td><?php echo htmlentities($list['user_phone']); ?></td>
            <td><?php echo htmlentities($list['user_tel']); ?></td>
            <td><?php echo htmlentities($list['user_email']); ?></td>
            <td class="text-right width160">
                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                    <!--<button type="button" data-toggle="user" data-align="read" data-bind="<?php echo htmlentities($list['iduser']); ?>"-->
                            <!--class="btn btn-link btn-default">查看-->
                    <!--</button>-->
                    <button type="button" data-toggle="user" data-align="update" data-bind="<?php echo htmlentities($list['iduser']); ?>"
                            class="btn btn-link btn-default">修改
                    </button>
                    <button type="button" data-toggle="user" data-align="password" data-bind="<?php echo htmlentities($list['iduser']); ?>"
                            class="btn btn-link btn-default">密码重置
                    </button>
                    <button type="button" data-toggle="user" data-align="delete" data-bind="<?php echo htmlentities($list['iduser']); ?>"
                            class="btn btn-link btn-default">删除
                    </button>
                </div>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>

<nav class="text-center">
<?php echo $data['page']; ?>
</nav>

            


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

    var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
    $(document).on('click', 'button[type="button"]', function (event) {
        var toggle = $(event.target).attr('data-toggle');
        var align = $(event.target).attr('data-align');
        var bind = $(event.target).attr('data-bind');
        var dom = $(this);
        switch (toggle) {
            case 'user':
                switch (align) {
                    case 'read':
                        $(location).attr('href', web_url + '/home/user/read/id/' + bind);
                        break;
                    case 'update':
                        $(location).attr('href', web_url + '/home/user/update/id/' + bind);
                        break;
                    case 'delete':
                        if (confirm('确定删除该用户吗？') == true) {
                            $.post(web_url + '/home/user/delete', {id: bind}, function (obj, status) {
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
                    case 'password':
                        dom.attr('disabled','disabled');
                        dom.html('重置中...');

                        if (confirm('确定要重置该用户的密码吗？') == true) {
                            $.post(web_url + '/home/email/passwordReset', {user: bind}, function (obj, status) {
                                if (status === 'success') {
                                    if (obj.status === 1001) {
                                        $.growl.notice({message: obj.msg});
                                    } else {
                                        $.growl.error({message: obj.msg});
                                    }
                                }
                                else {
                                    $.growl.error({message: status});
                                }

                                dom.removeAttr('disabled','disabled');
                                dom.html('重置密码');
                            });
                        } else {
                            return false;
                        }
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
