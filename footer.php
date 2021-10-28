<?php
$args = array(
    'post_type' => 'san_pham',
    'orderby' => 'date',
    'order' => 'ASC',
);
$the_query_product = new WP_Query($args);

$args = array(
    'post_type' => 'dich_vu',
    'orderby' => 'date',
    'order' => 'ASC',
);
$the_query_dv = new WP_Query($args);

?>

<a href="#">
    <div id="bottom_to_top">
        <i class="fas fa-arrow-up text-white"></i>
    </div>
</a>
<a href="tel:07090033177">
    <div id="call_me">
        <i class="fas fa-phone-alt text-white"></i>
    </div>
</a>
<div id="footer">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-1">
            <div class="col">
                <div class="top">
                    <a href="<?php echo home_url(); ?>/">
                        <img style="width: 144px;height: 76px;"
                            src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png"
                            class="logo me-2 mb-2">
                    </a>
                    <a href="https://goo.gl/maps/T9QY8amwqE6KRxuH6" target="_blank" class=" d-block address"><i
                            class="fas fa-map-marker-alt me-2 orange-co"></i>Địa chỉ: 37
                        An Nhơn 11, Đà Nẵng</a>
                    <a href="tel:0905028646" class=" d-block tel"><i class="fas fa-phone-alt me-2 orange-co"></i>Liên
                        hệ:
                        0905028646</a>
                    <a href="mailto:khoinguyenwater@gmail.com" class=" d-block email"><i
                            class="far fa-envelope me-2 orange-co"></i>Email:
                        khoinguyenwater@gmail.com</a>
                </div>
                <div class="bottom">
                    <iframe style="max-width: 100%;"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKhoiNguyenWater&tabs=timeline&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=713028052597846"
                        width="340" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
            <div class="col">
                <h4>Danh mục</h4>
                <ul class="f-column-nav">
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
            <div class="col">
                <h4>Dịch vụ</h4>
                <ul class="f-column-nav">
                    <?php $count = 1;  ?>
                    <?php while ($the_query_dv->have_posts()) : $the_query_dv->the_post(); ?>
                    <li><a
                            href="<?php echo home_url() . '/dich-vu?dv=dv' . $count ?>"><?php echo get_the_title(); ?></a>
                    </li>
                    <?php $count++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
            <div class=" col">
                <h4>Các dòng sản phẩm</h4>
                <ul class="f-column-nav">
                    <ul class="f-column-nav">
                        <?php $count = 1;  ?>
                        <?php while ($the_query_product->have_posts()) : $the_query_product->the_post(); ?>
                        <li><a href="<?php echo get_permalink() ?>"><?php echo get_the_title(); ?></a>
                        </li>
                        <?php $count++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>

                </ul>
            </div>
        </div>

        <div class="text-center text-white mt-3 pt-3 border-top" style="border-color: #FFFFFF1A !important;">
            © Copyright KhoiNguyenWater. Design by BIti.vn
        </div>
    </div>
</div>
<script>
<?php
    global $post;
    $post_slug = $post->post_name;
    ?>
var current_slug = '<?php echo $post_slug; ?>'
var id_dv = '<?php echo $_GET['dv'] ? $_GET['dv'] : ""  ?>'
</script>
<?php wp_footer(); ?>
</div>
<a href="javascript:;" id="goTop" class="bd-circle t-center"></a>
</body>

</html>