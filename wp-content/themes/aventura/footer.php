<?php
//Global variable redux
global $aventura_options;
$aventura_footer_type_select = ((!isset($aventura_options['aventura_footer_type_select'])) || empty($aventura_options['aventura_footer_type_select'])) ? '0' : $aventura_options['aventura_footer_type_select'];
$aventura_footer_theme_type = ((!isset($aventura_options ["aventura_footer_type"])) || empty($aventura_options ["aventura_footer_type"])) ? '0' : $aventura_options ["aventura_footer_type"];
$aventura_footer_col = ((!isset($aventura_options ["aventura_footer_column_col"])) || empty($aventura_options ["aventura_footer_column_col"])) ? '0' : $aventura_options ["aventura_footer_column_col"];
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

$aventura_footer_bg = ((!isset($aventura_options['aventura_footer_background_type_select'])) || empty($aventura_options['aventura_footer_background_type_select'])) ? '0' : $aventura_options['aventura_footer_background_type_select'];
$aventura_footer_ovl = ((!isset($aventura_options['aventura_footer_background_overlay'])) || empty($aventura_options['aventura_footer_background_overlay'])) ? '0' : $aventura_options['aventura_footer_background_overlay'];
$aventura_btn_backtotop = ((!isset($aventura_options['aventura_btn_backtotop'])) || empty($aventura_options['aventura_btn_backtotop'])) ? '0' : $aventura_options['aventura_btn_backtotop'];
// Footer Top Option
$aventura_footer_page_option = aventura_metabox('aventura_footer_page_option', '', '', '0');
$aventura_footer_page_select = aventura_metabox('aventura_footer_page_type', '', '', '0');
$aventura_footer_page_bgimage = aventura_metabox('aventura_footer_page_bgimage', '', '', '');
$aventura_footer_page_bgcolo = aventura_metabox('aventura_footer_page_bgcolo', '', '', '');
$aventura_footer_page_padding = aventura_metabox('aventura_footer_page_padding', '', '', '');
// Footer Bottom Option
$aventura_footer_bottom_page_option = aventura_metabox('aventura_footer_bottom_page_option', '', '', '0');
$aventura_footer_bottom_page_select = aventura_metabox('aventura_footer_bottom_page_type', '', '', '0');
$aventura_footer_gallery_type = aventura_metabox('aventura_footer_gallery_type', '', '', '0');
// Footer Type 1 option Metabox
$aventura_footer_one_option = aventura_metabox('aventura_footer_one_option', '', '', '');

$aventura_type = aventura_metabox('aventura_header_page_type', '', '', '');
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');

$tz_header_t9 = '';
if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8') || ($aventura_type == '' && $aventura_meta_option == '' && $aventura_redux_type == '8')) {
    $tz_header_t9 = 'tz-mgleft';
}
$aventura_footer_type = '';
$aventura_left_fb = '';
$aventura_left_tw = '';
$aventura_left_ins = '';
$aventura_left_yt = '';
$aventura_left_vm = '';
$aventura_left_fl = '';

wp_enqueue_script('owl-carousel');
wp_enqueue_style('owl-carousel');

$tz_bgftov = $tz_bgft = $aventura_footer_style = $tz_style = $tz_efect = '';

if (is_page() && $aventura_footer_page_option == 'custom'):
    $aventura_footer_type = $aventura_footer_page_select;
    if ($aventura_footer_type == '0'):
        if ($aventura_footer_one_option == '1'){
            $tz_efect = '';
        }else{
            $tz_efect = 'tz_sloverlay tz_bgft';
        }
    endif;
else:
    $aventura_footer_type = $aventura_footer_theme_type;
    if ($aventura_footer_type == "0" && $aventura_footer_bg == "0" && $aventura_footer_ovl == "1") {
        $tz_bgftov = "tz_sloverlay";
    };
    if ($aventura_footer_type == '0' && $aventura_footer_bg == "0") {
        $tz_bgft = "tz_bgft";
    }
    $tz_efect = $tz_bgftov . ' ' . $tz_bgft;
endif;


$aventura_footer_class = '';
if ($aventura_footer_type == '1') {
    $aventura_footer_class = 'tz-footer-type-2';
} elseif ($aventura_footer_type == '2') {
    $aventura_footer_class = 'tz-footer-type-3';
    if ($aventura_footer_gallery_type == '1') {
        $aventura_footer_gallery_type = 'tz_hide';
    }
} elseif ($aventura_footer_type == '3') {
    $aventura_footer_class = 'tz-footer-type-4';
} else {
    $aventura_footer_class = 'tz-footer-type-1';
}

if ($aventura_footer_type == '0' || $aventura_footer_type == '1') {
    if ($aventura_footer_page_bgimage != '' || $aventura_footer_page_bgcolo != '' || $aventura_footer_page_padding != ''):
        $aventura_footer_style .= 'style="';
        if ($aventura_footer_page_bgimage != ''):
            foreach ($aventura_footer_page_bgimage as $aventura_image):
                $aventura_footer_style .= 'background-image: url(' . $aventura_image["full_url"] . '); background-size: cover;background-position: 50% 50%;';
            endforeach;
        endif;

        if ($aventura_footer_page_bgcolo != ''):
            $aventura_footer_style .= 'background-color:' . $aventura_footer_page_bgcolo . ';';
        endif;

        if ($aventura_footer_page_padding != ''):
            $aventura_footer_style .= 'padding-bottom:' . $aventura_footer_page_padding . ';';
        endif;
        $aventura_footer_style .= '"';
    endif;
    if ($aventura_footer_one_option != '1'){
        $tz_style = $aventura_footer_style;
    }
}

$aventura_footer_logo = '';
if ($aventura_footer_type == '1') {
    $aventura_footer_logo = $aventura_footer_logo_type_2;
} elseif ($aventura_footer_type == '2') {
    $aventura_footer_logo = $aventura_footer_logo_type_3;
} else {
    $aventura_footer_logo = $aventura_footer_logo_type_1;
}

if (is_page() && $aventura_footer_bottom_page_option == 'custom'):
    $aventura_footer_bottom_type = $aventura_footer_bottom_page_select;
else:
    $aventura_footer_bottom_type = $aventura_footer_type_select;
endif;

if ($aventura_footer_bottom_type == 1) {
    $aventura_left_fb = $aventura_footer_social_facebook;
    $aventura_left_tw = $aventura_footer_social_twitter;
    $aventura_left_ins = $aventura_footer_social_instagram;
    $aventura_left_yt = $aventura_footer_social_youtube;
    $aventura_left_vm = $aventura_footer_social_vimeo;
    $aventura_left_fl = $aventura_footer_social_flickr;
}
?>
<?php if (!is_page_template('template-homeslide.php' ) && !is_page_template('template-landingpage.php' )): ?>

    <?php get_template_part('template_inc/inc', 'newsletter'); ?>
    <footer class="tz-footer <?php echo $tz_header_t9;?> <?php echo esc_attr($aventura_footer_class)?> <?php echo $tz_efect.' '; if ($aventura_footer_bottom_type == '2'): echo "ft_credit";endif;?> <?php if($aventura_footer_page_padding != ''){echo 'tz_cstyle';}?>" <?php if($tz_style != 'style=""'):echo $tz_style; endif; ?>>
        <?php if (($aventura_footer_type == "0" && $aventura_footer_bg == "0") || ($aventura_footer_type == '0' && $aventura_footer_one_option == '0')): ?>
        <div class="tz_background "></div>
        <div class="tz-footer-content">

            <?php endif; ?>
            <?php
            if (is_active_sidebar("tz-plazart-footer-1") || is_active_sidebar("tz-plazart-footer-2") || is_active_sidebar("tz-plazart-footer-3") || is_active_sidebar("tz-plazart-footer-4") || is_active_sidebar("tz-plazart-footer-5")) {
                ?>
                <?php if ($aventura_footer_col != '0'): ?>
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
                <?php endif; ?>
                <?php if ($aventura_footer_type == '2') { ?>
                    <?php if ($aventura_footer_col != '0'): ?>
                        <?php $aventura_partner = $aventura_options['opt-gallery']; ?>
                        <?php if ($aventura_options['opt-gallery'] != ''): ?>
                            <div class="tz-footer-center <?php echo $aventura_footer_gallery_type; ?>">
                                <div class="container">
                                    <div class="partner-slider owl-carousel">
                                        <?php
                                        $aventura_partner_array = explode(',', $aventura_partner);
                                        foreach ($aventura_partner_array as $partner):
                                            ?>
                                            <div class="item">
                                                <?php
                                                echo wp_get_attachment_image($partner, 'full');
                                                ?>
                                            </div>
                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php } ?>
            <?php } ?>

            <?php if ($aventura_footer_type == '0' || $aventura_footer_type == '1' || $aventura_footer_type == '2') { ?>
                <div class="tz-footer-bottom <?php if ($aventura_footer_bottom_type == '2'): echo "ft_credit"; elseif ($aventura_footer_bottom_type == '1'):echo 'tz_social';endif; ?>">
                    <div class="container">
                        <div class="tz-footer-bottom-box">
                            <div class="row">
                                <?php if ($aventura_footer_bottom_type == '0'):
                                    $bf_cl = 'col-md-4';
                                    if($aventura_footer_link == false || $aventura_footer_logo==''){
                                        $bf_cl = 'col-md-6';
                                    }
                                    if($aventura_footer_link == true && $aventura_footer_logo==''){
                                        $bf_cl = 'col-md-6';
                                    }
                                    if($aventura_footer_link == false && $aventura_footer_logo==''){
                                        $bf_cl = 'col-md-12 text-center ';
                                    }
                                    ?>
                                    <div class="tz-copyright <?php echo esc_attr($bf_cl);?>">
                                        <?php if ($aventura_copyright != ''):
                                            echo ent2ncr($aventura_copyright);
                                        else:
                                            echo esc_html__('Copyright Aventura, All Right Reserved', 'aventura');
                                        endif;
                                        ?>
                                    </div>
                                    <?php if ($aventura_footer_logo != ''): ?>
                                    <div class="tz-footer-logo <?php echo esc_attr($bf_cl);?>">
                                            <img src="<?php echo esc_attr($aventura_footer_logo); ?>"
                                                 alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                    </div>
                                <?php endif; ?>
                                    <?php
                                    if ($aventura_footer_link == true) {
                                        ?>
                                        <div class="tz-footer-link <?php echo esc_attr($bf_cl);?>">
                                            <?php

                                            if (has_nav_menu('footer-menu')) {
                                                wp_nav_menu(array(
                                                    'theme_location' => 'footer-menu',
                                                    'menu_class' => '',
                                                    'menu_id' => '',
                                                    'container' => false
                                                ));
                                            }

                                            ?>
                                        </div>
                                    <?php } ?>
                                <?php elseif ($aventura_footer_bottom_type == '1'): ?>

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
                                <?php else: ?>
                                    <div class="tz-copyright_c col-md-4">
                                        <?php if ($aventura_copyright != ''):
                                            echo ent2ncr($aventura_copyright);
                                        else:
                                            echo esc_html__('Copyright Aventura, All Right Reserved', 'aventura');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="tz-footer-logo_c col-md-4">
                                        <?php if ($aventura_footer_logo != ''): ?>

                                            <img src="<?php echo esc_attr($aventura_footer_logo); ?>"
                                                 alt="<?php echo esc_attr(get_bloginfo('title')) ?>"/>
                                        <?php endif; ?>
                                    </div>
                                    <?php $aventura_partner = isset($aventura_options['opt-gallerys']) ? $aventura_options['opt-gallerys'] : ''; ?>
                                    <div class="tz-footer-credit col-md-4">
                                        <?php
                                        $aventura_partner_array = explode(',', $aventura_partner);
                                        foreach ($aventura_partner_array as $partner):
                                            ?>
                                            <div class="item">
                                                <?php
                                                echo wp_get_attachment_image($partner, 'full');
                                                ?>
                                            </div>
                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (($aventura_footer_type == "0" && $aventura_footer_bg == "0") || ($aventura_footer_type == '0' && $aventura_footer_one_option == '0')): ?></div><?php endif; ?>
    </footer>
    <div class="tz-form-booking-ajax-content"></div>
    <div class="tz-reviews-ajax-content"></div>
    <?php
    if ($aventura_btn_backtotop == '1') {
        ?>
        <div class="aventura-backtotop">
            <i class="fa fa-caret-up"></i>
        </div>
        <?php
    }
    ?>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
