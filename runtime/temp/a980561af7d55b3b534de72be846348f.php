<?php /*a:1:{s:70:"/var/www/manager_cmlaw/application/home/view/widget/kehu/get_info.html";i:1545186984;}*/ ?>
<?php if($data['info']['kehu_type'] == '2'): ?>
<div class="col-md-12">
    <div class="create-content">
        <div class="create-title">
            <span class="glyphicon glyphicon-unchecked"></span> 客户信息
        </div>
        <div class="create-tools">
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="read-title text-right"><span>姓名：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_name']); ?></td>
            <td class="read-title text-right"><span>身份证号：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_shenfenzhenghao']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>电话：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_dianhua']); ?></td>
            <td class="read-title text-right"><span>邮箱：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_youxiang']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>联系地址：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_dizhi']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
<?php elseif($data['info']['kehu_type'] == '3'): ?>
<div class="col-md-12">
    <div class="create-content">
        <div class="create-title">
            <span class="glyphicon glyphicon-unchecked"></span> 客户信息
        </div>
        <div class="create-tools">
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="read-title text-right"><span>公司名称：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_name']); ?></td>
            <td class="read-title text-right"><span>所在地区：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_diqu']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>法定代表人：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_faren']); ?></td>
            <td class="read-title text-right"><span>公司类型：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_leixing']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>注册地址：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_dizhi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>注册资本：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_ziben']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>注册证号：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_xinyongdaima']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>自定义行业：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_hangye']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>常用通讯地址：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_changyongdizhi']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
<?php else: ?>
<div class="col-md-12">
    <div class="create-content">
        <div class="create-title">
            <span class="glyphicon glyphicon-unchecked"></span> 客户信息
        </div>
        <div class="create-tools">
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="read-title text-right"><span>信用代码：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_xinyongdaima']); ?></td>
            <td class="read-title text-right"><span>组织机构代码：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_zuzhijigouhao']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>注册号：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_zhucehao']); ?></td>
            <td class="read-title text-right"><span>经营状态：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_zaiye']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>所属行业：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_name']); ?></td>
            <td class="read-title text-right"><span>成立日期：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_kashiriqi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>公司类型：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_leixing']); ?></td>
            <td class="read-title text-right"><span>营业期限：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_kashiriqi']); ?> ~ <?php echo htmlentities($data['info']['kehu_jieshuriqi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>法定代表人：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_faren']); ?></td>
            <td class="read-title text-right"><span>发照日期：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_hezhunriqi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>注册资本：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_ziben']); ?></td>
            <td class="read-title text-right"><span>登记机关：</span></td>
            <td><?php echo htmlentities($data['info']['kehu_gongshangju']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>企业地址：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_dizhi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>经营范围：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['kehu_jingyingfanwei']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
<?php endif; ?>

