<?php
/**
 * Template Name: Contact
 */
get_header();
if (have_posts()): while (have_posts()): the_post();
        ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>

                    Liên hệ

                </div>
            </div>
        </div>
        <section id="page-contact" class="page page-contact">
            <div class="container">
                <?php the_content() ?>
                <!--                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="contact-info">
                <?php // echo get_field('contact', PAGE_HOME) ?>
                                                                    <div class="item-info">
                                                                        <div class="item-info__icon">
                                                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                        </div>
                                                                        <p>Email: <a href="mailto: info@hlcomputer.vn"> info@hlcomputer.vn</a></p>
                                                                    </div>
                                                                    <div class="general__title">
                                                                        <h2>Gửi ý kiến</h2>
                                                                    </div>
                                                                </div>
                                     
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 contact-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.566527455653!2d105.74715515048035!3d21.05002349235914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454e474cba119%3A0x2c79621f45e64082!2zVsSDbiBUaeG6v24gRMWpbmcsIMSQw6xuaCBRdcOhbiwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1527681542670" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>-->
            </div>
        </section>
        <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>