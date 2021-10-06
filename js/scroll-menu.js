var num = 100;

$(window).bind('scroll', function() {
  if ($(window).scrollTop() > num) {
    $('.header-wrapper').addClass('fixed');
    $('header').addClass('fixed-bg');
  } else {
    $('.header-wrapper').removeClass('fixed');
    $('header').removeClass('fixed-bg');
  }
});