<?php
/**
 * Template name: video
 */
get_header();
if (have_posts()): while (have_posts()): the_post();
        ?>
        <div class="page-title">
            <div class="page-title-content">
                <div class="shell">
                    <h1>Clip CR MAN Coffee</h1>
                </div>
            </div>
        </div>
        <section class="section-page bg-periglacial-blue ">
            <div class="range range-30">
                <div class="cell-md-2"></div>
                <div class="cell-md-12">
                    <div class="shell ">
                        <div class="page-content">
                            <div class="cell-xs-12">
                                <div class="range range-30">
                                    <?php
                                    $query_param = array(
                                        'post_type' => 'video',
                                        'orderby' => 'id',
                                        'order' => 'ASC',
                                    );
                                    $my_query = new WP_Query($query_param);
                                    if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                                            $video = get_field('video');
                                            ?>
                                            <div class="cell-sm-6 cell-md-4 height-fill">
                                                <div class="thumbnail-card1">
                                                    <?php echo $video ?>
                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <br/><br/>
                        </div>
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
