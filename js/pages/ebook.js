$(window)
  .on("resize", function () {
    if ($(window).width() < 575.98) {
      $("html").css("font-size", "13px");
    } else if ($(window).width() < 991.98) {
      $("html").css("font-size", "14px");
    } else {
      $("html").css("font-size", "16px");
    }
  })
  .trigger("resize");

$(document).ready(function ($) {
  var titleForm =
    "<h3 class='title-form' id='form-download'>TERIMA KASIH atas kontribusi Anda dalam memajukan pendidikan di Indonesia!<br>Yuk, download Ebooknya. GRATIS!</h3>";
  $(titleForm).insertBefore(".wpcf7");
});
