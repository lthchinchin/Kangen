<?php
get_header();
?>
<div id="post-detail">
    <div class="container">
        <h1 class="mb-md-4 mb-3"><?php echo get_the_title(); ?></h1>
        <img class="w-100 mb-md-3 mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <p>
            <?php echo get_the_content(); ?>
        </p>
        <div class="next-pre-post">
            <div class="row">
                <div class="col-6">
                    <div class="next-pre-post-bar">
                        <?php previous_post_link('%link', '<i class="fas me-3 fa-arrow-left"></i><span class="d-none d-sm-inline">%title</span>') ?>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="next-pre-post-bar">
                        <?php next_post_link('%link', '<span class="d-none d-sm-inline">%title</span><i class="fas ms-3 fa-arrow-right"></i>') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>