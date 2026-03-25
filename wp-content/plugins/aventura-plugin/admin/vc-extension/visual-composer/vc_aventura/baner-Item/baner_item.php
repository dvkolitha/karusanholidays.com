<?php
/*===============================
Shortocde tz-skill-item
===============================*/

function tzaventura_baneritem($atts)
{
    $css = $link = $tz_subtitle = $tz_title = $tz_bg = '';
    extract(shortcode_atts(array(
        'tz_bg' => '1',
        'tz_subtitle' => '',
        'tz_title' => '',
        'link' => '',
        'css' => '',
    ), $atts));
    ob_start();

    $vc_link = vc_build_link($link);
    $tz_signature_img_id = preg_replace('/[^\d]/', '', $tz_bg);
    $tz_signature_width = '';

    $tz_signature_info = wp_get_attachment_image_src($tz_signature_img_id, $size = 'full');
    if (isset($tz_signature_info) && !empty($tz_signature_info)) {
        $tz_signature_url = $tz_signature_info[0];
        $tz_signature_width = $tz_signature_info[1];
        $tz_signature_height = $tz_signature_info[2];
    }

    ?>
    <div class="tzElement_categories_woo <?php echo vc_shortcode_custom_css_class($css); ?>">
        <div class="Tz_box_parent">
            <a <?php echo ($vc_link['target'] != '' ? 'target="' . esc_attr($vc_link['target']) . '"' : '') . ' ' . ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?> >
                <img src="<?php echo esc_html($tz_signature_url); ?>" alt="img_cusotmer">
                <span class="box-content ">
            <span class="tz_subtitle"><?php echo balanceTags($tz_subtitle); ?></span>
            <strong class="tz_title"><?php echo balanceTags($tz_title); ?></strong>
        </span>
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-baners', 'tzaventura_baneritem');
?>
