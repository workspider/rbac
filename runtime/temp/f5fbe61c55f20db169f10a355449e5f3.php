<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/sky/view/anjian/kehu.html";i:1545186980;s:60:"/var/www/manager_cmlaw/application/sky/view/public/base.html";i:1558575205;}*/ ?>
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
    案件创建
    <small>选择客户</small>
</h2>

<div class="col-md-12" style="margin-bottom: 30px;">
    <div class="mt-element-step">
        <div class="row step-line">
            <div class="col-md-6 mt-step-col first active">
                <div class="mt-step-number bg-white">1</div>
                <div class="mt-step-title uppercase font-grey-cascade">客户信息</div>
            </div>
            <div class="col-md-6 mt-step-col last ">
                <div class="mt-step-number bg-white">2</div>
                <div class="mt-step-title uppercase font-grey-cascade">案件详细信息</div>
            </div>
        </div>
    </div>
</div>

<form method="post" id="anjianCreateForm" novalidate="novalidate" onkeydown="if(event.keyCode==13){return false;}">
    <div class="row">
        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 绑定利冲
                </div>
                <div class="create-tools">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%" class="input-title text-right"><span>利冲编号：</span></td>
                    <td style="width: 80%">
                        <div class="width-30">
                            <input type="number" name="lichongid" class="form-control" value="99999999"/>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 案件种类及类型
                </div>
                <div class="create-tools">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%" class="input-title text-right"><span>案件类型：</span></td>
                    <td style="width: 80%">
                        <div class="width-30">
                            <select name="zhongleiid" onchange="ch_fx(this)" class="form-control chosen-select"
                                    id="address" data-placeholder="选择案件类型">
                                <option value=""></option>
                                <?php if(is_array($data['zhonglei']) || $data['zhonglei'] instanceof \think\Collection || $data['zhonglei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhonglei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($select['id']); ?>"><?php echo htmlentities($select['value']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>

                        <div class="width-30" id="xy" style="margin-left:20px; display:none">
                            <select name="yewuleixingid" class="form-control chosen-select "
                                    data-placeholder="请选择案件子类型">
                                <option value=""></option>
                                <?php if(is_array($data['yewuleixing']) || $data['yewuleixing'] instanceof \think\Collection || $data['yewuleixing'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['yewuleixing'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yewuleixing): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($yewuleixing['idyewuleixing']); ?>"><?php echo htmlentities($yewuleixing['yewuleixing_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">

            <div class="create-content">
                <div class="create-title">
                    <span class="glyphicon glyphicon-unchecked"></span> 案件客户
                </div>
                <div class="create-tools">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="200">企业信用代码</th>
                    <th width="400">客户名称</th>
                    <th>操作</th>
                </tr>
                </thead>

                <tbody id="kehu">

                </tbody>

            </table>
            <table class="table table-no-bordered">
                <tbody>
                <tr>
                    <td style="width: 20%" class="input-title text-right"><span>客户：</span></td>
                    <td style="width: 80%">
                        <div class="width-60">
                            <input type="text" name="key" class="form-control" placeholder="输入企业名称或信用代码号">
                        </div>
                        <div class="width-20">
                            <button type="button" data-align="jiansuoBtn" class="btn btn-primary"
                                    style="margin-left: 10px;">检索
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table table-bordered" id="kehuList"></table>
        </div>
        <div class="col-md-12">
            <div class="text-center">
                <button type="submit" style="display: none;" name="submit" value="kehu"
                        class="btn btn-lg btn-yeelibaray"> 下一步，案件信息
                </button>
            </div>

        </div>

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
    function ch_fx(t) {
        var select_id = t.selectedIndex;
        if (t.options[select_id].value == "3") {
            xy.style.display = "";
        } else {
            xy.style.display = "none";
        }
    }

    $(document).on('click', 'button', function () {
        var dom = $(this);
        var align = dom.attr('data-align');
        var id = dom.attr('data-bind');
        if (align == 'jiansuoBtn') {
            $.ajax({
                url: web_url + '/home/anjian/getKehu',
                type: "post",
                dataType: "json",
                data: {key: $("input[name='key']").val()},
                success: function (obj) {
                    var str = '<thead><tr><th width="200">企业信用代码</th><th width="400">客户名称</th><th width=""></th></tr></thead><tbody>';
                    if (obj.status === 1001) {
                        $.each(obj.data, function (i, val) {
                            str += "" +
                                "   <tr class='kehuListRadio' id='listView-"+val.idkehu+"'>" +
                                "       <td>" + val.kehu_xinyongdaima + "</td>" +
                                "       <td>" + val.kehu_name + "</td>" +
                                '       <td><button type="button" data-align="xuanze" data-bind="'+val.idkehu+'" class="btn btn-info btn-xs"> 选 择 </button></td>' +
                                "   </tr>" +
                                ""
                        });

                        str +='</tbody>';
                        $("#kehuList").html(str);
                    } else {
                        $("#kehuList").html("<tr><td colspan='5'>" + obj.msg + "</td></tr>");
                    }
                }
            });
        }
        else if(align == 'xuanze'){
            $.ajax({
                url: web_url + '/home/anjian/getKehuRead',
                type: "post",
                dataType: "json",
                data: {key: id},
                success: function (obj) {
                    var str = '';
                    if (obj.status === 1001) {
                        var yn = $('td').find('input[name="kehuid"]').length;
                        dom.parent().parent().hide();
                        $.each(obj.data, function (i, val) {
                            str += "" +
                                "   <tr class='kehuListRadio'>" +
                                "       <td>" + val.kehu_xinyongdaima + "</td>" +
                                "       <td>" + val.kehu_name + "</td>" +
                                '       <td>' +
                                '<input type="hidden" style="border: 1px red solid" name="kehu_kuozhan[]" value="'+val.idkehu+'">' +
                                '<button type="button" data-align="delete" data-bind="'+val.idkehu+'" class="btn btn-link btn-xs" style="color: red"> 取消关联 </button>';

                            if(yn ==0) {
                                str +=
                                    '<button type="button" data-align="moren" data-bind="' + val.idkehu + '" class="btn btn-link btn-danger btn-xs"> 设为默认 </button>';
                            }
                            else{
                                str +=
                                    '<button type="button" style="display: none;" data-align="moren" data-bind="' + val.idkehu + '" class="btn btn-link btn-danger btn-xs"> 设为默认 </button>';
                            }
                            str +=
                                '</td>' +
                                "   </tr>";
                        });
                        $("#kehu").append(str);
                    } else {
                        $("#kehu").html("<tr><td colspan='5'>" + obj.msg + "</td></tr>");
                    }
                }
            });
        }
        else if(align == 'delete'){
            $("#listView-"+id).show();
            dom.parent().parent().remove();
        }
        else if(align == 'moren'){
            $("button[data-align='moren']").hide();
            dom.parent().append('<button type="button" data-align="quxiaomoren" data-bind="'+id+'" class="btn btn-link btn-danger btn-xs"> 取消默认 </button>');
            dom.parent().prepend('<input type="hidden" name="kehuid" value="'+id+'">');
            dom.parent().find('input[name="kehu_kuozhan[]"]').remove();
            $("button[value='kehu']").show();


        }
        else if(align == 'quxiaomoren'){
            dom.parent().prepend('<input type="hidden" style="border: 1px red solid" name="kehu_kuozhan[]" value="'+id+'">');
            dom.parent().find('input[name="kehuid"]').remove();
            $("button[data-align='moren']").show();
            $("button[data-align='quxiaomoren']").remove();
            $("button[value='kehu']").hide();

        }
    });

    $(document).on('click', ':radio', function () {
        $(this).parent().parent().removeClass('kehuListRadio');
        $('.kehuListRadio').remove();
        $("button[value='kehu']").show();
    });

    $(document).on('click', ':checkbox', function () {
        $(this).parent().parent().removeClass('kehuListRadio');
        $('.kehuListRadio').remove();
    });

    $(function () {
        // 带检索下拉框出发事件
        $('.chosen-select').on('change', function (e, params) {
            switch ($(e.target).attr('name')) {
                case 'kehuid':
                    $.ajax({
                        url: web_url + '/home/kehu/getLianxiren',
                        type: "post",
                        dataType: "json",
                        data: {id: params.selected},
                        success: function (obj) {
                            var str = '';
                            $(".kehuLianxiren").show();
                            $("input[name='kehuid']").val(params.selected);
                            if (obj.status === '1001') {
                                $.each(obj.data, function (i, val) {
                                    str += "<tr>" +
                                        "<td>" + val.lianxiren_zhiwei + "</td>" +
                                        "<td>" + val.lianxiren_realname + "</td>" +
                                        "<td>" + val.lianxiren_phone + "</td>" +
                                        "<td>" + val.lianxiren_email + "</td>" +
                                        "<td>" + val.create_time + "</td>" +
                                        "</tr>"
                                });
                                $("#kehuLianxirenList").html(str);
                            }
                        }
                    });
                    break;
                default:
            }
        });

        // 初始化带检索的下拉框
        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });

        // 案件创建
        $("#anjianCreateForm").validate({
            ignore: ":hidden:not(select)",
            rules: {
                kehuid: {
                    required: true
                },
                lichongid: {
                    required: false,
                    number: true
                },
                zhongleiid:{
                    required:true
                }
            },
            messages: {
                kehuid: {
                    required: "请选择客户"
                },
                lichongid: {
                    required: "请输入利冲编号",
                    number: "请输入正确的利冲编号"
                },
                zhongleiid:{
                    required:"请选择案件类型"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                } else error.insertAfter(element);
            },


            submitHandler: function (form) {
                $.ajax({
                    url: web_url + '/home/anjian/save',
                    type: "post",
                    dataType: "json",
                    data: $('#anjianCreateForm').serialize(),
                    success: function (obj) {
                        if (obj.status === '1001') {
                            str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#anjianCreateForm').parent().prepend(str);

                            $(window).attr('location', web_url + "/home/anjian/create/number/" + obj.data);

                        } else {
                            str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                            $('#anjianCreateForm').parent().prepend(str);
                        }
                        setTimeout(function () {
                            $("#formMsg").remove();
                        }, 1000);

                    }
                });
            }
        });
    });
</script>

</body>
</html>
