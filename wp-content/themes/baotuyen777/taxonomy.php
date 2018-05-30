<?php
get_header();
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>
            <?php echo single_term_title() ?>
        </div>
    </div>
</div>
<section id="collection" class="collection">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 sidebar hidden-sm hidden-xs">

                <div id="sticky-wrapper" class="sticky-wrapper" ><div class="sidebar-collection" style="width: 263px;">
                        <?php get_sidebar() ?>

                        <div class="sidebar__module sidebar-adv">
                            <a href="#">
                                <?php
                                $image = get_field('adv_right', PAGE_HOME);
                                if ($image):
                                    ?>
                                    <img src="<?php echo $image['url'] ?>"/>
                                    <?php
                                endif;
                                ?>
                            </a>

                        </div>

                    </div></div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="collection__title">
                    <h1><span><?php echo single_term_title() ?></span></h1>
                    <div id="sort-by" class="hidden-xs">
                        <label class="left hidden-xs" for="sort-select">Sắp xếp theo: </label>
                        <form class="form-inline form-viewpro">
                            <div class="form-group">
                                <select class="sort-by-script" id="sort-select">
                                    <option value="default">Mặc định</option>
                                    <option value="price-asc">Giá tăng dần</option>
                                    <option value="price-desc">Giá giảm dần</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="collection-filter">
                    <div class="category-products clearfix">
                        <div class="products-grid clearfix">
                            <?php
                            if (have_posts()): while (have_posts()): the_post();
                                    ?>
                                    <div class="item col-md-3 col-sm-3 col-xs-6">

                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="<?php echo get_permalink() ?>" >
                                                    <?php the_post_thumbnail('product-thumb') ?>
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="<?php the_title() ?>" class="button quick-view">
                                                        Xem nhanh
                                                    </button>
                                                    <a class="button quick-view" href="<?php echo get_permalink() ?>"  title="Chi tiết"><span>Chi tiết</span></a>
                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                                <div class="product-item__price"> 
                                                    <p class="product-item__price__regular"><?php
                                                        $price = get_field('price');
                                                        echo $price ? number_format($price) . '₫' : "Liên hệ"
                                                        ?></p>
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

<?php get_footer(); ?>