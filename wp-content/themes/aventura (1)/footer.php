<?php
//Global variable redux
global $aventura_options;
$aventura_footer_type_select = ((!isset($aventura_options['aventura_footer_type_select'])) || empty($aventura_options['aventura_footer_type_select'])) ? '0' : $aventura_options['aventura_footer_type_select'];
$aventura_footer_theme_type = ((!isset($aventura_options ["aventura_footer_type"])) || empty($aventura_options ["aventura_footer_type"])) ? '0' : $aventura_options ["aventura_footer_type"];
$aventura_footer_col = ((!isset($aventura_options ["aventura_footer_column_col"])) || empty($aventura_options ["aventura_footer_column_col"])) ? '4' : $aventura_options ["aventura_footer_column_col"];
$aventura_footer_widthl = ((!isset($aventura_options ["aventura_footer_column_w1"])) || empty($aventura_options ["aventura_footer_column_w1"])) ? '3' : $aventura_options ["aventura_footer_column_w1"];
$aventura_footer_width2 = ((!isset($aventura_options ["aventura_footer_column_w2"])) || empty($aventura_options ["aventura_footer_column_w2"])) ? '2' : $aventura_options ["aventura_footer_column_w2"];
$aventura_footer_width3 = ((!isset($aventura_options ["aventura_footer_column_w3"])) || empty($aventura_options ["aventura_footer_column_w3"])) ? '4' : $aventura_options ["aventura_footer_column_w3"];
$aventura_footer_width4 = ((!isset($aventura_options ["aventura_footer_column_w4"])) || empty($aventura_options ["aventura_footer_column_w4"])) ? '3' : $aventura_options ["aventura_footer_column_w4"];
$aventura_footer_width5 = ((!isset($aventura_options ["aventura_footer_column_w5"])) || empty($aventura_options ["aventura_footer_column_w5"])) ? '0' : $aventura_options ["aventura_footer_column_w5"];
$aventura_copyright = ((!isset($aventura_options ["aventura_footer_copyright_editor"])) || empty($aventura_options ["aventura_footer_copyright_editor"])) ? '' : $aventura_options ["aventura_footer_copyright_editor"];
$aventura_social = ((!isset($aventura_options ["aventura_footer_social_editor"])) || empty($aventura_options ["aventura_footer_social_editor"])) ? '' : $aventura_options ["aventura_footer_social_editor"];
$aventura_footer_logo_type_1 = ((!isset($aventura_options ["aventura_footer_type_1_logo"]['url'])) || empty($aventura_options ["aventura_footer_type_1_logo"]['url'])) ? '' : $aventura_options ["aventura_footer_type_1_logo"]['url'];
$aventura_footer_logo_type_2 = ((!isset($aventura_options ["aventura_footer_type_2_logo"]['url'])) || empty($aventura_options ["aventura_footer_type_2_logo"]['url'])) ? '' : $aventura_options ["aventura_footer_type_2_logo"]['url'];
$aventura_footer_logo_type_3 = ((!isset($aventura_options ["aventura_footer_type_3_logo"]['url'])) || empty($aventura_options ["aventura_footer_type_3_logo"]['url'])) ? '' : $aventura_options ["aventura_footer_type_3_logo"]['url'];
$aventura_footer_link = ((!isset($aventura_options ["aventura_footer_link"])) || empty($aventura_options ["aventura_footer_link"])) ? '' : $aventura_options ["aventura_footer_link"];
$aventura_footer_social_facebook = ((!isset($aventura_options['aventura_footer_social_facebook'])) || empty($aventura_options['aventura_footer_social_facebook'])) ? '' : $aventura_options['aventura_footer_social_facebook'];
$aventura_footer_social_twitter = ((!isset($aventura_options['aventura_footer_social_twitter'])) || empty($aventura_options['aventura_footer_social_twitter'])) ? '' : $aventura_options['aventura_footer_social_twitter'];
$aventura_footer_social_instagram = ((!isset($aventura_options['aventura_footer_social_instagram'])) || empty($aventura_options['aventura_footer_social_instagram'])) ? '' : $aventura_options['aventura_footer_social_instagram'];
$aventura_footer_social_youtube = ((!isset($aventura_options['aventura_footer_social_youtube'])) || empty($aventura_options['aventura_footer_social_youtube'])) ? '' : $aventura_options['aventura_footer_social_youtube'];
$aventura_footer_social_vimeo = ((!isset($aventura_options['aventura_footer_social_vimeo'])) || empty($aventura_options['aventura_footer_social_vimeo'])) ? '' : $aventura_options['aventura_footer_social_vimeo'];
$aventura_footer_social_flickr = ((!isset($aventura_options['aventura_footer_social_flickr'])) || empty($aventura_options['aventura_footer_social_flickr'])) ? '' : $aventura_options['aventura_footer_social_flickr'];

$aventura_footer_page_option = aventura_metabox('aventura_footer_page_option', '', '', 'default');
$aventura_footer_page_select = aventura_metabox('aventura_footer_page_type', '', '', '0');

$aventura_footer_type = '';
$aventura_left_fb = '';
$aventura_left_tw = '';
$aventura_left_ins = '';
$aventura_left_yt = '';
$aventura_left_vm = '';
$aventura_left_fl = '';

wp_enqueue_script('owl-carousel');
wp_enqueue_style('owl-carousel');

if ($aventura_footer_type_select == 1) {
    $aventura_left_fb = $aventura_footer_social_facebook;
    $aventura_left_tw = $aventura_footer_social_twitter;
    $aventura_left_ins = $aventura_footer_social_instagram;
    $aventura_left_yt = $aventura_footer_social_youtube;
    $aventura_left_vm = $aventura_footer_social_vimeo;
    $aventura_left_fl = $aventura_footer_social_flickr;
}

if (is_page() && $aventura_footer_page_option == 'custom'):
    $aventura_footer_type = $aventura_footer_page_select;
else:
    $aventura_footer_type = $aventura_footer_theme_type;
endif;
$aventura_footer_class = '';
if ($aventura_footer_type == '1') {
    $aventura_footer_class = 'tz-footer-type-2';
} elseif ($aventura_footer_type == '2') {
    $aventura_footer_class = 'tz-footer-type-3';
} else {
    $aventura_footer_class = 'tz-footer-type-1';
}

$aventura_footer_logo = '';
if ($aventura_footer_type == '1') {
    $aventura_footer_logo = $aventura_footer_logo_type_2;
} elseif ($aventura_footer_type == '2') {
    $aventura_footer_logo = $aventura_footer_logo_type_3;
} else {
    $aventura_footer_logo = $aventura_footer_logo_type_1;
}

?>
<?php if (!is_page_template('template-homeslide.php')): ?>
    <?php get_template_part('template_inc/inc', 'newsletter'); ?>
    <footer class="tz-footer <?php echo esc_attr($aventura_footer_class) ?>">
        <?php
        if (is_active_sidebar("tz-plazart-footer-1") || is_active_sidebar("tz-plazart-footer-2") || is_active_sidebar("tz-plazart-footer-3") || is_active_sidebar("tz-plazart-footer-4") || is_active_sidebar("tz-plazart-footer-5")) {
            ?>
            <div class="tz-footer-top">
                <div class="container">
                    <div class="row">
                        <?php
                        for ($aventura_i = 0; $aventura_i < $aventura_footer_col; $aventura_i++):
                            $aventura_j = $aventura_i + 1;
                            if ($aventura_i == 0) {
                                $aventura_col = $aventura_footer_widthl;
                            } elseif ($aventura_i == 1) {
                                $aventura_col = $aventura_footer_width2;
                            } elseif ($aventura_i == 2) {
                                $aventura_col = $aventura_footer_width3;
                            } elseif ($aventura_i == 3) {
                                $aventura_col = $aventura_footer_width4;
                            } elseif ($aventura_i == 4) {
                                $aventura_col = $aventura_footer_width5;
                            }

                            ?>
                            <div class="col-md-<?php echo esc_attr($aventura_col); ?> col-sm-6 footerattr">
                                <?php
                                if (is_active_sidebar("tz-plazart-footer-" . $aventura_j)):
                                    dynamic_sidebar("tz-plazart-footer-" . $aventura_j);
                                endif;
                                ?>
                            </div><!--end class footermenu-->
                        <?php
                        endfor;
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($aventura_footer_type == '1' || $aventura_footer_type == '0') { ?>
            <div class="tz-footer-bottom">
                <div class="container">
                    <div class="tz-footer-bottom-box">
                        <div class="row">
                            <div class="tz-copyright col-md-4">
                                <?php if ($aventura_copyright != ''):
                                    echo ent2ncr($aventura_copyright);
                                else:
                                    echo esc_html__('Copyright Aventura, All Right Reserved', 'aventura');
                                endif;
                                ?>
                            </div>
                            <div class="tz-footer-logo col-md-4">
                                <?php if ($aventura_footer_logo != ''): ?>

                                    <img src="<?php echo esc_attr($aventura_footer_logo); ?>"
                                         alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/logo-2.png'; ?>"
                                         alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                <?php endif; ?>
                            </div>
                            <?php
                            if ($aventura_footer_link == true) {
                                ?>
                                <div class="tz-footer-link col-md-4">
                                    <?php
                                    // footer-menu
                                    if (has_nav_menu('footer-menu')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'footer-menu',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'container' => false
                                        ));
                                    }
                                    //                                if(is_active_sidebar('tz-plazart-link-footer')):
                                    //                                    dynamic_sidebar("tz-plazart-link-footer");
                                    //                                endif;
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($aventura_footer_type == '2' && $aventura_footer_type_select == 1) { ?>
            <div class="tz-footer-center">
                <?php $aventura_partner = $aventura_options['opt-gallery']; ?>
                <div class="container">
                    <div class="partner-slider owl-carousel">
                        <?php
                        $aventura_partner_array = explode(',', $aventura_partner);
                        foreach ($aventura_partner_array as $partner):
                            ?>
                            <div class="item">
                                <a href="#">
                                    <?php
                                    echo wp_get_attachment_image($partner, 'full');
                                    ?>
                                </a>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <div class="tz-footer-bottom">
                <div class="container">
                    <div class="tz-footer-bottom-box">
                        <div class="row">
                            <div class="tz-footer-logo col-md-4">
                                <?php if ($aventura_footer_logo != ''): ?>

                                    <img src="<?php echo esc_attr($aventura_footer_logo); ?>"
                                         alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/logo-2.png'; ?>"
                                         alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                <?php endif; ?>
                            </div>
                            <div class="tz-copyright col-md-4">
                                <?php if ($aventura_copyright != ''):
                                    echo ent2ncr($aventura_copyright);
                                else:
                                    echo esc_html__('Copyright Aventura, All Right Reserved', 'aventura');
                                endif;
                                ?>
                            </div>

                            <div class="tz-footer-social col-md-4">
                                <div class="aventura-footer-bottom-left-box">

                                    <?php if ($aventura_left_fb != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_fb); ?>"
                                               target="popup">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($aventura_left_tw != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_tw); ?>"
                                               target="popup">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($aventura_left_ins != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_ins); ?>"
                                               target="popup">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($aventura_left_yt != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_yt); ?>"
                                               target="popup">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($aventura_left_vm != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_vm); ?>"
                                               target="popup">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($aventura_left_fl != ''): ?>
                                        <div class="aventura-footer-social-item">
                                            <a href="<?php echo esc_html($aventura_left_fl); ?>"
                                               target="popup">
                                                <i class="fa fa-flickr" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </footer>
    <div class="tz-form-booking-ajax-content"></div>
    <div class="tz-reviews-ajax-content"></div>
<?php endif; ?>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        "use strict";
        jQuery('.partner-slider').each(function () {

            jQuery(this).owlCarousel({
                nav: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                slideSpeed: 1000,
                loop: true,
                autoplay:true,
                autoplayTimeout:3000,
                margin: 45,
                paginationSpeed: 1000,
                dotsData: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    992: {
                        items: 6
                    },
                    1200: {
                        items: 6
                    }
                },
            })
        })
    });
</script>
</body>
</html>
