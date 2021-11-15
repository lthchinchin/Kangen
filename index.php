<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php
$sticky = get_option('sticky_posts');
$args = array(
    'post_type' => 'san_pham',
    'orderby' => 'date',
    'order' => 'ASC',
    // 'post__in' => $sticky,
);
$the_query_product = new WP_Query($args);


$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'rad',

    // 'post__in' => $sticky, // get post sticky
    // 'ignore_sticky_posts' => 1

);
$the_query_post = new WP_Query($args);


?>
<div id="home-page">
    <section class="banner-home">
        <div data-carousel-items="1" data-loop="true" data-autoplay="true" data-dots="false" data-autotime="3000"
            class="owl-carousel banner-wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner.jpg">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner2.jpg">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner3.jpg">
        </div>
    </section>
    <section class="intro-direct">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100 mb-3 mb-md-0"
                        src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/thumbnail-intro.jpg">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h1 class="blue-light-co ">Kangen Water ® tinh khiết
                            Thương hiệu Nhật!</h1>
                        <p class=""><b>Khởi Nguyên Water</b> hân hạnh mang đến Kangen và các dòng sản phẩm Kangen
                            tạo ra nguồn
                            nước
                            tinh
                            khiết,
                            nguyên sơ trong lành, giúp cơ thể thanh lọc các chất ô nhiễm và khôi phục trạng thái cân
                            bằng tự
                            nhiên.</p>
                        <ul>
                            <li><i class="fas me-3 fa-check blue-light-co"></i>Thanh lọc cơ thể, giúp đẩy nhanh quá
                                trình hydrat hóa.
                            </li>
                            <li><i class="fas me-3 fa-check blue-light-co"></i>Tính kiềm thiên nhiên với độ pH phù hợp
                                với sức khỏe.
                            </li>
                            <li><i class="fas me-3 fa-check blue-light-co"></i>Chống Oxy hóa mạnh bằng cách trung hòa
                                các gốc tự do,
                                tăng
                                cường hệ miễn dịch.</li>
                        </ul>
                    </div>
                    <button class="btn btn-cus "><a href="<?php echo home_url() ?>/gioi-thieu">XEM THÊM<i
                                class="ms-2 fas fa-arrow-right"></i></a></button>
                </div>
            </div>
        </div>
    </section>
    <section class="product-modes">
        <div class="container">
            <h1 class="blue-light-co text-center">CÁC DÒNG SẢN PHẨM</h1>
            <p class="text-center">Khởi Nguyên Water chuyên các dòng sản phẩm Kangen (Máy lọc nước, Thức uống)</p>
            <div class="owl-carousel modes-list" data-loop="true" data-autoplay="true" data-dots="false" data-nav="true"
                data-margin="24" data-carousel-items="4" data-tablet="3" data-mobile="1">
                <?php while ($the_query_product->have_posts()) : $the_query_product->the_post(); ?>
                <div class="mode-item">
                    <div class="top overflow-hidden">
                        <a class="grey-co" href="<?php echo get_permalink() ?>">
                            <img class="cardhover imghover-op"
                                src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>">
                        </a>
                    </div>
                    <div class="bottom">
                        <h3 class="text-center"><a class="grey-co" href="<?php echo get_permalink() ?>">
                                <?php echo get_the_title(); ?></a></h3>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="company-intro">
        <div class="container">
            <h1 class="blue-light-co text-center">TẠI SAO NÊN CHỌN KHỞI NGUYÊN WATER?</h1>
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/employee.jpg">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="text-uppercase blue-light-co">
                        Chất lượng - tin cậy
                        đến từ dịch vụ - sản phẩm
                    </h2>
                    <p class="grey-light-co">Khởi Nguyên Water hân hạnh được mang đến 1 trong những dòng sản phẩm tốt
                        nhất dành cho sức khỏe
                        ngưới
                        tiêu dùng hiện nay. Bằng công nghệ tiên tiến nhất đến từ Nhật Bản, phục vụ sức khỏe người Việt
                        ta.
                        Hơn cả nước sạch, Khởi Nguyên Water mang đến bạn giá trị của sức khỏe dài lâu.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card-intro">
                        <div class="top d-flex justify-content-between">
                            <p class="title fw-bold text-uppercase">
                                <span class="blue-light-co">1. </span>sản phẩm chính hãng 100% - chất lượng, an toàn
                            </p>
                            <i class="fas fa-minus" data-bs-toggle="collapse" data-bs-target="#introContent1"
                                aria-expanded="true"></i>
                        </div>
                        <div id="introContent1" class="bottom grey-light-co collapse show">
                            Sản phẩm được phân phối chính thức 100% từ tập đoàn Enagic chuyên sản xuất các máy ion hóa
                            nước bền nhất thế giới (với Chứng Nhận ISO & Y Tế).<br> Dòng sản phẩm LeveLuk là dòng sản
                            phẩm
                            ion hóa nước duy nhất được chấp thuận sử dụng làm
                            thiết bị y khoa tại các bệnh viện Nhật Bản cho đến nay.
                        </div>
                    </div>
                    <div class="card-intro">
                        <div class="top d-flex justify-content-between">
                            <p class="title fw-bold text-uppercase">
                                <span class="blue-light-co">2. </span>Dịch vụ chuyên nghiệp, chính sách tốt cho người
                                dùng
                            </p>
                            <i class="fas fa-plus" data-bs-toggle="collapse" data-bs-target="#introContent2"></i>
                        </div>
                        <div id="introContent2" class="bottom grey-light-co collapse">
                            Với phương châm mang tới cho người dùng Việt những gì tinh túy nhất, chúng tôi cam kết mang
                            đến trải nghiệm tốt nhất dành cho mọi khách hàng thông qua những dịch vụ hiện đại và chất
                            lượng nhất.
                        </div>
                    </div>
                    <div class="card-intro">
                        <div class="top d-flex justify-content-between">
                            <p class="title fw-bold text-uppercase">
                                <span class="blue-light-co">3. </span>Đầy đủ, nhanh chóng và hiệu quả
                            </p>
                            <i class="fas fa-plus" data-bs-toggle="collapse" data-bs-target="#introContent3"></i>
                        </div>
                        <div id="introContent3" class="bottom grey-light-co collapse">
                            Đi đôi với chất lượng sản phẩm tốt nhất, chúng tôi còn mang đến cho quý khách hàng những gói
                            dịch vụ chuyên nghiệp nhất để duy trì và cải thiện hơn những phát sinh trong quá trình sử
                            dụng. <br>Mọi lợi ích vì trải nghiệm tốt nhất cho bạn bằng phong thái chuyên nghiệp và tận
                            tâm.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-list">
        <div class="container">
            <div class="row row-cols-lg-4 row-cols-1 ">
                <div class="col-lg-6">
                    <h1 class="blue-light-co">
                        CÁC GÓI DỊCH VỤ CHUYÊN NGHIỆP
                    </h1>
                    <p class="mb-lg-0 mb-3">
                        Không chỉ là 1 trải nghiệm thực sự tốt, chúng tôi còn mang đến cho quý khách hàng những gói dịch
                        vụ chuyên nghiệp nhất để duy trì và cải thiện hơn những phát sinh trong quá trình sử dụng
                    </p>
                </div>
                <div class="col">
                    <a href="<?php echo home_url() ?>/dich-vu?dv=dv1">
                        <div class="service-card">
                            <h1 class="grey-light-co">
                                01
                            </h1>
                            <h5>
                                Dịch vụ bảo hành máy Kangen
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="<?php echo home_url() ?>/dich-vu?dv=dv2">
                        <div class="service-card">
                            <h1 class="grey-light-co">
                                02
                            </h1>
                            <h5>
                                Dịch vụ sửa chữa máy Kangen
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
            <button class="btn btn-cus d-block mx-auto"><a href="<?php echo home_url() ?>/dich-vu">XEM THÊM<i
                        class="ms-2 fas fa-arrow-right"></i></a></button>
        </div>
    </section>
    <section class="our-project">
        <div class="container">
            <div class="row row-cols-3 ">
                <div class="col">
                    <div class="content">
                        <span>
                            800<span class="blue-light-co">+</span>
                        </span>
                        <p>KHÁCH HÀNG</p>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <span>
                            900<span class="blue-light-co">+</span>
                        </span>
                        <p>DỰ ÁN ĐÃ TRIỂN KHAI</p>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <span>
                            520<span class="blue-light-co">+</span>
                        </span>
                        <p>ĐỐI TÁC TIỀM NĂNG</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="certificate">
        <div class="top">
            <div class="container">
                <h1 class="text-center blue-light-co mb-3">CHỨNG CHỈ</h1>
                <p class="text-center">Enagic International được chứng nhận ISO 9001, ISO 14001 và ISO 13485 về quản lý
                    chất
                    lượng và quản lý
                    môi
                    trường, Con dấu vàng của Hiệp hội Chất lượng Nước cho chứng nhận sản phẩm, và là thành viên tốt của
                    Hiệp
                    hội
                    Bán hàng Trực tiếp có uy tín.</p>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="owl-carousel" data-carousel-items="6" data-tablet="4" data-mobile="2" data-loop="true"
                    data-dots="false">
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi1.png">
                    </div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi2.png">
                    </div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi3.png">
                    </div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi4.png">
                    </div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi5.png">
                    </div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/chungchi6.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-highlight">
        <div class="container">
            <h1 class="blue-light-co text-center mb-4 mb-md-5">
                TIN TỨC - BÀI VIẾT
            </h1>
            <div class="owl-carousel modes-list" data-loop="true" data-autoplay="true" data-dots="false" data-nav="true"
                data-margin="24" data-carousel-items="3" data-tablet="2" data-mobile="1">
                <?php while ($the_query_post->have_posts()) : $the_query_post->the_post(); ?>
                <div class="mode-item">
                    <div class="top overflow-hidden">
                        <a class="grey-co" href="<?php echo get_permalink() ?>">
                            <img class="cardhover imghover-op"
                                src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>">
                        </a>
                    </div>
                    <div class="bottom">
                        <h4 class="fw-bold"><?php echo get_the_title(); ?></h4>

                        <h5><i class="far fa-calendar-alt me-3"></i><?php echo get_the_date('Y-m-d H:i:s'); ?></h5>

                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>

            <button class="btn btn-cus d-block mx-auto"><a href="<?php echo home_url() ?>/bai-viet">XEM THÊM<i
                        class="ms-2 fas fa-arrow-right"></i></a></button>
        </div>
    </section>
    <section class="contact-now">
        <div class="container d-flex flex-wrap justify-content-between">
            <h1 class="text-white">ĐĂNG KÝ NHẬN THÔNG TIN TƯ VẤN</h1>
            <button class="btn btn-cus2 d-block m-0"><a href="<?php echo home_url() ?>/lien-he">LIÊN HỆ
                    NGAY</a></button>
        </div>
    </section>
</div>
<?php get_footer(); ?>