$(function () {
  // sticky nabvar
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $(".navbar").addClass("navbg");
    } else {
      $(".navbar").removeClass("navbg");
    }
  })

  $(".navbar-toggler").on('click', function () {
    $(".fa-bars-staggered").toggleClass("fa-xmark");
  });
  // <i class="fa-solid fa-xmark"></i>

  // animated headinline


  $('.selector').animatedHeadline({
    animationDelay: 1000,
    animationType: 'clip',
    Delay: 2000,
    barWaiting: 800,
    lettersDelay: 50,
    typeLettersDelay: 150,
    selectionDuration: 500,
    typeAnimationDelay: 1300,
    revealDuration: 600,
    revealAnimationDelay: 1500
  });

  // CommonJS

  var mixer = mixitup('.mixitup');

  $('.counter').counterUp();

  // color seitcher
  $(".coloseitcher-icon").on('click',function(){
    $(".color-switcher").toggleClass("colorboxshow");
  })


  $(".colorbtn").each(function () {
    $(this).on('click', function () {
      var color = $(this).attr("data-color");
      document.documentElement.style.setProperty("--main-color", color);
    })
  })

})

var kursorx = new kursor({
  type: 1,
})

AOS.init();

