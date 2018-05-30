<div class="catalog">
    <div class="catalog__title">
        <h2><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</h2>
    </div>
    <div class="catalog__bg">
        <?php
        wp_nav_menu(array(
            'menu_class' => 'catalog__list',
            'container' => 'ul',
            'theme_location' => 'sidebar-menu'
        ))
        ?>
<!--        <ul class="catalog__list">
            <li class="catalog__item" >
                <a href="/laptop-game-do-hoa" title="Laptop Game & Đồ Họa">


                    <span class="catalog__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-3.png?1524124143478" alt="Laptop Game & Đồ Họa" class="icon-old" />
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-hover3.png?1524124143478" alt="Laptop Game & Đồ Họa" class="icon-even" />
                    </span>

                    <span>Laptop Game & Đồ Họa</span>

                </a>
            </li>
            <li class="catalog__item" >
                <a href="/danh-muc-laptop" title="Danh mục Laptop">


                    <span class="catalog__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-3.png?1524124143478" alt="Danh mục Laptop" class="icon-old" />
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-hover3.png?1524124143478" alt="Danh mục Laptop" class="icon-even" />
                    </span>

                    <span>Danh mục Laptop</span>

                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
                <ul class="catalog-sub">

                    <li class="catalog-sub__item">
                        <a href="/laptop-dell" class="catalog-sub__link">Laptop Dell</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-asus" class="catalog-sub__link">Laptop Asus</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-hp" class="catalog-sub__link">Laptop HP</a>
                    </li>



                    <li class="catalog-sub__item">
                        <a href="/laptop-lenovo" class="catalog-sub__link">Laptop Lenovo</a>
                    </li>



                    <li class="catalog-sub__item">
                        <a href="/laptop-acer" class="catalog-sub__link">Laptop Acer</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-toshiba" class="catalog-sub__link">Laptop Toshiba</a>
                    </li>


                </ul>
            </li>

            <li class="catalog__item" >
                <a href="/macbook" title="Macbook">


                    <span class="catalog__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-3.png?1524124143478" alt="Macbook" class="icon-old" />
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-hover3.png?1524124143478" alt="Macbook" class="icon-even" />
                    </span>

                    <span>Macbook</span>

                </a>
            </li>

            <li class="catalog__item" >
                <a href="/macbook" title="Macbook">
                    <span class="catalog__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-3.png?1524124143478" alt="Macbook" class="icon-old" />
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-cate-hover3.png?1524124143478" alt="Macbook" class="icon-even" />
                    </span>

                    <span>Linh kiện - Thiết bị  <i class="fa fa-angle-right" aria-hidden="true"></i></span>

                </a>
                <ul class="catalog-sub">

                    <li class="catalog-sub__item">
                        <a href="/laptop-dell" class="catalog-sub__link">Loa máy tính</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-asus" class="catalog-sub__link">Chuột</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-hp" class="catalog-sub__link">Các thiết bị tản nhiệt</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-hp" class="catalog-sub__link">Các thiết bị lưu trữ</a>
                    </li>



                    <li class="catalog-sub__item">
                        <a href="/laptop-lenovo" class="catalog-sub__link">Laptop Lenovo</a>
                    </li>



                    <li class="catalog-sub__item">
                        <a href="/laptop-acer" class="catalog-sub__link">Laptop Acer</a>
                    </li>
                    <li class="catalog-sub__item">
                        <a href="/laptop-toshiba" class="catalog-sub__link">Laptop Toshiba</a>
                    </li>


                </ul>
            </li>-->

<!--            <script type="text/javascript">
                $(document).ready(function () {
                    $('.catalog-more').on('click', function () {
                        var $this = $(this);
                        var item = $('.catalog__list .catalog__item');
                        item.each(function () {
                            if ($(this).is(":hidden")) {
                                $(this).show().addClass('show');
                                $this.html('<a href="javascript:;"><span class="catalog__icon"><i class="fa fa-minus-square" aria-hidden="true"></i></span><span>Thu gọn</span></a>');
                            } else if ($(this).hasClass('show')) {
                                $(this).hide().removeClass('show');
                                $this.html('<a href="javascript:;"><span class="catalog__icon"><i class="fa fa-plus-square" aria-hidden="true"></i></span><span>Xem thêm</span></a>');
                            }
                        });
                    });
                    $('.catalog__list .catalog__item').on('mouseenter', function () {
                        if ($(this).find('.catalog-sub').length > 0) {
                            $('.catalog__list').css('overflow', 'hidden');
                        }
                    });
                    $('.catalog__list .catalog__item').on('mouseleave', function () {
                        $('.catalog__list').css('overflow', 'overlay');
                    });
                });
            </script>-->
        </ul>
    </div>
</div>