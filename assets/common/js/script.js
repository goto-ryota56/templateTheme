// ローディング判定
$(window).on("load", function () {
  $("body").attr("data-loading", "true");
});

$(function () {
  // スクロール判定
  $(window).on("scroll", function () {
    if (100 < $(this).scrollTop()) {
      $("body").attr("data-scroll", "true");
    } else {
      $("body").attr("data-scroll", "false");
    }
  });

  /* ドロワー */
  $(".js-drawer").on("click", function (e) {
    e.preventDefault();
    let targetClass = $(this).attr("data-target");
    $("." + targetClass).toggleClass("is-checked");
    return false;
  });

  /* スムーススクロール */
  $('a[href^="#"]').click(function () {
    let header = $("#header").height();
    let speed = 300;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = $(target).offset().top - header;
    if ("fixed" !== $("#header").css("position")) {
      position = $(target).offset().top;
    }
    if (0 > position) {
      position = 0;
    }
    $("html, body").animate(
      {
        scrollTop: position,
      },
      speed
    );
    return false;
  });

  /* 電話リンク */
  let ua = navigator.userAgent;
  if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
    $('a[href^="tel:"]')
      .css("cursor", "default")
      .on("click", function (e) {
        e.preventDefault();
      });
  }
});

