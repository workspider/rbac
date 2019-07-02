<?php /*a:2:{s:63:"/var/www/manager_cmlaw/application/sky/view/lichong/create.html";i:1545186973;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
        <div class="mt-element-step">
            <div class="row step-line">
                <div class="col-md-6 mt-step-col first active">
                    <div class="mt-step-number bg-white">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">信息录入</div>
                </div>
                <div class="col-md-6 mt-step-col last ">
                    <div class="mt-step-number bg-white">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">确认提交</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <form action="" method="post" id="lichongCreateForm">
            <table class="table table-bordered">
                <tbody>
                <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">我方代理客户</span>
                    </span>
                </div>
                <p></p>
                <tr>
                    <td class="input-title text-right"><span>客户：</span></td>
                    <td>
                        <div class="width-60">
                            <input type="text" name="kehu[]" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="xiangguanfang1"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加我方代理客户
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table table-bordered">
             <tbody>
             <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">相对方客户</span>
                    </span>
             </div>
             <p></p>
                <tr>
                    <td class="input-title text-right"><span>相对方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="xiangduifang[]" type="text" class="form-control">
                        </div>
                        <div class="width-20">
                            <!--<button type="button" data-align="tools" data-target="xiangguanfangdelete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="xiangguanfang2"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加相对方客户
                            </button>
                        </div>
                    </td>
                </tr>
             </tbody>
            </table>

            <table class="table table-bordered">
                <tbody>
                <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">相关方客户</span>
                    </span>
                </div>
                <p></p>
                <tr>
                    <td class="input-title text-right"><span>相关方：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="xiangguanfang[]" type="text" class="form-control">
                        </div>
                        <div class="width-20">
                            <!--<button type="button" data-align="tools" data-target="xiangguanfangdelete"
                                    class="btn btn-danger"
                                    style="margin-left: 10px;">删除
                            </button>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span></span></td>
                    <td>
                        <div class="width-60">
                            <button type="button" data-align="tools" data-target="xiangguanfang"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                                添加相关方客户
                            </button>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>

            <table class="table table-bordered">
                <tbody>
                <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">负责人</span>
                    </span>
                </div>
                <p></p>
                <tr>
                    <td class="input-title text-right"><span>查询人：</span></td>
                    <td>
                        <div class="width-60">
                            <select name="userid" class="form-control chosen-select" data-placeholder="请选择查询人">
                                <option value=""></option>
                                <?php if(is_array($data['hehuoren']) || $data['hehuoren'] instanceof \think\Collection || $data['hehuoren'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['hehuoren'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($user['iduser']); ?>"><?php echo htmlentities($user['bumen_name']); ?> - <?php echo htmlentities($user['zhiwei_name']); ?> -
                                    <?php echo htmlentities($user['user_realname']); ?>
                                </option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>描述：</span></td>
                    <td>
                        <div class="width-100">
                            <textarea class="form-control" name="lichong_content" rows="6"></textarea>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">查询</button>
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


<script>
    $(function () {
        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true
        });
    });

    $(document).on('click', 'button', function (e) {
        var dom = $(this);
        var align = dom.attr('data-align');
        var target = dom.attr('data-target');
        switch (align) {
            case 'tools':
                switch (target) {
                    case 'xiangguanfang':
                        var str = '<tr>' +
                            '<td class="input-title text-right">' +
                            '<span>相关方：</span>' +
                            '</td>' +
                            '<td><div class="width-60">' +
                            '<input type="text" name="xiangguanfang[]" class="form-control">' +
                            '</div>' +
                            '<div class="width-20">' +
                            '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                        dom.parent().parent().parent().before(str);
                        break;
                    case 'xiangguanfang1':
                        var str = '<tr>' +
                            '<td class="input-title text-right">' +
                            '<span>客户：</span>' +
                            '</td>' +
                            '<td><div class="width-60">' +
                            '<input type="text" name="kehu[]" class="form-control">' +
                            '</div>' +
                            '<div class="width-20">' +
                            '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                        dom.parent().parent().parent().before(str);
                        break;
                    case 'xiangguanfang2':
                        var str = '<tr>' +
                            '<td class="input-title text-right">' +
                            '<span>相对方：</span>' +
                            '</td>' +
                            '<td><div class="width-60">' +
                            '<input type="text" name="xiangduifang[]" class="form-control">' +
                            '</div>' +
                            '<div class="width-20">' +
                            '<button data-align="tools" data-target="xiangguanfangdelete" class="btn btn-danger" style="margin-left: 10px;">删除</button>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                        dom.parent().parent().parent().before(str);
                        break;
                    case 'xiangguanfangdelete':
                        dom.parent().parent().parent().remove();
                        break;
                }
                break;
        }
    });

    $("#lichongCreateForm").validate({
        ignore: ":hidden:not(select)",
        rules: {
            userid: {
                required: true
            }
        },
        messages: {
            userid: {
                required: "请选择负责合伙人"
            }
        },
        errorPlacement: function (error, element) {
            if (element.is('.chosen-select')) {
                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
            }
            else if (element.is(':checkbox') || element.is(':radio')) {
                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
            }
            else error.insertAfter(element);
        },
        submitHandler: function (form) {
            //$("button[type='submit']").attr('disabled', 'disabled');
            //$("button[type='submit']").html("报告生成中...");
            $.ajax({
                url: web_url + '/home/lichong/save',
                type: "post",
                dataType: "json",
                data: $('#lichongCreateForm').serialize(),
                success: function (obj) {
                    if (obj.status === 1001) {
                        str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                        $('#lichongCreateForm').parent().prepend(str);
                        $(window).attr('location', web_url + "/home/lichong/create_2/id/" + obj.data);
                    } else {
                        str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                        $('#lichongCreateForm').parent().prepend(str);
                    }
                    setTimeout(function () {
                        $("#formMsg").remove();
                    }, 3000);
                }
            });
        }
    });
</script>


</body>
</html>
