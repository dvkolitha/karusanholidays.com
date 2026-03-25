<?php
/*
 * Element Image_Gallary
 * */

function aventura_img_gallary($atts, $content = null)
{
    $css = $tz_image = '';
    $std_type = $link = $title = $tz_cms = $meta = '';
    extract(shortcode_atts(array(
        'meta' => '',
        'tz_image' => '',
        'css' => '',
        'link' => '',
        'tz_cms' => '',
        'std_type' => '1',


    ), $atts));
    ob_start();
    $meta = vc_param_group_parse_atts($meta);
    if ($std_type == '1') {
        $type = 'STD_Gallary_content col-md-6 col-lg-4 col-xs-12';
    } else {
        $type = 'STD_Gallary_img col-md-6 col-lg-4 col-xs-6';
    }
    ?>
    <div class="STD_Gallary row <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php
        $i = 0;
        foreach ($meta as $meta_item) {
            $links = vc_build_link($meta_item["link"]);
            $a = balanceTags(isset($meta_item['tz_cms']) ? $meta_item['tz_cms'] : '');
            if ($a == true) {
                $a = 'STD_NEW';
            }
            $i++;
            $img = wp_get_attachment_image_src($meta_item['tz_image'], 'tz_image_size');
            ?>
            <div class="<?php echo $type; ?> <?php echo $a; ?>">
                <a class="STD_img" href="<?php echo esc_html($links["url"]); ?>"
                    <?php if ($links["target"] != ''): ?> target="<?php echo esc_html($links["target"]) ?>" <?php endif; ?> >
                    <img class="lazy" src="<?php echo esc_url($img[0]) ?>" alt="<?php echo esc_html__($links["title"]); ?>">
                </a>
                <?php if ($std_type == '1'): ?>
                    <h2 class="landing_title">
                        <a class="Tz_btn" href="<?php echo esc_html($links["url"]); ?>"
                           <?php if ($links["target"] != ''): ?> target="<?php echo esc_html($links["target"]) ?>" <?php endif; ?>>
                            <?php if ($links["title"] != "") {
                                echo esc_html__($links["title"]);
                            } else {
                                echo "Home";
                            } ?>
                        </a>
                    </h2>
                <?php endif; ?>
            </div>
        <?php }
        ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('std_gallary', 'aventura_img_gallary');
?>