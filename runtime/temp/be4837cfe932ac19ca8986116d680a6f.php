<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/home/view/node/index.html";i:1545186971;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    权限管理
    <button type="button" class="btn btn-success pull-right" data-toggle="tools" data-align="url"
            data-bind="<?php echo url('quanxian/create'); ?>">
        <span class="glyphicon glyphicon-plus"></span>
        添加权限组
    </button>
</h2>

<div class="row">
    <div class="col-md-4">
        <table class="table table-border-order">
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($list['title']); ?></td>
                <td class="text-right">
                    <a href="<?php echo url('quanxian/index',['id'=>$list['id']]); ?>">人员</a>
                    <a href="<?php echo url('quanxian/create',['id'=>$list['id']]); ?>">修改</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-8">


        <div class="layui-table-body layui-table-main">
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th>部门</th>
                    <th>职位</th>
                    <th>姓名</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($user['bumen_name']); ?></td>
                    <td><?php echo htmlentities($user['zhiwei_name']); ?></td>
                    <td><?php echo htmlentities($user['user_realname']); ?></td>
                    <td class="text-right">
                        <button data-toggle="tools" data-align="delete" data-content-id="<?php echo htmlentities($data['info']['id']); ?>" data-bind="<?php echo htmlentities($user['iduser']); ?>" class="btn btn-yeelibaray btn-xs" type="button">删除</button>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
            </table>
        </div>

        <form method="post" id='createForm'>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>员工：</span></td>
                    <td>
                        <div class="width-100">
                            <select name="user[]" multiple class="form-control select-chosen" data-placeholder="选择用户">
                                <option></option>
                                <?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user2): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($user2['iduser']); ?>">
                                    <?php echo htmlentities($user2['bumen_name']); ?> <?php echo htmlentities($user2['zhiwei_name']); ?> <?php echo htmlentities($user2['user_realname']); ?>
                                </option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <input type="hidden" value="<?php echo htmlentities($data['info']['id']); ?>" name="id">
            <div class="clearfix form-actions">
                <div align="center" class="col-md-12">
                    <button class="btn btn-info" type="submit">
                        <i class="icon-ok bigger-110"></i>
                        确认提交
                    </button>
                </div>
            </div>

        </form>


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
                            $.post(web_url + '/home/quanxian/userDelete', {
                                id: bind,
                                gid:id,

                            }, function (obj, status) {
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

    $(function () {
        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        var fromCreateID = $("#createForm");
        var fromUrl = web_url + '/home/quanxian/userSave';
        fromCreateID.validate({
            rules: {
                id: {
                    required: true
                }
            },
            messages: {
                id: {
                    required: "权限组名不能为空"
                }
            },
            submitHandler: function () {
                var str = '';
                $.ajax({
                    url: fromUrl,
                    type: "post",
                    dataType: "json",
                    data: fromCreateID.serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            fromCreateID.parent().prepend(str);
                            fromCreateID.find('input[type="text"]').val('');
                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            fromCreateID.parent().prepend(str);
                        }
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        });
    });
    $('.select-chosen').chosen();

</script>

</body>
</html>
