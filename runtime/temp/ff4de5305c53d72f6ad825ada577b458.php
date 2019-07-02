<?php /*a:2:{s:64:"/var/www/manager_cmlaw/application/home/view/anjian/renyuan.html";i:1545186980;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
            
            
<style>
    th {
        font-weight: normal;
        text-align: center;
    }

    .table-hover td {
        text-align: center;
    }
</style>
<h2 class="sub-header">
    案件人员变更
    <a href="<?php echo url('anjian/index'); ?>" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-list"></span>
        返回案件列表
    </a>
</h2>

<div class="row">
    <div class="col-md-12">
        <form class="form-inline pull-right">
            <div class="form-group">
                <div class="input-group" style="width: 300px;">
                    <select name="userid" class="form-control chosen-select " data-placeholder="选择增加人员">
                        <option value=""></option>
                        <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
                        <option name="userid" value="<?php echo htmlentities($select['iduser']); ?>">【<?php echo htmlentities($select['bumen_name']); ?>】<?php echo htmlentities($select['zhiwei_name']); ?> -
                            <?php echo htmlentities($select['user_realname']); ?>
                        </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-target="create" data-align="<?php echo htmlentities($data['info']['idanjian']); ?>">增加
            </button>
        </form>


    </div>
    <hr class="header-hr"/>
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>地区</th>
                <th>部门</th>
                <th>职位</th>
                <th>姓名</th>
                <th>电话</th>
                <th>邮箱</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="userlist">
            <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$renyuan): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($renyuan['fensuo_name']); ?></td>
                <td><?php echo htmlentities($renyuan['user_bumen']); ?></td>
                <td><?php echo htmlentities($renyuan['user_zhiwei']); ?></td>
                <td><?php echo htmlentities($renyuan['user_realname']); ?></td>
                <td><?php echo htmlentities($renyuan['user_phone']); ?></td>
                <td><?php echo htmlentities($renyuan['user_email']); ?></td>
                <td>
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <button type="button" data-target="delete" data-bind="<?php echo htmlentities($renyuan['iduser']); ?>"
                                data-align="<?php echo htmlentities($data['info']['idanjian']); ?>"
                                class="btn btn-danger">删除
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>


    <?php echo widget('kehu/getInfo',['id'=>$id]); ?>

    <?php echo widget('anjian/getInfo',['id'=>$id]); ?>
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

        $(".chosen-select").chosen({
            no_results_text: "无结果!",
            search_contains: true,
            allow_single_deselect: true
        });

        $(document).on('click', 'button', function (event) {
            var target = $(this).attr('data-target');
            var uid = $(this).attr('data-bind');
            var aid = $(this).attr('data-align');
            var dom = $(this);
            switch (target) {
                case 'delete':
                    $.post(web_url + '/home/anjian/renyuanDel/', {userid: uid, anjianid: aid}, function (obj) {
                        if (obj.status == '1001') {
                            dom.parent().parent().parent().remove();
                            $.growl.notice({message: obj.msg});
                        } else {
                            $.growl.error({message: obj.msg});
                        }

                    });
                    break;
                case 'create':
                    var userid = $("select[name='userid']").val();

                    $.ajax({
                        url: web_url + '/home/anjian/renyuanCreate',
                        type: "post",
                        dataType: "json",
                        data: {anjianid: aid, userid: userid},
                        success: function (obj) {
                            if (obj.status === 1001) {


                                var str = '<tr>\n' +
                                    '<td>' + obj.data.fensuo_name + '</td>\n' +
                                    '<td>' + obj.data.bumen_name + '</td>\n' +
                                    '<td>' + obj.data.zhiwei_name + '</td>\n' +
                                    '<td>' + obj.data.user_realname + '</td>\n' +
                                    '<td>' + obj.data.user_phone + '</td>\n' +
                                    '<td>' + obj.data.user_email + '</td>\n' +
                                    '<td>\n' +
                                    '<div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">\n' +
                                    '<button type="button" data-target="delete" data-bind="' + obj.data.iduser + '" data-align="' + obj.data.anjianid + '" class="btn btn-danger">删除\n' +
                                    '</button>\n' +
                                    '</div>\n' +
                                    '</td>\n' +
                                    '</tr>';
                                $.growl.notice({message: obj.msg});
                                $('#userlist').append(str);

                            } else {
                                $.growl.error({message: obj.msg});
                            }
                        }
                    });

                    break;
            }

        });

    });
</script>

</body>
</html>
