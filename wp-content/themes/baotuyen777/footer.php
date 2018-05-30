<?php
$facebook = get_field('facebook', PAGE_HOME);
$hotline_main = get_field('hotline_main', PAGE_HOME);
$youtube = get_field('youtube', PAGE_HOME);
$google = get_field('google', PAGE_HOME);
$twitter = get_field('twitter', PAGE_HOME);
?>

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
                        <p class="home-policy__item--description">Hotline : <?php echo $hotline_main ?> </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-12 footer__col">
                <h4 class="footer__col--title">Thông tin</h4>
                <?php
                wp_nav_menu(array(
                    'menu' => 'menu-footer',
                    'menu_class' => 'footer__col--list',
                    'container' => 'ul',
                ))
                ?>
            </div>
            <!--            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                            <h4 class="footer__col--title">Hướng dẫn chính sách</h4>
                            <ul class="footer__col--list">
            
                                <li><a href="/huong-dan-mua-hang">Hướng dẫn mua hàng</a></li>
            
                                <li><a href="/huong-dan-thanh-toan">Hướng dẫn thanh toán</a></li>
            
                                <li><a href="/huong-dan-van-chuyen">Hướng dẫn vận chuyển</a></li>
            
                                <li><a href="/huong-dan-van-chuyen-1">Chính sách bảo hành</a></li>
            
                                <li><a href="/chinh-sach-doi-tra-hang">Chính sách đổi trả</a></li>
            
                                <li><a href="/chinh-sach">Chính sách bảo mật thông tin</a></li>
            
                            </ul>
                        </div>-->
            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                <?php echo get_field('bank', PAGE_HOME) ?>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer__col">
                <?php echo get_field('contact', PAGE_HOME) ?>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12 footer__col">

                <h4 class="footer__col--title">Facebook</h4>
                <div class="">
                    <div class="">
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=631942543575730";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="<?php echo $facebook ?>" data-tabs="timeline" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="<?php echo $facebook ?>" class="fb-xfbml-parse-ignore">
                                <a href="<?php echo $facebook ?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container text-center">
            © Copyright 2018 <a href="javascript:;" rel="nofollow">Hlcomputer</a>
            <div class="social">
                <a class="fa fa-facebook" target="_blank" href="<?php echo $facebook ?>"></a>
                <a class="fa fa-google-plus" target="_blank" href="<?php echo $google ?>"></a>
                <a class="fa fa-twitter" target="_blank" href="<?php echo $twitter ?>"></a>
                <a class="fa fa-youtube" target="_blank" href="<?php echo $youtube ?>"></a>
            </div>
        </div>
    </div>
    <span class="hotline-fix">Hotline: <span><a href="tel: <?php echo $hotline_main ?>"><?php echo $hotline_main ?></a> </span></span>
</footer>
<!--
<style>
    #floating-phone {     top: initial !important;display: none; position: fixed; left: 10px; bottom: 60px; height: 50px; width: 50px; background: #ff4a39 url(http://callnowbutton.com/phone/callbutton01.png) center / 30px no-repeat; z-index: 99; color: #FFF; font-size: 35px; line-height: 55px; text-align: center; border-radius: 10px; -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.5); -moz-box-shadow: 0 2px 5px rgba(0,0,0,.5); box-shadow: 0 2px 5px rgba(0,0,0,.5); }
    #floating-phone:hover{
        background: #ff4a39 center / 30px no-repeat;
        border-radius: 10px;
        font-size: 20px;
        line-height: 50px;
        width: 250px;
        text-align: center;
        color: #fff;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    #floating-phone:hover:before{
        content: 'Hotline: 0985358618 ';	
    }

    @media (max-width: 1400px) { #floating-phone { display: block; } }

</style>-->

<!--<a href="tel:0985358618" title="Gọi 0985358618" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);" id="floating-phone">

    <i class="uk-icon-phone"></i>
</a>-->
<script src='<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js?1524124143478' type='text/javascript'></script> 
<script src='<?php echo get_template_directory_uri() ?>/js/jquery.mmenu.all.min.js?1524124143478' type='text/javascript'></script> 
<script src='<?php echo get_template_directory_uri() ?>/js/jquery.mousewheel-3.0.6.pack.js?1524124143478' type='text/javascript'></script> 
<script src='<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.pack.js?1524124143478' type='text/javascript'></script> 
<!--<script src='<?php echo get_template_directory_uri() ?>/js/jquery.fakecrop.js?1524124143478' type='text/javascript'></script>--> 
<!--<script src='<?php echo get_template_directory_uri() ?>/js/hammer.min.js?1524124143478' type='text/javascript'></script>--> 
<!--<script src='//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4' type='text/javascript'></script>-->
<!--<script src='<?php echo get_template_directory_uri() ?>/js/cs.script.js?1524124143478' type='text/javascript'></script>-->
<!--<script src='//bizweb.dktcdn.net/assets/themes_support/option-selectors.js?4' type='text/javascript'></script>-->
<script src='<?php echo get_template_directory_uri() ?>/js/scripts.js?1524124143478' type='text/javascript'></script>

</div>
</div>
<?php wp_footer() ?>
</body>
</html>