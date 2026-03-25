<?php
$tz_image = $link = $tz_vm = '';
$args = array(
    "link" => "",
    "tz_image" => "",
    "tz_vm" => 'Read More',

);
extract(shortcode_atts($args, $atts));
$vc_link = vc_build_link($link);
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
<div class="Tz_custombox">
    <a class="Tz_ov" <?php echo ($vc_link['target'] != '' ? 'target="' . esc_attr($vc_link['target']) . '"' : '') . ' ' . ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?>
       data-hover="<?php echo esc_attr($tz_vm); ?>">
    </a>
    <img class="Tz_poster_image" width="<?php echo esc_attr($tz_width_img); ?>" height="<?php echo esc_attr($tz_height_img); ?>" alt="" src="<?php echo esc_url($tz_url_img); ?>">
    <a class="Tz_content" <?php echo ($vc_link['target'] != '' ? 'target="' . esc_attr($vc_link['target']) . '"' : '') . ' ' . ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?>
            data-hover="View More">
        <?php echo esc_attr($vc_link['title']); ?>
    </a>
</div>





