<?php /*a:2:{s:59:"/var/www/manager_cmlaw/application/home/view/auth/edit.html";i:1559097031;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
            
            
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">
            <li role="presentation">
                <a href="<?php echo url('auth/index'); ?>">菜单列表</a>
            </li>
            <li role="presentation" class="active">
                <a href="<?php echo url('auth/edit',['id'=>$data['info']['id']]); ?>">菜单修改</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <form method="post" id='createForm'>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>上级菜单：</span></td>
                    <td>
                        <div class="width-30">
                            <select name="pid" class="form-control" multiple size="5">

                                <?php if($data['info']['pid'] == '0'): ?>
                                <option value="0" selected>根目录</option>
                                <?php else: ?>
                                <option value="0">根目录</option>
                                <?php endif; if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;if($list['id'] == $data['info']['pid']): ?>
                                <option value="<?php echo htmlentities($list['id']); ?>" selected><?php echo htmlentities($list['title']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($list['id']); ?>"><?php echo htmlentities($list['title']); ?></option>
                                <?php endif; if(is_array($list['sub']) || $list['sub'] instanceof \think\Collection || $list['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;if($l['id'] == $data['info']['pid']): ?>
                                <option value="<?php echo htmlentities($l['id']); ?>" selected>|------<?php echo htmlentities($l['title']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($l['id']); ?>">|------<?php echo htmlentities($l['title']); ?></option>
                                <?php endif; ?>

                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>名称：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="title" type="text" class="form-control" value="<?php echo htmlentities($data['info']['title']); ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>链接：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="url" type="text" class="form-control" value="<?php echo htmlentities($data['info']['url']); ?>"
                                   placeholder="格式：home/user/create">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>排序：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="sort" type="text" class="form-control" value="<?php echo htmlentities($data['info']['sort']); ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>菜单类型：</span></td>
                    <td>
                        <div class="width-100">
                            <?php if($data['info']['type'] == '0'): ?>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="0" checked="checked"> 菜单
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="1"> 操作
                            </label>
                            <?php else: ?>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="0"> 菜单
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="1" checked="checked"> 操作
                            </label>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>是否启用：</span></td>
                    <td>
                        <div class="width-100">
                            <?php if($data['info']['status'] == '1'): ?>

                            <label class="radio-inline">
                                <input type="radio" name="status" value="1" checked="checked"> 开启
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0"> 停用
                            </label>

                            <?php else: ?>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1"> 开启
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0" checked="checked"> 停用
                            </label>

                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="clearfix form-actions">
                <div align="center" class="col-md-12">
                    <input type="hidden" readonly name="id" value="<?php echo htmlentities($data['info']['id']); ?>">
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
    $(function () {
        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        var fromCreateID = $("#createForm");
        var fromUrl = web_url + '/home/auth/save';
        fromCreateID.validate({
            rules: {
                pid: {
                    required: true
                },
                title: {
                    required: true
                },
                url: {
                    required: true
                },
                sort: {
                    required: true
                },
                type: {
                    required: true
                },
                status: {
                    required: true
                }
            },
            messages: {},
            submitHandler: function () {
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
                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            fromCreateID.parent().prepend(str);
                        }
                        setTimeout(function () {
                            $("#formMsg").remove();
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
