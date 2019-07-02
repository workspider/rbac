<?php /*a:1:{s:72:"/var/www/manager_cmlaw/application/home/view/widget/anjian/get_info.html";i:1545186984;}*/ ?>
<div class="col-md-12">
    <div class="create-content">
        <div class="create-title">
            <span class="glyphicon glyphicon-unchecked"></span> 案件信息
        </div>
        <div class="create-tools">
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tbody>

        <?php if($data['info']['zhonglei_name'] == '预立案'): else: ?>
        <tr>
            <td class="read-title text-right"><span>案件编号：</span></td>
            <td colspan="3" class="text-danger">
                <?php if(in_array(($data['info']['anjian_status']), explode(',',"3,9"))): ?>
                <?php echo htmlentities($data['info']['anjian_number']); ?>
                <?php endif; ?>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="read-title text-right"><span>案件名称：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_title']); ?></td>
        </tr>


        <?php if($data['info']['zhonglei_name'] == '争议解决'): ?>
        <tr>
            <td class="read-title text-right"><span>相对方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_xiangduifang']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>相关方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_xiangguanfang']); ?></td>
        </tr>
        <?php endif; ?>
        <!-- 条件判断开始-->
        <!-- 仲裁案件-->
        <?php if($data['info']['yewuleixing_name'] == '仲裁案件'): ?>
        <tr>
            <td class="read-title text-right"><span>归属办公室：</span></td>
            <td><?php echo htmlentities($data['info']['fensuo_name']); ?></td>
            <td class="read-title text-right"><span>业务类型：</span></td>
            <td><?php echo htmlentities($data['info']['yewuleixing_name']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>事由：</span></td>
            <td><?php echo htmlentities($data['info']['zhengyi_shiyou']); ?></td>
            <td class="read-title text-right"><span>是否保密：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_shewai']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>仲裁机构：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_zhongcaijigou']); ?></td>
        </tr>


        <tr>
            <td class="read-title text-right"><span>代理方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhongcai_dailifang']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>相关方：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_xiangguanfang']); ?></td>
            <td class="read-title text-right"><span>相对方：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_xiangduifang']); ?></td>
        </tr>
        <!--民商案件-->
        <?php elseif($data['info']['yewuleixing_name'] == '民商案件'): ?>
        <tr>
            <td class="read-title text-right"><span>归属办公室：</span></td>
            <td><?php echo htmlentities($data['info']['fensuo_name']); ?></td>
            <td class="read-title text-right"><span>审级：</span></td>
            <td><?php echo htmlentities($data['info']['zhengyi_jibie']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>案由：</span></td>
            <td><?php echo htmlentities($data['info']['zhengyi_anyou']); ?></td>
            <td class="read-title text-right"><span>是否保密：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_shewai']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>审理法院：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_fayuan']); ?></td>
        </tr>


        <tr>
            <td class="read-title text-right"><span>代理方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_dailifang_type']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>相关方：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_xiangguanfang']); ?></td>
            <td class="read-title text-right"><span>相对方：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_xiangduifang']); ?></td>
        </tr>
        <!--刑事案件-->
        <?php elseif($data['info']['yewuleixing_name'] == '刑事案件'): ?>
        <tr>
            <td class="read-title text-right"><span>归属办公室：</span></td>
            <td><?php echo htmlentities($data['info']['fensuo_name']); ?></td>
            <td class="read-title text-right"><span>审级：</span></td>
            <td><?php echo htmlentities($data['info']['zhengyi_jibie']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>起诉理由：</span></td>
            <td><?php echo htmlentities($data['info']['zhengyi_xingshi_shiyou']); ?></td>
            <td class="read-title text-right"><span>是否保密：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_shewai']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>审理法院：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_fayuan']); ?></td>
        </tr>


        <tr>
            <td class="read-title text-right"><span>被告：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_dailifang_type']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>起诉机关：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['zhengyi_fayuan']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>相关方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_xiangguanfang']); ?></td>
        </tr>
        <!-- 非诉案件-->
        <?php elseif($data['info']['zhonglei_name'] == '非诉案件'): ?>
        <tr>
            <td class="read-title text-right"><span>归属办公室：</span></td>
            <td><?php echo htmlentities($data['info']['fensuo_name']); ?></td>
            <td class="read-title text-right"><span>业务类型：</span></td>
            <td><?php echo htmlentities($data['info']['yewuleixing_name']); ?></td>
        </tr>
        <tr>

            <td class="read-title text-right"><span>是否保密：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_shewai']); ?></td>
        </tr>

        <tr>
            <td class="read-title text-right"><span>代理方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['feisu_dailifang']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>交易对手：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_jiaoyiduishou']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>相关方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_xiangguanfang']); ?></td>
        </tr>
        <!--法律顾问-->
        <?php elseif($data['info']['zhonglei_name'] == '法律顾问'): ?>
        <tr>
            <td class="read-title text-right"><span>归属办公室：</span></td>
            <td><?php echo htmlentities($data['info']['fensuo_name']); ?></td>
            <td class="read-title text-right"><span>是否保密：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_shewai']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>服务期限：</span></td>
            <td><?php echo htmlentities(substr($data['info']['falv_qixian_kaishi'],0,10)); ?>~<?php echo htmlentities(substr($data['info']['falv_qixian_jieshu'],0,10)); ?></td>
            <td class="read-title text-right"><span>是否自动续期：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_xuqi']); ?></td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>代理方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['falv_dailifang']); ?></td>
        </tr>
        <!--预立案-->
        <?php elseif($data['info']['zhonglei_name'] == '预立案'): ?>
        <tr>
            <td class="read-title text-right"><span>代理方：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['yu_dailifang']); ?></td>
        </tr>
        <?php endif; ?>
        <!--结束-->

        <?php if($data['info']['zhonglei_name'] == '预立案'): else: ?>
        <tr>
            <td class="read-title text-right"><span>是否重大：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_zhongda']); ?></td>
            <td class="read-title text-right"><span>是否敏感：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_mingan']); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="read-title text-right"><span>立案时间：</span></td>
            <td><?php echo htmlentities($data['info']['anjian_date']); ?></td>
            <td class="read-title text-right"><span>创建时间：</span></td>
            <td>
                <?php if($data['info']['create_time'] == '1970-01-01 08:00:00'): ?>
                <?php echo htmlentities($data['info']['anjian_date']); else: ?>
                <?php echo htmlentities(substr($data['info']['create_time'],0,10)); ?>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td class="read-title text-right"><span>案件描述：</span></td>
            <td colspan="3"><?php echo htmlentities($data['info']['anjian_content']); ?></td>
        </tr>


        </tbody>
    </table>
</div>
<div class="col-md-12">
    <div class="create-content">
        <div class="create-title">
            <span class="glyphicon glyphicon-unchecked"></span> 团队信息
        </div>
        <div class="create-tools">
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered table-hover">

        <thead>
        <tr>
            <th>分所</th>
            <th>职位</th>
            <th>姓名</th>
            <th>电话</th>
            <th>邮箱</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data['user']) || $data['user'] instanceof \think\Collection || $data['user'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['user'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo htmlentities($user['user_fensuo']); ?></td>
            <td><?php echo htmlentities($user['user_zhiwei']); ?></td>
            <td><?php echo htmlentities($user['user_realname']); ?></td>
            <td><?php echo htmlentities($user['user_phone']); ?></td>
            <td><?php echo htmlentities($user['user_email']); ?></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>