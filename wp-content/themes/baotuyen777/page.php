<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
        ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <?php the_title() ?>
                </div>
            </div>
        </div>
        <section id="page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="general__title">
                            <h1> <?php the_title() ?></h1>
                        </div>
                        <div class="page__content">
                            <?php the_content() ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>