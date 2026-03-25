<?php

function tzaventura_latest_posts($atts)
{
    $tz_cat = $tz_margin = $tz_des = $tz_tab = $tz_mob = $css = $tz_type = $tz_title = $tz_title_background = $tz_description = $tz_limit = $tz_size = $tz_nav_button = $tz_dots = $tz_auto_play = $tz_timeout = $tz_loop = '';
    extract(shortcode_atts(array(
        'tz_title' => '',
        'tz_title_background' => '',
        'tz_description' => '',
        'tz_limit' => '10',
        'tz_size' => 'large',
        'tz_nav_button' => '',
        'tz_dots' => '',
        'tz_auto_play' => '',
        'tz_timeout' => '3000',
        'tz_loop' => '',
        'tz_type' => '1',
        'css' => '',
        'tz_des' => '3',
        'tz_tab' => '2',
        'tz_mob' => '2',
        'tz_margin' => '30',
        'tz_cat' => '',
    ), $atts));
    ob_start();
    wp_enqueue_style('owl-carousel');
    wp_enqueue_script('resize');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('tz-latest-posts');

    $tz_id = mt_rand();

    if (!empty($tz_cat)) {
        $tz_cats = get_the_category_by_ID($tz_cat);
        $aventura_args = array(
            'numberposts' => $tz_limit,
            'offset' => 0,
            'category_name' => $tz_cats,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );
    }else{
        $aventura_args = array(
            'numberposts' => $tz_limit,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );
    }
    global $post;

    ?>

    <div class="tzElement_Latest_Posts <?php if ($tz_type == '2'): echo 'tz_lp'; endif; ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php if (!empty($tz_title_background)): ?>
            <h2 class="tzElement_Latest_Title_Background">
                <?php echo esc_html($tz_title_background); ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($tz_title)): ?>
            <h3 class="tzElement_Latest_Title">
                <?php echo esc_html($tz_title); ?>
            </h3>
        <?php endif; ?>
        <?php if (!empty($tz_description)): ?>
            <p class="tzElement_Latest_Des">
                <?php echo balanceTags($tz_description); ?>
            </p>
        <?php endif; ?>
        <?php
        $aventura_latest_posts = wp_get_recent_posts($aventura_args);
        ?>
        <?php if ($tz_type == '1'): ?>
        <div class="tzElement_latest_slide_wrapper">
            <?php endif; ?>
            <div id="tzElement_latest_Slide_<?php echo esc_attr($tz_id) ?>" class="tzElement_latest_Slide owl-carousel">
                <?php
                $aventura_count = 1;
                $aventura_i = 1;
                $aventura_total = count($aventura_latest_posts);

                foreach ($aventura_latest_posts as $latest) {

                    $aventura_date_format = get_option('date_format');
                    $tz_post_thumbnail_id = get_post_thumbnail_id($latest["ID"]);
                    $tz_post_thumbnail = wpb_getImageBySize(array(
                        'attach_id' => $tz_post_thumbnail_id,
                        'thumb_size' => $tz_size,
                    ));
                    $tz_image_thumbnail = $tz_post_thumbnail['thumbnail'];
                    $tz_name_categories = get_the_category($latest["ID"])[0]->name;
                    $category_id = get_cat_ID($tz_name_categories);
                    $category_link = get_category_link($category_id);

                    ?>
                    <?php if ($tz_type == '1'): ?>
                        <?php if ($aventura_count % 5 == 1): ?>
                            <div class="tz_latest_item">
                        <?php endif; ?>

                        <div class="tz_latest_item_child tz_latest_item_<?php echo esc_attr($aventura_i) ?>">
                            <div class="tz_latest_item_box">
                                <div class="tz_latest_image">
                                    <?php echo $tz_image_thumbnail; ?>
                                </div>
                                <div class="tz_latest_overlay"></div>
                                <div class="tz_latest_info">
                                    <span class="tz_latest_date">
                                        <?php echo get_the_date($aventura_date_format, $latest["ID"]); ?>
                                    </span>
                                    <h3 class="tz_latest_title"><a
                                                href="<?php echo get_permalink($latest["ID"]); ?>"><?php echo $latest["post_title"]; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php
                    if ($tz_type == '2') { ?>
                        <div class="tz_lastest_post">
                            <a class="img-box" href="<?php echo get_permalink($latest["ID"]); ?>"
                               rel="bookmark"><?php echo $tz_image_thumbnail; ?>
                            </a>
                            <div class="tz_content">
                                <a href="<?php echo get_permalink($latest["ID"]); ?>" rel="bookmark"><?php echo $latest["post_title"]; ?></a>
                                <p class="tz_cat">
                                    <a href="<?php echo $category_link ?>"><?php echo $tz_name_categories; ?></a>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php if ($tz_type == '1'): ?>
                        <?php if ($aventura_count % 5 == 0 || $aventura_count == $aventura_total): ?>
                            </div>
                            <?php $aventura_i = 0;
                        endif;
                        ?>

                        <?php
                        $aventura_count++;
                        $aventura_i++;
                    endif;
                }
                ?>

            </div>

            <script type="text/javascript">
                jQuery(document).ready(function () {
                    "use strict";
                    jQuery('#tzElement_latest_Slide_<?php echo esc_attr($tz_id)?>').each(function () {
                        jQuery(this).owlCarousel({
                            rtl: <?php if (is_rtl()) {
                                echo 'true';
                            } else {
                                echo 'false';
                            } ?>,
                            nav:<?php if ($tz_nav_button == true) {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
                            navText: <?php if ($tz_type == '1'):?>["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]<?php else:?>["" , ""]<?php endif; ?>,
                            dots:<?php if ($tz_dots == true) {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
                            autoplay: <?php if ($tz_auto_play == true) {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
                            autoplayTimeout: <?php echo esc_attr($tz_timeout);?>,
                            loop: <?php if ($tz_loop == true) {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
                            smartSpeed: 700,
                            mouseDrag: true,
                            margin: <?php if ($tz_type == 2): echo esc_attr($tz_margin); else: echo '0';endif;  ?>,
                            autoplayHoverPause: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: <?php if ($tz_type == '1'):echo '1'; else: echo esc_attr($tz_mob); endif; ?>
                                },
                                992: {
                                    items: <?php if ($tz_type == '1'):echo '1'; else: echo esc_attr($tz_tab); endif; ?>
                                },
                                1200: {
                                    items: <?php if ($tz_type == '1'):echo '1'; else: echo esc_attr($tz_des); endif; ?>
                                }
                            },
                        })
                    })
                });
            </script>
            <?php if ($tz_type == '1'): ?>
        </div>
    <?php endif; ?>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('tz-latest-posts', 'tzaventura_latest_posts');

?>