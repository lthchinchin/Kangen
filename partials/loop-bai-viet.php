<?php
get_header();
?>
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $sticky = get_option('sticky_posts');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    // 'post__not_in' => $sticky, // get post sticky
    'paged' => $paged
);
$the_query = new WP_Query($args);
?>
<div id="all-posts">
    <scection class="banner">
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-product-list/Banner.jpg"
            alt="">
    </scection>
    <?php get_template_part("template-parts/nav_top", "post"); ?>
    <section class="content">
        <div class="container">

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="post-item border ">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="wrapper">
                            <a href="<?php echo get_permalink() ?>">
                                <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="content">
                            <p class="title under-line fw-bold"><a href="<?php echo get_permalink() ?>"
                                    class="grey-co"><?php echo get_the_title(); ?></a></p>
                            <p class="short-desc"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
                            <p class="see-detail "><a href="<?php echo get_permalink() ?>" class="text-white">Xem thêm
                                    ></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php prw_wp_corenavi($the_query, $paged); ?>
            <?php wp_reset_query(); ?>

        </div>
    </section>
</div>
<!--main-content-->
<?php get_footer(); ?>