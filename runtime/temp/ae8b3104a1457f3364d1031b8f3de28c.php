<?php /*a:1:{s:62:"/var/www/manager_cmlaw/application/sky/view/login/login-1.html";i:1545186981;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        CM-LAW 澄明则正律师事务所
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/style.bundle.css" rel="stylesheet" type="text/css"/>
    <style>
        .btn-focus {
            color: #fff;
            background-color: #7c6755;
            border-color: #e2d0a6;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .btn-focus:hover {
            color: #fff;
            background-color: #7c6755;
            border-color: #7c6755;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .btn.btn-focus {
            color: #ffffff;
        }

        .btn.btn-focus.active,
        .btn.btn-focus.focus,
        .btn.btn-focus:focus,
        .btn.btn-focus:hover:not(:disabled) {
            color: #ffffff !important;
        }

        .btn-focus.disabled, .btn-focus:disabled {
            color: #fff;
            background-color: #7c6755;
            border-color: #7c6755;
        }

        .btn-focus:not(:disabled):not(.disabled):active, .btn-focus:not(:disabled):not(.disabled).active,
        .show > .btn-focus.dropdown-toggle {
            color: #fff;
            background-color: #7c6755;
            border-color: #7c6755;
        }

        .btn-focus:not(:disabled):not(.disabled):active:focus, .btn-focus:not(:disabled):not(.disabled).active:focus,
        .show > .btn-focus.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(124, 103, 85, 0.5);
        }

        .btn-outline-focus.m-btn--air, .btn-focus.m-btn--air, .m-btn--gradient-from-focus.m-btn--air {
            -webkit-box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
            -moz-box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
            box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
        }

        .btn-outline-focus.m-btn--air:hover, .btn-focus.m-btn--air:hover, .m-btn--gradient-from-focus.m-btn--air:hover {
            -webkit-box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
            -moz-box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
            box-shadow: 0px 5px 10px 2px rgba(255, 255, 255, 0.19) !important;
        }

        .btn-outline-focus {
            color: #7c6755;
            background-color: transparent;
            background-image: none;
            border-color: #7c6755;
        }

        .btn-outline-focus:hover {
            color: #ffffff;
            background-color: #255;
            border-color: #7c6755;
        }

        .btn-outline-focus:focus, .btn-outline-focus.focus {
             box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
         }

        .btn-outline-focus:hover, .btn-outline-focus.hover {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }




    </style>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin"
         id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">
                    <div class="m-login__wrapper" style="padding: 45% 2rem 2rem 2rem;">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/logo-2.png">
                            </a>
                        </div>
                        <div class="m-login__signin">

                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="用户名" name="username"
                                           autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password"
                                           placeholder="密码" name="password">
                                </div>

                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit"
                                            class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air"
                                            style="box-shadow: 10px 10px 5px #fff;">
                                        登 录
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="m-stack__item m-stack__item--center">
                    <div class="m-login__account">
								<span class="m-login__account-msg">
									©2018~2019 澄明则正律师事务所
								</span>
                        &nbsp;&nbsp;
                        <!--<a style="color: #a5958b;" href="http://manager.east-concord.com/mobile/" target="_blank" class="m-link m-link&#45;&#45;focus m-login__account-link">-->
                            <!--客户端-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
             style="background-image: url(<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/VCG41N932504566.jpg)">
            <div class="m-grid__item m-grid__item--middle">
                <h3 class="m-login__welcome" style="text-align: center;">
                    <!--成功，始于助人成功-->
                </h3>
                <p class="m-login__msg" style="font-size:30px;">
                    <!--Success is rooted in assisting others to achieve-->

                </p>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src="<?php echo htmlentities(app('config')->get('web_url')); ?>/static/login/login.js" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
