$(function () {
  //  ====================================== СЛАЙДЕР ===========================================
  $('.testimonials__slider').slick({
    arrows: false,
    slidesToShow: 3,
    infinite: true,
    draggable: false,
    appendArrows: $('.testimonials__slider-arrows'),
    variableWidth: true,
    waitForAnimate: false,
    responsive:
      [
        {
          breakpoint: 1230,
          settings: {
            variableWidth: false,
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 970,
          settings: {
            variableWidth: true,
            slidesToShow: 1,
            centerMode: true,
          },
        },
      ]
  })
  $('.testimonials__slider-prev').on('click', function (e) {
    e.preventDefault()
    $('.testimonials__slider').slick('slickPrev')
  })
  $('.testimonials__slider-next').on('click', function (e) {
    e.preventDefault()
    $('.testimonials__slider').slick('slickNext')
  })

  $(".header__nav-link, .header__top-btn, .footer__top-list a").on("click", function (e) {
    //отменяем стандартную обработку нажатия по ссылке
    e.preventDefault()
    //забираем идентификатор бока с атрибута href
    var id = $(this).attr('href'),
      //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top
    //анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({ scrollTop: top }, 1500);
  })

  setInterval(() => {
    if ($(window).scrollTop() > 0 && $('.header__top').hasClass('header__top--open') === false) {
      $('.burger').addClass('burger--follow')
    } else {
      $('.burger').removeClass('burger--follow')
    }
  }, 0);

  $('.burger, .overlay, .header__nav-link').on('click', function (e) {
    e.preventDefault()
    $('.header__top').toggleClass('header__top--open')
    $('.overlay').toggleClass('overlay--show')
    $('.burger').toggleClass('open')
    $('body').toggleClass('stop')
  })


})

