<?php
get_header();
?>
<?php
$image = get_field('banner_img');
$pd_detail = get_field('product_detail');
$tskt = $pd_detail['thong_số_ki_thuật'];
$current_id = get_the_ID();
$args = array(
    'post_type' => 'san_pham',
    'posts_per_page' => 6,
    'orderby' => 'rand',
);
$the_query_recomend_pd = new WP_Query($args);
$post_slug = $post->post_name;
?>
<div id="detail-product">
    <section class="banner">
        <img class="w-100" src="<?php echo get_field('banner_img')['url']; ?>">
    </section>
    <section class="content">
        <div class="top">
            <div class="container">
                <h1 class="text-center blue-light-co fw-bold"><?php the_title() ?></h1>
                <?php the_content(); ?>
                <div class="row row-cols-md-2 row-cols-1 mt-md-5 mt-3">
                    <?php if ($pd_detail['mo_ta']) { ?>
                    <?php
                        foreach ($pd_detail['mo_ta'] as $value) {
                        ?>
                    <div class="col">
                        <div class="item-feature">
                            <div class="row">
                                <div class="col-md-4 my-md-0 my-3">
                                    <img src=" <?php echo $value['img']['url'] ?>">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="under-line">
                                        <?php echo $value['name'] ?>
                                    </h4>
                                    <p>
                                        <?php echo $value['content'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <ul class="nav">
                    <li>
                        <div class="tab active me-md-4 me-3" data-bs-toggle="tab" data-bs-target="#hight-light-feature">
                            <h4>Tính năng nổi bật</h4>
                        </div>
                    </li>
                    <li>

                        <div class="tab" data-bs-toggle="tab" data-bs-target="#specification">
                            <h4>Mô tả sản phẩm</h4>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="tab-content-wrapper">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="hight-light-feature">
                        <div class="container">
                            <h1><?php echo $pd_detail['tinh_nang_noi_bat']['sologan'] ?></h1>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row row-cols-md-2 row-cols-1">
                                        <?php if ($pd_detail['tinh_nang_noi_bat']['cac_tinh_nang']) { ?>
                                        <?php
                                            foreach ($pd_detail['tinh_nang_noi_bat']['cac_tinh_nang'] as $value) {
                                            ?>
                                        <div class="col mb-md-4 mb-3">
                                            <h4 class="under-line">
                                                <?php echo $value['name'] ?>
                                            </h4>
                                            <p> <?php echo $value['content'] ?></p>
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <img class="w-100"
                                        src="<?php echo $pd_detail['tinh_nang_noi_bat']['img']['url'] ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    if (in_array($post_slug, array('thuc-uong-kangen-ukon'))) { ?>
                    <div class="tab-pane fade" id="specification">
                        <div class="container">
                            <h2 class="mb-md-4 mb-3">Thông số kỹ thuật</h2>
                            <table class="table">
                                <tbody class="thucpham">
                                    <tr>
                                        <td></td>
                                        <td><b>Thành phần dinh dưỡng</b></td>
                                        <td><b>% Giá trị hàng ngày</b></td>
                                    </tr>
                                    <tr>
                                        <td>Lượng calo: </td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Tổng số chất béo:</td>
                                        <td>0.5 g </td>
                                        <td>1%*</td>
                                    </tr>
                                    <tr>
                                        <td>Tổng carbohydrate:</td>
                                        <td>1 g </td>
                                        <td>1%*</td>
                                    </tr>
                                    <tr>
                                        <td>Chất xơ:</td>
                                        <td>1 g </td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Vitamin C:</td>
                                        <td>4 mg</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Vitamin E:</td>
                                        <td>4 mg</td>
                                        <td>27%</td>
                                    </tr>
                                    <tr>
                                        <td>Thiamin:</td>
                                        <td>5 mg</td>
                                        <td>417%</td>
                                    </tr>
                                    <tr>
                                        <td>Riboflavin:</td>
                                        <td>24 mg</td>
                                        <td>1846%</td>
                                    </tr>
                                    <tr>
                                        <td>Niacin:</td>
                                        <td>1 mg</td>
                                        <td>6%</td>
                                    </tr>
                                    <tr>
                                        <td>Folate:</td>
                                        <td>20% </td>
                                        <td>1846%</td>
                                    </tr>
                                    <tr>
                                        <td>Vitamin B-12:</td>
                                        <td>18 mcg </td>
                                        <td>750%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>* Phần trăm giá trị hàng ngày dựa trên chế độ ăn 2.000 calo.</p>
                        </div>
                    </div>
                    <?php } else {
                    ?>
                    <div class="tab-pane fade" id="specification">
                        <div class="container">
                            <h2 class="mb-md-4 mb-3">Thông số kỹ thuật</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Tấm điện cực: </td>
                                        <td><?php echo $tskt['so_tam_dien_cuc']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kích thước tấm: (mm)</td>
                                        <td><?php echo $tskt['kich_thuoc_dia']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ORP âm: (mV)</td>
                                        <td><?php echo $tskt['orp_am']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Phạm vi pH:</td>
                                        <td><?php echo $tskt['phạm_vi_ph']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tạo ra:</td>
                                        <td><?php echo $tskt['tao_ra']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Công suất: (W)</td>
                                        <td><?php echo $tskt['cong_suat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tổng trọng lượng: (kg)</td>
                                        <td><?php echo $tskt['tong_trong_luong']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kích thước WHD: (mm)</td>
                                        <td><?php echo $tskt['kich_thuoc_whd']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tốc độ sản xuất: (l / phút)</td>
                                        <td><?php echo $tskt['nang_suat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dễ dàng sử dụng:</td>
                                        <td><?php echo $tskt['de_su_dung']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngôn ngữ:</td>
                                        <td><?php echo $tskt['so_ngon_ngu']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bảo hành: (năm)</td>
                                        <td><?php echo $tskt['bao_hanh']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <section class="img-gallery">
        <div class="container">

            <h2 class="text-center mb-md-5 mb-3">Hình ảnh về sản phẩm </h2>
            <div class="row gx-md-4 gx-2 row-cols-md-4 row-cols-2">
                <?php if ($pd_detail['album']) { ?>
                <?php
                    foreach ($pd_detail['album'] as $value) {
                    ?>
                <div class="col">
                    <img class="mb-md-4 mb-2 w-100" src="<?php echo $value ?>">
                </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="certificate">
        <div class="top">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">Chứng chỉ sản phẩm</h2>
                <p class="text-center">Enagic International được chứng nhận ISO 9001, ISO 14001 và ISO 13485 về
                    quản lý
                    chất
                    lượng và quản lý
                    môi
                    trường, Con dấu vàng của Hiệp hội Chất lượng Nước cho chứng nhận sản phẩm, và là thành viên
                    tốt của
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
    <section class="product-recomend">
        <div class="container">
            <h2 class="text-center mb-md-4 mb-3">Sản phẩm liên quan</h2>
            <div class="owl-carousel" data-loop="true" data-autoplay="true" data-nav="true" data-margin="24"
                data-carousel-items="4" data-tablet="3" data-mobile="2" data-dots="false">
                <?php
                while ($the_query_recomend_pd->have_posts()) : $the_query_recomend_pd->the_post(); ?>
                <?php if ($current_id != get_the_ID()) {  ?>
                <a href="<?php echo get_permalink() ?>">
                    <div class="product-recomend-item">
                        <img
                            src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>">
                        <h4>
                            <?php echo get_the_title(); ?>
                        </h4>
                    </div>
                </a>
                <?php } ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>