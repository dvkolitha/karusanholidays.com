<?php
/*
 * Element VideoPopUp
 * */

function aventura_video_popup($atts, $content = null)
{
    $tz_align = $tz_image = $tz_title = $tz_subtitle = $tz_btnlink = $css = '';
    extract(shortcode_atts(array(
        'css' => '',
        'tz_image' => '',
        'tz_title' => '',
        'tz_subtitle' => '',
        'tz_btnlink' => '',
        'tz_align'   => '1',

    ), $atts));
    ob_start();

    wp_enqueue_script('lity', get_template_directory_uri() . '/js/lity.js', array(), false, true);
    wp_enqueue_style('lity', get_template_directory_uri() . '/css/lity.css', false);

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

<div class="Tz_video_popup <?php if ($tz_align == '1'){echo 'tz_left';} ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
    <img class="Tz_poster_image" width="<?php echo esc_attr($tz_width_img); ?>"
         height="<?php echo esc_attr($tz_height_img); ?>" alt="Chucla" src="<?php echo esc_url($tz_url_img); ?>">
    <?php if ($tz_subtitle != '' || $tz_title != ''): ?>
    <div class="video">
        <?php else: ?>
        <div class="video only_ic">
            <?php endif;?>
            <?php if ($content != ''): ?>
                <div class="play">
                    <a href="<?php echo esc_html__($content); ?>" data-lity>
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <div class="content">
                            <?php if ($tz_subtitle != ''): ?>
                                <span><?php echo balanceTags($tz_subtitle); ?></span>
                            <?php endif; ?>
                            <?php if ($tz_title != ''): ?>
                                <span class="title"
                                      data-hover="<?php echo esc_attr($tz_title); ?>"><?php echo balanceTags($tz_title); ?></span>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-video-popup', 'aventura_video_popup');
?>