<?php /*a:2:{s:61:"/var/www/manager_cmlaw/application/home/view/work/shenhe.html";i:1545186975;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
            
            


<h2 class="sub-header">
    计时修改
    <a href="<?php echo url('work/index'); ?>" class="btn btn-success pull-right" style="margin-left: 10px;">
        <span class="glyphicon glyphicon-list"></span>
        返回计时列表
    </a>
</h2>
<div class="row">

    <div class="col-md-12">
        <div class="create-content">
            <div class="create-title">
                <span class="glyphicon glyphicon-unchecked"></span> 计时信息
            </div>
            <div class="create-tools">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <table class="table table-no-bordered">
            <tbody>

            <tr>
                <td style="width: 20%" class="input-title text-right"><span>案件名称：</span></td>
                <td style="width: 80%">
                    <div class="width-70">
                        <select disabled name="anjianid" class="form-control  chosen-select" data-placeholder="请选择案件">
                            <option value=""></option>
                            <?php if(is_array($data['anjian']) || $data['anjian'] instanceof \think\Collection || $data['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;if($anjian['idanjian'] == $data['info']['anjianid']): ?>
                            <option value="<?php echo htmlentities($anjian['idanjian']); ?>" selected><?php echo htmlentities($anjian['anjian_title']); ?></option>
                            <?php else: ?>
                            <option value="<?php echo htmlentities($anjian['idanjian']); ?>"><?php echo htmlentities($anjian['anjian_title']); ?></option>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="input-title text-right"><span>日期：</span></td>
                <td>
                    <div class="width-30">
                        <input disabled name="work_end_date" type="text" readonly value="<?php echo htmlentities($data['info']['work_end_date']); ?>"
                               class="form-control form_datetime" placeholder="日期">
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>计时：</span></td>
                <td>
                    <div class="width-30">
                        <input disabled name="work_unit" type="number" class="form-control" placeholder="计时"
                               value="<?php echo htmlentities($data['info']['work_unit']); ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>工作类型：</span></td>
                <td>
                    <div class="width-30">
                        <select disabled name="work_type" class="form-control chosen-select" data-placeholder="请选择工作类型">
                            <option value=""></option>

                            <?php if($data['info']['work_type'] == '非收费小时'): ?>
                            <option value="非收费小时" selected>非收费小时</option>
                            <option value="收费小时">收费小时</option>
                            <?php else: ?>
                            <option value="非收费小时">非收费小时</option>
                            <option value="收费小时" selected>收费小时</option>
                            <?php endif; ?>

                        </select>

                    </div>
                </td>
            </tr>

            <tr>
                <td class="input-title text-right"><span>计时描述：</span></td>
                <td>
                    <div class="width-70">
                        <textarea readonly name="work_title" class="form-control"
                                  rows="6"><?php echo htmlentities($data['info']['work_title']); ?></textarea>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>
    </div>


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
        <form method="post" id="workAddForm" novalidate="novalidate">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%" class="input-title text-right"><span>状态：</span></td>
                    <td style="width: 80%">
                        <div class="width-100">
                            <label class="radio-inline">
                                <input type="radio" name="work_status" value="2" checked> 审核计时
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="work_status" value="4"> 驳回计时
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>计时：</span></td>
                    <td>
                        <div class="width-30">

                            <input type="number" name="work_ok_unit" class="form-control" value="<?php echo htmlentities($data['info']['work_unit']); ?>"
                                   placeholder="请输入审核计时数">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>意见：</span></td>
                    <td>
                        <div class="width-70">
                            <textarea class="form-control" rows="6" name="shenhe_content"
                                      placeholder="请输入意见内容"></textarea>
                        </div>
                    </td>
                </tr>


                </tbody>
            </table>

            <div class="text-center">
                <input type="hidden" name="idwork" class="form-control" value="<?php echo htmlentities($data['info']['idwork']); ?>"/>
                <button type="submit" name="shenpiSubmit" value="shenpi" class="btn btn-lg btn-yeelibaray"> 提交审批
                </button>
            </div>
        </form>
    </div>
    <!--案件审批框 结束-->


</div>
<!--任务查看 弹出框 结束-->

            


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
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            weekStart: 1,
            minuteStep: 10,
            startView: 2,
            minView: 2,
            maxView: 4,
            todayBtn: true
        });

        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true
        });

        // 关闭右侧弹出框
        $(".sidebox-close-btn").click(function () {
            $(".tasks-content").hide();
        });


        // 任务提交处理
        $("#workAddForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                work_ok_unit: {
                    required: true
                },
                work_status: {
                    required: true
                }
            },
            messages: {
                work_ok_unit: {
                    required: "请输入审核计时"
                },
                work_status: {
                    required: "请选择状态"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                $.ajax({
                    url: web_url + '/home/work/shenheSave',
                    type: "post",
                    dataType: "json",
                    data: $('#workAddForm').serialize(),
                    success: function (obj) {
                        if (obj.status === 1001) {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#workAddForm').parent().prepend(str);
                        }else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#workAddForm').parent().prepend(str);
                        }
                        setTimeout(function () {
                            $("#formMsg").remove();
                        }, 1500);
                    }
                });
            }
        });

    });
</script>

</body>
</html>
