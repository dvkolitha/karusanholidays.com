<?php
/*
 * Element tz-feature-item
 * */

function aventura__quote($atts, $content = null)
{
    $variabale = $tz_position = $css = $tz_full = $tz_image = $tz_image_size = $tz_click_action = $tz_custom_links = $tz_link_target =  $disme_marketing_params = $disme_marketing_parames = '';

    extract(shortcode_atts(array(
        'tz_image' => '',
        'disme_marketing_params' => '',
        'disme_marketing_parames' => '',
        'tz_image_size' => '',
        'tz_click_action' => 'none',
        'tz_custom_links' => '',
        'tz_position' => '',
        'tz_link_target' => 'same',
        'tz_full' => '1',
        'css' => '',

    ), $atts));
    ob_start();

    $disme_marketing_params = vc_param_group_parse_atts(isset($atts['disme_marketing_params']) ? $atts['disme_marketing_params'] : '');
    $disme_marketing_parames = vc_param_group_parse_atts(isset($atts['disme_marketing_parames']) ? $atts['disme_marketing_parames'] : '');

    wp_enqueue_script('owl-carousel');
    wp_enqueue_style('owl-carousel');

    if ('link_image' === $tz_click_action) {
        wp_enqueue_script('jquery.prettyPhoto');
        wp_enqueue_style('prettyPhoto');
    }

    $images = explode(',', $tz_image);
    $pretty_rand = 'pretty' === $tz_click_action ? ' data-rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"' : '';

    $tz_id = mt_rand();
    $i = -1;
    ?>

    <?php if ($tz_full == '2'): ?>
        <div class="tzElement_quote_Nbg <?php echo vc_shortcode_custom_css_class($css); ?>">
    <?php elseif ($tz_full == '3'): ?>
        <div class="tzElement_quote_imgat <?php echo vc_shortcode_custom_css_class($css); ?>">
    <?php else: ?>
         <div class="tzElement_quote <?php if ($tz_full != '0'): echo "tz_full_width";endif; ?> <?php echo vc_shortcode_custom_css_class($css); ?> ">
    <?php
    endif;
        foreach ($images as $attach_id) {
            $post_thumbnail = wpb_getImageBySize(array(
                'attach_id' => $attach_id,
                'thumb_size' => $tz_image_size,
            ));
            $thumbnail = $post_thumbnail['thumbnail'];
            ?>
            <div id="Tz-quote-<?php echo $tz_id; ?>" class="tz-quote owl-carousel">
                <?php
                if ($tz_full == '2'):
                    $tz_param = $disme_marketing_parames;
                else:
                    $tz_param = $disme_marketing_params;
                endif;
                $i = 0;
                if (isset($tz_param) && $tz_param != ''):
                    foreach ($tz_param as $params):

                        $disme_marketing_author = isset($params["author"]) ? $params["author"] : '';
                        $disme_marketing_content = isset($params["content"]) ? $params["content"] : '';
                        $disme_marketing_image = isset($params["tz_image"]) ? $params["tz_image"] : '';
                        $disme_marketing_size = isset($params["tz_image_size"]) ? $params["tz_image_size"] : '';
                        $disme_marketing_position = isset($params["tz_position"]) ? $params["tz_position"] : '';

                        $i++;

                        ?>
                        <div class="tzImage_Slide_Item">
                            <?php if ($tz_full == '3'): ?>
                                <div class="img_author">
                            <?php endif; ?>
                                <?php echo wp_get_attachment_image($disme_marketing_image, $disme_marketing_size) ?>
                            <?php if ($tz_full == '3'): ?>
                                </div>
                            <?php endif; ?>
                            <div class="section">
                                <div class="absotute-content">

                                    <?php if (isset($disme_marketing_content) && $disme_marketing_content != ''): ?>
                                        <p class="content"><?php echo balanceTags($disme_marketing_content); ?></p>
                                    <?php endif; ?>

                                    <?php if (isset($disme_marketing_author) && $disme_marketing_author != ''): ?>
                                        <h3 class="author"><?php echo balanceTags($disme_marketing_author); ?></h3>
                                    <?php endif; ?>
                                    <?php if (isset($disme_marketing_author) && $disme_marketing_author != ''): ?>
                                        <h4><?php echo balanceTags($disme_marketing_position); ?></h4>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
        <?php } ?>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";

                jQuery('#Tz-quote-<?php echo $tz_id; ?>').each(function () {

                    jQuery(this).owlCarousel({
                        nav: true,
                        navText: false,
                        dots: true,
                        <?php if ($tz_full != '2'): ?>
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        <?php endif; ?>
                        slideSpeed: 1000,
                        loop: true,
                        autoplay: true,
                        autoplayHoverPause: true,
                        paginationSpeed: 1000,
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
                    })
                })
            });
        </script>
    <?php if ($tz_full != ''): ?>
    </div>
<?php endif;
    ?>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-comment', 'aventura__quote');
?>