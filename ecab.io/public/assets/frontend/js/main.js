var _____WB$wombat$assign$function_____ = function (name) {
  return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name];
};
if (!self.__WB_pmw) {
  self.__WB_pmw = function (obj) {
    this.__WB_source = obj;
    return this;
  }
} {
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

  "use strict";
  $(".modules").html("<a>Modules</a>");
  $(".modules a").css({
    color: "#fff",
    cursor: "pointer",
  });
  $(".modules").click(function () {
    var y = $(window).scrollTop();
    $("html, body").animate({
      scrollTop: y + 610,
    });
  });
  var mainSlider = $("#main-slider", "#top-content");
  mainSlider.slick({
    dots: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  mainSlider.on("afterChange", function (event, slick, currentSlide, nextSlide) {
    $(".slide > div:nth-child(1)", "#main-slider").removeClass("animated");
    $(".slide > div:nth-child(2)", "#main-slider").removeClass("animated animation-delay1");
    $(".slick-active > div:nth-child(1)", "#main-slider").addClass("animated");
    $(".slick-active > div:nth-child(2)", "#main-slider").addClass("animated animation-delay1");
  });
  var testimonialsSlider = $("#testimonials-slider", "#testimonials");
  testimonialsSlider.slick({
    dots: false,
    infinite: false,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }, ],
  });
  var mainSlider = $("#m-m-slider");
  mainSlider.slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
  });
  var tabsSlider1 = $("#c-s-billing");
  tabsSlider1.slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  var tabsSlider2 = $("#c-s-expenses");
  tabsSlider2.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider3 = $("#c-s-time");
  tabsSlider3.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider4 = $("#c-s-projects");
  tabsSlider4.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider5 = $("#c-s-quote");
  tabsSlider5.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider6 = $("#c-s-payments");
  tabsSlider6.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider7 = $("#c-s-accounting");
  tabsSlider7.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider8 = $("#c-s-reports");
  tabsSlider8.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider9 = $("#c-s-mobile");
  tabsSlider9.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider10 = $("#c-s-affiliation");
  tabsSlider10.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider11 = $("#c-s-planning");
  tabsSlider11.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider12 = $("#c-s-tempsdetravail");
  tabsSlider12.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider13 = $("#c-s-infractionsroutiÃ¨res");
  tabsSlider13.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider14 = $("#c-s-gestioncommerciale");
  tabsSlider14.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider15 = $("#c-s-grh");
  tabsSlider15.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var tabsSlider16 = $("#c-s-paie");
  tabsSlider16.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
  var proces = $("#start_tabs_slider");
  proces.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  var miniTestimonialsSlider = $(".mini-testimonials-slider", "#form-section");
  miniTestimonialsSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200,
  });
  var infoSlider = $(".info-slider", "#page-head");
  infoSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200,
  });
  var check;

  function checkPrice() {
    var f_Amount = $("#product4-price .pricing-price").text();
    var f_ReplacedAmount = f_Amount.replace(/\$/g, "");
    var f_newValue = parseFloat(f_ReplacedAmount);
    var percentValue = (parseFloat(f_newValue) / 100) * 20;
    if ($("#checktype").is(":checked")) {
      var Amount = $("#product4-price .pricing-price").text();
      var ReplacedAmount = Amount.replace(/\$/g, "");
      var newValue = parseFloat(ReplacedAmount);
      var result = parseFloat(newValue) - parseFloat(check);
      $("#product4-price .pricing-price").text("$" + result + ".00");
      $(".toggle-on").removeClass("btn btn-default");
      $(".toggle-on").addClass("btn btn-primary");
      $(".toggle-on").removeClass("as_lable_button");
      $(".toggle-off").addClass("btn btn-default");
      $(".toggle-off").removeClass("btn btn-primary");
      $(".toggle-off").removeClass("as_label_button_2");
      $(".type").text("HT");
    } else {
      check = percentValue;
      var Amount = $("#product4-price .pricing-price").text();
      var ReplacedAmount = Amount.replace(/\$/g, "");
      var newValue = parseFloat(ReplacedAmount) + parseFloat(percentValue);
      $("#product4-price .pricing-price").text("$" + newValue + ".00");
      $(".toggle-on").removeClass("btn btn-primary");
      $(".toggle-on").addClass("btn btn-default");
      $(".toggle-on").addClass("as_lable_button");
      $(".toggle-off").addClass("btn btn-primary");
      $(".toggle-off").addClass("as_label_button_2");
      $(".toggle-off").removeClass("btn btn-default");
      $(".type").text("TTC");
    }
  }
  $(window).on("load", function () {
    $(".slick-active > div:nth-child(1)", "#main-slider").addClass("animated");
    $(".slick-active > div:nth-child(2)", "#main-slider").addClass("animated animation-delay1");
    var cPlan1 = $("#c-plan-1");
    var cPlan2 = $("#c-plan-2");
    var cPlan3 = $("#c-plan-3");
    var cPlan = $("#c-plan");
    cPlan1.slider({
      tooltip: "always",
    });
    cPlan2.slider({
      tooltip: "always",
    });
    cPlan3.slider({
      tooltip: "always",
    });
    cPlan.slider({
      tooltip: "always",
    });
    cPlan1.on("slide", function (e) {
      $("#product1 .tooltip-inner").text(e.value);
    });
    cPlan2.on("slide", function (e) {
      $("#product2 .tooltip-inner").text(e.value);
    });
    cPlan3.on("slide", function (e) {
      $("#product3 .tooltip-inner").text(e.value);
    });
    var pricingPrice4 = $("#product4-price .pricing-price").text().split("$")[1];
    cPlan.on("slide", function (e) {
      $(".slider .tooltip-up", "#custom-plan").text(e.value);
      $("#product4-price .pricing-price", "#custom-plan").text($(this).data("currency") + e.value);
      var min = cPlan[0].getAttribute("data-slider-min");
      var mainValue = (parseInt(pricingPrice4) - 30) / min;
      $("#product4-price .pricing-price").text("$" + Math.ceil(e.value * 30 + 397) + ".00");
      $("#product4 .tooltip-inner").text(e.value);
      $("#product4-price .feature1 span", "#custom-plan").text(e.value);
      $("#product4-price .feature2 span", "#custom-plan").text(e.value * 98);
    });
    var pricingPrice1 = $("#product1-price .pricing-price").text().split("$")[1];
    cPlan1.on("slide", function (e) {
      var min = cPlan1[0].getAttribute("data-slider-min");
      var mainValue = (parseInt(pricingPrice1) - 30) / min;
      $("#product1-price .pricing-price").text("$" + Math.ceil(e.value * 30 + 97) + ".00");
    });
    var pricingPrice2 = $("#product2-price .pricing-price").text().split("$")[1];
    cPlan2.on("slide", function (e) {
      var min = cPlan2[0].getAttribute("data-slider-min");
      var mainValue = (parseInt(pricingPrice2) - 30) / min;
      $("#product2-price .pricing-price").text("$" + Math.ceil(e.value * 30 + 197) + ".00");
    });
    var pricingPrice3 = $("#product3-price .pricing-price").text().split("$")[1];
    cPlan3.on("slide", function (e) {
      var min = cPlan3[0].getAttribute("data-slider-min");
      var mainValue = (parseInt(pricingPrice3) - 30) / min;
      $("#product3-price .pricing-price").text("$" + Math.ceil(e.value * 30 + 297) + ".00");
    });
    cPlan.value = cPlan.data("slider-value");
    $(".slider .tooltip", "#custom-plan").append('<div class="tooltip-up"></div>');
    $(".slider .tooltip-up", "#custom-plan").text(cPlan.value);
    $(".slider .tooltip-inner", "#custom-plan").attr("data-unit", cPlan.data("unit"));
    $(".slider .tooltip-up", "#custom-plan").attr("data-currency", cPlan.data("currency"));
    $(".price", "#custom-plan").text(cPlan.data("currency") + cPlan.value);
    $(".feature1 span", "#custom-plan").text(cPlan.value);
    $(".feature2 span", "#custom-plan").text(cPlan.value * 98);
    // var featureIconHolder = $(".feature-icon-holder", "#features-links-holder");
    // featureIconHolder.on("click", function () {
    //   featureIconHolder.removeClass("opened");
    //   $(this).addClass("opened");
    //   $(".show-details", "#features-holder").removeClass("show-details");
    //   $(".feature-d" + $(this).data("id"), "#features-holder").addClass("show-details");
    // });
    // var featuresHolder = $("#features-holder");
    // var featuresLinksHolder = $("#features-links-holder");
    // var featureBox = $(".show-details", "#features-holder");
    // featuresHolder.css("height", featureBox.height() + 120);
    // featuresLinksHolder.css("height", featureBox.height() + 120);
    // $(window).on("resize", function () {
    //   featuresHolder.css("height", featureBox.height() + 120);
    //   featuresLinksHolder.css("height", featureBox.height() + 120);
    //   return false;
    // });
    var appHolder = $(".app-icon-holder", "#apps");
    appHolder.on("mouseover", function () {
      appHolder.removeClass("opened");
      $(this).addClass("opened");
      $(".show-details", "#apps").removeClass("show-details");
      $(".app-details" + $(this).data("id"), "#apps").addClass("show-details");
    });
    var infoLink = $(".info-link", "#more-info");
    infoLink.on("mouseover", function () {
      infoLink.removeClass("opened");
      $(this).addClass("opened");
      $(".show-details", "#more-info").removeClass("show-details");
      $(".info-d" + $(this).data("id"), "#more-info").addClass("show-details");
    });
    var locationsList = [
      ["California", 97, 48, "r"],
      ["Costa Rika", 212, 31, "l"],
      ["Vancouver", 136, 161, "r"],
      ["Brazil", 303, 233, "r"],
      ["Alexandria", 149, 349, "l"],
      ["Dubai", 174, 469, "l"],
      ["Delhi", 204, 605, "r"],
      ["Munech", 91, 417, "r"],
      ["Barcelona", 112, 279, "l"],
      ["Moscow", 41, 554, "r"],
      ["Hong Kong", 151, 663, "r"],
      ["Melborne", 356, 688, "l"],
      ["Pulau Ujong", 265, 578, "l"],
    ];
    var serversLocationHolder = $(".servers-location-holder", "#serversmap.st");
    for (var i = 0; i <= locationsList.length - 1; i++) {
      var sMarkerDir = locationsList[i][3];
      var leftText = "";
      var rightText = "";
      if (sMarkerDir == "r") {
        leftText = "";
        rightText = locationsList[i][0];
      } else if (sMarkerDir == "l") {
        leftText = locationsList[i][0];
        rightText = "";
      }
      serversLocationHolder.append('<div class="server-marker" style="top:' +
        locationsList[i][1] +
        "px;left:" +
        locationsList[i][2] +
        'px;"><span class="left-text">' +
        leftText +
        '</span><span class="marker-icon"></span><span class="right-text">' +
        rightText +
        "</span></div>");
    }
    document.querySelector("#live-chat-collapse").addEventListener("click", function () {
      $("#chatstack-launcher-frame").contents().find(".chatstack-launcher")[0].click();
    });
  });
  var testmonialsSlider = $("#testmonial-slider");
  testmonialsSlider.slick({
    dots: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  var testmonialBlock = $("#testmonialBlock");
  testmonialBlock.slick({
    slidesToShow: 4,
    infinite: true,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots: false,
    arrows: true,
  });

}
/*
     FILE ARCHIVED ON 06:01:05 Mar 24, 2024 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 10:08:10 Nov 25, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.504
  exclusion.robots: 0.025
  exclusion.robots.policy: 0.016
  esindex: 0.013
  cdx.remote: 5.753
  LoadShardBlock: 150.22 (3)
  PetaboxLoader3.datanode: 193.655 (4)
  load_resource: 250.964
  PetaboxLoader3.resolve: 146.083
*/






document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        const form = document.getElementById("contact_form");
        if (form) {
            form.style.display = "block";
        }
    }, 0.1); // 3000ms = 3 seconds
});

document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll("img");
    images.forEach(img => {
        img.setAttribute("loading", "lazy");
    });
});