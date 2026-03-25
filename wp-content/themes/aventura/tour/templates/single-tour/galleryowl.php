<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $aventura_ID;

$aventura_gallery               =   aventura_metabox( 'aventura_tour_gallery','','','' );

if( $aventura_gallery != '' ){?>
    <div class="owl-carousel owl-theme tour-gallery-owl">
        <?php foreach($aventura_gallery as $aventura_image) :
            ?>
            <div class="item">
                <img src="<?php echo esc_url($aventura_image['full_url']); ?>" alt="<?php echo esc_html(get_bloginfo('title')); ?>" />
            </div>
        <?php endforeach; ?>
    </div>
    <?php
}else{ ?>
    <div class="tz-tour-thumbnail">
        <?php echo get_the_post_thumbnail($aventura_ID,'full'); ?>
    </div>
    <?php
}
