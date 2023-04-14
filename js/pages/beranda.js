// ---- NAVBAR ----//
$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    $(".navbar-collapse").toggleClass("right");
  });
  $(".produk-click").click(function () {
    $(".navbar-collapse-sevima-2").toggleClass("toggle-responsive");
  });
  $(".produk-click-2").click(function () {
    $(".navbar-collapse-sevima-3").toggleClass("toggle-responsive");
  });
  $(".produk-click-3").click(function () {
    $(".navbar-collapse-sevima-5").toggleClass("toggle-responsive");
  });
  $(".produk-click-1").click(function () {
    $(".navbar-collapse-sevima-1").toggleClass("toggle-responsive");
  });
});

$("#owl-event-media").owlCarousel({
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

$("#inner .owl-carousel").owlCarousel({
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
  navContainer: "#inner .custom-nav",
});

$(".owl-carousel#owl-produk-mobile").owlCarousel({
  loop: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplaySpeed: 2000,
  navSpeed: 2000,
  dotsSpeed: 2000,
  autoplayHoverPause: true,
  dots: false,
  stagePadding: 30,
  margin: 10,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    768: {
      items: 3,
    },
  },
});

$("#owl-testi-mobile").each(function () {
  var $this = $(this);

  $this
    .on({
      "initialized.owl.carousel": function () {
        $this.find(".item").show();
      },
    })
    .owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 2000,
      navSpeed: 2000,
      dotsSpeed: 2000,
      autoplayHoverPause: true,
      dots: false,
      margin: 10,
      nav: false,
      items: 1,
    });

  $this
    .parent()
    .find(".NextBtn")
    .click(function () {
      $this.trigger("next.owl.carousel");
    });
  $this
    .parent()
    .find(".PreviousBtn")
    .click(function () {
      $this.trigger("prev.owl.carousel");
    });
});

$("#owl-kisah-sukses").owlCarousel({
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

$("#owl-kisahsukses-home").owlCarousel({
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
/* ---- SLIDER HEADER ---- */
$("#carousel-listberita").carousel({
  interval: 5000,
});

$("#carousel-listberita").on("touchstart", function (event) {
  var yClick = event.originalEvent.touches[0].pageY;
  $(this).one("touchmove", function (event) {
    var yMove = event.originalEvent.touches[0].pageY;
    if (Math.floor(yClick - yMove) > 1) {
      $(".carousel").carousel("next");
    } else if (Math.floor(yClick - yMove) < -1) {
      $(".carousel").carousel("prev");
    }
  });
  $(".carousel").on("touchend", function () {
    $(this).off("touchmove");
  });
});

$(function () {
  var youtubeUrl =
    "https://www.youtube.com/embed/" +
    $("#youtubevideotabs li:first-child").addClass("active").attr("youtubeid") +
    "?rel=0";
  $("#youtubeplayer iframe").attr("src", youtubeUrl);

  $("#youtubevideotabs li").click(function () {
    youtubeUrl =
      "https://www.youtube.com/embed/" +
      $(this).addClass("active").attr("youtubeid") +
      "?rel=0";
    $("#youtubeplayer iframe").attr("src", youtubeUrl);
    youtubeUrl =
      "https://www.youtube.com/embed/" +
      $(this).siblings().removeClass("active").attr("youtubeid");
  });
});

function postsCarousel() {
  var checkWidth = $(window).width();
  var owlPost = $("#owl-produk-mobile");
  if (checkWidth > 991) {
    if (typeof owlPost.data("owl.carousel") != "undefined") {
      owlPost.data("owl.carousel").destroy();
    }
    owlPost.removeClass("owl-carousel");
  } else if (checkWidth < 992) {
    owlPost.addClass("owl-carousel");
    owlPost.owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 2000,
      navSpeed: 2000,
      dotsSpeed: 2000,
      autoplayHoverPause: true,
      dots: false,
      stagePadding: 30,
      margin: 10,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
      },
    });
  }
}

postsCarousel();
$(window).resize(postsCarousel);

function readMore() {
  // var moreText = $("#section-outline #hidden");
  // var btnText = $("#section-outline #read-more-button");
  console.log("clicked");
  // moreText.toggle();

  // if (moreText.css("display") == "none") {
  //   btnText.html("Lebih Lengkap");
  //   moreText.css("display") == "block";
  // } else {
  //   btnText.html("Sembunyikan");
  //   moreText.css("display") == "none";
  // }
}

$("#section-outline #read-more-button").on("click", function () {
  var w = $("#section-outline #hidden");
  var l = $("#section-outline #collapse-wrapper");
  var b = $("#section-outline #read-more-button p");

  // var moreText = $("#section-outline #hidden");

  // moreText.toggle();
  if (w.hasClass("open")) {
    w.removeClass("open");
    w.height(0);
  } else {
    w.addClass("open");
    w.height(l.outerHeight(true));
  }

  b.toggle();
});
