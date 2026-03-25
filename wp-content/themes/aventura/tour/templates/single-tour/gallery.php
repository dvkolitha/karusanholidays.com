<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $aventura_ID, $aventura_options;
$aventura_gallery               =   aventura_metabox( 'aventura_tour_gallery','','','' );
$aventura_slider_height         =   isset( $aventura_options['aventura_tour_detail_slider_height'] ) ? $aventura_options['aventura_tour_detail_slider_height'] : 'auto';
$aventura_slider_height_custom  =   isset( $aventura_options['aventura_tour_detail_slider_height_custom'] ) ? $aventura_options['aventura_tour_detail_slider_height_custom'] : '700px';
$custom_css = "";
if($aventura_slider_height == 'custom'){
    $custom_css .= ".tz-tour-single .tz-tour-head .tz-tour-thumbnail{max-height:none; height:$aventura_slider_height_custom}";
}
if($aventura_slider_height == 'auto'){
    $custom_css .= ".tz-tour-single .tz-tour-head .tz-tour-thumbnail{max-height:none !important;}";
}
wp_enqueue_style( 'aventura-style-inline' );
wp_add_inline_style( 'aventura-style-inline', $custom_css );
if( $aventura_gallery != '' ){?>
    <div class="tz-tour-thumbnail tz-tour-gallery flexslider" data-height="<?php echo esc_attr($aventura_slider_height);?>">
        <ul class="slides">
            <?php foreach($aventura_gallery as $aventura_image) :
                ?>
                <li>
                    <img src="<?php echo esc_url($aventura_image['full_url']); ?>" alt="<?php echo esc_html(get_bloginfo('title')); ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}else{ ?>
    <div class="tz-tour-thumbnail">
        <?php echo get_the_post_thumbnail($aventura_ID,'full'); ?>
    </div>
    <?php
}
