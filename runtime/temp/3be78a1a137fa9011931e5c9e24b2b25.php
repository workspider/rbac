<?php /*a:2:{s:65:"/var/www/manager_cmlaw/application/home/view/quanxian/create.html";i:1559289411;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    <a href="<?php echo url('quanxian/index'); ?>" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-list"></span>
        返回权限组列表
    </a>
</h2>

<div class="row">
    <div class="col-md-12">
        <form method="post" id='createForm'>


            <?php if(empty($data['info']) || (($data['info'] instanceof \think\Collection || $data['info'] instanceof \think\Paginator ) && $data['info']->isEmpty())): ?>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>权限组名：</span></td>
                    <td>
                        <div class="width-50">
                            <input name="title" class="form-control">
                            <input type="hidden" name="status" value="1" />
                            <input type="hidden" name="desc" value="" />
                            <input type="hidden" name="category" value="1" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>权限列表：</span></td>
                    <td>
                         <ul style="list-style-type: none">
                            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <li>
                                <?php if(in_array(($list['id']), is_array($data['info']['rules'])?$data['info']['rules']:explode(',',$data['info']['rules']))): ?>
                                <input type="checkbox" name="quanxian[]"  value="<?php echo htmlentities($list['id']); ?>" checked>
                                <?php else: ?>
                                <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>">
                                <?php endif; ?>
                                <label for="quanxian[]"><?php echo htmlentities($list['title']); ?></label>
                                <ul style="list-style-type: none">
                                    <?php if(is_array($list['sub']) || $list['sub'] instanceof \think\Collection || $list['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <?php if(in_array(($list['id']), is_array($data['info']['rules'])?$data['info']['rules']:explode(',',$data['info']['rules']))): ?>
                                        <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>" checked>
                                        <?php else: ?>
                                        <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>">
                                        <?php endif; ?>
                                        <label for="quanxian[]"><?php echo htmlentities($list['title']); ?></label>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>

                    </td>
                </tr>

                </tbody>
            </table>
            <?php else: ?>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>权限组名：</span></td>
                    <td>
                        <div class="width-50">
                            <input name="title" class="form-control" value="<?php echo htmlentities($data['info']['title']); ?>">
                            <input type="hidden" name="status" value="1" />
                            <input type="hidden" name="desc" value="" />
                            <input type="hidden" name="category" value="1" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>权限列表：</span></td>
                    <td>
                         <ul style="list-style-type: none">
                            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <li>
                                <?php if(in_array(($list['id']), is_array($data['info']['rules'])?$data['info']['rules']:explode(',',$data['info']['rules']))): ?>
                                <input type="checkbox" name="quanxian[]"  value="<?php echo htmlentities($list['id']); ?>" checked>
                                <?php else: ?>
                                <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>">
                                <?php endif; ?>
                                <label for="quanxian[]"><?php echo htmlentities($list['title']); ?></label>
                                <ul style="list-style-type: none">
                                    <?php if(is_array($list['sub']) || $list['sub'] instanceof \think\Collection || $list['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <?php if(in_array(($list['id']), is_array($data['info']['rules'])?$data['info']['rules']:explode(',',$data['info']['rules']))): ?>
                                        <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>" checked>
                                        <?php else: ?>
                                        <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>">
                                        <?php endif; ?>
                                        <label for="quanxian[]"><?php echo htmlentities($list['title']); ?></label>
                                        <ul style="list-style-type: none">
                                            <?php if(is_array($list['sub']) || $list['sub'] instanceof \think\Collection || $list['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                            <li>
                                                <?php if(in_array(($list['id']), is_array($data['info']['rules'])?$data['info']['rules']:explode(',',$data['info']['rules']))): ?>
                                                <input type="checkbox" name="quanxian[]" value="<?php echo htmlentities($list['id']); ?>" checked>
                                                <?php else: ?>
                                                <input type="checkbox" name="quanxian[]1" value="<?php echo htmlentities($list['id']); ?>">
                                                <?php endif; ?>
                                                <label for="quanxian[]"><?php echo htmlentities($list['title']); ?></label>
                                            </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>

                    </td>
                </tr>

                </tbody>
            </table>
            <input type="hidden" value="<?php echo htmlentities($data['info']['id']); ?>" name="id">
            <?php endif; ?>
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

	// $('input[type="checkbox"]').change(function(e) {
    //     var checked = $(this).prop("checked"),
    //             container = $(this).parent(),
    //             siblings = container.siblings();
    //     container.find('input[type="checkbox"]').prop({
    //         indeterminate: false,
    //         checked: checked
    //     });
    //     function checkSiblings(el) {
    //         var parent = el.parent().parent(),
    //                 all = true;
    //         el.siblings().each(function() {
    //             return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
    //         });
    //         if (all && checked) {
    //             parent.children('input[type="checkbox"]').prop({
    //                 indeterminate: false,
    //                 checked: checked
    //             });
    //             checkSiblings(parent);
    //         } else if (all && !checked) {
    //             parent.children('input[type="checkbox"]').prop("checked", checked);
    //             parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
    //             checkSiblings(parent);
    //         } else {
    //             el.parents("li").children('input[type="checkbox"]').prop({
    //                 indeterminate: false,
    //                 checked: checked
    //             });
    //
    //         }
    //
    //     }
    //     checkSiblings(container);
    // });
    
    $(function () {
        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        var fromCreateID = $("#createForm");
        var fromUrl = web_url + '/home/quanxian/save';
        fromCreateID.validate({
            rules: {
                title: {
                    required: true
                }
            },
            messages: {
                title: {
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
