<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>
<div id="all-posts">
    <scection class="banner">
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-product-list/Banner.jpg"
            alt="">
    </scection>
    <div class="content-nav">
        <div class="container">
            <ul class="nav nav-tab">
                <li>
                    <h4 class="tab-intro-cus nav-link active">Bài viết</h4>
                </li>
                <li>
                    <h4 class="tab-intro-cus nav-link">Chia sẻ kiến thức
                    </h4>
                </li>
                <li>
                    <h4 class="tab-intro-cus nav-link">Khởi Nguyên Team</h4>
                </li>
            </ul>
        </div>
    </div>
    <section class="content">

    </section>
</div>
<!--main-content-->
<?php get_footer(); ?>