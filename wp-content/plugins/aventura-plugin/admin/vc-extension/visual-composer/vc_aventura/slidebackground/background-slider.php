<?php
/*
 * Element Background-slider
 * */

function aventura_bg_slide($atts, $content = null)
{
    $tz_bgov = $tz_color_title = $tz_image = $tz_scroll = $tz_txtscroll = $tz_style = '';
    extract(shortcode_atts(array(
        'tz_image' => '',
        'tz_scroll' => '',
        'tz_txtscroll' => 'Scroll Down',
        'tz_style'  => '1',
        'tz_color_title' => 'rgba(0,0,0,0.4)',
        'tz_bgov'   => '1',

    ), $atts));
    ob_start();
    $images = explode( ',', $tz_image );
    wp_enqueue_script('owl-carousel');
    wp_enqueue_style('owl-carousel');

    if ($tz_bgov == '1') {
        $tz_styles = 'style ="color:' . esc_attr($tz_color_title) . ';';
        if ($tz_style != '1') {
            $tz_styles .= 'position: fixed;top: 0;';
        }
    }else{
        $tz_styles = 'style ="color:rgba(0,0,0,0);';
        if ($tz_style != '1') {
            $tz_styles .= 'position: fixed;top: 0;';
        }
    }
    $tz_styles .= '"';
    $tz_id = mt_rand();
    $i = -1;
    ?>

    <div class="Tz_bgslide" <?php echo $tz_styles?>>
        <div class="Tz_bgslide-carousel ">
            <div class="Tz_bg_slider owl-carousel" id="Tz_carousel_bg-<?php echo esc_attr($tz_id) ?>">
                <?php
                foreach ( $images as $attach_id ) {
                    $i++;
                    $post_thumbnail = wpb_getImageBySize( array(
                        'attach_id' => $attach_id,
                        'thumb_size' => '1920x1080',
                    ) );
                    $thumbnail = $post_thumbnail['thumbnail'];
                    ?>
                    <div class="tzImage_Slide_Item">
                       <?php echo $thumbnail ?>
                    </div>
                <?php } ?>
            </div>

            <script type="text/javascript">
                jQuery(document).ready(function () {
                    "use strict";

                    jQuery('#Tz_carousel_bg-<?php echo esc_attr($tz_id) ?>').each(function () {

                        jQuery(this).owlCarousel({
                            nav: true,
                            navText: ["", ""],
                            dots: true,
                            animateIn: 'fadeIn',
                            animateOut: 'fadeOut',
                            smartSpeed: 500,
                            slideSpeed: 2000,
                            loop: true,
                            autoplay: true,
                            paginationSpeed: 2000,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 1
                                },
                                992: {
                                    items: 1
                                },
                                1200: {
                                    items: 1
                                }
                            },
                        });
                    });

                });

            </script>
        </div>
    </div>
    <?php if ($tz_scroll == '2'): ?>
    <p class="tz_scrolldown"><i class="fas fa-arrow-down"></i><span><?php echo esc_attr($tz_txtscroll)?></span></p>
    <?php endif;?>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-bgsl', 'aventura_bg_slide');
?>