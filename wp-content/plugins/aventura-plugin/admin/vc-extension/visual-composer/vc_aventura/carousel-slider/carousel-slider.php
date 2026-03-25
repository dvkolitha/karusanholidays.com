<?php
/*
 * Element tz-feature-item
 * */

function aventura_carousel_slide($atts)
{
    $tz_content = $tz_icontitle = $taget = $tz_textglb = $metasocial = $tz_icontxt = $tz_iconlnk = $tz_type = $tz_image = $tz_image_size = $tz_click_action = $tz_custom_links = $tz_link_target = '';
    $title = $tz_button = $title_video = $tz_link = $meta = $tz_slauto = $tz_slloop = $tz_slspeed ='';
    extract(shortcode_atts(array(
        'meta' => '',
        'tz_image' => '',
        'tz_image_size' => '',
        'tz_click_action' => 'none',
        'tz_custom_links' => '',
        'tz_link_target' => 'same',
        'title' => '',
        'title_video' => '',
        'tz_button' => '',
        'tz_link' => '',
        'tz_type' => '1',
        'metasocial' => '',
        'tz_textglb' => '',
        'taget' => 'true',
        'tz_icontitle' => '',
        'tz_slauto' => '1',
        'tz_slloop' => '1',
        'tz_slspeed' => '5000',
        'tz_content'    => "",


    ), $atts));
    ob_start();
    $meta = vc_param_group_parse_atts($meta);
    $metasocial = vc_param_group_parse_atts($metasocial);

    wp_enqueue_script('lity', get_template_directory_uri() . '/js/lity.js', array(), false, true);
    wp_enqueue_style('lity', get_template_directory_uri() . '/css/lity.css', false);


    wp_enqueue_script('owl-carousel');
    wp_enqueue_style('owl-carousel');

    if ('link_image' === $tz_click_action) {
        wp_enqueue_script('jquery.prettyPhoto');
        wp_enqueue_style('prettyPhoto');
    }

    $images = explode(',', $tz_image);
    $pretty_rand = 'pretty' === $tz_click_action ? ' data-rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"' : '';

    if ('custom' === $tz_click_action) {
        $custom_links = vc_value_from_safe($tz_custom_links);
        $custom_links = explode(',', $tz_custom_links);
    }

    $i = -1;
    ?>
    <?php if ($tz_type == '1'): ?>
    <div class="tzElement_Image_slide">

<?php else: ?>

    <div class="tzElement_Image_slide slr_socials">

<?php endif; ?>

    <div class="image-slider owl-carousel">

        <?php
        $i = 0;
        foreach ($meta as $meta_item) {

            $i++;
            $img = wp_get_attachment_image_src($meta_item['tz_image'], 'tz_image_size');
            ?>

            <div class="tzImage_Slide_Item" data-dot="<span>0<?php echo $i; ?></span>">

                <div class="container">
                    <img src="<?php echo esc_url($img[0]) ?>" alt="">
                    <?php if ($tz_type == 1): ?>
                        <h3 class="animated fadeInUp"><?php echo balanceTags($meta_item['title']); ?></h3>
                        <div class="readmore">
                            <a href="<?php echo esc_html($meta_item['tz_link']); ?>" class="view-more" <?php if ($taget != ''): ?>target="_blank"<?php endif; ?>><span
                                        class="icon-arrow-right" ></span>
                                <div class="discover"><?php echo esc_html__($meta_item['tz_button']); ?></div>
                            </a>
                        </div>
                    <?php else: ?>
                        <h2 class="animated fadeInUp tz_title"><?php echo balanceTags($meta_item['title']); ?></h2>
                        <?php if ($meta_item['tz_link'] != '' && $meta_item['tz_button'] != ''): ?>
                            <div class="readmores">
                                <a class="view-more" href="<?php echo esc_html($meta_item['tz_link']); ?>" <?php if ($taget != ''): ?>target="_blank"<?php endif; ?>><span
                                            class="icon-arrow-right"></span>
                                    <div class="discover"><?php echo esc_html__($meta_item['tz_button']); ?></div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($tz_textglb != ''): ?>
                            <h3 class="Txt_global"><?php echo esc_attr($tz_textglb) ?></h3>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php if ($tz_type == '1' && $tz_content != '' && $title_video != '' ): ?>
    <div class="container box-video">
    <div class="video">
        <div class="play">
            <a href="<?php echo esc_attr($tz_content); ?>" data-lity <?php if ($taget != ''): ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
        </div>
        <h5> <a href="<?php echo esc_attr($tz_content); ?>" data-lity <?php if ($taget != ''): ?>target="_blank"<?php endif; ?>><?php echo balanceTags($title_video); ?></a></h5>
    </div>
    </div>

    <?php endif; ?>
    <?php if ($tz_type == '2'): ?>
    <div class="slr_social">
        <div class="box-item">
        <?php $a = 0;
        foreach ($metasocial as $meta_items) {
            if ( $meta_items['tz_iconlnk']!= ''):
            $a++; ?>
            <a href="<?php echo esc_attr($meta_items['tz_iconlnk']) ?>" <?php if ($taget != ''): ?>target="_blank"<?php endif; ?> data-hover= "<?php echo esc_attr($meta_items['tz_icontitle']) ?>"><i
                        class="<?php echo esc_attr($meta_items['tz_icontxt']) ?>"></i>
            </a>
        <?php endif ;} ?>
        </div>
    </div>

<?php endif; ?>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";

            jQuery('.image-slider').each(function () {

                jQuery(this).owlCarousel({
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    dots: true,
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut',
                    smartSpeed: 500,
                    slideSpeed: 2000,
                    autoplayHoverPause: true,
                    autoplayTimeout: <?php if ($tz_slspeed != ''){echo esc_attr($tz_slspeed);} else{ echo '5000';}?>,
                    loop:  <?php  if($tz_slloop == "1") {
                            echo 'true';}
                        else{
                            echo 'false';
                        }?>,
                    autoplay: <?php  if($tz_slauto == "1") {
                            echo 'true';}
                        else{
                            echo 'false';
                     }?>,
                    paginationSpeed: 2000,
                    dotsData: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        992: {
                            items: 1
                        },
                        1200: {
                            items: 1
                        }
                    },
                });
            });

        });
    </script>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-carousel', 'aventura_carousel_slide');
?>