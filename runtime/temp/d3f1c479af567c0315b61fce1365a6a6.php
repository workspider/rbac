<?php /*a:2:{s:61:"/var/www/manager_cmlaw/application/home/view/anjian/read.html";i:1545186980;s:69:"/var/www/manager_cmlaw/application/home/view/widget/lichong/read.html";i:1545186982;}*/ ?>
<div class="tab-content">

    <div class="row">
        <?php if($data['info']['lichong_status'] == '4'): ?>

        <div class="alert alert-danger" role="alert">
            <strong>驳回!</strong>
            <p><?php echo htmlentities($data['info']['shenhe_content']); ?></p>
            <p><?php echo htmlentities($data['info']['shenhe_content']); ?></p>
        </div>

        <?php endif; ?>
        <div class="col-md-12">
            <div style="width: 100%;line-height: 40px;background-color: #e8e8e8">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;vertical-align:middle">
                        <span style="font-family:'FontAwesome';"> </span>
                        <span style="font-family:'ArialMT', 'Arial';font-size:12px;"> </span>
                        <span style="font-family:'PingFangSC-Regular', 'PingFang SC';font-size:16px;">利冲概述</span>
                    </span>
                <div style="float:right">
                    <button type="button" data-toggle="kehu_geren" data-align="read" data-bind="<?php echo htmlentities($data['info']['idlichong']); ?>"
                            class="btn btn-link btn-default">查看利冲详情
                    </button>
                </div>
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
                    <td colspan="3" class="text-danger"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).on('click', 'button[type="button"]', function (event) {
    var toggle = $(event.target).attr('data-toggle');
    var align = $(event.target).attr('data-align');
    var bind = $(event.target).attr('data-bind');
    var dom = $(this);
    switch (toggle) {
        case 'kehu_geren':
            switch (align) {
                case 'read':
                    //$(location).prop('href', web_url + '/home/lichong/read/id/' + bind);
                    window.open(web_url + '/home/lichong/read/id/' + bind);
                    break;
                default:
                    $.growl.error({message: "没有相关操作!"});
            }
            break;
    }

    });
</script>

