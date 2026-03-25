<?php
/*
 * Element tz-Partner
 * */

function aventura_partner($atts)
{
    $css = $tz_image = $tz_image_size = $tz_link = '';

    extract(shortcode_atts(array(
        'meta' => '',
        'tz_image' => '',
        'tz_image_size' => '',
        'tz_link' => '',
        'css'   => '',


    ), $atts));
    ob_start();
    $vc_link = vc_build_link($tz_link);

    $tz_img_id = preg_replace('/[^\d]/', '', $tz_image);
    $tz_width_img = '';
    $tz_height_img = '';
    $tz_images_info = wp_get_attachment_image_src($tz_img_id, $size = 'full');
    if (isset($tz_images_info) && !empty($tz_images_info)) {
        $tz_url_img = $tz_images_info[0];
        $tz_width_img = $tz_images_info[1];
        $tz_height_img = $tz_images_info[2];
    }
    ?>

    <div class="Tz_partner <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php if (isset($vc_link['url']) && $vc_link['url'] != ''): ?>
            <a <?php echo ($vc_link['target'] != '' ? 'target="' . esc_attr($vc_link['target']) . '"' : '') . ' ' . ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?>>
                <img class="partner" width="<?php echo esc_attr($tz_width_img); ?>"
                     height="<?php echo esc_attr($tz_height_img); ?>" alt="" src="<?php echo esc_url($tz_url_img); ?>">
            </a>
        <?php endif; ?>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('tz-partner', 'aventura_partner');
?>