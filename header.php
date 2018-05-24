
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