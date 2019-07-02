<?php /*a:2:{s:61:"/var/www/manager_cmlaw/application/rbac/view/user/create.html";i:1546067575;s:61:"/var/www/manager_cmlaw/application/rbac/view/public/base.html";i:1545996683;}*/ ?>
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
    员工创建
    <a href="<?php echo url('user/index'); ?>" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-list"></span>
        返回员工列表
    </a>
</h2>
<div class="row">
    <div class="col-md-12">
        <form method="post" id='userCreateForm'>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>员工姓名：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="user_realname" type="text" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>手机：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="user_phone" type="text" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>邮箱：</span></td>
                    <td>
                        <div class="width-60">
                            <input name="user_email" type="text" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>密码：</span></td>
                    <td>
                        <div class="width-30">
                            <input readonly name="login_password" type="text" class="form-control" value="<?php echo htmlentities($data['password']); ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>固话：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="user_tel" type="text" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>传真：</span></td>
                    <td>
                        <div class="width-30">
                            <input name="user_fax" type="text" class="form-control">
                        </div>
                    </td>
                </tr>


                <tr>
                    <td class="input-title text-right"><span>性别：</span></td>
                    <td>
                        <div class="width-100">
                            <label class="radio-inline">
                                <input type="radio" name="user_sex" value="男" checked="checked"> 男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="user_sex" value="女"> 女
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>办公室：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="fensuoid" data-placeholder="请选择分所">
                                <option value=""></option>
                                <?php if(is_array($data['fensuo']) || $data['fensuo'] instanceof \think\Collection || $data['fensuo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['fensuo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($list['idfensuo']); ?>"><?php echo htmlentities($list['fensuo_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <!--<tr style="display: none;">-->
                    <!--<td class="input-title text-right"><span>部门：</span></td>-->
                    <!--<td>-->
                        <!--<div class="width-30">-->
                            <!--<select class="form-control chosen-select" name="bumenid"  data-placeholder="请选择所在部门">-->
                                <!--<option value=""></option>-->
                                <!--<?php if(is_array($data['bumen']) || $data['bumen'] instanceof \think\Collection || $data['bumen'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['bumen'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>-->
                                <!--<option value="<?php echo htmlentities($list['idbumen']); ?>"><?php echo htmlentities($list['bumen_name']); ?></option>-->
                                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                            <!--</select>-->
                        <!--</div>-->
                    <!--</td>-->
                <!--</tr>-->

                <tr>
                    <td class="input-title text-right"><span>职位：</span></td>
                    <td>
                        <div class="width-30">
                            <select class="form-control chosen-select" name="zhiweiid" data-placeholder="请选择职位">
                                <option value=""></option>
                                <?php if(is_array($data['zhiwei']) || $data['zhiwei'] instanceof \think\Collection || $data['zhiwei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhiwei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($list['idzhiwei']); ?>"><?php echo htmlentities($list['zhiwei_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr style="display: none;">
                    <td class="input-title text-right"><span>业务领域：</span></td>
                    <td>
                        <div class="width-100">
                            <select class="form-control chosen-select" multiple name="user_lingyu[]" data-placeholder="选择业务领域">
                                <?php if(is_array($data['lingyu']) || $data['lingyu'] instanceof \think\Collection || $data['lingyu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['lingyu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($list['idlingyu']); ?>"><?php echo htmlentities($list['lingyu_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>

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

<script>
    $(function () {
        var fromCreateID = $("#userCreateForm");
        var fromUrl = web_url + '/home/user/save';
        fromCreateID.validate({
            ignore: ":hidden:not(select)",
            rules: {
                user_realname: {
                    required: true
                },
                user_phone: {
                    required: true
                },
                user_tel: {
                    required: true
                },
                bumenid: {
                    required: false
                },
                fensuoid: {
                    required: true
                },
                zhiweiid: {
                    required: true
                },
                user_email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                user_realname: {
                    required: '请输入员工姓名'
                },
                user_phone: {
                    required: "请输入手机号"
                },
                user_tel: {
                    required: "请输入固定电话"
                },
                bumenid: {
                    required: "请选择所在部门"
                },
                fensuoid: {
                    required: "请选择分所信息"
                },
                zhiweiid: {
                    required: "请选择员工职位"
                },
                user_email: {
                    required: "请输入邮箱地址",
                    email: "邮箱地址格式不正确"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
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
                            fromCreateID.val('');
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
    });
    // 初始化带检索的下拉框
    $(".chosen-select").chosen({
        no_results_text: "无结果!",
        search_contains: true
    });
</script>

</body>
</html>
