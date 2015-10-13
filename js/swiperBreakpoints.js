
var windowObject = window,
    breakpointsArray = [];

var getPageWidth = function() {
    var e;
    if (windowObject.innerWidth) {
        e = windowObject.innerWidth;
    } else if (document.documentElement && document.documentElement.clientWidth) {
        e = document.documentElement.clientWidth;
    } else if (document.body) {
        e = document.body.clientWidth;
    }
    return e;
};

var ifResize = true;
setInterval(function() {
if (ifResize) {
  console.log(breakpointsArray);
}
ifResize = false;
}, 300);

$(window).resize(function() {
    ifResize = true;
});



!function(el) {
  $.fn.swiperBreakpoints = function(params) {
      if ($(this).length === 0) {
        return;
      }

      var el = $(this),
          swiperParam = params.swiperParam || {},
          elBreakpoints = params.breakpoints || {},
          swiperObjects = Array(),
          SoNumber = swiperObjects.length + 1;

      //запускаем swiper
      swiperObjects[SoNumber] = new Swiper(el, swiperParam);

      if(!$.isEmptyObject(elBreakpoints)) {
          var i = 0;
          for (point in elBreakpoints) {
              if($.inArray(+point, breakpointsArray) !== -1) breakpointsArray.push(+point);
          }

          
          /*for (point in params.breakpoints) {

              if (params.breakpoints[point] < getPageWidth()) {

              }
              swiperObjects[SoNumber].params.slidesPerView = 3;
              swiperObjects[SoNumber].update();
          }*/
      } else {
        swiperObjects[SoNumber] = new Swiper(el, swiperParam);
      }
  }
}(jQuery);

$(function() {
$(".swiper-container").swiperBreakpoints({
    swiperParam: {
        slidesPerView: 3,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        spaceBetween: 5,
        simulateTouch: true,
        updateOnImagesReady: true
    },
    breakpoints: {
        480: 2,
        320: 1,
        768: 3,
        1200: 4
    }
});
});