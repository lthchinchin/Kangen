jQuery(function ($) {
  $(document).ready(function () {
    // animate appear viet tren page lien he
    // $(window).scroll(function () {
    //   var hT = $('#slide-logo').offset().top,
    //     hH = $('#slide-logo').outerHeight(),
    //     wH = $(window).height(),
    //     wS = $(this).scrollTop();
    //   console.log(hT);
    //   if (wS > (hT + hH - wH)) {
    //     if ($('#slide-logo').css('animation-name') == 'none') {
    //       $('#slide-logo').css({ "animation-name": "example" });
    //     }
    //   }
    // });

    // close collapse footer
    if ($(window).width() < 960) {
      $('h4[href="#sp-collapse"]').click()
      $('h4[href="#dv-collapse"]').click()
    }


    // active nav posts 
    var arrUrl = ((window.location.pathname).split('/')).filter(val => val != '')
    var post_slug = arrUrl[arrUrl.length - 1]
    $('.nav.nav-posts h4').each(function () {
      if ($(this).data('posts-slug') == post_slug) {
        $(this).addClass('active')
      }
      // console.log($(this).data('posts-slug'));
    });

    // avtive nav tab js 
    $(`[data-bs-target='#${id_dv}']`).click()

    // home colapse change btn
    $('.card-intro i.fas').click(function () {

      console.log($(this).attr('aria-expanded'));
      if ($(this).attr('aria-expanded') == 'true') {
        $(this).toggleClass('fa-plus fa-minus');
        $(this).css("transform", "rotate(180deg)");

      } else {
        // console.log('sadsds');
        $(this).toggleClass('fa-minus fa-plus');
        $(this).css("transform", "rotate(0)");

      }
    })

    // mobile menu
    var mbMenu = document.getElementById("mb-menu");
    $('i.mb-menu').click(function () {
      if (mbMenu.style.width == '100%') {
        mbMenu.style.width = '0';
        $('#mb-menu .nav')[0].style.left = '-100px';
        $(this).toggleClass('fa-times fa-bars');
        $(this).css("transform", " rotate(0)");
      } else {
        mbMenu.style.width = '100%';
        $('#mb-menu .nav')[0].style.left = '0';
        $(this).toggleClass('fa-bars fa-times');
        $(this).css("transform", " rotate(180deg)");
      }
    })


    // active current page
    $("a[data-navUrl]").each(function () {
      if ($(this).data("navurl") == current_slug) {
        $(this).addClass("current-page");
      }
    });

    // scroll effect header , bottomToTop , Btn-call
    window.onscroll = function () {
      myFunction();
    };
    var header = document.getElementById("header");
    var toTop = document.getElementById("bottom_to_top");
    var callMe = document.getElementById("call_me");
    var myFanpage = document.getElementById("my_fanpage");
    function myFunction() {
      // console.log(this.scrollY);
      if (this.scrollY > 100) {
        toTop.style.bottom = "30px";
        callMe.style.left = "30px";
        myFanpage.style.left = "30px";
      } else {
        toTop.style.bottom = "-100px";
        callMe.style.left = "-100px";
        myFanpage.style.left = "-100px";
      }

      if (this.oldScroll > this.scrollY) {
        header.style.top = "0";
      } else {
        if (this.scrollY == 0) {
          header.style.top = "0";
        } else {
          if (this.scrollY > 135) {
            header.style.top = "-160px";
          }
        }
      }
      this.oldScroll = this.scrollY;
    }

    // owlcarosel
    if ($(".owl-carousel").length) {
      $(".owl-carousel").each(function () {
        var owl = $(".owl-carousel");
        $(this).owlCarousel({
          margin: $(this).data("margin"),
          autoplayTimeout: $(this).data("autotime"),
          smartSpeed: $(this).data("speed"),
          autoHeight: $(this).data("autoheight"),
          autoplay: $(this).data("autoplay"),
          // autoplay: true,
          items: $(this).data("carousel-items"),
          // nav: $(this).data("nav"),
          nav: false,
          dots: $(this).data("dots"),
          center: $(this).data("center"),
          loop: $(this).data("loop"),
          mouseDrag: $(this).data("drag"),
          responsive: {
            0: {
              items: $(this).data("mobile"),
              autoplay: true,
              autoplayTimeout: 3000

            },
            768: {
              items: $(this).data("tablet"),
              margin: $(this).data("margintb"),
              autoplay: true,
              autoplayTimeout: 3000

            },
            992: {
              items: $(this).data("desktop-small"),
              margin: $(this).data("margintb"),
            },
            1680: {
              items: $(this).data("desktop"),
              margin: $(this).data("margintb"),
            },
          },
        });
      });
    }


    if ($('.pagenavi .current').text() == '1') {
      $('.pagenavi').prepend('<a class="prev-fake"><</a>');
    }

  });
});
