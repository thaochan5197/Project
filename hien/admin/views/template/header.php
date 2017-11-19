<?php
require '../../configs/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NHÂN VIÊN</title>

    <!-- Bootstrap -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo URL_ADMIN_PART?>/views/template/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo URL_ADMIN_PART?>/views/template/css/styles.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="loading_popup ui-pnotify-text" style="display: none" aria-role="alert">Loading ....</div>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>NHÂN VIÊN</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo URL_ADMIN_PART?>/views/template/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li <?php echo $menu = ($_SESSION['ctr_name'] == 'users')?'class="active"':''?>><a><i class="fa fa-home"></i> Quản lý kế hoạch <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" <?php echo $menu = ($_SESSION['ctr_name'] == 'users')?'style="display:block"':''?>">
                                    <li <?php echo $sub_menu = ($_SESSION['sub_menu'] == 'list' || $_SESSION['sub_menu'] == 'index')?'class="current-page"':''?>><a href="user_controller.php?action=list">Danh sách kế hoạch</a></li>
                                    <li <?php echo $sub_menu = ($_SESSION['sub_menu'] == 'addNew')?'class="current-page"':''?>><a href="user_controller.php?action=addNew">Đề xuất kế hoạch</a></li>
                                    <li <?php echo $sub_menu = ($_SESSION['sub_menu'] == 'edit')?'class="current-page"':''?>><a href="user_controller.php?action=editPage">Edit</a></li>
                                </ul>
                            </li>
                            <li <?php echo $menu = ($_SESSION['ctr_name'] == 'finance')?'class="active"':''?>><a><i class="fa fa-home"></i> Quản lý công tác phí <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" <?php echo $menu = ($_SESSION['ctr_name'] == 'finance')?'style="display:block"':''?>">
                                    <li <?php echo $sub_menu = ($_SESSION['sub_menu'] == 'addAdvance')?'class="current-page"':''?>><a href="finance_controller.php?action=addAdvance">Đề nghị tạm ứng</a></li>
                                    <li <?php echo $sub_menu = ($_SESSION['sub_menu'] == 'addPayment')?'class="current-page"':''?>><a href="finance_controller.php?action=addPayment">Đề nghị thanh toán</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">edit
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?php echo URL_ADMIN_PART?>/controllers/user_controller.php?action=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->