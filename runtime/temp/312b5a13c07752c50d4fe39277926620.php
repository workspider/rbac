<?php /*a:2:{s:61:"/var/www/manager_cmlaw/application/admin/view/index/main.html";i:1555601548;s:55:"/var/www/manager_cmlaw/application/admin/view/main.html";i:1555601548;}*/ ?>
<div class="layui-card">
    
    <?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>
    <div class="layui-card-header layui-anim layui-anim-fadein notselect">
        <span class="layui-icon font-s10 color-desc margin-right-5">&#xe65b;</span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?>
        <div class="pull-right"></div>
    </div>
    <?php endif; ?>
    <div class="layui-card-body layui-anim layui-anim-fadein">
<table class="layui-table" lay-even lay-skin="line">
    <colgroup>
        <col width="20%">
        <col width="30%">
        <col width="20%">
        <col width="30%">
    </colgroup>
    <thead>
    <tr>
        <th class="text-left" colspan="2">系统信息</th>
        <th class="text-left" colspan="2">产品团队</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="max-width:200px">应用组件版本</td>
        <td><?php echo sysconf('app_version'); ?></td>
        <td style="max-width:200px">产品名称</td>
        <td>framework</td>
    </tr>
    <tr>
        <td>ThinkPHP版本</td>
        <td><?php echo htmlentities($think_ver); ?></td>
        <td>在线体验</td>
        <td><a target="_blank" href="http://framework.thinkadmin.top">http://framework.thinkadmin.top</a></td>
    </tr>
    <tr>
        <td>服务器操作系统</td>
        <td><?php echo php_uname('s'); ?></td>
        <td>官方QQ群</td>
        <td>
            <a href="http://shang.qq.com/wpa/qunwpa?idkey=ae25cf789dafbef62e50a980ffc31242f150bc61a61164458216dd98c411832a">
                <img src="//pub.idqqimg.com/wpa/images/group.png" style="height:18px;width:auto" target="_blank">
            </a>
        </td>
    </tr>
    <tr>
        <td>WEB运行环境</td>
        <td><?php echo php_sapi_name(); ?></td>
        <td>项目地址</td>
        <td><a target="_blank" href="https://github.com/zoujingli/framework">https://github.com/zoujingli/framework</a></td>
    </tr>
    <tr>
        <td>MySQL数据库版本</td>
        <td><?php echo htmlentities($mysql_ver); ?></td>
        <td>BUG反馈</td>
        <td><a target="_blank" href="https://github.com/zoujingli/framework/issues">https://github.com/zoujingli/framework/issues</a></td>
    </tr>
    <tr>
        <td>运行PHP版本</td>
        <td><?php echo htmlentities(PHP_VERSION); ?></td>
        <td>开发团队</td>
        <td><a href="http://www.cuci.cc" target="_blank">广州楚才信息科技有限公司</a></td>
    </tr>
    <tr>
        <td>上传大小限制</td>
        <td><?php echo ini_get('upload_max_filesize'); ?></td>
        <td>团队官网</td>
        <td><a target="_blank" href="http://www.cuci.cc">http://www.cuci.cc</a></td>
    </tr>
    <tr>
        <td>POST大小限制</td>
        <td><?php echo ini_get('post_max_size'); ?></td>
        <td>办公地址</td>
        <td>广州市天河区东圃一横路东泷商贸中心G02</td>
    </tr>
    </tbody>
</table>
</div>
    
</div>