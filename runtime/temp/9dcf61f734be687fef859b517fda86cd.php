<?php /*a:2:{s:64:"/var/www/manager_cmlaw/application/home/view/lichong/shenhe.html";i:1545186974;s:61:"/var/www/manager_cmlaw/application/home/view/public/base.html";i:1558926142;}*/ ?>
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
            
            

<?php if($data['info']['lichong_status'] == '4'): ?>
<style>
    th {
        font-weight: normal;
        text-align: center;
    }
    .table-border-book{
        text-align: center;
    }
</style>
<!--案件审批框 开始-->
<div class="row">
    <div class="col-md-12">
        <form method="post" id="lichongAddForm" novalidate="novalidate">
            <table class="table table-bordered table-border-book">
                <tbody>
                <tr>
                    <td class="text-center">
                        <div class="width-100">
                            <label class="radio-inline">
                                <input type="radio" name="lichong_status" value="2" checked> 通过
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="lichong_status" value="4"> 驳回
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="width-100">
                            <textarea class="form-control" rows="3" name="shenhe_content"
                                      placeholder="请输入意见内容">

                            </textarea>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="text-center">
                <input type="hidden" name="idlichong" class="form-control" value="<?php echo htmlentities($data['info']['idlichong']); ?>"/>
                <button type="submit" name="shenpiSubmit" value="shenpi" class="btn btn-lg btn-yeelibaray"> 提交
                </button>
            </div>
        </form>
    </div>
</div>
<!--案件审批框 结束-->
<hr/>
<?php endif; ?>

<div class="row">


        <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">基本信息</span>
                    </span>
        </div>
        <p></p>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="read-title text-right"><span>利冲编号：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['lichong_number']); ?></td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>客户：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['lichong_w_kehu']); ?></td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>相对方：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['lichong_d_kehu']); ?></td>
            </tr>

            <tr>
                <td class="read-title text-right"><span>相关方：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['lichong_x_kehu']); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>查询合伙人：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['user_realname']); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>描述：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities($data['info']['lichong_content']); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>创建时间：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities(substr($data['info']['create_time'],0,10)); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>公示日期：</span></td>
                <td colspan="3" class="text-danger"><?php echo htmlentities(substr($data['info']['gongshi_time'],0,10)); ?>~<?php echo htmlentities(substr($data['info']['gongshijieshu_time'],0,10)); ?></td>
            </tr>
            <tr>
                <td class="read-title text-right"><span>利冲结果：</span></td>
                <td colspan="3" class="text-danger">
                    <?php if($data['info']['lichong_status'] == '1'): ?>
                    无利冲
                    <?php else: ?>
                    有冲突
                    <?php endif; ?>
                </td>
            </tr>
            </tbody>
        </table>


    <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">合伙人反馈</span>
                    </span>
    </div>
    <p></p>
    <div class="col-md-12">

        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="120" class="text-center">部门</td>
                <td width="100"  class="text-center">姓名</td>
                <td width="80"  class="text-center">状态</td>
                <td>备注</td>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($fankui) || $fankui instanceof \think\Collection || $fankui instanceof \think\Paginator): $i = 0; $__LIST__ = $fankui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td class="text-center"><?php echo htmlentities($list['bumen_name']); ?></td>
                <td class="text-center"><?php echo htmlentities($list['user_realname']); ?></td>
                <td class="text-center">
                    <?php if($list['fankui_status'] == '1'): ?>
                    无利冲
                    <?php else: ?>
                    有冲突
                    <?php endif; ?>
                </td>
                <td><?php echo htmlentities($list['fankui_content']); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">查询结果</span>
                    </span>
            </div>
            <br>
            <!--客户-->

            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">

                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">1、<?php echo $data['title']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">案件名称</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['kehu']) || $data['kehu'] instanceof \think\Collection || $data['kehu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['kehu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($list['kehu_name']); ?></td>
                    <td colspan="2">
                        <table class="table">
                            <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td width="30%"><?php echo htmlentities($anjian['hehuoren']); ?></td>
                                <td width="70%">
                                    <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                                        <?php echo htmlentities($anjian['anjian_title']); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>

                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>

        <div class="col-md-12" id="woAnjianList" style="display:none;">
            <h4>依据客户【<?php echo htmlentities($data['wkehu']); ?>】检索如下（提交人参与的案件）：
                <button type="button" data-align="woanjianhide" class="btn btn-xs btn-link">点击隐藏</button>
            </h4>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户</th>
                    <th>参与合伙人</th>
                    <th width="40%">案件</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['wo_anjian']) || $data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['wo_anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($list['lichong_kehu']); ?></td>
                    <td><?php echo htmlentities($list['hehuoren']); ?></td>
                    <td><a href="<?php echo url('anjian/read',['id'=>$list['idanjian']]); ?>" target="_blank"><?php echo htmlentities($list['anjian_title']); ?></a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">2、<?php echo $data['title2']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">案件名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">相对方/相关方</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['wofang']) || $data['wofang'] instanceof \think\Collection || $data['wofang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['wofang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>

                <tr style="color: #ff0000">
                    <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                    <td>
                        <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                            <?php echo htmlentities($anjian['anjian_title']); ?>
                        </a>
                    </td>
                    <td colspan="2">
                        <table class="table">

                            <tr>
                                <td width="30%"><?php echo htmlentities($list['user_realname']); ?></td>
                                <td width="70%">

                                    (<?php echo htmlentities($list['lichong_d_kehu']); ?>&nbsp/&nbsp<?php echo htmlentities($list['lichong_x_kehu']); ?>)
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>

        <!--相对方-->
        <div class="col-md-12">
            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">3、<?php echo $data1['title']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">案件名称</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data1['kehu']) || $data1['kehu'] instanceof \think\Collection || $data1['kehu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data1['kehu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr style="color: #ff0000">
                    <td><?php echo htmlentities($list['kehu_name']); ?></td>
                    <td colspan="2">
                        <table class="table">
                            <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td width="30%"><?php echo htmlentities($anjian['hehuoren']); ?></td>
                                <td width="70%">
                                    <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                                        <?php echo htmlentities($anjian['anjian_title']); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>

                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian1" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>
        <div class="col-md-12" id="woAnjianList1" style="display:none;">
            <h4>依据客户【<?php echo htmlentities($data1['wkehu']); ?>】检索如下（提交人参与的案件）：
                <button type="button" data-align="woanjianhide1" class="btn btn-xs btn-link">点击隐藏</button>
            </h4>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户</th>
                    <th>参与合伙人</th>
                    <th width="40%">案件</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data1['wo_anjian']) || $data1['wo_anjian'] instanceof \think\Collection || $data1['wo_anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data1['wo_anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($list['lichong_kehu']); ?></td>
                    <td><?php echo htmlentities($list['hehuoren']); ?></td>
                    <td><a href="<?php echo url('anjian/read',['id'=>$list['idanjian']]); ?>" target="_blank"><?php echo htmlentities($list['anjian_title']); ?></a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">4、<?php echo $data1['title2']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">案件名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">相对方/相关方</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['wofang']) || $data['wofang'] instanceof \think\Collection || $data['wofang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['wofang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>

                <tr>
                    <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                    <td>
                        <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                            <?php echo htmlentities($anjian['anjian_title']); ?>
                        </a>
                    </td>
                    <td colspan="2">
                        <table class="table">

                            <tr>
                                <td width="30%"><?php echo htmlentities($list['user_realname']); ?></td>
                                <td width="70%">

                                    (<?php echo htmlentities($list['lichong_d_kehu']); ?>&nbsp/&nbsp<?php echo htmlentities($list['lichong_x_kehu']); ?>)
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>

                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>

        <!--相关方-->
        <div class="col-md-12">
            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">5、<?php echo $data2['title']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">案件名称</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data2['kehu']) || $data2['kehu'] instanceof \think\Collection || $data2['kehu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data2['kehu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($list['kehu_name']); ?></td>
                    <td colspan="2">
                        <table class="table">
                            <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td width="30%"><?php echo htmlentities($anjian['hehuoren']); ?></td>
                                <td width="70%">
                                    <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                                        <?php echo htmlentities($anjian['anjian_title']); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>

                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian2" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>
        <div class="col-md-12" id="woAnjianList2" style="display:none;">
            <h4>依据客户【<?php echo htmlentities($data2['wkehu']); ?>】检索如下（提交人参与的案件）：
                <button type="button" data-align="woanjianhide2" class="btn btn-xs btn-link">点击隐藏</button>
            </h4>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">客户</th>
                    <th>参与合伙人</th>
                    <th width="40%">案件</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data2['wo_anjian']) || $data2['wo_anjian'] instanceof \think\Collection || $data2['wo_anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data2['wo_anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($list['lichong_kehu']); ?></td>
                    <td><?php echo htmlentities($list['hehuoren']); ?></td>
                    <td><a href="<?php echo url('anjian/read',['id'=>$list['idanjian']]); ?>" target="_blank"><?php echo htmlentities($list['anjian_title']); ?></a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <div style="width: 100%;line-height: 30px;background-color: #e8e8e8;text-align:center;height: 30px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;">
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:14px;">6、<?php echo $data2['title2']; ?></span>
                    </span>
            </div>
            <p></p>
            <table class="table table-border-book">
                <thead>
                <tr>
                    <th width="40%">案件名称</th>
                    <th width="30%">合伙人</th>
                    <th width="70%">相对方/相关方</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data['wofang']) || $data['wofang'] instanceof \think\Collection || $data['wofang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['wofang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>

                <tr>
                    <?php if(is_array($list['anjian']) || $list['anjian'] instanceof \think\Collection || $list['anjian'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['anjian'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anjian): $mod = ($i % 2 );++$i;?>
                    <td>
                        <a href="<?php echo url('anjian/read',['id'=>$anjian['anjianid']]); ?>" target="_blank">
                            <?php echo htmlentities($anjian['anjian_title']); ?></a>
                    </td>
                    <td colspan="2">
                        <table class="table">

                            <tr>
                                <td width="30%"><?php echo htmlentities($list['user_realname']); ?></td>
                                <td width="70%">

                                    (<?php echo htmlentities($list['lichong_d_kehu']); ?>&nbsp/&nbsp<?php echo htmlentities($list['lichong_x_kehu']); ?>)
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>

                <?php if(!(empty($data['wo_anjian']) || (($data['wo_anjian'] instanceof \think\Collection || $data['wo_anjian'] instanceof \think\Paginator ) && $data['wo_anjian']->isEmpty()))): ?>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center text-danger">结果已隐藏提交人参与客户
                        <button type="button" data-align="woanjian" class="btn btn-xs btn-link">点击查看</button>
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>

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
    $(document).on('click', 'button', function () {
        var dom = $(this);
        var align = dom.attr('data-align');
        switch (align) {
            case 'woanjian':
                $("#woAnjianList").show();
                break;
            case 'woanjianhide':
                $("#woAnjianList").hide();
                break;
        }
    });

    // 任务提交处理
    $("#lichongAddForm").validate({
        ignore: ":hidden:not(select)",
        rules: {
            idlichong: {
                required: true
            },
            shenhe_content: {
                required: true
            }
        },
        messages: {
            shenhe_content: {
                required: "请输入意见"
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
                url: web_url + '/home/lichong/shenheSave',
                type: "post",
                dataType: "json",
                data: $('#lichongAddForm').serialize(),
                success: function (obj) {
                    if (obj.status === 1001) {
                        str = '<div class="alert alert-success" role="alert" id="formMsg">' + obj.msg + '</div>';
                        $('#lichongAddForm').parent().prepend(str);
                        $(window).attr('location', web_url + "/home/lichong/shenpi");
                    } else {
                        str = '<div class="alert alert-danger" role="alert" id="formMsg">' + obj.msg + '</div>';
                        $('#lichongAddForm').parent().prepend(str);
                    }
                    setTimeout(function () {
                        $("#formMsg").remove();
                    }, 1000);
                }
            });
        }
    });
</script>


</body>
</html>
