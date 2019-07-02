<?php /*a:2:{s:65:"/var/www/manager_cmlaw/application/service/view/config/index.html";i:1555601548;s:55:"/var/www/manager_cmlaw/application/admin/view/main.html";i:1555601548;}*/ ?>
<div class="layui-card">
    
<style>
    .right-btn {
        top: 0;
        right: 0;
        width: 38px;
        height: 38px;
        display: inline-block;
        position: absolute;
        text-align: center;
        line-height: 38px;
    }
</style>

    <?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>
    <div class="layui-card-header layui-anim layui-anim-fadein notselect">
        <span class="layui-icon font-s10 color-desc margin-right-5">&#xe65b;</span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?>
        <div class="pull-right"></div>
    </div>
    <?php endif; ?>
    <div class="layui-card-body layui-anim layui-anim-fadein">
<fieldset class="margin-bottom-15">
    <legend class="layui-bg-cyan">接口地址</legend>
    <div class="layui-form-item">
        <p class="color-green">授权发起页域名</p>
        <label class="relative block">
            <input disabled class="layui-input layui-bg-gray" value="<?php echo request()->host(); ?>">
            <a data-copy="<?php echo request()->host(); ?>" class="fa fa-copy right-btn"></a>
        </label>
        <p class="help-block">必须从本域名内网页跳转到登录授权页，才可完成登录授权。无需填写 http:// 等域名协议前缀</p>
    </div>
    <div class="layui-form-item">
        <p class="color-green">授权事件接收 URL</p>
        <label class="relative block">
            <input disabled class="layui-input layui-bg-gray" value="<?php echo url('@service/api.push/ticket','',false,true); ?>">
            <a data-copy="<?php echo url('@service/api.push/ticket','',false,true); ?>" class="fa fa-copy right-btn"></a>
        </label>
        <p class="help-block">用于接收取消授权通知、授权成功通知、授权更新通知，也用于接收 ticket，ticket 是验证平台方的重要凭据</p>
    </div>
    <div class="layui-form-item">
        <p class="color-green">微信消息与事件接收 URL</p>
        <label class="relative block">
            <input disabled class="layui-input layui-bg-gray" value="<?php echo url('@service/api.push/notify/$APPID$','',false,true); ?>">
            <a data-copy="<?php echo url('@service/api.push/notify/$APPID$','',false,true); ?>" class="fa fa-copy right-btn"></a>
        </label>
        <p class="help-block">通过该 URL 接收微信消息和事件推送，该参数按规则填写，实际接收消息时 $APPID$ 将被替换为微信 AppId</p>
    </div>
    <div class="layui-form-item">
        <p class="color-green">客户端系统 Yar 模块接口</p>
        <label class="relative block"><input disabled class="layui-input layui-bg-gray" value="<?php echo url('@service/api.client/yar/PARAM','',false,true); ?>"></label>
        <p class="help-block">客户端系统 Yar 接口 URL，PARAM 由调用参数组成（AppName-AppId-AppKey-AppType）</p>
    </div>
    <div class="layui-form-item">
        <p class="color-green">客户端系统 Soap 模块接口</p>
        <label class="relative block"><input disabled class="layui-input layui-bg-gray" value="<?php echo url('@service/api.client/soap/PARAM','',false,true); ?>"></label>
        <p class="help-block">客户端系统 Soap 接口 URL，PARAM 由调用参数组成（AppName-AppId-AppKey-AppType）</p>
    </div>
</fieldset>

<fieldset class="margin-bottom-15">
    <legend class="layui-bg-cyan">对接参数</legend>
    <form onsubmit="return false;" data-auto="true" method="post" class='layui-form layui-card' autocomplete="off">
        <div class="layui-form-item">
            <p class="color-green">开放平台服务 AppID</p>
            <label class="relative block"><input name="component_appid" required pattern="^.{18}$" maxlength="18" placeholder="请输入18位开放平台服务AppID" value="<?php echo sysconf('component_appid'); ?>" class="layui-input"></label>
            <p class="help-block">开放平台服务 AppID，需要在微信开放平台获取。</p>
        </div>
        <div class="layui-form-item">
            <p class="color-green">开放平台服务 AppSecret</p>
            <label class="relative block"><input name="component_appsecret" required pattern="^.{32}$" maxlength="32" placeholder="请输入32位开放平台服务AppSecret" value="<?php echo sysconf('component_appsecret'); ?>" class="layui-input"></label>
            <p class="help-block">开放平台服务 AppSecret，需要在微信开放平台获取。</p>
        </div>
        <div class="layui-form-item">
            <p class="color-green">开放平台消息校验 Token</p>
            <label class="relative block"><input name="component_token" required placeholder="请输入微信消息校验Token" value="<?php echo sysconf('component_token'); ?>" class="layui-input"></label>
            <p class="help-block">开发者在代替微信接收到消息时，用此 Token 来校验消息。</p>
        </div>
        <div class="layui-form-item">
            <p class="color-green">开放平台消息加解密 AesKey</p>
            <label class="relative block"><input name="component_encodingaeskey" required pattern="^.{43}$" maxlength="43" placeholder="请输入43位微信消息加解密Key" value="<?php echo sysconf('component_encodingaeskey'); ?>" class="layui-input"></label>
            <p class="help-block">在代替微信收发消息过程中使用。必须是长度为43位的字符串，只能是字母和数字。</p>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="text-center padding-bottom-15">
            <button class="layui-btn" type="submit">保存配置</button>
        </div>
    </form>
</fieldset>
</div>
    
</div>