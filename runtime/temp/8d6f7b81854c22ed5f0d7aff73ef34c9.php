<?php /*a:2:{s:69:"/var/www/manager_cmlaw/application/home/view/anjian/system/anyou.html";i:1545186988;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
            
            
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">
            <li role="presentation">
                <a href="<?php echo url('anjian/system',['type'=>'yewuleixing']); ?>">业务类型</a>
            </li>
            <li role="presentation" class="active">
                <a href="<?php echo url('anjian/system',['type'=>'anyou']); ?>">案由</a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <table class="table table-border-order">
            <thead>
            <tr>
                <th>第一级案由</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <button type="button" class="btn btn-xs btn-link" data-src="1" data-toggle="anyou" data-align="get"
                            data-bind="<?php echo htmlentities($list['idanyou']); ?>">[ <strong><?php echo htmlentities($list['idanyou']); ?></strong> ]  <?php echo htmlentities($list['anyou_name']); ?> ( <?php echo htmlentities($list['sum']); ?> )
                    </button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-4" id="anyou2"></div>
    <div class="col-md-4" id="anyou3"></div>
    <div class="col-md-4" id="anyou4"></div>
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
        var src = $(event.target).attr('data-src');
        var dom = $(this);
        switch (toggle) {
            case 'anjian_anyou':
                switch (align) {
                    case 'create':
                        $(location).attr('href', web_url + '/home/anjian/system/type/anyou');
                        break;
                    case 'update':
                        $(location).attr('href', web_url + '/home/anjian/systemEdit/type/anyou/id/' + bind);
                        break;
                    case 'delete':
                        if (confirm('确定删除该案由吗？') == true) {
                            $.post(web_url + '/home/anjian/deleteSystemInfo/type/anyou', {id: bind}, function (obj, status) {
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
                    default:
                        $.growl.error({message: "没有相关操作!"});
                }
                break;

            case 'anyou':
                switch (align) {
                    case 'get':
                        $.ajax({
                            url: web_url + '/home/anjian/getAnyou',
                            type: "post",
                            dataType: "json",
                            data: {id: bind},
                            success: function (obj) {

                                if (src == 1) {
                                    var jibie = '第二级案由';
                                }
                                else if (src == 2) {
                                    var jibie = '第三级案由';
                                }
                                else if (src == 3) {
                                    var jibie = '第四级案由';
                                }

                                var sid = parseFloat(src) + 1;
                                var str = "<table class='table table-border-order'><thead><tr><th>" + jibie + "</th></tr></thead><tbody>";
                                if (obj.status == '1001') {
                                    $.each(obj.data, function (k, v) {
                                        str += "<tr><td>" +
                                            "<button type='button'  class='btn btn-xs btn-link' data-src='" + sid + "' data-toggle='anyou' data-align='get' data-bind='" + v.idanyou + "'>" +"[ <strong>"+v.idanyou+"</strong> ]  "+ v.anyou_name + ' ( '  + v.zsum + ' )' +"</button>" +
                                            "</td></tr>";
                                    });
                                }
                                str += "</tbody></table>";
                                if (src == 1) {
                                    $("#anyou2").html(str);
                                    $("#anyou3").html('');
                                    $("#anyou4").html('');
                                }
                                else if (src == 2) {
                                    $("#anyou3").html(str);
                                    $("#anyou4").html('');
                                }
                                else if (src == 3) {
                                    $("#anyou4").html(str);
                                }
                            }
                        });
                        break;
                }
                break;
        }
    });

</script>

</body>
</html>
