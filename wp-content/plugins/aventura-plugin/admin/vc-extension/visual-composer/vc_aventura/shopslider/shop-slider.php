<?php
/*
 * Element Shop-slider
 * */

function aventura_shop_slide($atts, $content = null)
{
    $css = $description = $tz_image = $tz_image_size = '';
    $link = $title = $tz_button = $tz_link = $meta = $tz_slauto = $tz_slloop = $tz_slspeed = $subtitle = '';
    extract(shortcode_atts(array(
        'meta' => '',
        'tz_image' => '',
        'tz_image_size' => '',
        'title' => '',
        'subtitle' => '',
        'tz_slauto' => '1',
        'tz_slloop' => '1',
        'tz_slspeed' => '5000',
        'description' => '',
        'css' => '',
        'link' => '',


    ), $atts));
    ob_start();
    $meta = vc_param_group_parse_atts($meta);

    wp_enqueue_script('owl-carousel');
    wp_enqueue_style('owl-carousel');
    $links = vc_build_link($link);
    $a = '<a '.($links['target'] != '' ? 'target="' . esc_attr($links['target']) . '"' : '') . ' ' . ($links['url'] != '' ? 'href="' . esc_attr($links['url']) . '"' : '') . ' ' . ($links['title'] != '' ? 'title="' . esc_attr($links['title']) . '"' : '').'>'.'asadasd'.'</a>';

    $tz_id = mt_rand();
    ?>

    <div class="Tz_elm_shop_slider  <?php echo vc_shortcode_custom_css_class($css); ?>">

        <div class="Tz_box-carousel ">
            <div class="tz_shop_slider owl-carousel" id="tz_shop_slider-<?php echo esc_attr($tz_id);?>">

                <?php
                $i = 0;
                foreach ($meta as $meta_item) {
                    $links = vc_build_link($meta_item["link"]);
//                    var_dump($links);
                    $i++;
                    $img = wp_get_attachment_image_src($meta_item['tz_image'], 'tz_image_size');

                    ?>

                    <div class="tzshop_Slide_content">
                        <img src="<?php echo esc_url($img[0]) ?>" alt="">
                        <div class="box-content">
                            <h3 class="tz_subtitle"><?php echo balanceTags($meta_item['subtitle']); ?></h3>
                            <h2 class="tz_title"><?php echo balanceTags($meta_item['title']); ?></h2>
                            <p class="tz_description"><?php echo balanceTags($meta_item['description']); ?></p>

                            <?php if ($links["url"] != ''): ?>
                                <div class="Tz_btn">
                                    <a class="Tz_btn_shop" href="<?php echo esc_html($links["url"]); ?>"
                                      target="<?php echo esc_html($links["target"]) ?>">
                                        <div class="btn_shop"><?php if ($links["title"]!= ""){ echo esc_html__($links["title"]); }else{echo "shop collection";}?></div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <script type="text/javascript">
                jQuery(document).ready(function () {
                    "use strict";

                    jQuery('#tz_shop_slider-<?php echo esc_attr($tz_id);?>').each(function () {

                        jQuery(this).owlCarousel({
                            nav: true,
                            navText: ["", ""],
                            dots: true,
                            animateIn: 'fadeIn',
                            animateOut: 'fadeOut',
                            smartSpeed: 500,
                            slideSpeed: 2000,
                            autoplayHoverPause: true,
                            autoplayTimeout: <?php if ($tz_slspeed != '') {
                                echo esc_attr($tz_slspeed);
                            } else {
                                echo '5000';
                            }?>,
                            loop:  <?php  if ($tz_slloop == "1") {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
                            autoplay: <?php  if ($tz_slauto == "1") {
                                echo 'true';
                            } else {
                                echo 'false';
                            }?>,
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
    <?php
    return ob_get_clean();
}

add_shortcode('tz-shop-sld', 'aventura_shop_slide');
?>