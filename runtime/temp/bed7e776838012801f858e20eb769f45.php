<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/home/view/work/index.html";i:1545186975;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
    <!--主列表选项 开始-->
    <div class="col-md-12">
        <ul class="nav nav-tabs nav-tabs-order">
            <?php if(empty($data['status']) || (($data['status'] instanceof \think\Collection || $data['status'] instanceof \think\Paginator ) && $data['status']->isEmpty())): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('work/index'); ?>">全部</a>
            </li>

            <?php if($data['status'] == '1'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('work/index',['work_status'=>1]); ?>">未审核</a>
            </li>

            <?php if($data['status'] == '2'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('work/index',['work_status'=>2]); ?>">已审核</a>
            </li>

            <?php if($data['status'] == '4'): ?>
            <li role="presentation" class="active">
                <?php else: ?>
            <li role="presentation">
                <?php endif; ?>
                <a href="<?php echo url('work/index',['work_status'=>4]); ?>">被驳回</a>
            </li>

        </ul>
    </div>
    <!--主列表选项 结束-->
</div>

<div class="row">
    <!--任务列表检索工具 开始-->
    <div class="col-md-12 text-right">
        <form class="form-inline">

            <?php if(is_array($viewConfig['searchBar']) || $viewConfig['searchBar'] instanceof \think\Collection || $viewConfig['searchBar'] instanceof \think\Paginator): $i = 0; $__LIST__ = $viewConfig['searchBar'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><?php echo htmlentities($search['title']); ?>：</div>
                    <?php switch($search['type']): case "text": ?>
                    <input type="text" class="form-control" name="<?php echo htmlentities($search['key']); ?>"
                           value="<?php echo $data['search'][$search['key']]?>">
                    <?php break; case "select": ?>
                    <select class="form-control" name="<?php echo htmlentities($search['key']); ?>">
                        <?php if(is_array($search['data']) || $search['data'] instanceof \think\Collection || $search['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if($select['id'] == $data['search'][$search['key']]):?>
                        <option value="<?php echo htmlentities($select['id']); ?>" selected><?php echo htmlentities($select['value']); ?></option>
                        <?php else:?>
                        <option value="<?php echo htmlentities($select['id']); ?>"><?php echo htmlentities($select['value']); ?></option>
                        <?php endif;?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <?php break; case "select-chosen": ?>
                    <select class="form-control chosen-select" name="<?php echo htmlentities($search['key']); ?>"
                            data-placeholder="选择<?php echo htmlentities($search['title']); ?>">
                        <option value=""></option>
                        <?php if(is_array($search['data']) || $search['data'] instanceof \think\Collection || $search['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;if($select['id'] == $data['search'][$search['key']]):?>
                        <option value="<?php echo htmlentities($select['id']); ?>" selected><?php echo htmlentities($select['value']); ?></option>
                        <?php else:?>
                        <option value="<?php echo htmlentities($select['id']); ?>"><?php echo htmlentities($select['value']); ?></option>
                        <?php endif;?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <?php break; case "date": ?>
                    <input type="text" class="form-control form_datetime" name="<?php echo htmlentities($search['key']); ?>"
                           value="<?php echo $data['search'][$search['key']]?>">
                    <?php break; default: ?>
                    <?php endswitch; ?>

                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <button type="submit" class="btn btn-primary">检索</button>
        </form>
    </div>
    <!--任务列表检索工具 结束-->
</div>

<div class="space"></div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover table-border-book">
            <thead>
            <tr>
                <th class="" width="100">日期</th>
                <th class="" width="300">案件名称</th>
                <th class="">工作描述</th>
                <th class="" width="100">计时（Unit）</th>

                <th class="" width="80">提交人</th>
                <th class="text-right" width="130">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <?php if(is_array($viewConfig['data']['key']) || $viewConfig['data']['key'] instanceof \think\Collection || $viewConfig['data']['key'] instanceof \think\Paginator): $i = 0; $__LIST__ = $viewConfig['data']['key'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$title): $mod = ($i % 2 );++$i;?>
                <td><?php echo $list[$title];?></td>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <td class="text-right">
                    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                        <?php if(in_array('read',$viewConfig['tools']['action'])):?>
                        <button type="button" data-align="tools" data-target="read"
                                data-bind="<?php echo $list[$viewConfig['tools']['key']];?>"
                                data-url="<?php echo url($viewConfig['tools']['url'].'/read',['id'=>$list[$viewConfig['tools']['key']]]); ?>"
                                class="btn btn-link btn-default">查看
                        </button>
                        <?php endif;if(in_array('edit',$viewConfig['tools']['action'])):if($list['work_status'] != '2'): if($list['iduser'] == $system['user']['iduser']): ?>
                        <button type="button" data-align="tools" data-target="edit"
                                data-bind="<?php echo $list[$viewConfig['tools']['key']];?>"
                                data-url="<?php echo url($viewConfig['tools']['url'].'/edit',['id'=>$list[$viewConfig['tools']['key']]]); ?>"
                                class="btn btn-link btn-default">修改
                        </button>
                        <button type="button" data-align="tools" data-target="delete"
                                data-bind="<?php echo $list[$viewConfig['tools']['key']];?>"
                                data-url="<?php echo url($viewConfig['tools']['url'].'/delete',['id'=>$list[$viewConfig['tools']['key']]]); ?>"
                                class="btn btn-link btn-default">删除
                        </button>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif;if($list['work_status'] == '1'): if($system['user']['zhiwei_name'] == '合伙人'): ?>
                        <button type="button" data-align="tools" data-target="shenhe"
                                data-bind="<?php echo $list[$viewConfig['tools']['key']];?>"
                                data-url="<?php echo url($viewConfig['tools']['url'].'/shenhe',['id'=>$list[$viewConfig['tools']['key']]]); ?>"
                                class="btn btn-link btn-default">审核
                        </button>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
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

        $(document).on('click', 'button[type="button"]', function (event) {
            var align = $(event.target).attr('data-align');
            var url = $(event.target).attr('data-url');
            var target = $(event.target).attr('data-target');
            var bind = $(event.target).attr('data-bind');
            var dom = $(this);
            console.log(target);
            switch (target) {
                case 'read':
                    $(location).attr('href', web_url + url);
                    break;
                case 'edit':
                    $(location).attr('href', web_url + url);
                    break;
                case 'shenhe':
                    $(location).attr('href', web_url + url);
                    break;
                case 'delete':
                    if (confirm('确定删除吗？') == true) {
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
                    } else {
                        return false;
                    }
                    break;

                default:
                    $.growl.error({message: "没有相关操作!"});

            }

        });

    });
</script>

</body>
</html>
