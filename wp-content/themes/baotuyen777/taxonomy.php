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

                <div id="sticky-wrapper" class="sticky-wrapper" style="height: 1406px;"><div class="sidebar-collection" style="width: 263px;">
                        <?php get_sidebar() ?>
                        <div id="collection-filters-container"><span class="cf-label cf-title">Khoảng giá</span><span class="cf-options-container"><label><input name="cf-radios-0" class="cf-radio" type="radio" value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Giá&quot;,&quot;values&quot;:&quot;5000000, 10000000&quot;}"> <span>Giá từ 5.000.000₫ đến 10.000.000₫</span></label></span><style> #collection-filters-container{width:100%} .well{background-color:#f5f5f5 !important; border: 1px solid #e3e3e3!important;} .slider-label{color: #333333!important;} .ui-widget-header{background:#e9e9e9 !important;} .ui-widget-content{border: 1px solid #c5c5c5 !important;}  .ui-widget-content .ui-state-active{border: 1px solid #007fff !important;background: #007fff !important;} #collection-filters-container .cf-title{color:#0d7dbd; font-size: 15px;} </style></div>

                        <div class="sidebar__module sidebar-adv">
                            <a href="#">
                                <img src="//bizweb.dktcdn.net/100/256/244/themes/589543/assets/sidebar-adv-1.jpg?1524124143478" alt="Cklaptopvn">
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
//                            $query_param = array(
//                                'post_type' => 'product',
//                                'orderby' => 'id',
//                                'order' => 'ASC',
//                            );
//                            $my_query = new WP_Query($query_param);
                            if (have_posts()): while (have_posts()): the_post();
                                    ?>
                                    <div class="item col-md-3 col-sm-3 col-xs-6">

                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="<?php echo get_permalink() ?>" >
                                                    <?php the_post_thumbnail('product-thumb') ?>
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="toshiba-tecra-r950-core-i5-3320m-4gb-ram-320gb-hdd-intel-hd-graphics" class="button quick-view">
                                                        Xem nhanh
                                                    </button>
                                                    <a class="button quick-view" href="<?php echo get_permalink() ?>"  title="Chi tiết"><span>Chi tiết</span></a>
                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/toshiba-tecra-r950-core-i5-3320m-4gb-ram-320gb-hdd-intel-hd-graphics" title="Toshiba Tecra R950 Core i5-3320M ,4GB RAM, 320GB HDD, Intel HD Graphics">Toshiba Tecra R950 Core i5-3320M ,4GB RAM, 320GB HDD, Intel HD Graphics</a></h3>
                                                <div class="product-item__price"> 
                                                    <p class="product-item__price__regular"><?php echo number_format(get_field('price')) ?>₫</p>
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