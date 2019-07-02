<?php /*a:2:{s:71:"/var/www/manager_cmlaw/application/sky/view/kehu/qiye/create_step1.html";i:1545186989;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
    <!--<div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">
            <li role="presentation" class="active">
                <a href="<?php echo url('kehu/create',['type'=>'qiye']); ?>">企业客户</a>
            </li>
            <li role="presentation">
                <a href="<?php echo url('kehu/create',['type'=>'geren']); ?>">个人客户</a>
            </li>
        </ul>
    </div>-->
    <h2 class="sub-header">
        客户创建
    </h2>
    <div class="col-md-12" style="margin-bottom: 30px;">
        <div class="mt-element-step">
            <div class="row step-line">
                <div class="col-md-6 mt-step-col first active">
                    <div class="mt-step-number bg-white">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">选择类型</div>
                </div>
                <div class="col-md-6 mt-step-col last ">
                    <div class="mt-step-number bg-white">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">信息填写</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" >
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 自动客户创建
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-no-bordered">
            <tbody>
            <tr>
                <td style="width: 15%;" class="input-title text-right"><span>客户名称：</span></td>
                <td style="width: 85%;">
                    <div class="width-60">
                        <input type="text" name="qixinbao" class="form-control">
                    </div>
                    <div class="width-20">
                        <button type="button" name="sousuo" data-align="qixinbao" class="btn btn-primary" style="margin-left: 10px;">
                            搜索
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table id="jieguoTable" class="table table-bordered" style="display: none;">
            <thead>
            <tr>

                <th>省份</th>
                <th>类型</th>
                <th>名称</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="qixinbaoView">
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 手动客户创建
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-no-bordered">
            <tbody>
            <tr>
                <td style="width: 15%;" class="input-title text-right"><span>客户类型：</span></td>
                <td style="width: 85%;">
                    <div class="width-30">
                        <select name="userid" class="form-control chosen-select" data-placeholder="请选择客户类型">
                            <option value=""></option>
                            <option value="1" data-toggle="kehu_geren" data-align="gerenadd">个人客户</option>
                            <option value="2" data-toggle="kehu_geren" data-align="qiyeadd">企业客户</option>
                        </select>
                    </div>
                    <div class="width-20">
                        <button type="button" data-align="shoudongtianjia" class="btn btn-primary" style="margin-left: 10px;">创建</button>
                    </div>
                </td>
            </tr>

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

    $(".chosen-select").chosen({
        no_results_text: "无结果!",
        search_contains: true,
        allow_single_deselect: true
    });

    $(document).on('click', 'button', function () {
        var dom = $(this);
        var align = dom.attr('data-align');

        switch (align) {
            case 'qixinbao':
                $("#qixinbaoView").html('<tr><td colspan="5">信息检索中...</td></tr>')
                var qixinbao = $("input[name='qixinbao']").val();
                if (qixinbao == '') {
                    $("#qixinbaoView").html('<tr><td colspan="5">请输入客户名称关键字</td></tr>');
                } else {
                    $.ajax({
                        url: web_url + '/home/qixinbao/index',
                        type: "post",
                        dataType: "json",
                        data: {title: qixinbao},
                        success: function (obj) {
                            if (obj.status === 1001) {
                                var str = '';
                                $.each(obj.data.items, function (k, v) {
                                    str += '<tr>' +
                                        '<td>' + v.base + '</td>' +
                                        '<td>' + v.leixing + '</td>' +
                                        '<td>' + v.name + '</td>' +
                                        '<td>' +
                                        '<button type="button" data-align="step2" data-content-id= ' + v.id + ' class="btn btn-yeelibaray">' + '创建' + '' + '</button>' +
                                        '</td>' +
                                        '<tr>'
                                });
                                $("#qixinbaoView").html(str);
                                $("#jieguoTable").show();
                            } else {
                                $("#qixinbaoView").html('<tr><td colspan="5">' + obj.msg + '</td></tr>');
                            }
                        }
                    });
                }
                break;
            case 'step2':
                var number = 1;

                var id = $(event.target).attr('data-content-id');
                if (number == undefined) {
                    $("input[name='qixinbao']").css('border', '1px red solid');
                } else {
                    $(window).attr('location', web_url + "/home/kehu/create/type/qiye/step/2/number/" + id);
                }

                break;
            case 'shoudongtianjia':
                var oTxt = document.getElementsByTagName("select")[0].value;
                if (oTxt == "1") {
                    $(window).attr('location', web_url + "/home/kehu/create/type/geren/step/2/number/");
                } else if (oTxt == "2") {
                    $(window).attr('location', web_url + "/home/kehu/create/type/qiye/step/1/number/");
                }
                break;
        }


    });

</script>

</body>
</html>
