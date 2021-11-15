<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'dich_vu',
    'orderby' => 'date',
    'order' => 'ASC',
);
$the_query = new WP_Query($args);
?>
<div id="service-page">
    <section class="banner">
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-service/Banner.jpg" alt="">
    </section>
    <section class="nav-content">
        <div class="container">
            <h4 class="text-center my-4 my-md-5 ">
                VÌ MỘT CỘNG ĐỒNG KHỎE MẠNH
                KHỞI NGUYÊN WATER HÂN HẠNH MANG ĐẾN QUÝ KHÁCH HÀNG NHỮNG DỊCH VỤ SAU ĐỂ CÓ THỂ TRẢI NGHIỆM NƯỚC KANGNEN
                1
                CÁCH TUYỆT VỜI NHẤT
            </h4>
            <ul class="nav row gx-3 gx-md-4 row-cols-lg-3 row-cols-2">
                <?php $count = 1;
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="col">
                    <div class="tab cursor-pointer <?php echo $count == 1 ? ' active' : ''  ?>" data-bs-toggle="tab"
                        data-bs-target="#dv<?php echo $count ?>">
                        <h4><?php echo get_the_title(); ?></h4>
                    </div>
                </li>
                <?php $count++;
                endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
        <div class="tab-content-wrapper">
            <div class="container">
                <div class="tab-content">
                    <?php $count = 1;
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="tab-pane fade <?php echo $count == 1 ? ' show active' : '' ?>"
                        id="dv<?php echo $count ?>">
                        <?php the_content() ?>
                    </div>
                    <?php $count++;
                    endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

    </section>
</div>
<?php get_footer(); ?>