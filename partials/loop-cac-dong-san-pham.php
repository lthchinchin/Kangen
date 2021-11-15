<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'san_pham',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,

);
$the_query_product = new WP_Query($args);
?>
<div id="page-product-list">
    <scection class="banner">
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-product-list/Banner.jpg"
            alt="">
    </scection>
    <section class="content">
        <div class="container">

            <h2 class="text-center">Dưới đây là danh mục các dòng sản phẩm Kangen được phân phối chính hãng bởi Khởi
                Nguyên
                Water</h2>

            <div class="product-list">
                <div class="row gx-md-4 gx-3 row-cols-md-3 row-cols-2">
                    <?php while ($the_query_product->have_posts()) : $the_query_product->the_post(); ?>
                    <div class="col">
                        <div class="product-item ">
                            <a href="<?php echo get_permalink() ?>">
                                <div class="product-item-mask">
                                    XEM CHI TIẾT >
                                </div>
                            </a>
                            <img
                                src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>">
                            <h4><?php echo get_the_title(); ?></h4>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>

            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>