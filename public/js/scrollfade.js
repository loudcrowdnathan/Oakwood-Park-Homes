$(window).on('scroll', function () {
    var pixs = $(document).scrollTop()
    pixs = pixs / 250;
    $("#slide, #slide2, #slide3").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" })     
});