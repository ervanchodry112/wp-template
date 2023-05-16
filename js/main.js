/** @format */

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// --- BERITA ----//

$('#owl-event-berita').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
$('#owl-event-media').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
}); //beranda

$('#inner .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  dots: false,
  nav: false,
  autoplay: true,
  // navText: [
  // 	'<i class="uil uil-arrow-circle-left"></i>',
  // 	'<i class="uil uil-arrow-circle-right"></i>'
  // ],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 1,
    },
  },
  navContainer: '#inner .custom-nav',
});

// ---- NAVBAR ----//
$(document).ready(function () {
  $('.navbar-toggler').click(function () {
    $('.navbar-collapse').toggleClass('right');
  });
  $('.produk-click').click(function () {
    $('.navbar-collapse-sevima-2').toggleClass('toggle-responsive');
  });
  $('.produk-click-2').click(function () {
    $('.navbar-collapse-sevima-3').toggleClass('toggle-responsive');
  });
  $('.produk-click-3').click(function () {
    $('.navbar-collapse-sevima-5').toggleClass('toggle-responsive');
  });
  $('.produk-click-1').click(function () {
    $('.navbar-collapse-sevima-1').toggleClass('toggle-responsive');
  });
  
});

// ------ MODAL VIDEO ------ //
$(document).ready(function () {
  // Gets the video src from the data-src on each button

  var $videoSrc;
  $('.video-btn').click(function () {
    $videoSrc = $(this).data('src');
  });
  console.log($videoSrc);

  // when the modal is opened autoplay it
  $('#myModal').on('shown.bs.modal', function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $('#video').attr(
      'src',
      $videoSrc + '?autoplay=1&amp;modestbranding=1&amp;showinfo=0'
    );
  });

  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $('#video').attr('src', $videoSrc);
  });

  // document ready
});

//----KUMPULAN OWL ----//

$('#owl-testimoni-video').owlCarousel({
  items: 1,
  itemsDesktop: [1000, 1],
  itemsDesktopSmall: [979, 1],
  itemsTablet: [768, 1],
  dots: true,
  navigation: true,
  navigationText: ['', ''],
  slideSpeed: 1000,
  autoplay: true,
  autoplayHoverPause: true,
  loop: true,
});

$('#owl-kisah-sukses-tes').owlCarousel({
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  center: true,
  nav: true,
  loop: true,
  stagePadding: 150,
  responsive: {
    0: {
      items: 1,
    },
    568: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 3,
    },
  },
});

$('#owl-kisahsukses-home').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
  },
});

$('#owl-magang').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='uil uil-angle-left'></i>",
    "<i class='uil uil-angle-right'></i>",
  ],
  navContainer: '#KataTemanMagang .custom-nav',
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

$('#owl-kisah-sukses').owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplaySpeed: 2000,
  navSpeed: 2000,
  dotsSpeed: 2000,
  autoplayHoverPause: true,
  dots: true,
  margin: 10,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

//---- HOME ----//
/* ---- SLIDER HEADER ---- */
$('#carousel-listberita').carousel({
  interval: 5000,
});

$('#carousel-listberita').on('touchstart', function (event) {
  var yClick = event.originalEvent.touches[0].pageY;
  $(this).one('touchmove', function (event) {
    var yMove = event.originalEvent.touches[0].pageY;
    if (Math.floor(yClick - yMove) > 1) {
      $('.carousel').carousel('next');
    } else if (Math.floor(yClick - yMove) < -1) {
      $('.carousel').carousel('prev');
    }
  });
  $('.carousel').on('touchend', function () {
    $(this).off('touchmove');
  });
});

/* ---- PLAY VIDEO ---- */
$(document).ready(function () {
  $('#play-video').on('click', function (event) {
    $('#video-trigger').addClass('removed');

    $('#video').addClass('watch');
    $('#video')[0].src += '&autoplay=1';

    event.preventDefault();
  });
});

$(function () {
  var youtubeUrl =
    'https://www.youtube.com/embed/' +
    $('#youtubevideotabs li:first-child').addClass('active').attr('youtubeid') +
    '?rel=0';
  $('#youtubeplayer iframe').attr('src', youtubeUrl);

  $('#youtubevideotabs li').click(function () {
    youtubeUrl =
      'https://www.youtube.com/embed/' +
      $(this).addClass('active').attr('youtubeid') +
      '?rel=0';
    $('#youtubeplayer iframe').attr('src', youtubeUrl);
    youtubeUrl =
      'https://www.youtube.com/embed/' +
      $(this).siblings().removeClass('active').attr('youtubeid');
  });
});

//---- KARIR  ----//
/* VIDEO */
$(document).on('click', '.js-videoPoster', function (e) {
  e.preventDefault();
  var poster = $(this);
  var wrapper = poster.closest('.js-videoWrapper');
  videoPlay(wrapper);
});

function videoPlay(wrapper) {
  var iframe = wrapper.find('.js-videoIframe');
  var src = iframe.data('src');
  wrapper.addClass('videoWrapperActive');
  iframe.attr('src', src);
}

/* SLIDER ROTI */
$('#slider').slick({
  dots: true,
  customPaging: function (slider, i) {
    return (
      '<button class="tab">' + $(slider.$slides[i]).attr('title') + '</button>'
    );
  },
  arrows: true,
  prevArrow:
    "<span class='arrow prev'><i class='uil uil-angle-left'></i></span>",
  nextArrow:
    "<span class='arrow next'><i class='uil uil-angle-right'></i></span>",
  slidesToShow: 1,
  slidesToScroll: 1,
});

/* KARYAWAN */
function closestEdge(x, y, w, h) {
  var topEdgeDist = distMetric(x, y, w / 2, 0);
  var bottomEdgeDist = distMetric(x, y, w / 2, h);
  var leftEdgeDist = distMetric(x, y, 0, h / 2);
  var rightEdgeDist = distMetric(x, y, w, h / 2);
  var min = Math.min(topEdgeDist, bottomEdgeDist, leftEdgeDist, rightEdgeDist);
  switch (min) {
    case leftEdgeDist:
      return 'left';
    case rightEdgeDist:
      return 'right';
    case topEdgeDist:
      return 'top';
    case bottomEdgeDist:
      return 'bottom';
  }
}

function distMetric(x, y, x2, y2) {
  var xDiff = x - x2;
  var yDiff = y - y2;
  return xDiff * xDiff + yDiff * yDiff;
}

var boxes = document.querySelectorAll('.boxes');
for (var i = 0; i < boxes.length; i++) {
  boxes[i].onmouseenter = function (e) {
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var edge = closestEdge(x, y, this.clientWidth, this.clientHeight);
    var overlay = this.childNodes[2];
    var image = this.childNodes[0];

    switch (edge) {
      case 'left':
        //tween overlay from the left
        overlay.style.top = '0%';
        overlay.style.left = '-100%';
        TweenMax.to(overlay, 0.5, {
          left: '0%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.2,
        });
        break;
      case 'right':
        overlay.style.top = '0%';
        overlay.style.left = '100%';
        //tween overlay from the right
        TweenMax.to(overlay, 0.5, {
          left: '0%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.2,
        });
        break;
      case 'top':
        overlay.style.top = '-100%';
        overlay.style.left = '0%';
        //tween overlay from the right
        TweenMax.to(overlay, 0.5, {
          top: '0%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.2,
        });
        break;
      case 'bottom':
        overlay.style.top = '100%';
        overlay.style.left = '0%';
        //tween overlay from the right
        TweenMax.to(overlay, 0.5, {
          top: '0%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.2,
        });
        break;
    }
  };

  boxes[i].onmouseleave = function (e) {
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var edge = closestEdge(x, y, this.clientWidth, this.clientHeight);
    var overlay = this.childNodes[2];
    var image = this.childNodes[0];

    switch (edge) {
      case 'left':
        TweenMax.to(overlay, 0.5, {
          left: '-100%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.0,
        });
        break;
      case 'right':
        TweenMax.to(overlay, 0.5, {
          left: '100%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.0,
        });
        break;
      case 'top':
        TweenMax.to(overlay, 0.5, {
          top: '-100%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.0,
        });
        break;
      case 'bottom':
        TweenMax.to(overlay, 0.5, {
          top: '100%',
        });
        TweenMax.to(image, 0.5, {
          scale: 1.0,
        });
        break;
    }
  };
}

//---- EVENT  ----//
/* DAFTAR EVENT */
$('form').submit(function () {
  $(this).find('.btn-selengkapnya2').prop('disabled', true);
  $('body').css('cursor', 'wait');
});
// });

// Portofolio
function switchTab(id) {
  $('.tab-head').removeClass('active');
  $('#tab-' + id).addClass('active');
  $('.tab-pane').removeClass('active');
  $('#' + id).addClass('active');
  console.log('#' + id);
}

$(document).ready(function () {
  $('.wpcf7-submit').on('click', function () {
    console.log('submited');
    window.location = 'https://sevima.com/thankyou-page';
  });
});
