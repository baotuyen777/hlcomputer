<?php
/**
 * Template Name: Contact
 */
get_header();
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
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <?php echo get_field('contact', PAGE_HOME) ?>
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
                <div class="contact-form">
                    <form accept-charset='UTF-8' action='/contact' id='contact' method='post'>
                        <input name='FormType' type='hidden' value='contact' />
                        <input name='utf8' type='hidden' value='true' />


                        <fieldset>
                            <input name="form_type" type="hidden" value="contact"><input name="utf8" type="hidden" value="?">               
                            <div class="customer-name">
                                <div class="input-box">
                                    <label class="hidden" for="name">Họ tên</label>
                                    <input type="text" size="35" required id="name" class="input-text" placeholder="Họ tên"  value=""name="contact[Name]">
                                </div>
                                <div class="input-box">        
                                    <label class="hidden" for="email">Email</label>
                                    <input type="email" size="35" required id="email" placeholder="Email" value="" class="input-text" name="contact[email]">
                                </div>
                            </div>
                            <div style="float:none" class="">
                                <label class="hidden" for="comment">Nội dung</label>
                                <textarea name="contact[Body]" required id="comment" title="Nội dung" placeholder="Nội dung" class="input-text" cols="150" rows="3"></textarea>                        
                            </div>
                        </fieldset>
                        <div class="buttons-set">
                            <button type="submit" title="Submit" class="button submit" aria-label="Gửi"> <span> Gửi </span> </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.566527455653!2d105.74715515048035!3d21.05002349235914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454e474cba119%3A0x2c79621f45e64082!2zVsSDbiBUaeG6v24gRMWpbmcsIMSQw6xuaCBRdcOhbiwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1527681542670" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <script type="text/javascript">
                    (jQuery)(document).ready(function ($) {
                        if ($('#map_canvas').length) {
                            $('#map_canvas').gMap({
                                zoom: 16,
                                scrollwheel: true,
                                maptype: 'ROADMAP',
                                markers: [
                                    {
                                        address: '89 Phố Vọng, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội',
                                        latitude: 20.998605,
                                        longitude: 105.8400283,
                                        html: '_address'
                                    }
                                ]
                            });
                        }
                    });
                </script>
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
                        <p class="home-policy__item--description">Hotline : 0983549193 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>