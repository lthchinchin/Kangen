<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>
<!-- CSS _contact2.scss -->
<main id="main" class="contact">
    <section class="contact-head position-relative">
        <div class="contact-head__content container position-absolute top-50 start-50 translate-middle">
            <h1 class="contact-head__title text-white text-center text-capitalize">Liên hệ với chúng tôi</h1>
            <p class="contact-head__caption text-white text-center">Công ty TNHH thương mại và công nghệ BITI</p>
        </div>
    </section>
    <section class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="contact-information__item text-center">
                        <div class="icon-box text-dark">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <h4 class="infor-name text-dark">ĐIỆN THOẠI</h4>
                        <div class="infor-desc">A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings.</div>
                        <div class="infor-value"><a href="#">+1-2345-2345</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="contact-information__item text-center">
                        <div class="icon-box text-dark">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <h4 class="infor-name text-dark">EMAIL</h4>
                        <div class="infor-desc">A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings.</div>
                        <div class="infor-value"><a href="#">nguyenbaonguyen.vn@gmail.com</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="contact-information__item text-center">
                        <div class="icon-box text-dark">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <h4 class="infor-name text-dark">ĐỊA CHỈ</h4>
                        <div class="infor-desc">42 Mẹ Thứ, Hòa Xuân,<br /> Cẩm Lệ, Đà Nẵng</div>
                        <div class="infor-value"><a href="#">Xem trên Google Map</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="contact-form__head">
                <h2 class="contact-form__title text-center text-dark text-uppercase">Hãy để lại thông tin của bạn</h2>
                <p class="contact-form__subtitle text-center text-dark mb-0">Chúng tôi sẽ liên hệ lại sớm nhất có thể
                </p>
            </div>
            <div class="contact-form__main">
                <?php echo do_shortcode('[contact-form-7 id="69" title="Form liên hệ 1"]'); ?>
            </div>
        </div>
    </section>
    <section class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.217425923081!2d108.21950441460841!3d16.002193188922433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421b46bcc7e94b%3A0x493e54f6a749bc6b!2zNDIgTeG6uSBUaOG7qSwgSG_DoCBYdcOibiwgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1629440628366!5m2!1svi!2s"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="contact-social">
        <div class="container">
            <ul class="contact-social__list list-unstyled mb-0 d-flex justify-content-center">
                <li>
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-tumblr"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>