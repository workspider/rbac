<?php /*a:2:{s:65:"/var/www/manager_cmlaw/application/home/view/anjian/zhengshi.html";i:1545186980;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1545996683;}*/ ?>
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
    预立案转正式
</h2>



<div class="row">
    <div class="col-md-12">
        <form method="post" id="anjianCreateForm" novalidate="novalidate">
            <table class="table table-bordered">
                <tbody>
                <tr style="display: none;">
                    <td class="input-title text-right"><span>案件编号：</span></td>
                    <td>
                        <div class="width-30">
                            <input type="number" name="anjian_number" class="form-control" readonly
                                   value="<?php echo htmlentities($data['info']['anjian_number']); ?>"/>
                        </div>
                    </td>
                </tr>
                <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">绑定利冲</span>
                    </span>
                </div>
                <p></p>
                <tr >
                    <td class="input-title text-right"><span>利冲编号：</span></td>
                    <td>
                        <div class="width-30">
                            <input type="number" name="lichongid" class="form-control"
                                   value="<?php echo htmlentities($data['info']['lichongid']); ?>"/>
                        </div>
                    </td>
                </tr>
               </tbody>
                </table>


            <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">案件及业务类型</span>
                    </span>
            </div>
            <p></p>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td class="input-title text-right"><span>案件类型：</span></td>
                    <td>
                        <div class="width-30">
                            <select name="zhongleiid" onchange="ch_fx(this)" class="form-control chosen-select" id="address" data-placeholder="选择案件类型">
                                <option value=""></option>
                                <?php if(is_array($data['zhonglei']) || $data['zhonglei'] instanceof \think\Collection || $data['zhonglei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['zhonglei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($select['id']); ?>"><?php echo htmlentities($select['value']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr id="xy" style="display:none">
                    <td class="input-title text-right"><span>案件子类型：</span></td>
                    <td>
                        <div class="width-30">
                            <select name="yewuleixingid" class="form-control chosen-select " data-placeholder="请选择类型">
                                <option value=""></option>
                                <?php if(is_array($data['yewuleixing']) || $data['yewuleixing'] instanceof \think\Collection || $data['yewuleixing'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['yewuleixing'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yewuleixing): $mod = ($i % 2 );++$i;?>

                                <option value="<?php echo htmlentities($yewuleixing['id']); ?>"><?php echo htmlentities($yewuleixing['value']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <script>
                    function ch_fx(t){
                        var select_id=t.selectedIndex;
                        if(t.options[select_id].value=="3") {
                            xy.style.display="";
                        }else {
                            xy.style.display="none";
                        }
                    }
                </script>
                </tbody>
            </table>

            <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">案件客户</span>
                    </span>
            </div>
            <p></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>企业信用代码</th>
                    <th>客户名称</th>
                    <!--<th>默认主客户</th>
                    <th>附属客户</th>-->
                </tr>
                </thead>

                <tbody id="kehu">
                    <td><?php echo htmlentities($data['info']['xinyongdaima']); ?></td>
                    <td><?php echo htmlentities($data['info']['kehu']); ?></td>
                    <!--<td>2</td>
                    <td>4</td>-->
                </tbody>

            </table>

            <!--<div class="text-center">
                <input type="hidden" name="idanjian" class="form-control"
                       value="<?php echo htmlentities($data['info']['idanjian']); ?>"/>
                <button type="submit" name="submit" value="zhuanzhengshi" class="btn btn-lg btn-yeelibaray"> 下一步</button>
            </div>-->
            <div class="text-center">
                <input type="hidden" name="idanjian" class="form-control" value="<?php echo htmlentities($data['info']['idanjian']); ?>"/>
                <button type="submit" name="submit" value="zhuanzhengshi"
                        class="btn btn-lg btn-yeelibaray"> 下一步，案件信息
                </button>
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

        $(document).on('click', 'button', function () {
            var dom = $(this);
            var align = dom.attr('data-align');
            if (align == 'jiansuoBtn') {
                $.ajax({
                    url: web_url + '/home/anjian/getKehu',
                    type: "post",
                    dataType: "json",
                    data: {key: $("input[name='key']").val()},
                    success: function (obj){
                        var str = '';
                        if (obj.status === 1001) {
                            $.each(obj.data, function (i, val) {
                                str += "<tr class='kehuListRadio'>" +
                                "<td>" + val.kehu_xinyongdaima +
                                "</td><td>" + val.kehu_name + "</td>" +
                                '<td><input type="radio" name="kehuid" id="kehuid" value="' + val.idkehu + '"> 默认</td>' +
                                '<td><input type="checkbox" name="kehu_kuozhan[]"  value="' + val.idkehu + '"></td>' +
                                "</tr>"
                            });
                            $("#kehu").append(str);
                        } else {
                            $("#kehu").html("<tr><td colspan='5'>" + obj.msg + "</td></tr>");
                        }
                    }
                });
            }
        });


        $(document).on('click', ':checkbox', function () {
            $(this).parent().parent().removeClass('kehuListRadio');
            $('.kehuListRadio').remove();
        });

        $('.form_datetime').datetimepicker({
            language: 'zh-CN',
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            weekStart: 1,
            minuteStep: 10,
            startView: 2,
            minView: 2,
            maxView: 2,
            todayBtn: true
        });

        // 初始化带检索的下拉框
        $("body .chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });

        $("input[name='zhengyi_type']:radio").click(function () {
            if ($(this).val() == '民事案件') {
                $(".leixing").show();
            }
            else {
                $(".leixing").hide();
            }
        });

        var web_url = '<?php echo htmlentities(app('config')->get('web_url')); ?>';
        $("#anjianCreateForm").validate({
            ignore: ":hidden:not(select)",
            errorPlacement: function (error, element) {
                if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element);
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
