var mydir = $('html').attr('dir');

if (mydir == 'rtl') {
  var rtlVal = true;
} else {
  var rtlVal = false;
}

$('.center-slider').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: true,
  arrows: true,
  dots: false,
  speed: 200,
  centerPadding: '20px',
  infinite: true,
  autoplaySpeed: 5000,
  autoplay: false,
  rtl: rtlVal,
  nextArrow: '.next_team',
  prevArrow: '.previous_team',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
      },
    },
  ],
});

$('.multiple-items').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: true,
  arrows: true,
  dots: false,
  speed: 200,
  centerPadding: '20px',
  infinite: true,
  autoplaySpeed: 5000,
  autoplay: false,
  rtl: rtlVal,
  nextArrow: '.next_team',
  prevArrow: '.previous_team',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
      },
    },
  ],
});
