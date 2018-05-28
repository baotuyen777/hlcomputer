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
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/home-slider-1.jpg?1524124143478" alt="slide 1" />
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/banner.jpg" alt="slide 2" />
                </a>
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
//                        var_dump($products);

                        if (!empty($products)):
                            $i = 0;
                            $count = count($products);
                            foreach ($products as $product):
                                $i++;
//                                var_dump($i);
//                                var_dump($product);
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
                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/img/rhs-banner-1.jpg?1524124143478" alt="latop dell latitude e6420" />
                            </a>
                        </div>
                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/img/rhs-banner-2.jpg?1524124143478" alt="latop dell latitude e6430" />
                            </a>
                        </div>
                        <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/rhs-banner-3.jpg?1524124143478" alt="Samsung Galaxy Note 6" />
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
                <?php
                $terms = get_terms(array('taxonomy' => 'product_cat', 'parent' => 4));
//                var_dump($terms);die;
                if (!empty($terms)):
                    foreach ($terms as $term):
                        ?>
                        <li class="cate-list__item">
                            <a href="<?php echo get_term_link($term->term_id)?>" class="cate-list__link"><?php echo ($term->name)?></a>
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

                                        <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                                    <button class="button btn-cart add_to_cart" aria-label="Chi tiết" title="Chi tiết"><span>Chi tiết</span></button>

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
                    <img src="<?php echo get_template_directory_uri() ?>/img/home-banner-center.jpg?1524124143478" alt="banner" />
                </a>
            </div>
        </div>
    </div>
</section>





<!--            <section class="three-product">
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
            </section>-->


<section class="home-blog hidden-xs">
    <div class="container">
        <div class="general__title home-blog__title">
            <h2>Tin tức</h2>
        </div>
        <hr/>
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
                        <p class="home-policy__item--description">Hotline : 0985358618 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer() ?>