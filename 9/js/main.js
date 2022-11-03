var wide = $(".left").width();
$("button").click(function() {
    function onFunc() {
        $(".left").animate({width:"0%"}, 255);
        $(".right").animate({width:"0%"}, 255);
    }
    function offFunc() {
        $(".left").animate({width:"50%"}, 255);
        $(".right").animate({width:"50%"}, 255);
    }
    $(this).toggleClass("active");
    var flg = $(this).hasClass("active");
    if (flg == true) {
        onFunc();
    } else {
        offFunc();
    }
})