$(document).ready(function() {
  $("#campuspedia a").on("click", function() {
    const articleTitle = $(this).text();
    const articleLink = $(this).attr("href");
    ga("send", {
      hitType: "event",
      eventCategory: "Campuspedia",
      eventAction: `Campuspedia (${articleTitle})`,
      eventLabel: `Campuspedia (${articleLink})`
    });
  });

  $(".iklan-sevima a").on("click", function() {
    const articleTitle = $(".title-detail-berita h3").text();
    const adsLink = $(this).attr("href");
    ga("send", {
      hitType: "event",
      eventCategory: "Banner Iklan Blog Detail",
      eventAction: `Artikel (${articleTitle})`,
      eventLabel: `Iklan (${adsLink})`
    });
  });

  $(".content-detail-berita a").on("click", function() {
    const articleTitle = $(".title-detail-berita h3").text();
    const articleLink = $(this).attr("href");
    ga("send", {
      hitType: "event",
      eventCategory: "Link Blog Detail",
      eventAction: `Artikel (${articleTitle})`,
      eventLabel: `Link (${articleLink})`
    });
  });
});
