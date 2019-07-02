<?php /*a:2:{s:67:"/var/www/manager_cmlaw/application/home/view/kehu/geren/update.html";i:1546853759;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
            
            
<style>
    th {
        font-weight: normal;
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">

            <li role="presentation" class="active">
                <a href="">个人客户信息修改</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <form method="post" id='kehuCreateForm'>

            <div class="col-md-12">
                <div class="create-content">
                    <div class="create-title">
                        <span class="glyphicon glyphicon-unchecked"></span> 基本信息
                    </div>
                    <div class="create-tools">

                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <table class="table table-no-bordered">
                    <tbody>
                    <tr>
                        <td style="width: 20%" class="input-title text-right"><span>姓名：</span></td>
                        <td style="width: 80%">
                            <div class="width-40">
                                <input name="kehu_name" type="text" class="form-control" value="<?php echo htmlentities($data['info']['kehu_name']); ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="input-title text-right"><span>电话：</span></td>
                        <td>
                            <div class="width-40">
                                <input name="kehu_dianhua" type="text" class="form-control"
                                       value="<?php echo htmlentities($data['info']['kehu_dianhua']); ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="input-title text-right"><span>所在地区</span></td>
                        <td>
                            <div class="width-40">
                                <select name="kehu_diqu" class="form-control chosen-select " data-placeholder="选择国家地区">
                                    <option value=""></option>
                                    <?php if(is_array($guojia) || $guojia instanceof \think\Collection || $guojia instanceof \think\Paginator): $i = 0; $__LIST__ = $guojia;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if($select['country_name'] == $data['info']['kehu_diqu']): ?>
                                    <option value="<?php echo htmlentities($select['country_name']); ?>" selected><?php echo htmlentities($select['country_name']); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo htmlentities($select['country_name']); ?>"><?php echo htmlentities($select['country_name']); ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="input-title text-right"><span>电子邮件：</span></td>
                        <td>
                            <div class="width-40">
                                <input name="kehu_youxiang" type="text" class="form-control"
                                       value="<?php echo htmlentities($data['info']['kehu_youxiang']); ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="input-title text-right"><span>证件类型：</span></td>
                        <td>
                            <div class="width-40">
                                <select name="kehu_zhengjianleixing" class="form-control chosen-select "
                                        data-placeholder="选择证件类型">
                                    <option value=""></option>
                                    
                                    <?php if(is_array($zhengjianleixing) || $zhengjianleixing instanceof \think\Collection || $zhengjianleixing instanceof \think\Paginator): $i = 0; $__LIST__ = $zhengjianleixing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhengjianleixing): $mod = ($i % 2 );++$i;if($zhengjianleixing['zhengjianleixing_name'] == $data['info']['kehu_zhengjianleixing']): ?>
                                    <option value="<?php echo htmlentities($zhengjianleixing['zhengjianleixing_name']); ?>" selected>
                                        <?php echo htmlentities($zhengjianleixing['zhengjianleixing_name']); ?>
                                    </option>
                                    <?php else: ?>
                                    <option value="<?php echo htmlentities($zhengjianleixing['zhengjianleixing_name']); ?>" >
                                        <?php echo htmlentities($zhengjianleixing['zhengjianleixing_name']); ?>
                                    </option>
                                    <?php endif; ?>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-title text-right"><span>证件号码：</span></td>
                        <td>
                            <div class="width-40">
                                <input type="text" name="kehu_shenfenzhenghao" class="form-control"
                                       value="<?php echo htmlentities($data['info']['kehu_shenfenzhenghao']); ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="input-title text-right"><span>注册地址：</span></td>
                        <td>
                            <div class="width-40">
                                <textarea name="kehu_dizhi" class="form-control" rows="5"><?php echo htmlentities($data['info']['kehu_dizhi']); ?></textarea>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>


                <div class="col-md-12">
                    <div class="create-content">
                        <div class="create-title">
                            <span class="glyphicon glyphicon-unchecked"></span> 补充信息
                        </div>
                        <div class="create-tools">

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-no-bordered">
                        <tbody>
                        <tr>
                            <td style="width: 20%" class="input-title text-right"><span>常用通讯地址</span></td>

                            <td style="width: 80%">
                                <div class="width-40">
                                    <input type="text" name="kehu_changyongdizhi" class="form-control"
                                           value="<?php echo htmlentities($data['info']['kehu_changyongdizhi']); ?>">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col-md-12">
                    <div class="create-content">
                        <div class="create-title">
                            <span class="glyphicon glyphicon-unchecked"></span> 客户联系人信息
                        </div>
                        <div class="create-tools">
                            <button class="btn btn-default" type="button" data-toggle="modal"
                                    data-target="#lianxirenModal">
                                添加客户联系人
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>职位</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>邮箱</th>
                            <th style="width: 60px;">操作</th>
                        </tr>
                        </thead>
                        <tbody id="kehuLianxirenList">
                        <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo htmlentities($user['lianxiren_zhiwei']); ?></td>
                            <td><?php echo htmlentities($user['lianxiren_realname']); ?></td>
                            <td><?php echo htmlentities($user['lianxiren_phone']); ?></td>
                            <td><?php echo htmlentities($user['lianxiren_email']); ?></td>
                            <td>
                                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                                    <button type="button" data-toggle="user" data-align="delete"
                                            data-bind="<?php echo htmlentities($user['idlianxiren']); ?>" class="btn btn-link btn-default">删除
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <input type="hidden" name="idkehu" class="form-control" value="<?php echo htmlentities($data['info']['idkehu']); ?>">
                        <button class="btn btn-primary btn-lg" style="width: 200px;">完 成</button>
                    </div>
                </div>
        </form>
    </div>
</div>

            


        </div>
    </div>

</div>


<!--语言添加-->
<div class="modal fade" id="lianxirenModal" tabindex="-1" role="dialog" aria-labelledby="lianxirenModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id='lianxirenCreateForm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="yuyanModalLabel">添加客户联系人</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="kehuid" value="<?php echo htmlentities($data['info']['idkehu']); ?>">
                    <input type="hidden" name="guanlian_id" value="###<?php echo htmlentities($data['info']['idkehu']); ?>">
                    <div class="form-group">
                        <label class="control-label">联系人姓名:</label>
                        <input type="text" name="lianxiren_realname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">职位:</label>
                        <input type="text" name="lianxiren_zhiwei" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">电话:</label>
                        <input type="text" name="lianxiren_phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label">邮件地址:</label>
                        <input type="text" name="lianxiren_email" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" name="lianxirenSubmit" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
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
            search_contains: true,
            allow_single_deselect: true
        });

        $("#lianxirenCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                kehuid: {
                    required: true
                },
                lianxiren_realname: {
                    required: true
                },
                lianxiren_phone: {
                    required: true
                },
                lianxiren_email: {
                    email: true
                }
            },
            messages: {
                kehuid: {
                    required: "请选择客户"
                },
                lianxiren_realname: {
                    required: "请输入联系人姓名"
                },
                lianxiren_phone: {
                    required: "请输入电话"
                },
                lianxiren_email: {
                    email: "邮箱格式不正确"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
            },
            submitHandler: function (form) {
                $("button[name='lianxirenSubmit']").hide();
                $.ajax({
                    url: web_url + '/home/kehu/lianxirenSave',
                    type: "post",
                    dataType: "json",
                    data: $('#lianxirenCreateForm').serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            var val = obj.data;
                            var str =
                                "<tr>" +
                                "<td>" + val.lianxiren_zhiwei + "</td>" +
                                "<td>" + val.lianxiren_realname + "</td>" +
                                "<td>" + val.lianxiren_phone + "</td>" +
                                "<td>" + val.lianxiren_email + "</td>" +
                                '<td><div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">' +
                                '<button type="button" data-toggle="user" data-align="delete" data-bind="' + val.idlianxiren + '" class="btn btn-link btn-default">删除</button>' +
                                "</div>" +
                                "</td>" +
                                "</tr>";
                            $("#kehuLianxirenList").append(str);
                            $("button[name='lianxirenSubmit']").show();
                            $("#lianxirenCreateForm input[type='text']").val("");
                            $.growl.notice({message: obj.msg});
                        } else {
                            $.growl.error({message: obj.msg});
                        }
                    }
                });
            }
        });
        $(document).on('click', 'button[data-toggle="user"]', function (event) {
            var align = $(event.target).attr('data-align');
            var bind = $(event.target).attr('data-bind');
            var dom = $(this);
            switch (align) {
                case 'delete':
                    if (confirm('确认删除联系人吗？') == true) {
                        $.post(web_url + '/home/kehu/lianxirenDelete', {id: bind}, function (obj, status) {
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
            }

        });

        $("#kehuCreateForm").validate({
            rules: {
                kehu_name: {
                    required: true
                },
                kehu_dianhua: {
                    required: true
                },
                kehu_shenfenzhenghao: {
                    required: true
                },
                kehu_youxiang: {
                    email: true
                }
            },
            messages: {
                kehu_name: {
                    required: "请填写客户名称"
                },
                kehu_dianhua: {
                    required: "请填写电话"
                },
                kehu_shenfenzhenghao: {
                    required: "请输入证件号码"
                },
                kehu_youxiang: {
                    email: "邮箱格式不正确"
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    url: web_url + '/home/kehu/save',
                    type: "post",
                    dataType: "json",
                    data: $('#kehuCreateForm').serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#kehuCreateForm').parent().prepend(str);
                            setTimeout(function () {
                                $("#formMsg").remove();
                                $(window).attr('location', web_url + "/home/kehu/index/");
                            }, 1000);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#kehuCreateForm').parent().prepend(str);
                            setTimeout(function () {
                                $("#formMsg").remove();
                            }, 2000);
                        }

                    }
                });
            }
        });

        $(document).on('click', 'button[type="button"]', function (event) {
            var align = $(event.target).attr('data-align');
            var url = $(event.target).attr('data-url');
            var target = $(event.target).attr('data-target');
            var bind = $(event.target).attr('data-bind');
            var dom = $(this);
            switch (align) {
                case 'tools':
                    switch (target) {
                        case 'delete':
                            layer.confirm('确定要删除吗', function (index) {
                                $.post(web_url + url, {id: bind}, function (obj, status) {
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

                    }
                    break;
            }

        });

    });
</script>

</body>
</html>
