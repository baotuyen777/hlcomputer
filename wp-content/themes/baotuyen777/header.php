
<!DOCTYPE html>
<?php
define('SITE_ROOT', 'http://hoidev.com/hlcomputer/')
//define('SITE_ROOT', 'http://localhost/hlcomputer/')
?>
<html lang="vi">

    <head>
        <title>Hlcomputer - Laptop</title>

        <meta name="description" content="Hlcomputer - Laptop game, laptop doanh nh&#226;n, laptop đồ họa, laptop phổ th&#244;ng">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name='revisit-after' content='1 days' />
        <meta name="keywords" content="" />
        <link rel="canonical" href="http://hlcomputer.vn">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Hlcomputer - Laptop">



        <meta property="og:description" content="Hlcomputer - Laptop game, laptop doanh nh&#226;n, laptop đồ họa, laptop phổ th&#244;ng">

        <meta property="og:url" content="http://hlcomputer.vn">
        <meta property="og:site_name" content="Hlcomputer">
        <link rel="shortcut icon" href="<?php echo SITE_ROOT ?>js/favicon.png?1524124143478" type="image/x-icon" />
        <script src='<?php echo SITE_ROOT ?>js/jquery-2.2.4.min.js?1524124143478' type='text/javascript'></script> 
        <script src='<?php echo SITE_ROOT ?>js/bootstrap.min.js?1524124143478' type='text/javascript'></script> 

        <script src='<?php echo SITE_ROOT ?>js/jquery.bxslider.min.js?1524124143478' type='text/javascript'></script>
        <script src='<?php echo SITE_ROOT ?>js/cloudzoom.js?1524124143478' type='text/javascript'></script>  
        <link href='<?php echo SITE_ROOT ?>css/bootstrap.min.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/font-awesome.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/normalize.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/typography.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/owl.carousel.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/jquery.mmenu.all.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/jquery.fancybox.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/swatch.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/swatch-color.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/jquery.bxslider.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/cloudzoom.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/styles.css' rel='stylesheet' type='text/css' />
        <link href='<?php echo SITE_ROOT ?>css/cf-stylesheet.css?1524124143478' rel='stylesheet' type='text/css' />

        <script src='<?php echo SITE_ROOT ?>js/jquery.nivo.slider.pack.js?1524124143478' type='text/javascript'></script> 
        <link href='<?php echo SITE_ROOT ?>css/nivo-slider.scss.css?1524124143478' rel='stylesheet' type='text/css' />
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                if ("ontouchstart" in document.documentElement) {
                    $('#slider').nivoSlider({
                        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                        slices: 15, // For slice animations
                        boxCols: 8, // For box animations
                        boxRows: 4, // For box animations
                        animSpeed: 500, // Slide transition speed
                        pauseTime: 3000, // How long each slide will show
                        startSlide: 3, // Set starting Slide (0 index)
                        directionNav: true, // Next & Prev navigation
                        directionNavHide: true, // Only show on hover
                        controlNav: false, // 1,2,3... navigation
                        controlNavThumbs: false, // Use thumbnails for Control Nav
                        controlNavThumbsFromRel: false, // Use image rel for thumbs
                        controlNavThumbsSearch: '', // Replace this with...
                        controlNavThumbsReplace: '', // ...this in thumb Image src
                        keyboardNav: true, // Use left & right arrows
                        pauseOnHover: true, // Stop animation while hovering
                        manualAdvance: false, // Force manual transitions
                        captionOpacity: 0.8, // Universal caption opacity
                        prevText: 'Prev', // Prev directionNav text
                        nextText: 'Next', // Next directionNav text
                        beforeChange: function () {}, // Triggers before a slide transition
                        afterChange: function () {}, // Triggers after a slide transition
                        slideshowEnd: function () {}, // Triggers after all slides have been shown
                        lastSlide: function () {}, // Triggers when last slide is shown
                        afterLoad: function () {} // Triggers when slider has loaded
                    });
                    var element = document.getElementById('slider');
                    var hammertime = Hammer(element).on("swipeleft", function (event) {
                        $('#slider img').attr("data-transition", "slideInLeft");
                        $('a.nivo-nextNav').trigger('click');
                        return false;
                    });
                    var hammertime = Hammer(element).on("swiperight", function (event) {
                        $('#slider img').attr("data-transition", "slideInRight");
                        $('a.nivo-prevNav').trigger('click');
                        $('#slider img').attr("data-transition", "slideInLeft");
                        return false;

                    });
                } else {
                    $('#slider').nivoSlider({
                        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                        slices: 15, // For slice animations
                        boxCols: 8, // For box animations
                        boxRows: 4, // For box animations
                        animSpeed: 500, // Slide transition speed
                        pauseTime: 3000, // How long each slide will show
                        startSlide: 0, // Set starting Slide (0 index)
                        directionNav: true, // Next & Prev navigation
                        directionNavHide: true, // Only show on hover
                        controlNav: false, // 1,2,3... navigation
                        controlNavThumbs: false, // Use thumbnails for Control Nav
                        controlNavThumbsFromRel: false, // Use image rel for thumbs
                        controlNavThumbsSearch: '', // Replace this with...
                        controlNavThumbsReplace: '', // ...this in thumb Image src
                        keyboardNav: true, // Use left & right arrows
                        pauseOnHover: true, // Stop animation while hovering
                        manualAdvance: false, // Force manual transitions
                        captionOpacity: 0.8, // Universal caption opacity
                        prevText: 'Prev', // Prev directionNav text
                        nextText: 'Next', // Next directionNav text
                        beforeChange: function () {}, // Triggers before a slide transition
                        afterChange: function () {}, // Triggers after a slide transition
                        slideshowEnd: function () {}, // Triggers after all slides have been shown
                        lastSlide: function () {}, // Triggers when last slide is shown
                        afterLoad: function () {} // Triggers when slider has loaded
                    });
                }
            });
        </script>
    </head>
    <body ontouchstart="" id="cklaptopvn-laptop">
        <div class="bg_mmenu">
            <div class="page">
                <section class="topbar theme--bg--sliver hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 topbar__left hidden-xs">
                                <div class="topbar__left__message">
                                    Chào mừng bạn đến với <a href="//cklaptop.vn">Hlcomputer</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <a href="/"  class="hidden"><img style="width: 100%" src="<?php echo SITE_ROOT ?>img/bannertop.png?1524124143478" /></a>
                <header id="header" class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 header__logo">
                                <a title="Hlcomputer" href="/">

                                    <img alt="Hlcomputer" src="<?php echo SITE_ROOT ?>img/logo.png?1524124143478">

                                </a> 
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 header__hotline">
                                <div class="header__hotline--bg">
                                    <p class="header__hotline--phone"><strong class="hidden-xs">Hotline: </strong><span><a href="tel:0985358618 ">0985358618 </a></span></p>
                                    <p class="header__hotline--phone"><strong class="hidden-xs">Hotline 2: </strong><span><a href="tel:0985358618 ">0985358618 </a></span></p>
                                    <p class="header__hotline--email hidden-xs"><strong class="hidden-xs">Email: </strong><span><a title="info@hlcomputer.vn" href="mailto:info@hlcomputer.vn">info@hlcomputer.vn</a></span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5 col-xs-12 header__search hidden-xs">
                                <form action="/search" method="get">
                                    <label class="hidden" for="header-search">Tìm kiếm</label>
                                    <input type="text" placeholder="Nhập nội dung tìm kiếm" id="header-search" value="" maxlength="70" class="input" name="query">
                                    <button class="button" type="submit" aria-label="Tìm kiếm">Tìm kiếm</button>
                                </form>
                                <ul class="header__search--suggest hidden-sm hidden-xs">

                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <nav id="nav" class="menu">
                    <div class="container">
                        <span class="hidden-lg hidden-md hidden-sm header__btn">
                            <a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </span>
                        <form action="/search" method="get" class="hidden-lg hidden-md hidden-sm">
                            <label class="hidden" for="search-mobile">Tìm kiếm</label>
                            <input type="text" placeholder="Nhập nội dung tìm kiếm" id="search-mobile" value="" maxlength="70" class="input input__search" name="query">
                            <button class="button" type="submit" aria-label="Tìm kiếm"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <ul class="menu__list hidden-xs">


                            <li class="menu__item"><a href="/" class="menu__link">Trang chủ</a></li>



                            <li class="menu__item"><a href="/gioi-thieu" class="menu__link">Giới thiệu</a></li>



                            <li class="menu__item">
                                <a href="/danh-muc-laptop" class="menu__link">Danh mục Laptop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="menu-sub">

                                    <li class="menu-sub__item"><a href="/laptop-dell" class="menu-sub__link">Laptop Dell</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-asus" class="menu-sub__link">Laptop Asus</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-hp" class="menu-sub__link">Laptop HP</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-lenovo" class="menu-sub__link">Laptop Lenovo</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-acer" class="menu-sub__link">Laptop Acer</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-toshiba" class="menu-sub__link">Laptop Toshiba</a></li>


                                </ul>
                            </li>



                            <li class="menu__item"><a href="/laptop-game-do-hoa" class="menu__link">Laptop Game & Đồ Họa</a></li>



                            <li class="menu__item"><a href="/macbook" class="menu__link">Macbook</a></li>



                            <li class="menu__item"><a href="/linh-kien-laptop" class="menu__link">Linh Kiện - Thiết bị <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="menu-sub">
                                    <li class="menu-sub__item"><a href="/laptop-dell" class="menu-sub__link">Linh Kiện máy tính <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="menu-sub">
                                            <li class="menu-sub__item"><a href="/laptop-dell" class="menu-sub__link">Loa máy tính</a></li>
                                            <li class="menu-sub__item"><a href="/laptop-asus" class="menu-sub__link">Chuột</a></li>
                                            <li class="menu-sub__item"><a href="/laptop-hp" class="menu-sub__link">Các thiết bị tản nhiệt</a></li>
                                            <li class="menu-sub__item"><a href="/laptop-hp" class="menu-sub__link">Các thiết bị lưu trữ</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-sub__item"><a href="/laptop-asus" class="menu-sub__link">Camera an ninh</a></li>
                                    <li class="menu-sub__item"><a href="/laptop-hp" class="menu-sub__link">Thiết bị mạng</a></li>
                                </ul>
                            </li>
                            <li class="menu__item"><a href="/tin-tuc" class="menu__link">Tin tức</a></li>
                            <li class="menu__item"><a href="/lien-he" class="menu__link">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="hidden">
                    <nav id="menu">
                        <ul class="menu__list">
                            <li class="menu__item"><a href="/" class="menu__link">Trang chủ</a></li>



                            <li class="menu__item"><a href="/gioi-thieu" class="menu__link">Giới thiệu</a></li>



                            <li class="menu__item">
                                <a href="/danh-muc-laptop" class="menu__link">Danh mục Laptop</a>
                                <ul class="menu-sub">





                                    <li class="menu-sub__item"><a href="/laptop-dell" class="menu-sub__link">Laptop Dell</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-asus" class="menu-sub__link">Laptop Asus</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-hp" class="menu-sub__link">Laptop HP</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-lenovo" class="menu-sub__link">Laptop Lenovo</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-acer" class="menu-sub__link">Laptop Acer</a></li>



                                    <li class="menu-sub__item"><a href="/laptop-toshiba" class="menu-sub__link">Laptop Toshiba</a></li>


                                </ul>
                            </li>



                            <li class="menu__item"><a href="/laptop-game-do-hoa" class="menu__link">Laptop Game & Đồ Họa</a></li>



                            <li class="menu__item"><a href="/macbook" class="menu__link">Macbook</a></li>



                            <li class="menu__item"><a href="/linh-kien-laptop" class="menu__link">Linh Kiện</a></li>



                            <li class="menu__item"><a href="/tin-tuc" class="menu__link">Tin tức</a></li>



                            <li class="menu__item"><a href="/lien-he" class="menu__link">Liên hệ</a></li>


                        </ul>
                    </nav>
                </div>  
