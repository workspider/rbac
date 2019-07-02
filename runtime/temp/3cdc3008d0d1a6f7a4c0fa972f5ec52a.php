<?php /*a:2:{s:60:"/var/www/manager_cmlaw/application/rbac/view/kehu/index.html";i:1545186981;s:61:"/var/www/manager_cmlaw/application/rbac/view/public/base.html";i:1545996683;}*/ ?>
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
    客户列表
</h2>
<div class="row">

    <div class="col-md-12 text-right">
        <form class="form-inline">
            <div class="input-group" style="float:left;">
                <select  onchange="window.location.href=this.options[this.selectedIndex].value" class="form-control">
                    <option value="">显示条数</option>
                    <option value="<?php echo url('kehu/index',['paginate'=>10]); ?>">10条</option>
                    <option value="<?php echo url('kehu/index',['paginate'=>15]); ?>">15条</option>
                    <option value="<?php echo url('kehu/index',['paginate'=>20]); ?>">20条</option>
                </select>
            </div>
            <div class="input-group" style="float:left;">
                <select  onchange="window.location.href=this.options[this.selectedIndex].value" class="form-control">
                    <option value="">排序方式</option>
                    <option value="<?php echo url('kehu/index',['paixu'=>'update_time']); ?>">更新日期</option>
                    <option value="<?php echo url('kehu/index',['paixu'=>'kehu_name']); ?>">客户名称</option>
                </select>
            </div>
            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-addon">名称：</div>
                    <input type="text" class="form-control" name="name" value="<?php echo htmlentities($data['search']['name']); ?>">
                </div>
                <div class="input-group">
                    <div class="input-group-addon">行业：</div>
                    <input type="text" class="form-control" name="hangye" value="<?php echo htmlentities($data['search']['hangye']); ?>">
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
</div>

<p></p>
<div class="table-responsive">
    <table class="table table-striped table-hover table-border-book">
        <thead>
        <tr>
            <th>编号</th>
            <th>社会统一信用代码</th>
            <th>客户名称</th>
            <th>类型/行业</th>
            <th>更新日期</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo htmlentities($list['idkehu']); ?></td>
            <td><?php if($list['kehu_type']=='1'): ?>
                <?php echo htmlentities($list['kehu_xinyongdaima']); elseif($list['kehu_type']=='3'): ?>
                <?php echo htmlentities($list['kehu_xinyongdaima']); else: ?>
                N/A
                <?php endif; ?>
            </td>

            <td><?php if(($list['kehu_type']==1) OR ($list['kehu_type']==3)): ?>
                <?php echo htmlentities($list['kehu_name']); ?><br>
                法定代表人：<?php echo htmlentities($list['kehu_faren']); else: ?>
                <?php echo htmlentities($list['kehu_name']); ?><br>
                证件号码：<?php echo htmlentities($list['kehu_shenfenzhenghao']); ?>
                <?php endif; ?>
            </td>

            <td><?php if($list['kehu_type']=='1'): ?>
                类型：<?php echo htmlentities($list['kehu_leixing']); ?><br>
                行业：<?php echo htmlentities($list['kehu_industry']); ?>,<?php echo htmlentities($list['kehu_hangye']); elseif($list['kehu_type']=='3'): ?>
                类型：<?php echo htmlentities($list['kehu_leixing']); ?><br>
                行业：<?php echo htmlentities($list['kehu_hangye']); else: ?>
                类型：个人客户<br>
                国籍：<?php echo htmlentities($list['kehu_diqu']); ?>
                <?php endif; ?>
            </td>
            <td>
                <?php if($list['update_time'] > '2'): ?>
                <?php echo htmlentities(substr($list['update_time'],0,10)); ?>
                <?php endif; ?>
            </td>
            <!--<td><?php echo htmlentities($list['hehuorenid']); ?></td>-->
            <td class="text-right width160">
                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                    <?php if($list['kehu_type'] =='1'): ?>
                    <a href="<?php echo url('kehu/edit',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">编辑</a>
                    <?php elseif($list['kehu_type'] == '3'): ?>
                    <a href="<?php echo url('kehu/qiyeupdate',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">编辑</a>
                    <?php else: ?>
                    <a href="<?php echo url('kehu/update',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">编辑</a>
                    <?php endif; if($list['kehu_type'] =='1'): ?>
                    <a href="<?php echo url('kehu/read',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">查看</a>
                    <?php elseif($list['kehu_type'] == '3'): ?>
                    <a href="<?php echo url('kehu/qiyeread',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">查看</a>
                    <?php else: ?>
                    <a href="<?php echo url('kehu/gerenread',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">查看</a>
                    <?php endif; if(empty($list['kehu_xinyongdaima']) || (($list['kehu_xinyongdaima'] instanceof \think\Collection || $list['kehu_xinyongdaima'] instanceof \think\Paginator ) && $list['kehu_xinyongdaima']->isEmpty())): if(in_array(($system['user']['iduser']), explode(',',"134,222"))): ?>
                    <a href="<?php echo url('kehu/tongbu',['id'=>$list['idkehu']]); ?>" class="btn btn-link btn-default">同步信息</a>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>

<nav class="text-center">
    <ul class="pagination pagination-sm">
        <?php echo $data['page']; ?>
    </ul>
</nav>



            


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

</body>
</html>
