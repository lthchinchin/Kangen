<?php get_header(); ?>
<div id="contact">
    <section class="banner">
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/page-contact/Banner.jpg">
    </section>
    <section class="content">
        <div class="container">
            <img id="slide-logo" class="center-logo"
                src="<?php bloginfo('template_directory'); ?>/assets/images/logo-big.png">
            <h4 class="fw-bold text-center mb-md-3 mb-2">MÁY LỌC NƯỚC KANGEN _ KHỞI NGUYÊN WATER</h4>
            <div class="row px-md-4 px-3">
                <div class="col-md-6">
                    <p>Địa chỉ: 37 An Nhơn 11, An Hải Bắc, Sơn Trà, Đà Nẵng</p>
                    <p>Hotline: 0905 028 646</p>
                    <p>Email: khoinguyenwater@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <p>Theo dõi chúng tôi</p>
                    <p>Fanpage: https://www.facebook.com/khoinguyenwater</p>
                </div>
            </div>
            <div class="contact-form">


                <div class="row">
                    <div class="col-lg-7">
                        <?php echo do_shortcode('[contact-form-7 id="127" title="Form liên hệ 1"]') ?>

                    </div>
                    <div class="col-lg-5">
                        <div>
                            <b class="grey-co">Chúng tôi rất vui khi được nghe từ bạn.</b>
                            <p class="grey-light-co"> Gửi cho chúng tôi câu hỏi của bạn bằng cách sử dụng biểu mẫu bên
                                dưới.
                                Chúng tôi thường trả lời
                                trong vòng vài giờ.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div style="line-height: 0;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9522227144184!2d108.23306951468416!3d16.06796888888175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b2740ed1a5%3A0x7cc94ef61250d0e8!2zTcOBWSBM4buMQyBOxq_hu5pDIEtBTkdFTiBfIEtI4bueSSBOR1VZw4pOIFdBVEVS!5e0!3m2!1svi!2s!4v1635478506362!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
<script>
// animate appear
// $(window).scroll(function() {
//     var hT = $('#slide-logo').offset().top,
//         hH = $('#slide-logo').outerHeight(),
//         wH = $(window).height(),
//         wS = $(this).scrollTop();
//     console.log(hT);
//     if (wS > (hT + hH - wH)) {
//         if ($('#slide-logo').css('animation-name') == 'none') {
//             $('#slide-logo').css({
//                 "animation-name": "example"
//             });
//         }
//     }
// });
</script>