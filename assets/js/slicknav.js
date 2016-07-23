jQuery(document).ready(function(e) {
    var i = !1;
    e(".slick-head").click(function(i) {
        var n = e(this).hasClass("verti");
        if (n) {
            var t = e(this).siblings(".menu-main-menu-container");
            t.animate({
                height: "toggle"
            }, 500)
        }
    }), e(".menu-item").click(function(n) {
        if (i === !0) i = !1;
        else {
            var t = e(this).children(".sub-menu");
            t.length ? (n.preventDefault(), "none" === t.css("display") ? t.animate({
                height: "toggle"
            }, 500) : t.animate({
                height: "toggle"
            }, 500)) : i = !0
        }
    })
});