jQuery('.maps').click(function () {
    jQuery('.maps iframe').css("pointer-events", "auto");
});

jQuery(".maps").mouseleave(function () {
    jQuery('.maps iframe').css("pointer-events", "none");
});
if (window.innerWidth > 480) {
    console.log(1111);
    setTimeout(function () {
        jQuery('header').find('nav').removeClass('rd-navbar-fixed');
        jQuery('header').find('nav').addClass('rd-navbar-static');
//        jQuery('html').removeClass('rd-navbar-fixed-linked');
    }, 1000)

}