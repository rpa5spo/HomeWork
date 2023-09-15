$(function () {

  $('.testimonials__slider').slick({
    arrows: false,
    slidesToShow: 3,
    infinite: true,
    draggable: false,
    appendArrows: $('.testimonials__slider-arrows'),
    variableWidth: true,
    waitForAnimate:false,
  })
  $('.testimonials__slider-prev').on('click', function(e) {
    e.preventDefault()
    $('.testimonials__slider').slick('slickPrev')
  })
  $('.testimonials__slider-next').on('click', function(e) {
    e.preventDefault()
  $('.testimonials__slider').slick('slickNext')
  })

})

