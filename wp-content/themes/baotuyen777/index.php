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
                                        <?php echo get_the_post_thumbnail($post->ID,'home_blog') ?>
                                    </a>
                                </div>
                                <div class="article-item__content">
                                    <h3 class="article-item__title">
                                        <a href="<?php echo get_permalink($post->ID) ?>" title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a></h3>
                                    <div class="article-item__date"><?php echo $post->post_date ?></div>
                                    <div class="article-item__summary"> <?php echo $post->post_excerpt?></div>
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
<?php get_footer() ?>