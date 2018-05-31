<?php
/**
 * Template name: Home
 */
get_header();
?>
<h1 class="hidden">Hlcomputer</h1>
<section id="homepage-slider" class="slider theme--color--white">
    <div class="container">
        <div class="bg-slider">
            <div id="slider" class="theme-default">
                <?php
                $images = get_field('slider');
                if ($images):
                    foreach ($images as $image):
                        ?>
                        <a href="#">
                            <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<section class="three-module">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                <?php get_sidebar() ?>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                <div class="product-topseller" id="topseller">
                    <div class="home__title product-topseller__title">
                        <h2>Sản phẩm bán chạy</h2>
                    </div>
                    <div class="slider-product-list owl-carousel">
                        <?php
                        $products = get_field('hot_product', PAGE_HOME);
                        if (!empty($products)):
                            $i = 0;
                            $count = count($products);
                            foreach ($products as $product):
                                $i++;
                                if ($i == 1 || $i % 2 != 0):
                                    ?>
                                    <div class="item">
                                    <?php endif; ?>
                                    <div class="product-item__mini clearfix">
                                        <div class="product-item__thumb">
                                            <a href="<?php echo get_permalink($product->ID) ?>" >
                                                <?php echo get_the_post_thumbnail($product->ID) ?>
                                            </a>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="<?php echo get_permalink($product->ID) ?>" title="<?php echo $product->post_title ?>"><?php echo $product->post_title ?></a></h3>
                                            <div class="product-item__price"> 
                                                <p class="product-item__price__regular"><?php
                                                    $price = get_field('price', $product->ID);
                                                    echo $price ? number_format(get_field('price', $product->ID)) . '₫' : 'Liên hệ';
                                                    ?></p>
                                            </div>

                                            <div class="product-item__actions">
                                                <a class="button btn-cart add_to_cart" title="Chi tiết"  href="<?php echo get_permalink($product->ID) ?>">
                                                    <span>Chi tiết</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($i % 2 == 0 || $i == $count): ?>

                                    </div>  <!-- enditem -->
                                <?php endif; ?>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-md hidden-sm hidden-xs">
                <div class="three-module__banner_right">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/home-banner-right.jpg?1524124143478" alt="banner" />
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
                        <?php
                        $images = get_field('adv_3_column');
                        if ($images):
                            foreach ($images as $image):
                                ?>
                                <div class="three-banner__item col-md-4 col-sm-4 col-xs-12">
                                    <a href="#">
                                        <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
                                    </a>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
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
                <?php
                $terms = get_terms(array('taxonomy' => 'product_cat', 'parent' => CAT_LAPTOP));
//                var_dump($terms);die;
                if (!empty($terms)):
                    foreach ($terms as $term):
                        ?>
                        <li class="cate-list__item">
                            <a href="<?php echo get_term_link($term->term_id) ?>" class="cate-list__link"><?php echo ($term->name) ?></a>
                        </li>
                        <?php
                    endforeach;
                endif;
                ?>
            </ul>
        </div>
        <div class="product-home__slide">
            <div class="slider-product-list owl-carousel">
                <?php
                $query_param = array(
                    'post_type' => 'product',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => CAT_LAPTOP
                        )
                    )
                );
                $my_query = new WP_Query($query_param);
                $i = 0;
                if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();

                        $count = $my_query->post_count;
                        $i++;
                        if ($i == 1 || $i % 2 != 0):
                            ?>
                            <div class="item">
                            <?php endif; ?>
                            <div class="product-item__grid">
                                <div class="product-item__thumb">
                                    <a href="<?php echo get_permalink() ?>">
                                        <?php the_post_thumbnail('product-thumb') ?>
                                    </a>
                                    <div class="product-item__actions hidden-xs">
                                        <button data-handle="dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" class="button quick-view" >
                                            Xem nhanh
                                        </button>

                                        <a class="button btn-cart add_to_cart" href="<?php echo get_permalink() ?>" target="_blank" title="Chi tiết">
                                            <span>Chi tiết</span></a>

                                    </div>
                                </div>
                                <div class="product-item__content">
                                    <h3 class="product-item__title">
                                        <a href="<?php echo get_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                    <div class="product-item__price"> 
                                        <p class="product-item__price__regular"><?php
                                            $price = get_field('price', $product->ID);
                                            echo $price ? number_format(get_field('price', $product->ID)) . '₫' : 'Liên hệ';
                                            ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php if ($i % 2 == 0 || $i == $count): ?>

                            </div>  <!-- enditem -->
                        <?php endif; ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="view__more hidden-xs">
            <a href="<?php echo get_term_link(CAT_LAPTOP) ?>">Xem thêm</a>
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
                <?php
                $query_param = array(
                    'post_type' => 'product',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => CAT_LAPTOPGAME
                        )
                    )
                );
                $my_query = new WP_Query($query_param);
                $i = 0;
                if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();

                        $count = $my_query->post_count;
                        $i++;
                        if ($i == 1 || $i % 2 != 0):
                            ?>
                            <div class="item">
                            <?php endif; ?>
                            <div class="product-item__grid">
                                <div class="product-item__thumb">
                                    <a href="<?php echo get_permalink() ?>">
                                        <?php the_post_thumbnail('product-thumb') ?>
                                    </a>
                                    <div class="product-item__actions hidden-xs">
                                        <button data-handle="dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" class="button quick-view" >
                                            Xem nhanh
                                        </button>

                                        <a class="button btn-cart add_to_cart" href="<?php echo get_permalink() ?>" target="_blank" title="Chi tiết">
                                            <span>Chi tiết</span></a>

                                    </div>
                                </div>
                                <div class="product-item__content">
                                    <h3 class="product-item__title">
                                        <a href="<?php echo get_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                    <div class="product-item__price"> 
                                        <p class="product-item__price__regular"><?php
                                            $price = get_field('price', $product->ID);
                                            echo $price ? number_format(get_field('price', $product->ID)) . '₫' : 'Liên hệ';
                                            ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php if ($i % 2 == 0 || $i == $count): ?>

                            </div>  <!-- enditem -->
                        <?php endif; ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="view__more hidden-xs">
            <a href="<?php echo get_term_link(CAT_LAPTOPGAME) ?>">Xem thêm</a>
        </div>
    </div>
</section>
<!-- end laptopgame -->

<section class="product-hot" id="product-hot">
    <div class="container">
        <div class="home__title product-hot__title">
            <h2>MACBOOK</h2>
        </div>
        <div class="product-home__slide">
            <div class="slider-product-list owl-carousel">
                <?php
                $query_param = array(
                    'post_type' => 'product',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => CAT_MACBOOK
                        )
                    )
                );
                $my_query = new WP_Query($query_param);
                $i = 0;
                if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();

                        $count = $my_query->post_count;
                        $i++;
                        if ($i == 1 || $i % 2 != 0):
                            ?>
                            <div class="item">
                            <?php endif; ?>
                            <div class="product-item__grid">
                                <div class="product-item__thumb">
                                    <a href="<?php echo get_permalink() ?>">
                                        <?php the_post_thumbnail('product-thumb') ?>
                                    </a>
                                    <div class="product-item__actions hidden-xs">
                                        <button data-handle="dell-xps-9360-coi7-8550u-ram-16g-ssd256g-man-3k-cam-ung-like-new" class="button quick-view" >
                                            Xem nhanh
                                        </button>

                                        <a class="button btn-cart add_to_cart" href="<?php echo get_permalink() ?>" target="_blank" title="Chi tiết">
                                            <span>Chi tiết</span></a>

                                    </div>
                                </div>
                                <div class="product-item__content">
                                    <h3 class="product-item__title">
                                        <a href="<?php echo get_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                    <div class="product-item__price"> 
                                        <p class="product-item__price__regular"><?php
                                            $price = get_field('price', $product->ID);
                                            echo $price ? number_format(get_field('price', $product->ID)) . '₫' : 'Liên hệ';
                                            ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php if ($i % 2 == 0 || $i == $count): ?>

                            </div>  <!-- enditem -->
                        <?php endif; ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="view__more hidden-xs">
            <a href="<?php echo get_term_link(CAT_MACBOOK) ?>">Xem thêm</a>
        </div>
    </div>
</section>
<!-- endmacbook -->


<section class="banner-large hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php
                $image = get_field('banner_bottom', PAGE_HOME);
                if ($image):
                    ?>
                    <a href="#">
                        <img src="<?php echo $image['url'] ?>" alt="banner bottom" />
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="home-blog hidden-xs">
    <div class="container">
        <div class="general__title home-blog__title">
            <h2>Tin tức</h2>
        </div>
        <hr/>
        <div class="home-blog__list">
            <div class="row">
                <?php
                $posts = get_field('hot_post', PAGE_HOME);
                if (!empty($posts)):
                    $i = 0;
                    $count = count($posts);
                    foreach ($posts as $post):
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="article-item">
                                <div class="article-item__thumb">
                                    <a href="<?php echo get_permalink($post->ID) ?>">
                                        <?php echo get_the_post_thumbnail($post->ID, 'home_blog') ?>
                                    </a>
                                </div>
                                <div class="article-item__content">
                                    <h3 class="article-item__title">
                                        <a href="<?php echo get_permalink($post->ID) ?>" title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a></h3>
                                    <div class="article-item__date"><?php echo $post->post_date ?></div>
                                    <div class="article-item__summary"> <?php echo $post->post_excerpt ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>


<div id="QuickView" class="modal fade in product-quickview" role="dialog" aria-hidden="false" >
    <script src='<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js?1524124143478' type='text/javascript'></script> 
    <div class="product-quickview__bg modal-dialog">
        <button class="product-quickview__close">X</button>
            <section class="product clearfix">
                <div id="product__view" class="product__view col-xs-12 clearfix">
                    <div class="row">
                        <div class="product__view__image col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <div class="product__view__image--list">
                                <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 359px;"><ul class="bxslider1" style="width: 915%; position: relative; transition-duration: 0s; transform: translate3d(-2304px, 0px, 0px);">


                                            <li style="float: left; list-style: none; position: relative; width: 384px;">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/13872659-mc3.jpg?v=1527652041670" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li class="" style="float: left; list-style: none; position: relative; width: 384px;">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33734883-1703286343124236-6945875970708471808-n.jpg?v=1527652381567" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li style="float: left; list-style: none; position: relative; width: 384px;" class="">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33867165-1703286329790904-494176342917513216-n.jpg?v=1527652382213" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li style="float: left; list-style: none; position: relative; width: 384px;">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33898814-1703286423124228-1584542288808247296-n.jpg?v=1527652382810" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li style="float: left; list-style: none; position: relative; width: 384px;" class="">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33940781-1703286439790893-2545593065838477312-n.jpg?v=1527652383773" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li style="float: left; list-style: none; position: relative; width: 384px;">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33963837-1703286379790899-2117258773432107008-n.jpg?v=1527652384763" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>

                                            <li style="float: left; list-style: none; position: relative; width: 384px;" class="">
                                                <img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/256/244/products/33965049-1703286393124231-6265984597666824192-n.jpg?v=1527652385930" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW" style="user-select: none;">
                                            </li>


                                        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href=""><i class="fa fa-chevron-left" aria-hidden="true"></i></a><a class="bx-next" href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div></div></div>
                                <div style="margin: 0 -7px">
                                    <div id="bx-pager1" class="bx-pager owl-carousel owl-theme" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1148px; left: 0px; display: block; transform: translate3d(-246px, 0px, 0px); transition: all 500ms ease;"><div class="owl-item" style="width: 82px;"><a data-slide-index="0" href="" class="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/13872659-mc3.jpg?v=1527652041670" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="1" href="" class="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33734883-1703286343124236-6945875970708471808-n.jpg?v=1527652381567" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="2" href="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33867165-1703286329790904-494176342917513216-n.jpg?v=1527652382213" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="3" href="" class="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33898814-1703286423124228-1584542288808247296-n.jpg?v=1527652382810" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="4" href="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33940781-1703286439790893-2545593065838477312-n.jpg?v=1527652383773" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="5" href="" class="">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33963837-1703286379790899-2117258773432107008-n.jpg?v=1527652384763" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div><div class="owl-item" style="width: 82px;"><a data-slide-index="6" href="" class="active">
                                                        <img src="//bizweb.dktcdn.net/thumb/small/100/256/244/products/33965049-1703286393124231-6265984597666824192-n.jpg?v=1527652385930" alt="HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW">
                                                    </a></div></div></div>
                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <script>
                            $('.bxslider1').bxSlider({
                                pagerCustom: '#bx-pager1',
                                infiniteLoop: false,
                                nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
                                prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                                onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
                                    $('.active-slide').removeClass('active-slide');
                                    $('.bxslider1>li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
                                    $('#bx-pager1 .owl-wrapper').trigger('owl.goTo', currentSlideHtmlObject);
                                },
                                onSliderLoad: function () {
                                    $('.bxslider1>li').eq(1).addClass('active-slide')
                                },
                            });
                            CloudZoom.quickStart();
                            $.extend($.fn.CloudZoom.defaults, {
                                disableOnScreenWidth: 991
                            });
                            jQuery("#bx-pager1").owlCarousel({
                                items: 4, //10 items above 1000px browser width
                                itemsDesktop: [1024, 4], //5 items between 1024px and 901px
                                itemsDesktopSmall: [900, 4], // 3 items betweem 900px and 601px
                                itemsTablet: [600, 4], //2 items between 600 and 0;
                                itemsMobile: [320, 4],
                                navigation: true,
                                navigationText: ["", ""],
                                slideSpeed: 500,
                                pagination: false
                            });
                        </script>
                        <div class="product__view__content col-lg-7 col-md-7 col-sm-6 col-xs-12" itemprop="offers" itemscope="" itemtype="http://schema.org/AggregateOffer">
                            <div class="product__view__name">
                                <h1><a href="/hp-elitebook-840-g3-core-i7-6600u-ram-8g-ssd-256gb-man-14inch-full-hd-like-new">HP ELITEBOOK 840 G3 CORE I7 6600U /RAM 8G/  SSD 256GB/ MÀN 14INCH FULL HD LIKE NEW</a></h1>
                            </div>
                            <div class="product__view__price">
                                <div class="price-box">



                                    <p class="product__view__price--special"><span class="price-label">Giá bán </span><span class="price">14.900.000₫</span></p>



                                </div>
                            </div>
                            <div class="product__view__content--short-description">
                                <p>Thương hiệu: <a href="/vendors?query=HP" title="HP">HP</a></p>
                                <p>Tình trạng: <span class="product-available">Còn hàng</span></p>
                            </div>

                            <div class="product__view__content--product-description">
                                <h4>Mô tả:</h4>
                                - Phụ kiện đi kèm sạc :Cặp -Chuột theo máy- bàn di chuột- bộ vệ sinh laptop chuyên dụng 4 trong 1.  

                                - Dùng thử test máy 07 ngày không ưng đổi máy khác  

                                - Bảo hành 12 tháng, bảo hành phần...
                            </div>

                            <div class="product__view__content--actions clearfix">

                                        <buttion class="hotline detail-hotline" aria-label="Hotline" title="Holine: 0983549193" onclick="window.location.href = 'tel:0983549193'"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0983549193</buttion>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer() ?>