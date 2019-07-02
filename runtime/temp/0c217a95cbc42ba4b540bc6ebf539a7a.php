<?php /*a:2:{s:74:"/var/www/manager_cmlaw/application/sky/view/anjian/system/yewuleixing.html";i:1545186988;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
            <li role="presentation" class="active">
                <a href="<?php echo url('anjian/system',['type'=>'yewuleixing']); ?>">业务类型</a>
            </li>
            <li role="presentation">
                <a href="<?php echo url('anjian/system',['type'=>'anyou']); ?>">案由</a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <table class="table table-border-order">
            <thead>
            <tr>
                <th></th>
                <th>标识</th>
                <th>业务类型名</th>
                <th>状态</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>#<?php echo htmlentities($i); ?></td>
                <td><?php echo htmlentities($list['yewuleixing_code']); ?></td>
                <td><?php echo htmlentities($list['yewuleixing_name']); ?></td>
                <td><?php if($list['yewuleixing_status'] == '0'): ?>正常<?php else: ?>锁定<?php endif; ?></td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">

                        <button type="button" data-toggle="anjian_yewuleixing" data-align="update"
                                data-bind="<?php echo htmlentities($list['idyewuleixing']); ?>"
                                class="btn btn-link btn-default">修改
                        </button>
                        <button type="button" data-toggle="anjian_yewuleixing" data-align="delete"
                                data-bind="<?php echo htmlentities($list['idyewuleixing']); ?>"
                                class="btn btn-link btn-default">删除
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-6">
        <form method="post" id='anjianCreateForm'>
            <?php if(!(empty($data['info']) || (($data['info'] instanceof \think\Collection || $data['info'] instanceof \think\Paginator ) && $data['info']->isEmpty()))): ?>
            <h4>业务类型信息修改
                <button type="button" data-toggle="anjian_yewuleixing" data-align="create" data-bind=""
                        class="btn btn-link btn-default btn-sm">新增业务类型
                </button>
            </h4>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>案件种类：</span></td>
                    <td>
                        <div class="width-100">
                            <select class="form-control" name="zhonglei">
                                <option value="">-选择案件种类-</option>
                                <?php if(is_array($data['zhonglei']) || $data['zhonglei'] instanceof \think\Collection || $data['zhonglei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhonglei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;if($data['info']['zhongleiid'] == $list['idzhonglei']): ?>
                                <option value="<?php echo htmlentities($list['idzhonglei']); ?>" selected><?php echo htmlentities($list['zhonglei_name']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($list['idzhonglei']); ?>"><?php echo htmlentities($list['zhonglei_name']); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>类型名：</span></td>
                    <td>
                        <div class="width-100">
                            <input name="name" type="text" class="form-control" value="<?php echo htmlentities($data['info']['yewuleixing_name']); ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>标识符：</span></td>
                    <td>
                        <div class="width-100">
                            <input name="biaoshi" type="text" class="form-control"
                                   value="<?php echo htmlentities($data['info']['yewuleixing_code']); ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>备注：</span></td>
                    <td>
                        <div class="width-100">
                            <textarea name="beizhu" class="form-control"
                                      rows="3"><?php echo htmlentities($data['info']['yewuleixing_beizhu']); ?></textarea>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <input name="id" type="hidden" value="<?php echo htmlentities($data['info']['idyewuleixing']); ?>">
            <?php else: ?>
            <h4>业务类型新增</h4>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>案件种类：</span></td>
                    <td>
                        <div class="width-100">
                            <select class="form-control" name="zhonglei">
                                <option value="">-选择案件种类-</option>
                                <?php if(is_array($data['zhonglei']) || $data['zhonglei'] instanceof \think\Collection || $data['zhonglei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhonglei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($list['idzhonglei']); ?>"><?php echo htmlentities($list['zhonglei_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>类型名：</span></td>
                    <td>
                        <div class="width-100">
                            <input name="name" type="text" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>标识符：</span></td>
                    <td>
                        <div class="width-100">
                            <input name="biaoshi" type="text" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>备注：</span></td>
                    <td>
                        <div class="width-100">
                            <textarea name="beizhu" class="form-control" rows="3"></textarea>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php endif; ?>

            <div class="text-center">
                <button type='submit' class="btn btn-primary">确认保存</button>
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
        var dom = $(this);
        switch (toggle) {
            case 'anjian_yewuleixing':
                switch (align) {
                    case 'create':
                        $(location).attr('href', web_url + '/home/anjian/system/type/yewuleixing');
                        break;
                    case 'update':
                        $(location).attr('href', web_url + '/home/anjian/systemEdit/type/yewuleixing/id/' + bind);
                        break;
                    case 'delete':
                        layer.confirm('确定要删除该业务类型吗', function(index) {
                            $.post(web_url + '/home/anjian/deleteSystemInfo/type/yewuleixing', {id: bind}, function (obj, status) {
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
        }
    });


    var fromCreateID = $("#anjianCreateForm");
    var fromUrl = web_url + '/home/anjian/saveSystemInfo/type/yewuleixing';
    fromCreateID.validate({
        rules: {
            zhonglei: {
                required: true
            },
            name: {
                required: true
            },
            biaoshi: {
                required: true
            }
        },
        messages: {

            name: {
                required: "请填写业务类型名称"
            },
            biaoshi: {
                required: "请填写业务类型标识符"
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: fromUrl,
                type: "post",
                dataType: "json",
                data: fromCreateID.serialize(),
                success: function (obj) {
                    if (obj.status === '1001') {
                        str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                        fromCreateID.parent().prepend(str);

                        window.location.reload();
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


</script>

</body>
</html>
