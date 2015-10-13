! function(e) {
  var n = 0,
      t = null,
      i = !0,
      defaultBreakPoints = new Array(320, 480, 768, 992, 1280);

  e.fn.getWidthPage = function() {
      var e, n;
      return self.innerHeight ? (e = self.innerWidth, n = self.innerHeight) : document.documentElement && document.documentElement.clientHeight ? (e = document.documentElement.clientWidth, n = document.documentElement.clientHeight) : document.body && (e = document.body.clientWidth, n = document.body.clientHeight), e
  },
  e.fn.addBreakpoints = function(NewBrpObj){
      switch (typeof NewBrpObj){
        case "object": for(var a in NewBrpObj) {
            if(defaultBreakPoints.indexOf(+NewBrpObj[a]) === -1) defaultBreakPoints.push(+NewBrpObj[a]);
          }
          break;
        case "number":
          if(defaultBreakPoints.indexOf(+NewBrpObj[a]) === -1) defaultBreakPoints.push(+NewBrpObj);          
          break;
        default:
          console.log("Wrong typeOf var");
          break;
      }   
  },
  e.fn.getBreakpoints = defaultBreakPoints,
  e.fn.resetBreakpoints = function() {
      e(window).unbind("resize"), t && clearInterval(t), n = 0
  }, e.fn.setBreakpoints = function(r) {
      var o = jQuery.extend({
          distinct: !0,
          breakpoints: defaultBreakPoints
      }, r);
      t = setInterval(function() {
          if (i) {              
              var t = e.fn.getWidthPage(),
                  r = !1;
              for (var s in o.breakpoints.sort(function(e, n) {
                      return n - e
                  })) {
                  if (!r && t >= o.breakpoints[s] && n < o.breakpoints[s]) {
                      if (o.distinct) {
                          for (var a in o.breakpoints.sort(function(e, n) {
                                  return n - e
                              })) e("body").hasClass("screen-" + o.breakpoints[a]) && (e("body").removeClass("screen-" + o.breakpoints[a]), e(window).trigger("noscreen" + o.breakpoints[a]));
                          r = !0
                      }
                      e("body").addClass("screen-" + o.breakpoints[s]), e(window).trigger("screen" + o.breakpoints[s])
                  }
                  t < o.breakpoints[s] && n >= o.breakpoints[s] && (e("body").removeClass("screen-" + o.breakpoints[s]), e(window).trigger("noscreen" + o.breakpoints[s])), o.distinct && t >= o.breakpoints[s] && t < o.breakpoints[s - 1] && n > t && n > 0 && !e("body").hasClass("screen-" + o.breakpoints[s]) && (e("body").addClass("screen-" + o.breakpoints[s]), e(window).trigger("screen" + o.breakpoints[s]))
              }
              n != t && (n = t), i = !1
          }
      }, 500)
  }, e(window).resize(function() {
      i = !0
  })
}(jQuery);
