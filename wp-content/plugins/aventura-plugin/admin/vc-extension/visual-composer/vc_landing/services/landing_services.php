<?php

function tzaventura_landing_services($attr)
{
    $type = $tz_icon = $tz_image_services = $tz_icon_services = $tz_title_services = $tz_des_services = $el_class = $css = '';
    extract(shortcode_atts(array(
        'tz_icon' => '1',
        'tz_image_services' => '',
        'tz_title_services' => '',
        'tz_des_services' => '',
        'el_class' => '',
        'css' => '',
        'type' => '1',
    ), $attr));
    ob_start();

    $tz_signature_img_id = preg_replace('/[^\d]/', '', $tz_image_services);
    $tz_signature_width = '';

    $tz_signature_info = wp_get_attachment_image_src($tz_signature_img_id, $size = 'full');
    if (isset($tz_signature_info) && !empty($tz_signature_info)) {
        $tz_signature_url = $tz_signature_info[0];
        $tz_signature_width = $tz_signature_info[1];
        $tz_signature_height = $tz_signature_info[2];
    }
    $std_class = '';
    if ($type == 1) {
        $std_class = 'type1';
    } elseif ($type == 2) {
        $std_class = 'type2';
    } else {
        $std_class = 'type3';
    }
    ?>
    <div class="STD_Services <?php if ($el_class != '') {
        echo esc_attr($el_class);
    } ?> <?php echo vc_shortcode_custom_css_class($css) . ' ' . $std_class; ?>">
        <?php if ($type == 1) {
            echo ' <div class="STD_imgbox">';
        } ?>
        <img src="<?php echo esc_html($tz_signature_url); ?>" alt="image-services">
        <?php if ($type == 1) {
            echo '</div>';
        } ?>
        <span class="title">
                <?php echo esc_html($tz_title_services); ?>
            </span>
        <p class="descriptions">
            <?php echo balanceTags($tz_des_services); ?>
        </p>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('std-services', 'tzaventura_landing_services');


?>
