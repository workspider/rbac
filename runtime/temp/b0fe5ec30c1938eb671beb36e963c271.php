<?php /*a:2:{s:72:"/var/www/manager_cmlaw/application/home/view/kehu/qiye/create_step2.html";i:1545186989;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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

    #kehuLianxirenList td{
        text-align: center;
    }
</style>
<div class="row">
    <div class="mt-element-step" style="margin-bottom: 30px;">
        <div class="mt-element-step">
            <div class="row step-line">
                <div class="col-md-6 mt-step-col first done">
                    <div class="mt-step-number bg-white">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">信息录入</div>
                </div>
                <div class="col-md-6 mt-step-col last active">
                    <div class="mt-step-number bg-white">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">确认提交</div>
                </div>
            </div>
        </div>

    </div>
    <form method="post" id='kehuCreateForm'>

        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 客户信息
                </div>
                <div class="create-tools"></div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>名称</span></td>
                    <td colspan="3">
                        <input type="text" readonly name="kehu_name" class="form-control" value="">
                    </td>

                </tr>
                <tr>
                    <td style="width: 15%;" class="input-title text-right"><span>社会信用代码</span></td>
                    <td style="width: 35%;">
                        <input type="text" readonly name="kehu_xinyongdaima" class="form-control" value="">
                    </td>
                    <td style="width: 15%;" class="input-title text-right"><span>经营状态</span></td>
                    <td style="width: 35%;">
                        <input type="text" readonly name="kehu_zaiye" class="form-control" value="">
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>公司类型</span></td>
                    <td>
                        <input type="text" readonly name="kehu_leixing" class="form-control" value="">
                    </td>
                    <td class="input-title text-right"><span>法定代表人</span></td>
                    <td>
                        <input type="text" readonly name="kehu_faren" class="form-control" value="">
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>注册资本</span></td>
                    <td>
                        <input type="text" readonly name="kehu_ziben" class="form-control" value="">
                    </td>
                    <td class="input-title text-right"><span>成立日期</span></td>
                    <td>
                        <input type="text" readonly name="kehu_chengliriqi" class="form-control" value="">
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>所属行业</span></td>
                    <td>
                        <input type="text" readonly name="kehu_industry" class="form-control" value="">
                    </td>


                    <td class="input-title text-right"><span>登记机关</span></td>
                    <td>
                        <input type="text" readonly name="kehu_gongshangju" class="form-control" value="">
                    </td>
                </tr>

                <tr>
                    <td class="input-title text-right"><span>营业期限（起）</span></td>
                    <td>
                        <div class="width-100">
                            <input type="text" readonly name="kehu_kashiriqi" class="form-control" value="">
                        </div>
                    </td>
                    <td class="input-title text-right"><span>营业期限（至）</span></td>
                    <td>
                        <div class="width-100">
                            <input type="text" readonly name="kehu_jieshuriqi" class="form-control" value="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>企业地址</span></td>
                    <td colspan="3">
                        <input type="text" readonly name="kehu_dizhi" class="form-control"
                               value="">
                    </td>
                </tr>
                <tr>
                    <td class="input-title text-right"><span>经营范围</span></td>
                    <td colspan="3">
                        <textarea readonly name="kehu_jingyingfanwei" class="form-control" rows="3"></textarea>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 补充信息
                </div>
                <div class="create-tools"></div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 15%" class="input-title text-right"><span>自定义行业</span></td>
                    <td style="width: 85%">
                        <div class="width-60">
                            <select name="kehu_hangye[]" multiple class="form-control chosen-select"
                                    data-placeholder="选择自定义行业">
                                <option value=""></option>
                                <?php if(is_array($data['hangyeleixing']) || $data['hangyeleixing'] instanceof \think\Collection || $data['hangyeleixing'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['hangyeleixing'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hangyeleixing): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($hangyeleixing['hangye_name']); ?>"><?php echo htmlentities($hangyeleixing['hangye_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td class="input-title text-right"><span>常用通讯地址</span></td>
                    <td>
                        <div class="width-60">
                            <input type="text" name="kehu_changyongdizhi" class="form-control" value="">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 客户联系人
                </div>
                <div class="create-tools">
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#lianxirenModal">
                        添加客户联系人
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">职位</th>
                    <th class="text-center">姓名</th>
                    <th class="text-center">电话</th>
                    <th class="text-center">邮箱</th>
                    <th class="text-center" style="width: 80px;">操作</th>
                </tr>
                </thead>
                <tbody id="kehuLianxirenList">

                </tbody>
            </table>
        </div>
        <div class="text-center">
            <input type="hidden" readonly name="kehu_type" class="form-control" value="1">
            <input type="hidden" name="number" value="<?php echo htmlentities($data['number']); ?>">
            <a href="<?php echo url('kehu/create'); ?>" class="btn btn-default">返回上一步，重新检索</a>
            <button type="submit" class="btn btn-primary">保存客户信息</button>
        </div>
    </form>

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
                    <input type="hidden" name="guanlian_id" value="<?php echo htmlentities($data['number']); ?>">
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

    // 初始化带检索的下拉框
    $(".chosen-select").chosen({
        no_results_text: "无结果!",
        search_contains: true
    });
    $.ajax({
        url: web_url + '/home/qixinbao/see',
        type: "post",
        dataType: "json",
        data: {
            title: "<?php echo htmlentities($data['number']); ?>",
            leixing: "<?php echo htmlentities($data['leixing']); ?>"
        },
        success: function (obj) {
            if (obj.status === 1001) {
                $('input[name="kehu_name"]').val(obj.data.name);
                $('input[name="kehu_xinyongdaima"]').val(obj.data.creditCode);
                $('input[name="kehu_zaiye"]').val(obj.data.regStatus);
                $('input[name="kehu_zuzhijigouhao"]').val(obj.data.orgNumber);
                $('input[name="kehu_zhucehao"]').val(obj.data.regNumber);
                $('input[name="kehu_leixing"]').val(obj.data.companyOrgType);
                $('input[name="kehu_faren"]').val(obj.data.legalPersonName);
                $('input[name="kehu_ziben"]').val(obj.data.regCapital);
                $('input[name="kehu_chengliriqi"]').val(obj.data.estiblishTime);
                $('input[name="kehu_kashiriqi"]').val(obj.data.fromTime);
                $('input[name="kehu_jieshuriqi"]').val(obj.data.toTime);
                $('input[name="kehu_gongshangju"]').val(obj.data.regInstitute);
                $('input[name="kehu_industry"]').val(obj.data.industry);
                $('input[name="kehu_dizhi"]').val(obj.data.regLocation);
                $('textarea[name="kehu_jingyingfanwei"]').val(obj.data.businessScope);
            }
        }
    });

    $(function () {
        $("#b7").click(function () {
            layer.open({
                type: 1,
                shift: 7,
                shadeClose: true
                , content: $('#lianxirenCreateForm'),
                end: function () {
                    $('#lianxirenCreateForm').hide();
                }
            });
        });


        // 联系人添加
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
                                '<button type="button" data-toggle="user" data-align="delete" data-bind="'+val.idlianxiren+'" class="btn btn-link btn-default">删除</button>' +
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
                    layer.confirm('确定要删除联系人吗', function(index) {
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
                        layer.close(index);
                    });
                    break;
            }

        });

        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });
        $("#kehuCreateForm").validate({
            rules: {
                hehuorenid: {
                    required: true
                }
            },
            messages: {
                hehuorenid: {
                    required: "请选择合伙人客户名称"
                }
            },

            submitHandler: function (form) {
                $.ajax({
                    url: web_url + '/home/kehu/qiyesave',
                    type: "post",
                    dataType: "json",
                    data: $('#kehuCreateForm').serialize(),
                    success: function (obj) {
                        if (obj.status == 1001) {
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
    });
</script>

</body>
</html>
