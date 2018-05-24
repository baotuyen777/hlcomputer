
<!DOCTYPE html>
<?php
define('SITE_ROOT', 'http://localhost/hlcomputer/')
?>
<html lang="vi">

    <head>
        <title>Hlcomputer - Laptop</title>

        <meta name="description" content="Hlcomputer - Laptop game, laptop doanh nh&#226;n, laptop đồ họa, laptop phổ th&#244;ng">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name='revisit-after' content='1 days' />
        <meta name="keywords" content="" />
        <link rel="canonical" href="https://cklaptop.vn">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Hlcomputer - Laptop">



        <meta property="og:description" content="Hlcomputer - Laptop game, laptop doanh nh&#226;n, laptop đồ họa, laptop phổ th&#244;ng">

        <meta property="og:url" content="https://cklaptop.vn">
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
        <link href='<?php echo SITE_ROOT ?>css/styles.scss.css?1524124143478' rel='stylesheet' type='text/css' />
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
                <a href="/"  class="hidden"><img style="width: 100%" src="<?php echo SITE_ROOT ?>js/bannertop.png?1524124143478" /></a>
                <header id="header" class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 header__logo">
                                <a title="Hlcomputer" href="/">

                                    <img alt="Hlcomputer" src="<?php echo SITE_ROOT ?>js/logo.png?1524124143478">

                                </a> 
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 header__hotline">
                                <div class="header__hotline--bg">
                                    <p class="header__hotline--phone"><strong class="hidden-xs">Hotline: </strong><span><a href="tel:0983549193 ">0983549193 </a></span></p>
                                    <p class="header__hotline--phone"><strong class="hidden-xs">Hotline 2: </strong><span><a href="tel:0972895188 ">0972895188 </a></span></p>
                                    <p class="header__hotline--email hidden-xs"><strong class="hidden-xs">Email: </strong><span><a title="nguyennhuan21288@gmail.com" href="mailto:nguyennhuan21288@gmail.com">nguyennhuan21288@gmail.com</a></span></p>
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


                                    <li class="menu-sub__item"><a href="/laptop-sony-vaio" class="menu-sub__link">Laptop Sony Vaio</a></li>



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
                        <div class="menu__cart">
                            <a href="/cart">
                                <span class="hidden-xs hidden-sm">Giỏ hàng</span>
                                <span><span class="count">0</span> <span class="hidden-xs  hidden-sm">sản phẩm</span></span>
                            </a>
                            <div class="cart-droplist hidden-xs">
                                <div style="display: none;" class="cart-droplist__content arrow_box">
                                    <div class="cart-droplist__status"><i class="fa fa-check" aria-hidden="true"></i> <span class="cart-counter-list">0</span> Sản phẩm trong giỏ hàng</div>
                                    <div id="cart-sidebar" class="mini-list">
                                    </div>
                                </div>
                            </div>
                        </div>
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


                                    <li class="menu-sub__item"><a href="/laptop-sony-vaio" class="menu-sub__link">Laptop Sony Vaio</a></li>



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

                <h1 class="hidden">Hlcomputer</h1>

                <section id="homepage-slider" class="slider theme--color--white">
                    <div class="container">
                        <div class="bg-slider">
                            <div id="slider" class="theme-default">
                                <a href="#">
                                    <img src="<?php echo SITE_ROOT ?>js/home-slider-1.jpg?1524124143478" alt="slide 1" />
                                </a>

                                <a href="#">
                                    <img src="<?php echo SITE_ROOT ?>js/home-slider-2.jpg?1524124143478" alt="slide 2" />
                                </a>


                                <a href="">
                                    <img src="<?php echo SITE_ROOT ?>js/home-slider-3.jpg?1524124143478" alt="slide 3" />
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
                


                <section class="three-module">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                <div class="catalog">
                                    <div class="catalog__title">
                                        <h2><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</h2>
                                    </div>
                                    <div class="catalog__bg">
                                        <ul class="catalog__list">











                                            <li class="catalog__item" >
                                                <a href="/laptop-game-do-hoa" title="Laptop Game & Đồ Họa">


                                                    <span class="catalog__icon">
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-1.png?1524124143478" alt="Laptop Game & Đồ Họa" class="icon-old" />
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-hover1.png?1524124143478" alt="Laptop Game & Đồ Họa" class="icon-even" />
                                                    </span>

                                                    <span>Laptop Game & Đồ Họa</span>

                                                </a>
                                            </li>










                                            <li class="catalog__item" >
                                                <a href="/danh-muc-laptop" title="Danh mục Laptop">


                                                    <span class="catalog__icon">
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-2.png?1524124143478" alt="Danh mục Laptop" class="icon-old" />
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-hover2.png?1524124143478" alt="Danh mục Laptop" class="icon-even" />
                                                    </span>

                                                    <span>Danh mục Laptop</span>

                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="catalog-sub">


                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-sony-vaio" class="catalog-sub__link">Laptop Sony Vaio</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-dell" class="catalog-sub__link">Laptop Dell</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-asus" class="catalog-sub__link">Laptop Asus</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-hp" class="catalog-sub__link">Laptop HP</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-lenovo" class="catalog-sub__link">Laptop Lenovo</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-acer" class="catalog-sub__link">Laptop Acer</a>
                                                    </li>



                                                    <li class="catalog-sub__item">
                                                        <a href="/laptop-toshiba" class="catalog-sub__link">Laptop Toshiba</a>
                                                    </li>


                                                </ul>
                                            </li>










                                            <li class="catalog__item" >
                                                <a href="/macbook" title="Macbook">


                                                    <span class="catalog__icon">
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-3.png?1524124143478" alt="Macbook" class="icon-old" />
                                                        <img src="<?php echo SITE_ROOT ?>js/icon-cate-hover3.png?1524124143478" alt="Macbook" class="icon-even" />
                                                    </span>

                                                    <span>Macbook</span>

                                                </a>
                                            </li>



                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('.catalog-more').on('click', function () {
                                                        var $this = $(this);
                                                        var item = $('.catalog__list .catalog__item');
                                                        item.each(function () {
                                                            if ($(this).is(":hidden")) {
                                                                $(this).show().addClass('show');
                                                                $this.html('<a href="javascript:;"><span class="catalog__icon"><i class="fa fa-minus-square" aria-hidden="true"></i></span><span>Thu gọn</span></a>');
                                                            } else if ($(this).hasClass('show')) {
                                                                $(this).hide().removeClass('show');
                                                                $this.html('<a href="javascript:;"><span class="catalog__icon"><i class="fa fa-plus-square" aria-hidden="true"></i></span><span>Xem thêm</span></a>');
                                                            }
                                                        });
                                                    });
                                                    $('.catalog__list .catalog__item').on('mouseenter', function () {
                                                        if ($(this).find('.catalog-sub').length > 0) {
                                                            $('.catalog__list').css('overflow', 'hidden');
                                                        }
                                                    });
                                                    $('.catalog__list .catalog__item').on('mouseleave', function () {
                                                        $('.catalog__list').css('overflow', 'overlay');
                                                    });
                                                });
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                <div class="product-topseller" id="topseller">
                                    <div class="home__title product-topseller__title">
                                        <h2>Sản phẩm bán chạy</h2>
                                    </div>
                                    <div class="slider-product-list owl-carousel">






                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2-14769cb6-598d-4a08-9dfa-195bcda10bfe.jpg?v=1527062308343" alt="Dell XPS 9360 Coi7 8550U/ RAM 16G/ SSD256G/ Màn 3K cảm ứng like new" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" title="Dell XPS 9360 Coi7 8550U/ RAM 16G/ SSD256G/ Màn 3K cảm ứng like new">Dell XPS 9360 Coi7 8550U/ RAM 16G/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">33.000.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18686961" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18686961" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-xps-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-4k-may-dep" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/xps-15.jpg?v=1527049292080" alt="Dell XPS 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6_4K /Máy đẹp" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-xps-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-4k-may-dep" title="Dell XPS 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6_4K /Máy đẹp">Dell XPS 9550 Coi7 6700HQ/ Ram 8G/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">29.500.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18679079" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18679079" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  




                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/hp-envy-13-coi5-8250u-ram-4g-ssd-256g-man-13-4-full-hd-ips-like-new-con-bh-hang" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/32460880-1687770244675846-7175582499714629632-n.jpg?v=1526441692803" alt="HP Envy 13 coi5 8250U Ram 4G SSD 256G Màn 13.4 FULL HD IPS like new còn BH HÃNG" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/hp-envy-13-coi5-8250u-ram-4g-ssd-256g-man-13-4-full-hd-ips-like-new-con-bh-hang" title="HP Envy 13 coi5 8250U Ram 4G SSD 256G Màn 13.4 FULL HD IPS like new còn BH HÃNG">HP Envy 13 coi5 8250U Ram 4G...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">17.500.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18551204" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18551204" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/asus-ux360-core-i5-7y54-ram-4gb-ssd-128gb-man-13-3inh-fhd-xoay-gap-360-do-cam-ung" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/409f97eec0fbae54ab118cd2fa2be7f8-hi.jpg?v=1526439195460" alt="ASUS UX360 Core i5 7Y54, Ram 4gb, SSD 128gb, Màn 13.3inh FHD Xoay gập 360 độ cảm ứng" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/asus-ux360-core-i5-7y54-ram-4gb-ssd-128gb-man-13-3inh-fhd-xoay-gap-360-do-cam-ung" title="ASUS UX360 Core i5 7Y54, Ram 4gb, SSD 128gb, Màn 13.3inh FHD Xoay gập 360 độ cảm ứng">ASUS UX360 Core i5 7Y54, Ram 4gb,...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">14.800.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18550323" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18550323" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  




                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-xps-9360-coi7-7500u-ram-8g-ssd-512g-man-13-3-qhd-3k-may-dep" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2-57c3f32c-cc1d-44be-85c6-440a78e286db.jpg?v=1525853907063" alt="Dell XPS 9360 Coi7 7500U/ Ram 8G/ SSD 512G/ Màn 13.3'' QHD 3K/ Máy đẹp" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-xps-9360-coi7-7500u-ram-8g-ssd-512g-man-13-3-qhd-3k-may-dep" title="Dell XPS 9360 Coi7 7500U/ Ram 8G/ SSD 512G/ Màn 13.3'' QHD 3K/ Máy đẹp">Dell XPS 9360 Coi7 7500U/ Ram 8G/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">28.500.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18454045" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18454045" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-xps-9350-coi7-6560u-ram-8g-ssd-256g-man-13-3-qhd-3k-may-dep" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2.jpg?v=1525853094337" alt="Dell XPS 9350 Coi7 6560U / Ram 8G/ SSD 256G/ Màn 13.3 QHD 3K/ Máy đẹp" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-xps-9350-coi7-6560u-ram-8g-ssd-256g-man-13-3-qhd-3k-may-dep" title="Dell XPS 9350 Coi7 6560U / Ram 8G/ SSD 256G/ Màn 13.3 QHD 3K/ Máy đẹp">Dell XPS 9350 Coi7 6560U / Ram...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">23.800.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18453669" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18453669" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  




                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/en-intl-pdp0-dell-xps-15-i7-32gb-1tb-qf9-00292-p7.jpg?v=1525686241510" alt="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" title="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI">Dell XPS 15 9550 Coi7 6700HQ/ Ram...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">27.000.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18422836" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18422836" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-latitude-e7450-core-i7-5600u-ram-8gb-o-ssd-256gb-man-14inch-full-hd-ips-cam-ung-da-diem" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/dell-latitude-e7450-w-g03.jpg?v=1525399869010" alt="Dell Latitude E7450 Core i7 5600U, ram 8GB, ổ SSD 256GB, màn 14inch Full HD IPS cảm ứng đa điểm" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-latitude-e7450-core-i7-5600u-ram-8gb-o-ssd-256gb-man-14inch-full-hd-ips-cam-ung-da-diem" title="Dell Latitude E7450 Core i7 5600U, ram 8GB, ổ SSD 256GB, màn 14inch Full HD IPS cảm ứng đa điểm">Dell Latitude E7450 Core i7 5600U, ram 8GB,...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">12.200.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18060037" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18060037" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  




                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/lenovo-thinkpad-t560-i7-6600u-ram-16gb-ssd-512gb-man-15-6-fhd-windows-10" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/t560-1-1502681284.jpg?v=1525316468443" alt="Lenovo ThinkPad T560 i7 6600U /Ram 16GB /SSD 512GB ,Màn 15.6" FHD Windows 10" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/lenovo-thinkpad-t560-i7-6600u-ram-16gb-ssd-512gb-man-15-6-fhd-windows-10" title="Lenovo ThinkPad T560 i7 6600U /Ram 16GB /SSD 512GB ,Màn 15.6" FHD Windows 10">Lenovo ThinkPad T560 i7 6600U /Ram 16GB...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">21.500.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18041707" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18041707" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/laptop-hp-folio-1040-g1-coi7-4600u-ram-4g-o-320g-man-14-hd-1600-900-may-dep" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/folio-1040-g2-e9135088-1a63-42f2-8b27-517c6ae8744c.png?v=1525252913407" alt="Laptop HP Folio 1040 G1 Coi7 4600U/ Ram 4G/ Ổ 320G/ Màn 14 HD+(1600*900) Máy đẹp" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/laptop-hp-folio-1040-g1-coi7-4600u-ram-4g-o-320g-man-14-hd-1600-900-may-dep" title="Laptop HP Folio 1040 G1 Coi7 4600U/ Ram 4G/ Ổ 320G/ Màn 14 HD+(1600*900) Máy đẹp">Laptop HP Folio 1040 G1 Coi7 4600U/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">9.200.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18033150" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18033150" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  




                                        <div class="item">








                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/hp-elitebook-840-g4-coi5-7200u-ram8g-ssd-256g-man-14qhd-2k-may-dep" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/34-268-217-v01.jpg?v=1525230224337" alt="HP EliteBook 840 G4 Coi5 7200U/ Ram8G/ SSD 256G/ Màn 14QHD 2K/ Máy đẹp" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/hp-elitebook-840-g4-coi5-7200u-ram8g-ssd-256g-man-14qhd-2k-may-dep" title="HP EliteBook 840 G4 Coi5 7200U/ Ram8G/ SSD 256G/ Màn 14QHD 2K/ Máy đẹp">HP EliteBook 840 G4 Coi5 7200U/ Ram8G/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">16.500.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-18022292" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="18022292" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>











                                            <div class="product-item__mini clearfix">
                                                <div class="product-item__thumb">
                                                    <a href="/dell-latitude-e7270-core-i5-6200u-ram-8gb-ssd-256gb-man-12-5-full-hd-ips-win10" >
                                                        <img src="//bizweb.dktcdn.net/thumb/compact/100/256/244/products/laptop-latitude-12-e7270-02-96905a37-f464-4e9f-9cde-0961984ec107.jpg?v=1524839348900" alt="DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/ SSD 256GB/ MÀN 12.5" FULL HD IPS / WIN10" />
                                                    </a>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dell-latitude-e7270-core-i5-6200u-ram-8gb-ssd-256gb-man-12-5-full-hd-ips-win10" title="DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/ SSD 256GB/ MÀN 12.5" FULL HD IPS / WIN10">DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/...</a></h3>


                                                    <div class="product-item__price"> 

                                                        <p class="product-item__price__regular">13.200.000₫</p>

                                                    </div>


                                                    <div class="product-item__actions">

                                                        <form action="/cart/add" method="post" class="variants" id="product-actions-17964577" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="17964577" />
                                                            <button class="button btn-cart add_to_cart" title="Mua hàng" aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>  


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-md hidden-sm hidden-xs">
                                <div class="three-module__banner_right">
                                    <a href="#">
                                        <img src="<?php echo SITE_ROOT ?>js/home-banner-right.jpg?1524124143478" alt="banner" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="three-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="three-banner__list">
                                    <div class="row">
                                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12">
                                            <a href="#">
                                                <img src="<?php echo SITE_ROOT ?>js/rhs-banner-1.jpg?1524124143478" alt="latop dell latitude e6420" />
                                            </a>
                                        </div>
                                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                            <a href="#">
                                                <img src="<?php echo SITE_ROOT ?>js/rhs-banner-2.jpg?1524124143478" alt="latop dell latitude e6430" />
                                            </a>
                                        </div>
                                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                            <a href="/">
                                                <img src="<?php echo SITE_ROOT ?>js/rhs-banner-3.jpg?1524124143478" alt="Samsung Galaxy Note 6" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="product-hot" id="product-hot">
                    <div class="container">
                        <div class="home__title product-hot__title">
                            <h2>Sản phẩm Laptop</h2>

                            <ul class="cate-list hidden-xs">

                                <li class="cate-list__item">
                                    <a href="/laptop-sony-vaio" class="cate-list__link">Sony Vaio</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-asus" class="cate-list__link">Dell</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-asus" class="cate-list__link">Asus</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-hp" class="cate-list__link">HP</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-lenovo" class="cate-list__link">Lenovo</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-acer" class="cate-list__link">Acer</a>
                                </li>

                                <li class="cate-list__item">
                                    <a href="/laptop-toshiba" class="cate-list__link">Toshiba</a>
                                </li>

                            </ul>

                        </div>
                        <div class="product-home__slide">
                            <div class="slider-product-list owl-carousel">






                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2-14769cb6-598d-4a08-9dfa-195bcda10bfe.jpg?v=1527062308343" alt="Dell XPS 9360 Coi7 8550U/ RAM 16G/ SSD256G/ Màn 3K cảm ứng like new" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18686961" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18686961" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" title="Dell XPS 9360 Coi7 8550U/ RAM 16G/ SSD256G/ Màn 3K cảm ứng like new">Dell XPS 9360 Coi7 8550U/ RAM 16G/ SSD256G/ Màn 3K cảm ứng like new</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">33.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-4k-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/xps-15.jpg?v=1527049292080" alt="Dell XPS 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6_4K /Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-4k-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18679079" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18679079" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-4k-may-dep" title="Dell XPS 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6_4K /Máy đẹp">Dell XPS 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6_4K /Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">29.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-envy-13-coi5-8250u-ram-4g-ssd-256g-man-13-4-full-hd-ips-like-new-con-bh-hang">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/32460880-1687770244675846-7175582499714629632-n.jpg?v=1526441692803" alt="HP Envy 13 coi5 8250U Ram 4G SSD 256G Màn 13.4 FULL HD IPS like new còn BH HÃNG" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-envy-13-coi5-8250u-ram-4g-ssd-256g-man-13-4-full-hd-ips-like-new-con-bh-hang" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18551204" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18551204" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-envy-13-coi5-8250u-ram-4g-ssd-256g-man-13-4-full-hd-ips-like-new-con-bh-hang" title="HP Envy 13 coi5 8250U Ram 4G SSD 256G Màn 13.4 FULL HD IPS like new còn BH HÃNG">HP Envy 13 coi5 8250U Ram 4G SSD 256G Màn 13.4 FULL HD IPS like new còn BH HÃNG</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/asus-ux360-core-i5-7y54-ram-4gb-ssd-128gb-man-13-3inh-fhd-xoay-gap-360-do-cam-ung">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/409f97eec0fbae54ab118cd2fa2be7f8-hi.jpg?v=1526439195460" alt="ASUS UX360 Core i5 7Y54, Ram 4gb, SSD 128gb, Màn 13.3inh FHD Xoay gập 360 độ cảm ứng" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="asus-ux360-core-i5-7y54-ram-4gb-ssd-128gb-man-13-3inh-fhd-xoay-gap-360-do-cam-ung" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18550323" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18550323" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/asus-ux360-core-i5-7y54-ram-4gb-ssd-128gb-man-13-3inh-fhd-xoay-gap-360-do-cam-ung" title="ASUS UX360 Core i5 7Y54, Ram 4gb, SSD 128gb, Màn 13.3inh FHD Xoay gập 360 độ cảm ứng">ASUS UX360 Core i5 7Y54, Ram 4gb, SSD 128gb, Màn 13.3inh FHD Xoay gập 360 độ cảm ứng</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">14.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-9360-coi7-7500u-ram-8g-ssd-512g-man-13-3-qhd-3k-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2-57c3f32c-cc1d-44be-85c6-440a78e286db.jpg?v=1525853907063" alt="Dell XPS 9360 Coi7 7500U/ Ram 8G/ SSD 512G/ Màn 13.3'' QHD 3K/ Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-9360-coi7-7500u-ram-8g-ssd-512g-man-13-3-qhd-3k-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18454045" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18454045" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-9360-coi7-7500u-ram-8g-ssd-512g-man-13-3-qhd-3k-may-dep" title="Dell XPS 9360 Coi7 7500U/ Ram 8G/ SSD 512G/ Màn 13.3'' QHD 3K/ Máy đẹp">Dell XPS 9360 Coi7 7500U/ Ram 8G/ SSD 512G/ Màn 13.3'' QHD 3K/ Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">28.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-9350-coi7-6560u-ram-8g-ssd-256g-man-13-3-qhd-3k-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/37536-dell-xps-13-i7-8gb-256g-ssd-13-3-qhd-touch-win-10-36332-2.jpg?v=1525853094337" alt="Dell XPS 9350 Coi7 6560U / Ram 8G/ SSD 256G/ Màn 13.3 QHD 3K/ Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-9350-coi7-6560u-ram-8g-ssd-256g-man-13-3-qhd-3k-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18453669" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18453669" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-9350-coi7-6560u-ram-8g-ssd-256g-man-13-3-qhd-3k-may-dep" title="Dell XPS 9350 Coi7 6560U / Ram 8G/ SSD 256G/ Màn 13.3 QHD 3K/ Máy đẹp">Dell XPS 9350 Coi7 6560U / Ram 8G/ SSD 256G/ Màn 13.3 QHD 3K/ Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">23.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/en-intl-pdp0-dell-xps-15-i7-32gb-1tb-qf9-00292-p7.jpg?v=1525686241510" alt="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18422836" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18422836" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" title="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI">Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">27.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-latitude-e7450-core-i7-5600u-ram-8gb-o-ssd-256gb-man-14inch-full-hd-ips-cam-ung-da-diem">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-latitude-e7450-w-g03.jpg?v=1525399869010" alt="Dell Latitude E7450 Core i7 5600U, ram 8GB, ổ SSD 256GB, màn 14inch Full HD IPS cảm ứng đa điểm" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-latitude-e7450-core-i7-5600u-ram-8gb-o-ssd-256gb-man-14inch-full-hd-ips-cam-ung-da-diem" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18060037" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18060037" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-latitude-e7450-core-i7-5600u-ram-8gb-o-ssd-256gb-man-14inch-full-hd-ips-cam-ung-da-diem" title="Dell Latitude E7450 Core i7 5600U, ram 8GB, ổ SSD 256GB, màn 14inch Full HD IPS cảm ứng đa điểm">Dell Latitude E7450 Core i7 5600U, ram 8GB, ổ SSD 256GB, màn 14inch Full HD IPS cảm ứng đa điểm</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">12.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-t560-i7-6600u-ram-16gb-ssd-512gb-man-15-6-fhd-windows-10">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/t560-1-1502681284.jpg?v=1525316468443" alt="Lenovo ThinkPad T560 i7 6600U /Ram 16GB /SSD 512GB ,Màn 15.6" FHD Windows 10" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-t560-i7-6600u-ram-16gb-ssd-512gb-man-15-6-fhd-windows-10" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18041707" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18041707" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-t560-i7-6600u-ram-16gb-ssd-512gb-man-15-6-fhd-windows-10" title="Lenovo ThinkPad T560 i7 6600U /Ram 16GB /SSD 512GB ,Màn 15.6" FHD Windows 10">Lenovo ThinkPad T560 i7 6600U /Ram 16GB /SSD 512GB ,Màn 15.6" FHD Windows 10</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">21.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/laptop-hp-folio-1040-g1-coi7-4600u-ram-4g-o-320g-man-14-hd-1600-900-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/folio-1040-g2-e9135088-1a63-42f2-8b27-517c6ae8744c.png?v=1525252913407" alt="Laptop HP Folio 1040 G1 Coi7 4600U/ Ram 4G/ Ổ 320G/ Màn 14 HD+(1600*900) Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="laptop-hp-folio-1040-g1-coi7-4600u-ram-4g-o-320g-man-14-hd-1600-900-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18033150" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18033150" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/laptop-hp-folio-1040-g1-coi7-4600u-ram-4g-o-320g-man-14-hd-1600-900-may-dep" title="Laptop HP Folio 1040 G1 Coi7 4600U/ Ram 4G/ Ổ 320G/ Màn 14 HD+(1600*900) Máy đẹp">Laptop HP Folio 1040 G1 Coi7 4600U/ Ram 4G/ Ổ 320G/ Màn 14 HD+(1600*900) Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">9.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-elitebook-840-g4-coi5-7200u-ram8g-ssd-256g-man-14qhd-2k-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/34-268-217-v01.jpg?v=1525230224337" alt="HP EliteBook 840 G4 Coi5 7200U/ Ram8G/ SSD 256G/ Màn 14QHD 2K/ Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-elitebook-840-g4-coi5-7200u-ram8g-ssd-256g-man-14qhd-2k-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18022292" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18022292" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-elitebook-840-g4-coi5-7200u-ram8g-ssd-256g-man-14qhd-2k-may-dep" title="HP EliteBook 840 G4 Coi5 7200U/ Ram8G/ SSD 256G/ Màn 14QHD 2K/ Máy đẹp">HP EliteBook 840 G4 Coi5 7200U/ Ram8G/ SSD 256G/ Màn 14QHD 2K/ Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">16.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-latitude-e7270-core-i5-6200u-ram-8gb-ssd-256gb-man-12-5-full-hd-ips-win10">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/laptop-latitude-12-e7270-02-96905a37-f464-4e9f-9cde-0961984ec107.jpg?v=1524839348900" alt="DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/ SSD 256GB/ MÀN 12.5" FULL HD IPS / WIN10" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-latitude-e7270-core-i5-6200u-ram-8gb-ssd-256gb-man-12-5-full-hd-ips-win10" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17964577" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17964577" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-latitude-e7270-core-i5-6200u-ram-8gb-ssd-256gb-man-12-5-full-hd-ips-win10" title="DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/ SSD 256GB/ MÀN 12.5" FULL HD IPS / WIN10">DELL LATITUDE E7270 CORE I5-6200U/ RAM 8GB/ SSD 256GB/ MÀN 12.5" FULL HD IPS / WIN10</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-x1-gen-1-coi7-3667u-ram-8g-ssd-128g-man-14inh-may-dep-mong">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/x1-g2-6.jpg?v=1524799948673" alt="Lenovo thinkpad X1 Gen 1 Coi7 3667U/Ram 8g/ SSD 128G/ Màn 14inh/Máy đẹp mỏng" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-x1-gen-1-coi7-3667u-ram-8g-ssd-128g-man-14inh-may-dep-mong" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17953186" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17953186" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-x1-gen-1-coi7-3667u-ram-8g-ssd-128g-man-14inh-may-dep-mong" title="Lenovo thinkpad X1 Gen 1 Coi7 3667U/Ram 8g/ SSD 128G/ Màn 14inh/Máy đẹp mỏng">Lenovo thinkpad X1 Gen 1 Coi7 3667U/Ram 8g/ SSD 128G/ Màn 14inh/Máy đẹp mỏng</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">11.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-elitebook-8440p-i5-520m-ram-4gb-hdd-250gb-vga-on-intel-hd-man-14-hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/8440p-freigestellt.jpg?v=1524713264283" alt="HP Elitebook 8440p ( i5-520M, ram 4GB, hdd 250GB, VGA on Intel HD, màn 14″ HD)" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-elitebook-8440p-i5-520m-ram-4gb-hdd-250gb-vga-on-intel-hd-man-14-hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17934241" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17934241" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-elitebook-8440p-i5-520m-ram-4gb-hdd-250gb-vga-on-intel-hd-man-14-hd" title="HP Elitebook 8440p ( i5-520M, ram 4GB, hdd 250GB, VGA on Intel HD, màn 14″ HD)">HP Elitebook 8440p ( i5-520M, ram 4GB, hdd 250GB, VGA on Intel HD, màn 14″ HD)</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">3.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-inspiron-7559-three-quarters-lid-view-d4de40fb-64d1-4c3e-b526-9a1d9fa1c1c2.png?v=1524712773760" alt="Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17933578" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17933578" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" title="Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)">Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.300.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-inspiron-7559-three-quarters-lid-view.png?v=1524712600593" alt="Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17933398" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17933398" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" title="Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)">Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-n5548-coi5-5200u-ram4g-hdd-500g-vga-roi-amd-radeon-r7-m270-4g-man-15-6-vo-nhom">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-inspiron-5548-5548-5785.jpg?v=1524712172697" alt="Dell N5548 Coi5 5200U/ Ram4G/ HDD 500G/ VGA rời AMD Radeon R7 M270 4G/ Màn 15,6 vỏ nhôm" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-n5548-coi5-5200u-ram4g-hdd-500g-vga-roi-amd-radeon-r7-m270-4g-man-15-6-vo-nhom" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17932896" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17932896" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-n5548-coi5-5200u-ram4g-hdd-500g-vga-roi-amd-radeon-r7-m270-4g-man-15-6-vo-nhom" title="Dell N5548 Coi5 5200U/ Ram4G/ HDD 500G/ VGA rời AMD Radeon R7 M270 4G/ Màn 15,6 vỏ nhôm">Dell N5548 Coi5 5200U/ Ram4G/ HDD 500G/ VGA rời AMD Radeon R7 M270 4G/ Màn 15,6 vỏ nhôm</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">9.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/925643888s.jpg?v=1524628085047" alt="HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17920034" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17920034" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi" title="HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời">HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">6.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-x260-coi5-6300u-ram-8g-ssd-256g-man-12-5hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/2x3-000b-000v2-s01.jpg?v=1524455094083" alt="Lenovo Thinkpad X260 Coi5 6300U / Ram 8G/ SSD 256G/ Màn 12.5HD" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-x260-coi5-6300u-ram-8g-ssd-256g-man-12-5hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17882266" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17882266" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-x260-coi5-6300u-ram-8g-ssd-256g-man-12-5hd" title="Lenovo Thinkpad X260 Coi5 6300U / Ram 8G/ SSD 256G/ Màn 12.5HD">Lenovo Thinkpad X260 Coi5 6300U / Ram 8G/ SSD 256G/ Màn 12.5HD</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">16.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-t470-coi7-7500u-ram-16g-ssd-256g-man-14full-hd-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/417099769-lenovo-thinkpad-t460-20fn0048hv-cf9be001-ccb5-42f2-a66a-2a10eafdfd06.jpg?v=1524454691110" alt="Lenovo Thinkpad T470 Coi7 7500U / Ram 16G/ ssd 256G/ Màn 14FULL HD/ Máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-t470-coi7-7500u-ram-16g-ssd-256g-man-14full-hd-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17882144" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17882144" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-t470-coi7-7500u-ram-16g-ssd-256g-man-14full-hd-may-dep" title="Lenovo Thinkpad T470 Coi7 7500U / Ram 16G/ ssd 256G/ Màn 14FULL HD/ Máy đẹp">Lenovo Thinkpad T470 Coi7 7500U / Ram 16G/ ssd 256G/ Màn 14FULL HD/ Máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">24.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-full-hd-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/417099769-lenovo-thinkpad-t460-20fn0048hv-edd1a814-a644-4c4f-a7f1-0ac5b90710f6.jpg?v=1524454097897" alt="LENOVO THINKPAD T460 COI5 6300U/ RAM 8G/ SSD 256G/ MÀN 14 FULL HD /MÁY ĐẸP" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-full-hd-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17881353" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17881353" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-full-hd-may-dep" title="LENOVO THINKPAD T460 COI5 6300U/ RAM 8G/ SSD 256G/ MÀN 14 FULL HD /MÁY ĐẸP">LENOVO THINKPAD T460 COI5 6300U/ RAM 8G/ SSD 256G/ MÀN 14 FULL HD /MÁY ĐẸP</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">16.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-t460-coi5-6300u-ram-4g-hdd-500g-man-14-inh-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/417099769-lenovo-thinkpad-t460-20fn0048hv-a223846c-fee6-44fb-9b7f-48bd9df62030.jpg?v=1524453204350" alt="LENOVO THINKPAD T460 COI5 6300U/ RAM 4G/ HDD 500G/ MÀN 14 INH /MÁY ĐẸP" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-t460-coi5-6300u-ram-4g-hdd-500g-man-14-inh-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17881091" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17881091" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-t460-coi5-6300u-ram-4g-hdd-500g-man-14-inh-may-dep" title="LENOVO THINKPAD T460 COI5 6300U/ RAM 4G/ HDD 500G/ MÀN 14 INH /MÁY ĐẸP">LENOVO THINKPAD T460 COI5 6300U/ RAM 4G/ HDD 500G/ MÀN 14 INH /MÁY ĐẸP</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-inh-may-dep">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/417099769-lenovo-thinkpad-t460-20fn0048hv.jpg?v=1524452606977" alt="Lenovo Thinkpad T460 Coi5 6300U/ Ram 8G/ SSD 256G/ Màn 14 inh /máy đẹp" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-inh-may-dep" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17880870" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17880870" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-thinkpad-t460-coi5-6300u-ram-8g-ssd-256g-man-14-inh-may-dep" title="Lenovo Thinkpad T460 Coi5 6300U/ Ram 8G/ SSD 256G/ Màn 14 inh /máy đẹp">Lenovo Thinkpad T460 Coi5 6300U/ Ram 8G/ SSD 256G/ Màn 14 inh /máy đẹp</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-elitebook-840-g1-core-i7-4600u-ram-8g-hdd-320-14full-hd-vga-roi-phim-sang">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/hp-elitebook-840-g1-core-i7-4600u-max-3-3-ghz-ram-4gb-hdd-320gb-sata-iii-14-inch-mong-dep-nhu-moi-f570bd65-a54e-4c1a-951f-fb1c95c24c88.jpg?v=1524216465063" alt="HP Elitebook 840 G1 Core I7 4600U – Ram 8G – HDD 320 – 14FULL HD/ VGA RỜI/ Phím sáng" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-elitebook-840-g1-core-i7-4600u-ram-8g-hdd-320-14full-hd-vga-roi-phim-sang" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17789993" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17789993" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-elitebook-840-g1-core-i7-4600u-ram-8g-hdd-320-14full-hd-vga-roi-phim-sang" title="HP Elitebook 840 G1 Core I7 4600U – Ram 8G – HDD 320 – 14FULL HD/ VGA RỜI/ Phím sáng">HP Elitebook 840 G1 Core I7 4600U – Ram 8G – HDD 320 – 14FULL HD/ VGA RỜI/ Phím sáng</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">8.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  


                            </div>
                        </div>
                        <div class="view__more hidden-xs">
                            <a href="/danh-muc-laptop">Xem thêm</a>
                        </div>
                    </div>
                </section>



                <section class="product-hot" id="product-hot">
                    <div class="container">
                        <div class="home__title product-hot__title">
                            <h2>Laptop game và đồ họa</h2>

                            <ul class="cate-list hidden-xs">

                            </ul>

                        </div>
                        <div class="product-home__slide">
                            <div class="slider-product-list owl-carousel">






                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/en-intl-pdp0-dell-xps-15-i7-32gb-1tb-qf9-00292-p7.jpg?v=1525686241510" alt="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-18422836" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="18422836" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-15-9550-coi7-6700hq-ram-8g-ssd-256g-man-15-6-full-hd-vga-roi" title="Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI">Dell XPS 15 9550 Coi7 6700HQ/ Ram 8G/ SSD 256G/ Màn 15.6 FULL HD/ VGA RỜI</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">27.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-inspiron-7559-three-quarters-lid-view-d4de40fb-64d1-4c3e-b526-9a1d9fa1c1c2.png?v=1524712773760" alt="Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17933578" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17933578" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-inspiron-7559-i7-6700hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" title="Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)">Dell Inspiron 7559 ( i7-6700HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.300.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-inspiron-7559-three-quarters-lid-view.png?v=1524712600593" alt="Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17933398" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17933398" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-inspiron-7559-i5-6300hq-ram-8g-hdd-1tb-vga-nvidia-gtx-960m-4g-man-15-6-full-hd" title="Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)">Dell Inspiron 7559 ( i5-6300HQ, RAM 8G, HDD 1TB, VGA Nvidia GTX 960M- 4G, màn 15.6″ Full HD)</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/925643888s.jpg?v=1524628085047" alt="HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17920034" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17920034" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-probook-4730s-coi7-2620m-ram-4g-hdd-250g-man-17-3-inh-vga-roi" title="HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời">HP probook 4730s Coi7 2620M/ Ram 4G/ HDD 250G/ Màn 17.3 inh/ VGA rời</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">6.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-15-9560-core-i5-7300hq-ram-8gb-ssd-256gb-man-4k-touch">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/e-29c2a188-662b-4983-934e-1fb7a3b161b5.jpg?v=1523332738913" alt="DELL XPS 15 9560 Core i5-7300HQ/ RAM 8GB /SSD 256GB /Màn 4K Touch" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-15-9560-core-i5-7300hq-ram-8gb-ssd-256gb-man-4k-touch" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17567511" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17567511" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-15-9560-core-i5-7300hq-ram-8gb-ssd-256gb-man-4k-touch" title="DELL XPS 15 9560 Core i5-7300HQ/ RAM 8GB /SSD 256GB /Màn 4K Touch">DELL XPS 15 9560 Core i5-7300HQ/ RAM 8GB /SSD 256GB /Màn 4K Touch</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">31.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-15-9560-core-i7-7700hq-ram-8gb-ssd-256gb-man-15-6fhd">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/e-22027a2b-19f7-4374-add4-f17ab1dfcbf4.jpg?v=1523332370300" alt="DELL XPS 15 9560 Core i7-7700HQ/ RAM 8GB /SSD 256GB /Màn 15.6FHD" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-15-9560-core-i7-7700hq-ram-8gb-ssd-256gb-man-15-6fhd" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17567418" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17567418" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-15-9560-core-i7-7700hq-ram-8gb-ssd-256gb-man-15-6fhd" title="DELL XPS 15 9560 Core i7-7700HQ/ RAM 8GB /SSD 256GB /Màn 15.6FHD">DELL XPS 15 9560 Core i7-7700HQ/ RAM 8GB /SSD 256GB /Màn 15.6FHD</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">31.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-m6800-coi7-4800mq-ram8g-o-128ssd-1t-man-17-3-full-hd-cac-ati-m6100-figer">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/1520415557-dell-precision-m6800.jpg?v=1523327125400" alt="Dell M6800 Coi7 4800MQ/ Ram8G/ Ổ 128SSD+ 1T/ Màn 17.3 FULL HD/ CẠC ATI M6100 FIGER" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-m6800-coi7-4800mq-ram8g-o-128ssd-1t-man-17-3-full-hd-cac-ati-m6100-figer" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17565303" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17565303" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-m6800-coi7-4800mq-ram8g-o-128ssd-1t-man-17-3-full-hd-cac-ati-m6100-figer" title="Dell M6800 Coi7 4800MQ/ Ram8G/ Ổ 128SSD+ 1T/ Màn 17.3 FULL HD/ CẠC ATI M6100 FIGER">Dell M6800 Coi7 4800MQ/ Ram8G/ Ổ 128SSD+ 1T/ Màn 17.3 FULL HD/ CẠC ATI M6100 FIGER</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">18.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-probook-4730s-coi5-2520m-ram-4g-hdd-320g-man-17-3inh-vga-roi-ho-tro-do-hoa-game">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/s-100013248-16856f63a1d6adc31e980c3c748a6774.jpg?v=1522052263507" alt="HP probook 4730s Coi5 2520M/ RAM 4G/ HDD 320G/ Màn 17.3inh/ VGA rời Hỗ trợ ĐỒ HỌA -GAME" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-probook-4730s-coi5-2520m-ram-4g-hdd-320g-man-17-3inh-vga-roi-ho-tro-do-hoa-game" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-16411939" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="16411939" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-probook-4730s-coi5-2520m-ram-4g-hdd-320g-man-17-3inh-vga-roi-ho-tro-do-hoa-game" title="HP probook 4730s Coi5 2520M/ RAM 4G/ HDD 320G/ Màn 17.3inh/ VGA rời Hỗ trợ ĐỒ HỌA -GAME">HP probook 4730s Coi5 2520M/ RAM 4G/ HDD 320G/ Màn 17.3inh/ VGA rời Hỗ trợ ĐỒ HỌA -GAME</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">6.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-m4800-coi7-4800mq-ram8g-o-500g-man-15-6-full-hd-vga-k1100m">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-announces-world-s-most-powerful-mobile-workstations-with-higher-resolution-than-the-apple-macbook-pro-retina-display07-copy-3a40718e-2b92-4a4e-a0a5-47e42d91ea5e.jpg?v=1520064291777" alt="Dell M4800 Coi7 4800MQ/ Ram8G/ Ổ 500G/ Màn 15.6 full HD/ VGA K1100M" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-m4800-coi7-4800mq-ram8g-o-500g-man-15-6-full-hd-vga-k1100m" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15986842" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15986842" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-m4800-coi7-4800mq-ram8g-o-500g-man-15-6-full-hd-vga-k1100m" title="Dell M4800 Coi7 4800MQ/ Ram8G/ Ổ 500G/ Màn 15.6 full HD/ VGA K1100M">Dell M4800 Coi7 4800MQ/ Ram8G/ Ổ 500G/ Màn 15.6 full HD/ VGA K1100M</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">14.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-precision-m4800-coi7-4800mq-ram-8g-hdd-500g-man-15-6-full-hd-vga">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/dell-announces-world-s-most-powerful-mobile-workstations-with-higher-resolution-than-the-apple-macbook-pro-retina-display07-copy.jpg?v=1520064041237" alt="Dell Precision M4800 Coi7 4800MQ/ Ram 8G/ HDD 500G/ Màn 15.6 FULL HD/ VGA K2100M" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-precision-m4800-coi7-4800mq-ram-8g-hdd-500g-man-15-6-full-hd-vga" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15986813" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15986813" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-precision-m4800-coi7-4800mq-ram-8g-hdd-500g-man-15-6-full-hd-vga" title="Dell Precision M4800 Coi7 4800MQ/ Ram 8G/ HDD 500G/ Màn 15.6 FULL HD/ VGA K2100M">Dell Precision M4800 Coi7 4800MQ/ Ram 8G/ HDD 500G/ Màn 15.6 FULL HD/ VGA K2100M</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.300.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/laptop-gaming-asus-gl552vx-coi5-6300hq-ram-8g-hdd-1t-vga-geforce-gtx-9">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/16614367669-76f02b3dd0-o.jpg?v=1516851019510" alt=" Laptop Gaming Asus GL552VX Coi5 6300HQ/ Ram 8G/ HDD 1T/VGA Geforce GTX 950M/Màn 15.6FHD" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="laptop-gaming-asus-gl552vx-coi5-6300hq-ram-8g-hdd-1t-vga-geforce-gtx-9" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15565307" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15565307" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/laptop-gaming-asus-gl552vx-coi5-6300hq-ram-8g-hdd-1t-vga-geforce-gtx-9" title=" Laptop Gaming Asus GL552VX Coi5 6300HQ/ Ram 8G/ HDD 1T/VGA Geforce GTX 950M/Màn 15.6FHD"> Laptop Gaming Asus GL552VX Coi5 6300HQ/ Ram 8G/ HDD 1T/VGA Geforce GTX 950M/Màn 15.6FHD</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-m6700-coi7-3740qm-ram-8g-hdd-500g-man-17-3-full-hd-vga-k3000m">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/39435t450.jpg?v=1516850572163" alt="Dell M6700 Coi7 3740QM/ Ram 8G/ HDD 500G/ Màn 17.3 FULL HD/ VGA K3000M" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-m6700-coi7-3740qm-ram-8g-hdd-500g-man-17-3-full-hd-vga-k3000m" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15565246" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15565246" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-m6700-coi7-3740qm-ram-8g-hdd-500g-man-17-3-full-hd-vga-k3000m" title="Dell M6700 Coi7 3740QM/ Ram 8G/ HDD 500G/ Màn 17.3 FULL HD/ VGA K3000M">Dell M6700 Coi7 3740QM/ Ram 8G/ HDD 500G/ Màn 17.3 FULL HD/ VGA K3000M</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">14.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-n7566-coi5-6300hq-ram-4gb-hdd-1000gb-man-15-6-full-hd-vga-gtx-960">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/laptop-dell-inspiron-7566-i56300hq8g1tbvga4gden-3.jpg?v=1516850172863" alt="Dell  N7566 Coi5 6300HQ / Ram 4GB/ HDD 1000GB/ Màn 15.6  FULL HD/ VGA GTX 960 4G" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-n7566-coi5-6300hq-ram-4gb-hdd-1000gb-man-15-6-full-hd-vga-gtx-960" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15565148" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15565148" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-n7566-coi5-6300hq-ram-4gb-hdd-1000gb-man-15-6-full-hd-vga-gtx-960" title="Dell  N7566 Coi5 6300HQ / Ram 4GB/ HDD 1000GB/ Màn 15.6  FULL HD/ VGA GTX 960 4G">Dell  N7566 Coi5 6300HQ / Ram 4GB/ HDD 1000GB/ Màn 15.6  FULL HD/ VGA GTX 960 4G</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.600.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-n7560-coi7-7500u-ram-8g-ssd-128g-1000g-man-15-6full-hd-vga-geforc">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/425527491-dell-inspiron-7560-226356.jpg?v=1516849539423" alt="Dell N7560 Coi7 7500U/ Ram 8G/ SSD 128G+ Ổ 1T G/ Màn 15.6FULL HD/ VGA GeForce 940MX/ Màu GOLD" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-n7560-coi7-7500u-ram-8g-ssd-128g-1000g-man-15-6full-hd-vga-geforc" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15564986" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15564986" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-n7560-coi7-7500u-ram-8g-ssd-128g-1000g-man-15-6full-hd-vga-geforc" title="Dell N7560 Coi7 7500U/ Ram 8G/ SSD 128G+ Ổ 1T G/ Màn 15.6FULL HD/ VGA GeForce 940MX/ Màu GOLD">Dell N7560 Coi7 7500U/ Ram 8G/ SSD 128G+ Ổ 1T G/ Màn 15.6FULL HD/ VGA GeForce 940MX/ Màu GOLD</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">20.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-e7470-coi7-6600u-ram-8g-ssd-256g-man-14inhfullhd-ips-phim-sang">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/vys1449541392.jpg?v=1515748958560" alt="Dell E7470 Coi7 6600U/ Ram 8G/ SSD 256G/ Màn 14inhFULLHD IPS/ Phím sáng" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-e7470-coi7-6600u-ram-8g-ssd-256g-man-14inhfullhd-ips-phim-sang" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15371752" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15371752" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-e7470-coi7-6600u-ram-8g-ssd-256g-man-14inhfullhd-ips-phim-sang" title="Dell E7470 Coi7 6600U/ Ram 8G/ SSD 256G/ Màn 14inhFULLHD IPS/ Phím sáng">Dell E7470 Coi7 6600U/ Ram 8G/ SSD 256G/ Màn 14inhFULLHD IPS/ Phím sáng</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-xps-13-9360-coi7-7560u-ram-16g-ssd-pcie-512g-man-13-3-qhd-touch">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/26414-ma-y-ti-nh-xa-ch-tay-dell-xps-13-9360-70088617-silver.jpg?v=1514693803200" alt="Dell XPS 13 9360 Coi7 7560U/ Ram 16G/ SSD PCIe 512G/ Màn 13,3" QHD Touch" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-xps-13-9360-coi7-7560u-ram-16g-ssd-pcie-512g-man-13-3-qhd-touch" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15182745" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15182745" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-xps-13-9360-coi7-7560u-ram-16g-ssd-pcie-512g-man-13-3-qhd-touch" title="Dell XPS 13 9360 Coi7 7560U/ Ram 16G/ SSD PCIe 512G/ Màn 13,3" QHD Touch">Dell XPS 13 9360 Coi7 7560U/ Ram 16G/ SSD PCIe 512G/ Màn 13,3" QHD Touch</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">34.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/hp-840-g4-coi5-7300u-ram-8g-ssd-256g-man-14inh-full-hd-ips-moi">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/hp-elitebook-840-g4-3.png?v=1514693328707" alt="HP 840 G4 Coi5 7300U/ Ram 8G/ SSD 256G/ Màn 14inh FULL HD IPS/ mới" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="hp-840-g4-coi5-7300u-ram-8g-ssd-256g-man-14inh-full-hd-ips-moi" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15182716" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15182716" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/hp-840-g4-coi5-7300u-ram-8g-ssd-256g-man-14inh-full-hd-ips-moi" title="HP 840 G4 Coi5 7300U/ Ram 8G/ SSD 256G/ Màn 14inh FULL HD IPS/ mới">HP 840 G4 Coi5 7300U/ Ram 8G/ SSD 256G/ Màn 14inh FULL HD IPS/ mới</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">14.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/asus-zenbook-ux310-coi7-7500u-ram-8g-o-ssd-512g-man-13-3inh-full-hd-si">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/90nb0cj1-m02970-feed-3.jpg?v=1514340889090" alt="Asus Zenbook UX310 Coi7 7500U/ Ram 8G/ Ổ SSD 256G/ Màn 13.3inh FULL HD/ siêu nhẹ vỏ nhôm" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="asus-zenbook-ux310-coi7-7500u-ram-8g-o-ssd-512g-man-13-3inh-full-hd-si" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15119502" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15119502" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/asus-zenbook-ux310-coi7-7500u-ram-8g-o-ssd-512g-man-13-3inh-full-hd-si" title="Asus Zenbook UX310 Coi7 7500U/ Ram 8G/ Ổ SSD 256G/ Màn 13.3inh FULL HD/ siêu nhẹ vỏ nhôm">Asus Zenbook UX310 Coi7 7500U/ Ram 8G/ Ổ SSD 256G/ Màn 13.3inh FULL HD/ siêu nhẹ vỏ nhôm</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-precision-5510-2016-core-i7-6820hq-ram-16-gb-ssd-1tgb-15-6-full-h">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/9602562-5510-2.jpg?v=1513929937637" alt="Dell Precision 5510 (2016), Core i7 6820HQ, RAM 16 GB, SSD 1TGB, 15”6 Full HD IPS, Quadro M1000M LIKE new" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-precision-5510-2016-core-i7-6820hq-ram-16-gb-ssd-1tgb-15-6-full-h" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-15054933" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="15054933" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-precision-5510-2016-core-i7-6820hq-ram-16-gb-ssd-1tgb-15-6-full-h" title="Dell Precision 5510 (2016), Core i7 6820HQ, RAM 16 GB, SSD 1TGB, 15”6 Full HD IPS, Quadro M1000M LIKE new">Dell Precision 5510 (2016), Core i7 6820HQ, RAM 16 GB, SSD 1TGB, 15”6 Full HD IPS, Quadro M1000M LIKE new</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">32.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/laptop-hp-zbook-15-coi7-4700mq-ram-8g-hdd-500g-man-15-6-full-hd-ips-ca">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/800513-zb15-g1.png?v=1513307957700" alt="Laptop HP ZBook 15 Coi7 4700MQ/ Ram 8G/ HDD 500G/ Màn 15.6 full HD IPS / Cạc K1100M" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="laptop-hp-zbook-15-coi7-4700mq-ram-8g-hdd-500g-man-15-6-full-hd-ips-ca" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14942647" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14942647" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/laptop-hp-zbook-15-coi7-4700mq-ram-8g-hdd-500g-man-15-6-full-hd-ips-ca" title="Laptop HP ZBook 15 Coi7 4700MQ/ Ram 8G/ HDD 500G/ Màn 15.6 full HD IPS / Cạc K1100M">Laptop HP ZBook 15 Coi7 4700MQ/ Ram 8G/ HDD 500G/ Màn 15.6 full HD IPS / Cạc K1100M</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">11.900.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/laptop-msi-cx62-6qd-core-i7-6700hq-ram-8gb-hdd-1tb-nvidia-geforce-gt94">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/msi-gl62-3.jpg?v=1513307253063" alt="Laptop MSI CX62 6QD -Core i7-6700HQ, Ram 8GB, HDD 1TB, nVidia GeForce GT940M 2GB, 15.6 inches HD BH HÃNG 12 THÁNG" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="laptop-msi-cx62-6qd-core-i7-6700hq-ram-8gb-hdd-1tb-nvidia-geforce-gt94" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <button class="button btn-cart" title="Chi tiết" aria-label="Chi tiết" type="button" onclick="window.location.href = '/laptop-msi-cx62-6qd-core-i7-6700hq-ram-8gb-hdd-1tb-nvidia-geforce-gt94'" ><span>Chi tiết</span></button>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/laptop-msi-cx62-6qd-core-i7-6700hq-ram-8gb-hdd-1tb-nvidia-geforce-gt94" title="Laptop MSI CX62 6QD -Core i7-6700HQ, Ram 8GB, HDD 1TB, nVidia GeForce GT940M 2GB, 15.6 inches HD BH HÃNG 12 THÁNG">Laptop MSI CX62 6QD -Core i7-6700HQ, Ram 8GB, HDD 1TB, nVidia GeForce GT940M 2GB, 15.6 inches HD BH HÃNG 12 THÁNG</a></h3>

                                            <div class="product-item__price"> 
                                                <a href="/lien-he"><p class="product-item__price__regular">Liên hệ</p></a>
                                            </div>

                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-latitude-e7450-core-i5-5300u-ram-8g-ssd-256g-man-ips-full-hd-14in">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/7450.jpg?v=1513135820000" alt="Dell Latitude E7450 Core i5 5300U, ram 8G, SSD 256G, màn IPS Full HD 14inh" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-latitude-e7450-core-i5-5300u-ram-8g-ssd-256g-man-ips-full-hd-14in" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14907810" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14907810" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-latitude-e7450-core-i5-5300u-ram-8g-ssd-256g-man-ips-full-hd-14in" title="Dell Latitude E7450 Core i5 5300U, ram 8G, SSD 256G, màn IPS Full HD 14inh">Dell Latitude E7450 Core i5 5300U, ram 8G, SSD 256G, màn IPS Full HD 14inh</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">10.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-latitude-e5450-i7-5600u-2-6ghz-ram-8gb-o-ssd-256gb-man-14-1inch-f">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/54501-jpeg.jpg?v=1513134320780" alt="Dell Latitude E5450 i7-5600U 2.6Ghz /Ram 8GB /Ổ SSD 256GB/Màn  14.1inch full HD" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-latitude-e5450-i7-5600u-2-6ghz-ram-8gb-o-ssd-256gb-man-14-1inch-f" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14907140" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14907140" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-latitude-e5450-i7-5600u-2-6ghz-ram-8gb-o-ssd-256gb-man-14-1inch-f" title="Dell Latitude E5450 i7-5600U 2.6Ghz /Ram 8GB /Ổ SSD 256GB/Màn  14.1inch full HD">Dell Latitude E5450 i7-5600U 2.6Ghz /Ram 8GB /Ổ SSD 256GB/Màn  14.1inch full HD</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dell-precision-m6800-coi7-4800mq-ram8g-hdd-500g-man-17-3inh-fullhd-cac">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/8.jpg?v=1512958862407" alt="DELL PRECISION M6800 COI7 4800MQ/ RAM8G/ HDD 500G / MÀN 17.3INH FULLHD/ CẠC K3100M" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dell-precision-m6800-coi7-4800mq-ram8g-hdd-500g-man-17-3inh-fullhd-cac" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14854430" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14854430" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dell-precision-m6800-coi7-4800mq-ram8g-hdd-500g-man-17-3inh-fullhd-cac" title="DELL PRECISION M6800 COI7 4800MQ/ RAM8G/ HDD 500G / MÀN 17.3INH FULLHD/ CẠC K3100M">DELL PRECISION M6800 COI7 4800MQ/ RAM8G/ HDD 500G / MÀN 17.3INH FULLHD/ CẠC K3100M</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">19.300.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  


                            </div>
                        </div>
                        <div class="view__more hidden-xs">
                            <a href="/laptop-game-do-hoa">Xem thêm</a>
                        </div>
                    </div>
                </section>









                <section class="product-hot" id="product-hot">
                    <div class="container">
                        <div class="home__title product-hot__title">
                            <h2>MACBOOK</h2>

                            <ul class="cate-list hidden-xs">

                            </ul>

                        </div>
                        <div class="product-home__slide">
                            <div class="slider-product-list owl-carousel">






                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-mqd32-13-3-inch-2017-core-i5-ram-8gb-ssd-128gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/apple-macbook-air-mqd42-256gb-silver-500x500.jpg?v=1523506157497" alt="Macbook Air MQD32 (13.3 inch, 2017) - Core i5 / RAM 8GB / SSD 128GB" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-mqd32-13-3-inch-2017-core-i5-ram-8gb-ssd-128gb" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17626927" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17626927" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-mqd32-13-3-inch-2017-core-i5-ram-8gb-ssd-128gb" title="Macbook Air MQD32 (13.3 inch, 2017) - Core i5 / RAM 8GB / SSD 128GB">Macbook Air MQD32 (13.3 inch, 2017) - Core i5 / RAM 8GB / SSD 128GB</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">17.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-mmgf2-13-3-inch-2016-core-i5-ram-8gb-ssd-128gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/macair.jpg?v=1523505998650" alt="Macbook Air MMGF2 (13.3 inch, 2016) - Core i5 / RAM 8GB / SSD 128GB" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-mmgf2-13-3-inch-2016-core-i5-ram-8gb-ssd-128gb" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-17626865" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="17626865" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-mmgf2-13-3-inch-2016-core-i5-ram-8gb-ssd-128gb" title="Macbook Air MMGF2 (13.3 inch, 2016) - Core i5 / RAM 8GB / SSD 128GB">Macbook Air MMGF2 (13.3 inch, 2016) - Core i5 / RAM 8GB / SSD 128GB</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">16.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-13-inch-2015-mjve2-coi5-ram-4g-ssd-128g">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/appleair13-2015-1-ja1v-rm.jpg?v=1513305899257" alt="Macbook Air 13 inch -2015- MJVE2 Coi5/ Ram 4G/ SSD 128G/" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-13-inch-2015-mjve2-coi5-ram-4g-ssd-128g" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14942032" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14942032" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-13-inch-2015-mjve2-coi5-ram-4g-ssd-128g" title="Macbook Air 13 inch -2015- MJVE2 Coi5/ Ram 4G/ SSD 128G/">Macbook Air 13 inch -2015- MJVE2 Coi5/ Ram 4G/ SSD 128G/</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">15.500.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-md232-mid-2012-13-core-i5-ram-4gb-ssd-256gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/615-448-macbook-air-600x600.jpg?v=1513305602120" alt="Macbook Air MD232 (Mid 2012) / 13" / Core i5 / Ram 4GB / SSD 256GB /" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-md232-mid-2012-13-core-i5-ram-4gb-ssd-256gb" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14941793" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14941793" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-md232-mid-2012-13-core-i5-ram-4gb-ssd-256gb" title="Macbook Air MD232 (Mid 2012) / 13" / Core i5 / Ram 4GB / SSD 256GB /">Macbook Air MD232 (Mid 2012) / 13" / Core i5 / Ram 4GB / SSD 256GB /</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-md760-mid-2013-coi5-ram-4g-ssd-128g-man-13-3inh">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/apple-macbook-air-13-inch-2014-b6pm-640.jpg?v=1512032575143" alt="Macbook Air MD760 (Mid 2013) Coi5/ Ram 4G/ SSD 128G/ Màn 13.3inh" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-md760-mid-2013-coi5-ram-4g-ssd-128g-man-13-3inh" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14662776" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14662776" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-md760-mid-2013-coi5-ram-4g-ssd-128g-man-13-3inh" title="Macbook Air MD760 (Mid 2013) Coi5/ Ram 4G/ SSD 128G/ Màn 13.3inh">Macbook Air MD760 (Mid 2013) Coi5/ Ram 4G/ SSD 128G/ Màn 13.3inh</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-506-2010-co2-ram-2g-ssd64g-man-11-6">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/macbook-air-cu-4-a94294ef-aa32-496f-9d1d-0b143e16b674.jpg?v=1512029609700" alt="Macbook Air 506(2010) co2 ram 2g ssd64g màn 11.6''" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-506-2010-co2-ram-2g-ssd64g-man-11-6" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14661192" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14661192" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-506-2010-co2-ram-2g-ssd64g-man-11-6" title="Macbook Air 506(2010) co2 ram 2g ssd64g màn 11.6''">Macbook Air 506(2010) co2 ram 2g ssd64g màn 11.6''</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">6.900.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-md231-13-core-i5-ram-4gb-ssd-128gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/apple-macbook-air-md231-a1466-2012.jpg?v=1511751363927" alt="Macbook Air MD231 / 13" / Core i5 / Ram 4GB / SSD 128GB" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-md231-13-core-i5-ram-4gb-ssd-128gb" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591594" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591594" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-md231-13-core-i5-ram-4gb-ssd-128gb" title="Macbook Air MD231 / 13" / Core i5 / Ram 4GB / SSD 128GB">Macbook Air MD231 / 13" / Core i5 / Ram 4GB / SSD 128GB</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">12.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-mc968-core-i5-ram-2gb-ssd-64gb-man-11-6inh">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/34-100-718-01.jpg?v=1511751195260" alt="Macbook Air MC968 Core i5/ Ram 2GB/ SSD 64GB/ Màn 11.6inh" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-mc968-core-i5-ram-2gb-ssd-64gb-man-11-6inh" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591573" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591573" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-mc968-core-i5-ram-2gb-ssd-64gb-man-11-6inh" title="Macbook Air MC968 Core i5/ Ram 2GB/ SSD 64GB/ Màn 11.6inh">Macbook Air MC968 Core i5/ Ram 2GB/ SSD 64GB/ Màn 11.6inh</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">9.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-air-md224-core-i5-ram-4gb-ssd-128gb-man-11-6inh">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/apple-macbook-air-2013-13in-base-model.jpg?v=1511750931480" alt="Macbook Air MD224 Core i5 / Ram 4GB / SSD 128GB / Màn 11,6inh" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-air-md224-core-i5-ram-4gb-ssd-128gb-man-11-6inh" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591523" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591523" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-air-md224-core-i5-ram-4gb-ssd-128gb-man-11-6inh" title="Macbook Air MD224 Core i5 / Ram 4GB / SSD 128GB / Màn 11,6inh">Macbook Air MD224 Core i5 / Ram 4GB / SSD 128GB / Màn 11,6inh</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">11.200.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-pro-md103-2012-coi7-ram-4g-hdd-500g-man-15-4inh">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/103.jpg?v=1511750461967" alt="Macbook Pro MD103 (2012) Coi7/ Ram 4G/ HDD 500G/ Màn 15.4inh" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-pro-md103-2012-coi7-ram-4g-hdd-500g-man-15-4inh" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591392" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591392" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-pro-md103-2012-coi7-ram-4g-hdd-500g-man-15-4inh" title="Macbook Pro MD103 (2012) Coi7/ Ram 4G/ HDD 500G/ Màn 15.4inh">Macbook Pro MD103 (2012) Coi7/ Ram 4G/ HDD 500G/ Màn 15.4inh</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">13.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  




                                <div class="item">








                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-pro-md102-2012-coi7-ram-8g-hdd-500g-man-13-3inch-1">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/macbook-pro-13-a-1143-ea394835-c4fd-4ebd-b71c-6c408560b9c2.jpg?v=1511750143497" alt="Macbook Pro MD102(2012) Coi7/ Ram 8G/ HDD 500G/ Màn 13.3inch" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-pro-md102-2012-coi7-ram-8g-hdd-500g-man-13-3inch-1" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591363" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591363" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-pro-md102-2012-coi7-ram-8g-hdd-500g-man-13-3inch-1" title="Macbook Pro MD102(2012) Coi7/ Ram 8G/ HDD 500G/ Màn 13.3inch">Macbook Pro MD102(2012) Coi7/ Ram 8G/ HDD 500G/ Màn 13.3inch</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">12.800.000₫</p>

                                            </div>


                                        </div>
                                    </div>











                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/macbook-pro-mc700-13-inch-2011-coi5-ram-4g-hdd-320g">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/256/244/products/873-1440048144-4555d5641087150.jpg?v=1511749726597" alt="MacBook Pro MC700 13 inch -2011- Coi5/ Ram 4G/ HDD 320G" />
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="macbook-pro-mc700-13-inch-2011-coi5-ram-4g-hdd-320g" class="button quick-view" >
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants" id="product-actions-14591236" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="14591236" />
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>  

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/macbook-pro-mc700-13-inch-2011-coi5-ram-4g-hdd-320g" title="MacBook Pro MC700 13 inch -2011- Coi5/ Ram 4G/ HDD 320G">MacBook Pro MC700 13 inch -2011- Coi5/ Ram 4G/ HDD 320G</a></h3>


                                            <div class="product-item__price"> 

                                                <p class="product-item__price__regular">9.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>

                                </div>  


                            </div>
                        </div>
                        <div class="view__more hidden-xs">
                            <a href="/macbook">Xem thêm</a>
                        </div>
                    </div>
                </section>



                <section class="banner-large hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#">
                                    <img src="<?php echo SITE_ROOT ?>js/home-banner-center.jpg?1524124143478" alt="banner" />
                                </a>
                            </div>
                        </div>
                    </div>
                </section>





                <section class="three-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="general__title three-product__title">
                                    <h2>Màn hình laptop</h2>
                                </div>
                                <div class="three-product__content">

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="general__title three-product__title">
                                    <h2>Ram laptop</h2>
                                </div>
                                <div class="three-product__content">

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="general__title three-product__title">
                                    <h2>Ổ cứng laptop</h2>
                                </div>
                                <div class="three-product__content">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="home-blog hidden-xs">
                    <div class="container">
                        <div class="general__title home-blog__title">
                            <h2>Tin tức</h2>
                        </div>
                        <div class="home-blog__list">
                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="article-item">
                                        <div class="article-item__thumb">
                                            <a href="/hp-ra-mat-mau-pavilion-14-va-15-the-he-moi">

                                                <img src="//bizweb.dktcdn.net/thumb/large/100/256/244/articles/z3.jpg?v=1506392791673" alt="HP ra mắt mẫu Pavilion 14 v&#224; 15 thế hệ mới">

                                            </a>
                                        </div>
                                        <div class="article-item__content">
                                            <h3 class="article-item__title"><a href="/hp-ra-mat-mau-pavilion-14-va-15-the-he-moi" title="HP ra mắt mẫu Pavilion 14 và 15 thế hệ mới">HP ra mắt mẫu Pavilion 14 và 15 thế hệ mới</a></h3>
                                            <div class="article-item__date">Thứ Ba, 26/09/2017 09:18</div>
                                            <div class="article-item__summary"> VAIO Duo 13 được thiết kế dạng trượt mà Sony gọi là Surf Slider, thiết kế này giúp người dùng có thể chuyển đổi nhanh giữa chế độ làm...</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="article-item">
                                        <div class="article-item__thumb">
                                            <a href="/bi-quyet-tang-toc-cho-sony-vaio">

                                                <img src="//bizweb.dktcdn.net/thumb/large/100/256/244/articles/z2.png?v=1506392787853" alt="B&#237; quyết tăng tốc cho Sony Vaio">

                                            </a>
                                        </div>
                                        <div class="article-item__content">
                                            <h3 class="article-item__title"><a href="/bi-quyet-tang-toc-cho-sony-vaio" title="Bí quyết tăng tốc cho Sony Vaio">Bí quyết tăng tốc cho Sony Vaio</a></h3>
                                            <div class="article-item__date">Thứ Ba, 26/09/2017 09:18</div>
                                            <div class="article-item__summary"> VAIO Duo 13 được thiết kế dạng trượt mà Sony gọi là Surf Slider, thiết kế này giúp người dùng có thể chuyển đổi nhanh giữa chế độ làm...</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="article-item">
                                        <div class="article-item__thumb">
                                            <a href="/bi-quyet-tang-toc-cho-sony-vaio-1">

                                                <img src="//bizweb.dktcdn.net/thumb/large/100/256/244/articles/z1.jpg?v=1506392782563" alt="B&#237; quyết tăng tốc cho Sony Vaio">

                                            </a>
                                        </div>
                                        <div class="article-item__content">
                                            <h3 class="article-item__title"><a href="/bi-quyet-tang-toc-cho-sony-vaio-1" title="Bí quyết tăng tốc cho Sony Vaio">Bí quyết tăng tốc cho Sony Vaio</a></h3>
                                            <div class="article-item__date">Thứ Ba, 26/09/2017 09:18</div>
                                            <div class="article-item__summary"> VAIO Duo 13 được thiết kế dạng trượt mà Sony gọi là Surf Slider, thiết kế này giúp người dùng có thể chuyển đổi nhanh giữa chế độ làm...</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


                <section class="home-policy hidden-xs">
                    <div class="container">
                        <div class="row">




                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="home-policy__item home-policy__item-1">
                                    <div class="home-policy__item--content">
                                        <h4 class="home-policy__item--title">Giao hàng toàn quốc</h4>
                                        <p class="home-policy__item--description">Giao hàng COD các tỉnh và nội thành Hà Nội & TP. HCM</p>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="home-policy__item home-policy__item-2">
                                    <div class="home-policy__item--content">
                                        <h4 class="home-policy__item--title">Đổi trả trong vòng 24h</h4>
                                        <p class="home-policy__item--description">Đổi trả sản phẩm nhanh chóng trong vòng 24h đồng hồ.</p>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="home-policy__item home-policy__item-3">
                                    <div class="home-policy__item--content">
                                        <h4 class="home-policy__item--title">Uy Tín Hàng Đầu </h4>
                                        <p class="home-policy__item--description">Sản phẩm được ủy quyền bởi các hãng sản xuất.</p>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="home-policy__item home-policy__item-4">
                                    <div class="home-policy__item--content">
                                        <h4 class="home-policy__item--title">Tư vấn Miễn Phí 24/7</h4>
                                        <p class="home-policy__item--description">Hotline : 0983549193 </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <footer class="footer" id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-12 footer__col">
                                <h4 class="footer__col--title">Thông tin</h4>
                                <ul class="footer__col--list">

                                    <li><a href="/">Trang chủ</a></li>

                                    <li><a href="/gioi-thieu">Giới thiệu</a></li>

                                    <li><a href="/collections/all">Sản phẩm</a></li>

                                    <li><a href="/tin-tuc">Tin tức</a></li>

                                    <li><a href="/lien-he">Liên hệ</a></li>

                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                                <h4 class="footer__col--title">Hướng dẫn chính sách</h4>
                                <ul class="footer__col--list">

                                    <li><a href="/huong-dan-mua-hang">Hướng dẫn mua hàng</a></li>

                                    <li><a href="/huong-dan-thanh-toan">Hướng dẫn thanh toán</a></li>

                                    <li><a href="/huong-dan-van-chuyen">Hướng dẫn vận chuyển</a></li>

                                    <li><a href="/huong-dan-van-chuyen-1">Chính sách bảo hành</a></li>

                                    <li><a href="/chinh-sach-doi-tra-hang">Chính sách đổi trả</a></li>

                                    <li><a href="/chinh-sach">Chính sách bảo mật thông tin</a></li>

                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                                <h4 class="footer__col--title">Thông tin tài khoản</h4>
                                <ul class="footer__col--list">

                                    <li>Ngân hàng Vietcombank </li>
                                    <li>Số tk: 0021000305733</li>
                                    <li>Chi nhánh: Hà Nội</li>
                                    <li>Chủ tài khoản Đinh Văn Cảng</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                                <h4 class="footer__col--title">Liên hệ với chúng tôi</h4>
                                <div class="item-info">
                                    <div class="item-info__icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <address>Địa chỉ: 89 Phố Vọng, Phường Đồng Tâm, Quận Hai Bà Trưng</address>
                                </div>
                                <div class="item-info">
                                    <div class="item-info__icon">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                    </div>
                                    <p>Hotline 1: <a href="tel:0983549193">0983549193</a></p>
                                    <p class="">Hotline 2: <a href="tel:0972895188">0972895188</a></p>
                                </div>

                                <div class="item-info">
                                    <div class="item-info__icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <p style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;"><a href="mailto:nguyennhuan21288@gmail.com">nguyennhuan21288@gmail.com</a></p>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                                <h4 class="footer__col--title">Facebook</h4>
                                <div class="">
                                    <div class="">
                                        <div id="fb-root"></div>
                                        <script>(function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id))
                                                    return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=631942543575730";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>
                                        <div class="fb-page" data-href="https://www.facebook.com/89phovong/" data-tabs="timeline" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                            <blockquote cite="https://www.facebook.com/89phovong/" class="fb-xfbml-parse-ignore">
                                                <a href="https://www.facebook.com/89phovong/">Facebook</a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="hidden-xs footer__menu text-center">
                            <ul class="footer__menu--list">

                            </ul>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container text-center">
                            © Bản quyền thuộc về <a href="javascript:;" rel="nofollow">Hlcomputer</a> - Cung cấp bởi <a href="https://www.bizweb.vn/?utm_source=site-khach-hang&utm_campaign=referral_bizweb&utm_medium=footer&utm_content=cung-cap-boi-bizweb">Bizweb</a>
                        </div>
                    </div>
                </footer>

                <style>
                    #floating-phone {     top: initial !important;display: none; position: fixed; left: 10px; bottom: 60px; height: 50px; width: 50px; background: #ff4a39 url(http://callnowbutton.com/phone/callbutton01.png) center / 30px no-repeat; z-index: 99; color: #FFF; font-size: 35px; line-height: 55px; text-align: center; border-radius: 10px; -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.5); -moz-box-shadow: 0 2px 5px rgba(0,0,0,.5); box-shadow: 0 2px 5px rgba(0,0,0,.5); }
                    #floating-phone:hover{
                        background: #ff4a39 center / 30px no-repeat;
                        border-radius: 10px;
                        font-size: 20px;
                        line-height: 50px;
                        width: 250px;
                        text-align: center;
                        color: #fff;
                        -webkit-transition: all 0.2s ease-out;
                        -moz-transition: all 0.2s ease-out;
                        -o-transition: all 0.2s ease-out;
                        -ms-transition: all 0.2s ease-out;
                        transition: all 0.2s ease-out;
                    }
                    #floating-phone:hover:before{
                        content: 'Hotline: 0983549193 ';	
                    }

                    @media (max-width: 1400px) { #floating-phone { display: block; } }

                </style>

                <a href="tel:0983549193" title="Gọi 0983549193" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);" id="floating-phone">

                    <i class="uk-icon-phone"></i>
                </a>
                <script src='<?php echo SITE_ROOT ?>js/owl.carousel.min.js?1524124143478' type='text/javascript'></script> 
                <script src='<?php echo SITE_ROOT ?>js/jquery.mmenu.all.min.js?1524124143478' type='text/javascript'></script> 
                <script src='<?php echo SITE_ROOT ?>js/jquery.mousewheel-3.0.6.pack.js?1524124143478' type='text/javascript'></script> 
                <script src='<?php echo SITE_ROOT ?>js/jquery.fancybox.pack.js?1524124143478' type='text/javascript'></script> 
                <script src='<?php echo SITE_ROOT ?>js/jquery.fakecrop.js?1524124143478' type='text/javascript'></script> 
                <script src='<?php echo SITE_ROOT ?>js/hammer.min.js?1524124143478' type='text/javascript'></script> 
                <script src='//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4' type='text/javascript'></script>
                <script src='<?php echo SITE_ROOT ?>js/cs.script.js?1524124143478' type='text/javascript'></script>
                <script src='//bizweb.dktcdn.net/assets/themes_support/option-selectors.js?4' type='text/javascript'></script>
                <script src='<?php echo SITE_ROOT ?>js/scripts.js?1524124143478' type='text/javascript'></script>
                
            </div>
        </div>

    </body>
</html>