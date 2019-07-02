<?php /*a:2:{s:62:"/var/www/manager_cmlaw/application/admin/view/login/index.html";i:1555601548;s:62:"/var/www/manager_cmlaw/application/admin/view/index/index.html";i:1557307735;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); if(!empty($title)): ?> · <?php endif; ?><?php echo sysconf('site_name'); ?></title>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=0.4">
    <link rel="shortcut icon" href="<?php echo sysconf('site_icon'); ?>">
    <link rel="stylesheet" href="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/plugs/awesome/fonts.css?<?php echo date('md'); ?>">
    <link rel="stylesheet" href="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/plugs/layui/css/layui.css?<?php echo date('md'); ?>">
    <link rel="stylesheet" href="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/theme/css/console.css?<?php echo date('md'); ?>">
    
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<script>if (location.href.indexOf('#') > -1) location.replace(location.href.split('#')[0])</script>
<link rel="stylesheet" href="__ROOT__/static/theme/css/login.css">

    <script>window.ROOT_URL = '__ROOT__';</script>
    <script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/plugs/jquery/pace.min.js"></script>

</head>

<body class="layui-layout-body">

<div class="login-container full-height" data-supersized="__ROOT__/static/theme/img/login/bg1.jpg,__ROOT__/static/theme/img/login/bg2.jpg">
    <div class="header notselect layui-hide-xs">
        <a href="<?php echo url('@'); ?>" class="title"><?php echo sysconf('app_name'); ?> <span class="padding-left-5 font-s10"><?php echo sysconf('app_version'); ?></span></a>
        <ul>
            <li class="layui-hide"><a target="_blank" href="http://document.framework.thinkadmin.top">在线帮助</a></li>
            <li><a target="_blank" href="https://www.google.cn/chrome">推荐使用谷歌浏览器</a></li>
        </ul>
    </div>
    <form data-login-form onsubmit="return false;" method="post" class="layui-anim layui-anim-upbit" autocomplete="off">
        <h2 class="notselect">系统管理</h2>
        <ul>
            <li class="username">
                <label>
                    <i class="layui-icon layui-icon-username"></i>
                    <input class="layui-input" required pattern="^\S{4,}$" name="username" autofocus autocomplete="off" placeholder="请输入账号">
                </label>
            </li>
            <li class="password">
                <label>
                    <i class="layui-icon layui-icon-password"></i>
                    <input class="layui-input" required pattern="^\S{4,}$" name="password" maxlength="32" type="password" autocomplete="off" placeholder="请输入密码">
                </label>
            </li>
            <li class="text-center padding-top-20">
                <input type="hidden" name="skey" value="<?php echo htmlentities((isset($skey) && ($skey !== '')?$skey:'')); ?>">
                <button type="submit" class="layui-btn layui-disabled full-width" data-form-loaded="立即登入">正在载入</button>
            </li>
        </ul>
    </form>
    <div class="footer notselect">
        <?php echo sysconf('site_copy'); if(sysconf('miitbeian')): ?><span>&nbsp;|&nbsp;</span><a target="_blank" href="http://www.miitbeian.gov.cn"><?php echo sysconf('miitbeian'); ?></a><?php endif; ?>
    </div>
</div>

<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/plugs/layui/layui.all.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/plugs/require/require.js"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/sky/admin.js"></script>

<script src="__ROOT__/static/plugs/supersized/supersized.3.2.7.min.js"></script>

<?php if(session('user.id') and sysconf('system_message_state')): ?>
<script>
    require(['spop'], function () {
        (function syncMessage() {
            $.get('<?php echo url("@admin/api.message/gets"); ?>').then(function (ret) {
                if (ret.code && ret.data.length > 0) for (var i in ret.data) if ($('[data-message-code=' + ret.data[i].code + ']').size() < 1) spop({
                    template: '<h4 data-message-code="' + ret.data[i].code + '" class="spop-title">' + ret.data[i].title + '</h4>' + ret.data[i].desc + '<span class="font-s10 color-desc pull-right"> ' + ret.data[i].create_at + ' </span>', position: 'bottom-right', style: 'success', group: ret.data[i].code, onClose: function () {
                        $.post('<?php echo url("@admin/api.message/set"); ?>', {code: this.group});
                    }
                });
                setTimeout(syncMessage, 3000)
            });
        })();
    });
</script>
<?php endif; ?>
</body>

</html>