<?php
/**
 * Template name: News
 */
get_header()
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>
            Tin tức
        </div>
    </div>
</div>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <meta itemprop="name" content="Tin tức"> 
                    <meta itemprop="description" content=""> 
                    <meta itemprop="image" content="//bizweb.dktcdn.net/100/256/244/themes/589543/assets/logo.png?1524124143478">
                    <div class="col-lg-3 col-md-4 sidebar hidden-sm hidden-xs">
                        <?php get_sidebar() ?>
                    </div>
                    <script src="//bizweb.dktcdn.net/100/256/244/themes/589543/assets/sticky-plugin.js?1524124143478" type="text/javascript"></script> 
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 blog__list">
                        <div class="blog__title">
                            <h1><span>Tin tức</span></h1>
                        </div>

                        <div class="category-blog clearfix">
                            <div class="row">
                                <?php
                                $query_param = array(
                                    'post_type' => 'post',
                                    'orderby' => 'id',
                                    'order' => 'ASC',
                                );
                                $my_query = new WP_Query($query_param);
                                if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                                        ?>
                                        <div class="blog__list--item col-xs-12">
                                            <div class="article-item-large clearfix">
                                                <div class="col-md-4 col-sm-5 col-xs-12 article-item__thumb">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php the_post_thumbnail('home_blog') ?>
                                                    </a>
                                                </div>
                                                <div class="col-md-8 col-sm-7 col-xs-12 article-item__content">
                                                    <h3 class="article-item__title"><a href="/hp-ra-mat-mau-pavilion-14-va-15-the-he-moi">HP ra mắt mẫu Pavilion 14 và 15 thế hệ mới</a></h3>
                                                    <div class="article-item__date"><?php the_date() ?></div>
                                                    <div class="article-item__summary"><?php the_excerpt() ?></div>
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
    </div>
</section>
<?php
get_footer()?>