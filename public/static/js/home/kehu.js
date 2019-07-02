/**
 * 客户操作JS主文件
 * @type {{init}}
 */
var kehuJs = function () {

    /**
     * 客户工具栏操作
     */
    var toolsKehuToggler = function () {
        var web_url = 'http://yeelawyer.xmkeji.cn';
        $(document).on('click', 'button[type="button"]', function (event) {
            var toggle = $(event.target).attr('data-toggle');
            var align = $(event.target).attr('data-align');
            var bind = $(event.target).attr('data-bind');
            var dom = $(this);
            switch (toggle) {
                case 'kehu_geren':
                    switch (align) {
                        case 'read':
                            $(location).attr('href', web_url + '/home.kehu/read/' + bind);
                            break;
                        case 'update':
                            $(location).attr('href', web_url + '/home.kehu/update/' + bind);
                            break;
                        case 'delete':
                            if (confirm('确定删除该客户吗？') == true) {
                                $.post(web_url + '/api.kehu/delete', {id: bind}, function (obj, status) {
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
                    break;
            }

        });
    };



    return {
        init: function () {
            toolsKehuToggler();
        }
    };

}();

jQuery(document).ready(function () {
    kehuJs.init();
});