<?php /*a:2:{s:63:"/var/www/manager_cmlaw/application/rbac/view/lichong/index.html";i:1545186973;s:61:"/var/www/manager_cmlaw/application/rbac/view/public/base.html";i:1545996683;}*/ ?>
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
            
            
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">
            <?php if($data['status'] == '2'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('lichong/index',['status'=>2]); ?>">未使用
                    <?php if(!(empty($data['weishiyong']) || (($data['weishiyong'] instanceof \think\Collection || $data['weishiyong'] instanceof \think\Paginator ) && $data['weishiyong']->isEmpty()))): ?>
                    <span class="badge" style="background-color: #e61b1b;margin-top: -4px;"><?php echo htmlentities($data['weishiyong']); ?></span>
                    <?php endif; ?>
                </a>
            </li>

            <?php if($data['status'] == '9'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('lichong/index',['status'=>9]); ?>">未公示
                    <?php if(!(empty($data['weigongshi']) || (($data['weigongshi'] instanceof \think\Collection || $data['weigongshi'] instanceof \think\Paginator ) && $data['weigongshi']->isEmpty()))): ?>
                    <span class="badge" style="background-color: #e61b1b;margin-top: -4px;"><?php echo htmlentities($data['weigongshi']); ?></span>
                    <?php endif; ?>
                </a>
            </li>

            <?php if($data['status'] == '1'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('lichong/index',['status'=>1]); ?>">待完成
                    <?php if(!(empty($data['daiwancheng']) || (($data['daiwancheng'] instanceof \think\Collection || $data['daiwancheng'] instanceof \think\Paginator ) && $data['daiwancheng']->isEmpty()))): ?>
                    <span class="badge" style="background-color: #e61b1b;margin-top: -4px;"><?php echo htmlentities($data['daiwancheng']); ?></span>
                    <?php endif; ?>
                </a>
            </li>

            <?php if($data['status'] == '3'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('lichong/index',['status'=>3]); ?>">已使用
                    <?php if(!(empty($data['yishiyong']) || (($data['yishiyong'] instanceof \think\Collection || $data['yishiyong'] instanceof \think\Paginator ) && $data['yishiyong']->isEmpty()))): ?>
                    <span class="badge" style="background-color: #e61b1b;margin-top: -4px;"><?php echo htmlentities($data['yishiyong']); ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <?php if($data['status'] == '4'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('lichong/index',['status'=>4]); ?>">有冲突/作废
                    <?php if(!(empty($data['bohui']) || (($data['bohui'] instanceof \think\Collection || $data['bohui'] instanceof \think\Paginator ) && $data['bohui']->isEmpty()))): ?>
                    <span class="badge" style="background-color: #e61b1b;margin-top: -4px;"><?php echo htmlentities($data['bohui']); ?></span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>

        <div class="col-md-12 text-right">
            <form class="form-inline">
                <div class="input-group" style="float:left;">
                    <select  onchange="window.location.href=this.options[this.selectedIndex].value" class="form-control">
                        <option value="">显示条数</option>
                        <option value="<?php echo url('lichong/index',['paginate'=>10]); ?>">10条</option>
                        <option value="<?php echo url('lichong/index',['paginate'=>15]); ?>">15条</option>
                        <option value="<?php echo url('lichong/index',['paginate'=>20]); ?>">20条</option>
                    </select>
                </div>
                <div class="input-group" style="float:left;">
                    <select  onchange="window.location.href=this.options[this.selectedIndex].value" class="form-control">
                        <option value="">排序方式</option>
                        <option value="<?php echo url('lichong/index',['paixu'=>'update_time']); ?>">更新日期</option>
                        <option value="<?php echo url('lichong/index',['paixu'=>'kehu_name']); ?>">姓名（首字母）</option>
                    </select>
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">名称：</div>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">行业：</div>
                        <input type="text" class="form-control" name="hangye" value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">客户类型：</div>
                        <select name="kehu_leixing" class="form-control">
                            <option value="">请选择客户类型</option>
                            <option value="1">企业客户</option>
                            <option value="2">个人客户</option>
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">检索</button>
            </form>
        </div>


    <div class="col-md-12" id="woAnjianList">
        <p></p>
        <!--未公示列表-->
        <?php if($data['status'] == 9): ?>
        <table class="table table-border-book">
            <thead>
            <tr>
                <th>创建日期</th>
                <th>我方客户</th>
                <th>相对方客户</th>
                <th>相关方客户</th>
                <th width="100">负责合伙人</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities(substr($list['create_time'],0,10)); ?></td>
                <td><?php echo htmlentities($list['lichong_w_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_d_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_x_kehu']); ?></td>
                <td><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-right width160">
                    <form method="post" id="lichongAddForm" novalidate="novalidate">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">

                        <button type="button" data-toggle="kehu_geren" data-align="update" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">查看
                        </button>
                       <!-- <button type="button" data-toggle="kehu_geren" data-align="update" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-circle btn-yeelibaray btn-default">修改
                        </button>-->

                           <!-- <input type="hidden" name="idlichong" value="<?php echo htmlentities($list['idlichong']); ?>"/>-->
                            <input type="hidden" name="lichong_status" value="1"/>

                        <button type="button" data-toggle="kehu_geren" data-align="email" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-circle btn-yeelibaray btn-default">公示
                        </button>

                        <button type="button" data-toggle="kehu_geren"
                                data-align="delete" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">删除
                        </button>

                    </div>
                    </form>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--待完成列表-->
        <?php elseif($data['status'] == 1): ?>
        <table class="table table-border-book">
            <thead>
            <tr>
                <th>公示结束日期</th>
                <th>我方客户</th>
                <th>相对方客户</th>
                <th>相关方客户</th>
                <th width="100">负责合伙人</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities(substr($list['gongshijieshu_time'],0,10)); ?></td>
                <td><?php echo htmlentities($list['lichong_w_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_d_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_x_kehu']); ?></td>
                <td><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <button type="button" data-toggle="kehu_geren" data-align="read" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">查看
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--未使用列表-->
         <?php elseif($data['status'] == 2): ?>
        <table class="table table-border-book">
            <thead>
            <tr>
                <th width="100">利冲编号</th>
                <th>我方客户</th>
                <th>相对方客户</th>
                <th>相关方客户</th>
                <th width="100">负责合伙人</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <?php if(in_array(($list['lichong_status']), explode(',',"2,3"))): ?>
                    <?php echo htmlentities($list['lichong_number']); ?>
                    <?php endif; ?>
                </td>

                <td><?php echo htmlentities($list['lichong_w_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_d_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_x_kehu']); ?></td>
                <td><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <button type="button" data-toggle="kehu_geren" data-align="read" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">查看
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--已使用列表-->
        <?php elseif($data['status'] == 3): ?>
        <table class="table table-border-book">
            <thead>
            <tr>
                <th>公示结束日期</th>
                <th>我方客户</th>
                <th>相对方客户</th>
                <th>相关方客户</th>
                <th width="100">负责合伙人</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>

                    <?php echo htmlentities(substr($list['gongshijieshu_time'],0,10)); ?>

                </td>

                <td><?php echo htmlentities($list['lichong_w_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_d_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_x_kehu']); ?></td>
                <td><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">

                        <button type="button" data-toggle="kehu_geren" data-align="read" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">查看
                        </button>

                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--冲突列表-->
        <?php else: ?>
        <table class="table table-border-book">
            <thead>
            <tr>
                <th>公示结束日期</th>
                <th>客户</th>
                <th>相对方</th>
                <th>相关方</th>
                <th width="100">负责合伙人</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <?php echo htmlentities(substr($list['gongshijieshu_time'],0,10)); ?>
                </td>
                <td><?php echo htmlentities($list['lichong_w_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_d_kehu']); ?></td>
                <td><?php echo htmlentities($list['lichong_x_kehu']); ?></td>
                <td><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-right width160">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <button type="button" data-toggle="kehu_geren" data-align="read" data-bind="<?php echo htmlentities($list['idlichong']); ?>"
                                class="btn btn-link btn-default">查看
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <?php endif; ?>
        <nav class="text-center">
            <?php echo $data['page']; ?>
        </nav>
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


<script type="text/javascript">
    $(document).on('click', 'button[type="button"]', function (event) {
        var toggle = $(event.target).attr('data-toggle');
        var align = $(event.target).attr('data-align');
        var bind = $(event.target).attr('data-bind');
        var dom = $(this);
        switch (toggle) {
            case 'kehu_geren':
                switch (align) {
                    case 'read':
                        $(location).attr('href', web_url + '/home/lichong/read/id/' + bind);
                        break;
                    case 'update':
                        $(location).attr('href', web_url + '/home/lichong/create_2/id/' + bind);
                        break;
                    case 'shenhe':

                        $(location).attr('href', web_url + '/home/lichong/shenhe/id/' + bind);
                        break;
                    case 'email':
                        layer.confirm('确定要公示利冲并发送邮件吗', function(index) {
                                    $.ajax({
                                        url: web_url + '/home/lichong/tijiaoSave',
                                        type: "post",
                                        dataType: "json",
                                        data: {
                                            idlichong: bind,
                                            lichong_status: $("input[name='lichong_status']").val()
                                        }
                                    });
                                    //$("button[data-align='email']").html('邮件发送中...');
                                   /* $.post(web_url + '/home/email/lichongEmail', {lichong: bind}, function (obj, status) {
                                        if (status === 'success') {
                                            if (obj.status === 1001) {
                                                dom.parent().parent().parent();
                                                $.growl.notice({message: obj.msg});
                                            } else {
                                                $.growl.error({message: obj.msg});
                                            }
                                        }else {
                                            $.growl.error({message: status});
                                        }
                                        $("button[data-align='email']").html('公示');
                                    });*/
                                    layer.close(index);
                                });
                        break;
                    case 'delete':
                        layer.confirm('确定要删除该利冲吗', function(index) {
                            $.post(web_url + '/home/lichong/delete', {id: bind}, function (obj, status) {
                                if (status === 'success') {
                                    if (obj.status === '1001') {
                                        dom.parent().parent().parent();
                                        $.growl.notice({message: obj.msg});
                                    } else {
                                        $.growl.error({message: obj.msg});
                                    }
                                } else {
                                    $.growl.error({message: status});
                                }
                            });
                            layer.close(index);
                        });

                        break;
                    default:
                        $.growl.error({message: "没有相关操作!"});

                }
                break;
        }

    });
</script>


</body>
</html>
