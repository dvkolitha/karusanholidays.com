<?php

function stdaventura_cutomer($attr, $content = null)
{
    $tz_image_cus = $tz_title_cus = $el_class = $css = '';
    extract(shortcode_atts(array(
        'tz_icon' => '1',
        'tz_image_cus' => '',
        'tz_title_cus' => '',
        'el_class' => '',
        'css' => '',
    ), $attr));
    ob_start();

    $content = wpb_js_remove_wpautop($content, true);
    $tz_signature_img_id = preg_replace('/[^\d]/', '', $tz_image_cus);
    $tz_signature_width = '';

    $tz_signature_info = wp_get_attachment_image_src($tz_signature_img_id, $size = 'full');
    if (isset($tz_signature_info) && !empty($tz_signature_info)) {
        $tz_signature_url = $tz_signature_info[0];
        $tz_signature_width = $tz_signature_info[1];
        $tz_signature_height = $tz_signature_info[2];
    }

    ?>
    <div class="STD_cutomer <?php if ($el_class != '') {
        echo esc_attr($el_class);
    } ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
        <div class="STD_name">
            <img src="<?php echo esc_html($tz_signature_url); ?>" alt="image-customer">
            <span><?php echo esc_html($tz_title_cus); ?></span>
        </div>
        <div class="vote">
            <div class="STD_star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <?php echo balanceTags($content); ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('std-customer', 'stdaventura_cutomer');


?>
