<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
        $price = get_field('price');
        $price = $price ? number_format($price) . '₫' : 'Liên hệ';
        $branch_terms = wp_get_post_terms(get_the_ID(), 'product_vendors');
        $cat_terms = wp_get_post_terms(get_the_ID(), 'product_cat');
        $branch_term = !empty($branch_terms) ? $branch_terms[0] : FALSE;
        $hotline_main = get_field('hotline_main', PAGE_HOME);
        $images = get_field('slide');
        ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <!--<a title="Laptop Dell" href="laptop-dell">Laptop Dell</a><i class="fa fa-angle-right" aria-hidden="true"></i>-->
                    <?php the_title() ?>
                </div>
            </div>
        </div>

        <div itemscope itemtype="http://schema.org/Product" class="product-detail clearfix">
            <meta itemprop="url" content="<?php the_permalink() ?>">
            <meta itemprop="brand" content="Dell">
            <meta itemprop="name" content="<?php the_title() ?>">
            <meta itemprop="image" content="<?php echo get_the_post_thumbnail_url() ?>">
            <section class="product">
                <div class="container">
                    <div class="row">
                        <div id="product__view" class="product__view col-xs-12 clearfix">
                            <div class="row">
                                <div class="product__view__image col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="product__view__image--list">
                                        <ul class="bxslider">
                                            <?php
                                            if (!empty($images)):
                                                foreach ($images as $image):
                                                    ?>
                                                    <li>
                                                        <img class="cloudzoom" id = "zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" 
                                                             src="<?php echo $image['sizes']['large'] ?>" 
                                                             alt="<?php the_title() ?>" />
                                                    </li>
                                                    <?php
                                                endforeach;
                                            endif;
                                            ?>

                                        </ul>
                                        <div style="margin: 0 -7px">
                                            <div id="bx-pager" class="bx-pager owl-carousel">
                                                <?php
                                                if (!empty($images)):
                                                    foreach ($images as $image):
                                                        ?>
                                                        <a data-slide-index="0" href="">
                                                            <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php the_title() ?>" />
                                                        </a>

                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="product__view__content col-lg-7 col-md-7 col-sm-12 col-xs-12" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                                    <link itemprop="availability" href="http://schema.org/InStock">
                                    <meta itemprop="priceCurrency" content="VND">
                                    <meta itemprop="price" content="<?php echo $price ?>">

                                    <div class="product__view__name">
                                        <h1><?php the_title() ?></h1>
                                    </div>
                                    <div class="product__view__price">
                                        <div class="price-box">



                                            <p class="product__view__price--special"><span class="price-label">Giá bán </span><span class="price"><?php echo $price ?></span></p>



                                        </div>
                                    </div>
                                    <div class="product__view__content--short-description">
                                        <p>Thương hiệu: <a href='<?php echo get_term_link($branch_term->term_id) ?>' title='Dell'><?php echo $branch_term->name ?></a></p>
                                        <p>Tình trạng: <span class="product-available"><?php the_field('status') ?></span></p>
                                    </div>

                                    <div class="product__view__content--product-description">
                                        <h4>Mô tả:</h4>
                                        <?php the_excerpt() ?>
                                    </div>

                                    <div class="product__view__content--actions clearfix">
                                        <div class="actions-qty">
                                            <div style="margin-top: 15px" class="actions-qty__button">

                                                <buttion class="hotline detail-hotline" aria-label="Hotline" title="Holine: 0983549193" onClick="window.location.href = 'tel:<?php echo $hotline_main ?>'">
                                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: <?php echo $hotline_main ?></buttion>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__view__content--social">
                                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b643a9486d818e"></script> 
                                        <div class="addthis_native_toolbox"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__content col-xs-12 clearfix">
                            <div class="product__content--tab">
                                <ul id="product-detail-tab" class="product__content--tab-list">
                                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Thông tin sản phẩm</a></li>
                                    <li class=""><a href="#product_tabs_custom_1 " data-toggle="tab">Ảnh sản phẩm</a></li>

                                </ul>
                                <div id="productTabContent" class="product__content--tab__content">
                                    <div class="tab-content fade in active" id="product_tabs_description">
                                        <?php the_content() ?>
                                    </div>
                                    <div class="tab-content fade" id="product_tabs_custom_1">
                                        <?php
                                        $images = get_field('slide');
                                        if ($images):
                                            foreach ($images as $image):
                                                ?>
                                                <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
                                                <hr/>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </div>

                                </div>
                            </div>

                            <div class="product__content--related">
                                <div class="general__title product__content--related-title">
                                    <h2><span>Sản phẩm liên quan</span></h2>
                                </div>
                                <div class="related-slide">
                                    <div class="product__content--related-slide owl-carousel clearfix">
                                        <?php
                                        $term_relation = (array_map(function($obj) {
                                                    return $obj->term_id;
                                                }, $cat_terms));
                                        $k = array_search(CAT_LAPTOP, $term_relation);
                                        unset($term_relation[$k]);
                                        $query_param = array(
                                            'post_type' => 'product',
                                            
                                            'orderby' => 'id',
                                            'order' => 'ASC',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field' => 'id',
                                                    'terms' => $term_relation, // Where term_id of Term 1 is "1".
                                                    'operator' => "IN"
                                                )
                                            )
                                        );
                                        $my_query = new WP_Query($query_param);
                                        if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                                                $price = get_field('price');
                                                $price = $price ? number_format($price) . '₫' : 'Liên hệ';
                                                ?>
                                                <div class="item">
                                                    <div class="product-item__grid">
                                                        <div class="product-item__thumb">
                                                            <a href="<?php the_permalink() ?>">
                                                                <?php  the_post_thumbnail('product-thumb') ?>
                                                            </a>
                                                            <div class="product-item__actions hidden-xs">
                                                                <!--                                                                <button data-handle="dell-xps-9360-coi7-7500u-ram-8g-ssd-256g-man-13-3-fhd-like-new" class="button quick-view" >
                                                                                                                                    Xem nhanh
                                                                                                   a                             </button>-->

                                                                <a href="<?php the_permalink() ?>" class="button btn-cart add_to_cart"  title="Mua hàng"><span>Chi tiết</span></>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__content">
                                                            <h3 class="product-item__title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                                            <div class="product-item__price"> 
                                                                <p class="product-item__price__regular"><?php echo $price ?></p>
                                                            </div>
                                                        </div>
                                                    </div>                  
                                                </div>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>