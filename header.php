<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Page Title ================================================== -->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png"
        href="<?php bloginfo('template_directory'); ?>/assets/images/faicon.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_after_body_open'); ?>
    <?php wp_body_open(); ?>
    <div id="header" class="bg-white" style="margin-top:<?php echo is_user_logged_in() ? '31px' : '' ?>">
        <div class="header-top blue-bg py-2  text-white">
            <div class="container d-flex justify-content-between">
                <div class="header-top-left">
                    <p><span class="fw-bold">KHỞI NGUYÊN WATER </span><i class="d-none d-md-inline">- “Change your
                            water,
                            change
                            your
                            life”</i></p>
                </div>
                <div class="header-top-right d-flex align-items-center">
                    <a href="https://www.facebook.com/KhoiNguyenWater" target="_blank"><i
                            class="ms-2 text-white fab fa-facebook"></i></a>
                    <i class="ms-2 fab fa-instagram"></i>
                    <i class="ms-2 fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="hLeft">
                        <a href="<?php echo home_url(); ?>/">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt=""
                                class="logo me-2 ms-auto ms-md-0 ">
                        </a>
                    </div>
                    <div class="hRight d-flex align-items-center">
                        <div class="h-mb d-xxl-none my-auto">
                            <i class="fas fa-bars mb-menu"></i>
                        </div>
                        <ul class="nav d-xxl-flex d-none justify-content-between w-100 grey-co">
                            <li><a data-navurl="trang-chu" class="" href="<?php echo home_url(); ?>/">Trang
                                    chủ</a>
                            </li>
                            <li><a data-navurl="gioi-thieu" class="" href="<?php echo home_url(); ?>/gioi-thieu">Giới
                                    thiệu</a></li>
                            <li><a data-navurl="dich-vu" class="" href="<?php echo home_url(); ?>/dich-vu">Dịch vụ</a>
                            </li>
                            <li><a data-navurl="cac-dong-san-pham" class=""
                                    href="<?php echo home_url(); ?>/cac-dong-san-pham">Các dòng sản phẩm</a>
                            </li>
                            <li><a data-navurl="bai-viet" class="" href="<?php echo home_url(); ?>/bai-viet">Bài
                                    viết</a>
                            </li>
                            <li><a data-navurl="lien-he" class="" href="<?php echo home_url(); ?>/lien-he">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mb-menu">
        <ul class="nav d-block w-100">
            <li><a data-navurl="home" class="" href="<?php echo home_url(); ?>/">Trang chủ</a>
            </li>
            <li><a data-navurl="gioi-thieu" class="" href="<?php echo home_url(); ?>/gioi-thieu">Giới thiệu</a></li>
            <li><a data-navurl="dich-vu" class="" href="<?php echo home_url(); ?>/dich-vu">Dịch
                    vụ</a></li>
            <li><a data-navurl="cac-dong-san-pham" class="" href="<?php echo home_url(); ?>/cac-dong-san-pham">Các dòng
                    sản phẩm</a>
            </li>
            <li><a data-navurl="lien-he" class="" href="<?php echo home_url(); ?>/lien-he">Bài
                    viết</a>
            </li>
        </ul>
    </div>