<?php /*a:2:{s:68:"/var/www/manager_cmlaw/application/home/view/anjian/shenpi_read.html";i:1545186980;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    案件审批
    <a href="<?php echo url('anjian/index'); ?>" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span>
        返回案件列表
    </a>
</h2>

<hr/>
<div class="row">
    <div class="col-md-12">
        <?php if($data['anjian']['anjian_status'] == '4'): ?>
        <div class="alert alert-danger" role="alert">

            <p>签批意见：<strong>驳回!</strong> <?php echo htmlentities($data['anjian']['shenpi_content']); ?></p>
            <p>签批日期：<?php echo htmlentities($data['anjian']['shenpi_datetime']); ?></p>
        </div>
        <?php endif; ?>
    </div>

    <?php echo widget('lichong/getInfo',['id'=>$data['id']]); ?>


    <?php echo widget('kehu/getInfo',['id'=>$data['id']]); ?>


    <?php echo widget('anjian/getInfo',['id'=>$data['id']]); ?>


    <!--案件审批框 开始-->
    <?php if($data['anjian']['anjian_status'] == '2'): ?>
    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 审批意见
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <form method="post" id="anjianShenpiForm" novalidate="novalidate">
            <table class="table table-bordered table-border-book">
                <tbody>

                <tr>
                    <td>
                        <div class="width-100">
                            <textarea class="form-control" rows="3" name="shenpi_content"
                                      placeholder="请输入意见内容"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="width-100">
                            <label class="radio-inline">
                                <input type="radio" name="anjian_status" value="3" checked> 审批立案
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="anjian_status" value="4"> 驳回立案
                            </label>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="text-center">
                <input type="hidden" name="anjianid" class="form-control" value="<?php echo htmlentities($data['id']); ?>"/>
                <button type="submit" name="shenpiSubmit" value="shenpi" class="btn btn-lg btn-yeelibaray"> 提交审批
                </button>
            </div>
        </form>
    </div>
    <!--案件审批框 结束-->
    <?php endif; ?>

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
            format: "yyyy-mm-dd HH:ii",
            autoclose: true,
            todayBtn: true
        });

        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true
        });

        // 案件状态签批
        $("#anjianShenpiForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                anjianid: {
                    required: true
                },
                anjian_status: {
                    required: true
                }
                // shenpi_content: {
                //     required: true
                // }
            },
            messages: {
                anjianid: {
                    required: "案件ID为空"
                },
                anjian_status: {
                    required: "案件状态不能为空"
                }
                // shenpi_content: {
                //     required: "请输入意见内容"
                // }
            },
            submitHandler: function (form) {
                $("button[name='shenpiSubmit']").html('案件审核信息提交中...');
                //$("button[name='shenpiSubmit']").attr('disabled', 'disabled');
                $.ajax({
                    url: web_url + '/home/anjian/shenpiSave',
                    type: "post",
                    dataType: "json",
                    data: $('#anjianShenpiForm').serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            $("button[name='shenpiSubmit']").show();
                            $("textarea[name='shenpi_content']").val("");
                            var id = obj.data;
                            if (id == 3) {
                                //$("button[name='shenpiSubmit']").html('通知邮件发送中...');
                                // $.ajax({
                                //     url: web_url + '/home/email/anjianEmail',
                                //     type: "post",
                                //     dataType: "json",
                                //     data: {anjian: $("input[name='anjianid']").val()},
                                //     success: function (obj) {
                                //         if (obj.status === 1001) {
                                //             $(window).attr('location', web_url + "/home/anjian/shenpi/");
                                //         }
                                //         else {
                                //             $.growl.error({message: obj.msg});
                                //         }
                                //     }
                                // });
                                $(window).attr('location', web_url + "/home/anjian/shenpi/");
                            }
                            else {
                                $(window).attr('location', web_url + "/home/anjian/shenpi/");
                            }
                        }
                        else {
                            $("button[name='shenpiSubmit']").html(' 提交审批 ');
                            $.growl.error({message: obj.msg});
                        }
                    }
                });
            }
        });


    });
</script>

</body>
</html>
