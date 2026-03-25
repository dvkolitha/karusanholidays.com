<?php
$tz_des = $auto_play = $timeout = $loop = $tablet = $mobile = $desktop = $desktopsm = '';
$args = array(
    "auto_play" => "",
    "timeout" => "3000",
    "loop"    => "",
    "tablet"  => "2",
    "desktop" => "4",
    "mobile"   => "1",
    "desktopsm" => "3",
    "css"     => ""
);
$html = "";

extract(shortcode_atts($args, $atts));
wp_enqueue_script('owl-carousel');
wp_enqueue_style('owl-carousel');

$tz_id = mt_rand();

?>
<div class="tz_customslider <?php echo vc_shortcode_custom_css_class($css); ?>"
     data-play="<?php echo esc_attr($auto_play); ?>" data-timeout="<?php echo esc_attr($timeout); ?>"
     data-loop="<?php echo esc_attr($loop); ?>" >
    <div class="tz_csslider owl-carousel" id="tz_custom-<?php echo esc_attr($tz_id)?>">
        <?php echo do_shortcode($content); ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        "use strict";

        jQuery("#tz_custom-<?php echo esc_attr($tz_id)?>").each(function () {
            var $play           =   jQuery(this).parents('.tz_customslider').data('play');
            var $timeout        =   jQuery(this).parents('.tz_customslider').data('timeout');
            var $loop           =   jQuery(this).parents('.tz_customslider').data('loop');
            jQuery(this).owlCarousel({
                nav: false,
                navText: ["", ""],
                autoplay: $play,
                autoplayTimeout: $timeout,
                autoplayHoverPause: true,
                loop: $loop,
                smartSpeed: 600,
                responsive: {
                    0: {
                        items:<?php echo esc_attr($mobile); ?>
                    },
                    767: {
                        items:<?php echo esc_attr($tablet); ?>
                    },
                    992: {
                        items:<?php echo esc_attr($desktopsm); ?>
                    },
                    1200: {
                        items:<?php echo esc_attr($desktop); ?>
                    }
                },
            })
        })
    });
</script><!--end script recent-project -->


