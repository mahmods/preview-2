const nav = $('#navbar-example');
const navTop = nav.height();

function stickyNavigation() {

  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = navTop + 'px';
    nav.addClass('fixed-nav');
  } else {
    document.body.style.paddingTop = 0;
    nav.removeClass('fixed-nav');
  }
}

window.addEventListener('scroll', stickyNavigation);

$(document).ready(function () {
    $(".dropdown").each(function() {
        var self = this;
        $(this).siblings("a").mouseenter(function() {
            $(self).show();
            $(self).addClass("dropdown-toggled");
        });
        $(this).siblings("a").mouseleave(function() {
          $(self).removeClass("dropdown-toggled");
          $(self).hide();
        });
    });
    var wow = new WOW().init();
    var feed = new Instafeed({
        accessToken: '548157251.1677ed0.4a647ef9795c44d2906633ba2915ca00',
        get: 'user',
        limit: 8,
        userId: 'self',
        resolution: 'standard_resolution',
    });
    feed.run();
    $('.header-slider').slick({
        slidesToShow: 1,
        fade: true,
        loop: true,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false
              }
            },
          ]
    });
    $('.products-slider').slick({
        slidesToShow: 4,
        arrows: false,
        dots: true,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1
              }
            }
          ]
    });
    $(window).on("click", function(e) {
            if ($("#main-navbar").hasClass('on')) {
                $("#main-navbar").toggleClass('on');
                $("#main-navbar").toggleClass('off');
        }
    });
    $(".navbar-toggler").on("click", function(e) {
        event.stopPropagation();
        if ($("#main-navbar").hasClass('on') || $("#main-navbar").hasClass('off')) {
            $("#main-navbar").toggleClass('on');
            $("#main-navbar").toggleClass('off');
          }
          else {
            $("#main-navbar").addClass('on');
          }
    });
});