<?php
get_header();
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>
            Laptop Toshiba
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
                    <h1><span>Laptop Toshiba</span></h1>
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
                            $query_param = array(
                                'post_type' => 'product',
                                'orderby' => 'id',
                                'order' => 'ASC',
                            );
                            $my_query = new WP_Query($query_param);
                            if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                                    ?>
                                    <div class="item col-md-3 col-sm-3 col-xs-6">

                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/toshiba-tecra-r950-core-i5-3320m-4gb-ram-320gb-hdd-intel-hd-graphics" style="width: 181px; height: 181px; position: relative;">
                                                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/256/244/products/22323065-1450556518397221-408197358-n.jpg?v=1507271175147" alt="Toshiba Tecra R950 Core i5-3320M ,4GB RAM, 320GB HDD, Intel HD Graphics" height="135px" style="display: inline; position: absolute; top: 23px; left: 0px; height: 135px; width: 181px;" width="181px" class="fc-init">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="toshiba-tecra-r950-core-i5-3320m-4gb-ram-320gb-hdd-intel-hd-graphics" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants" id="product-actions-13570465" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="13570465">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng" title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>  

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/toshiba-tecra-r950-core-i5-3320m-4gb-ram-320gb-hdd-intel-hd-graphics" title="Toshiba Tecra R950 Core i5-3320M ,4GB RAM, 320GB HDD, Intel HD Graphics">Toshiba Tecra R950 Core i5-3320M ,4GB RAM, 320GB HDD, Intel HD Graphics</a></h3>


                                                <div class="product-item__price"> 

                                                    <p class="product-item__price__regular">5.000.000₫</p>

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
<!--<section class="section-page bg-periglacial-blue ">
    <div class="range range-30">
        <div class="cell-md-2"></div>
        <div class="cell-md-12">
            <div class="shell ">
                <div class="page-content">
                    <div class="cell-xs-12">
                        <h2></h2>
                    </div>
                    <div class="cell-xs-12">
                        <div class="range range-30 blog">
                           
                        </div>
                    </div>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>
</section>-->
<?php get_footer(); ?>