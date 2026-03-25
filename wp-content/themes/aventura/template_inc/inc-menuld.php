<?php
global $aventura_options;

$aventura_register_page = ((!isset($aventura_options['aventura_register_page'])) || empty($aventura_options['aventura_register_page'])) ? '' : $aventura_options['aventura_register_page'];
if ($aventura_register_page != '') {
    $aventura_register_url = add_query_arg('action', 'register', aventura_get_permalink_clang($aventura_register_page));
} else {
    $aventura_register_url = wp_registration_url();
}

/* Header Landing Page */
$aventura_header_land_menu_locations = ((!isset($aventura_options['aventura_header_land_menu_locations'])) || empty($aventura_options['aventura_header_land_menu_locations'])) ? 'custom-menu-3' : $aventura_options['aventura_header_land_menu_locations'];
$aventura_header_land_logo_option = ((!isset($aventura_options['aventura_header_land_logo_option'])) || empty($aventura_options['aventura_header_land_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_land_logo_option'];
$aventura_header_land_logo_image = ((!isset($aventura_options['aventura_header_land_logo_image'])) || empty($aventura_options['aventura_header_land_logo_image'])) ? '' : $aventura_options['aventura_header_land_logo_image'];
$aventura_header_land_logo_text = ((!isset($aventura_options['aventura_header_land_logo_text'])) || empty($aventura_options['aventura_header_land_logo_text'])) ? '' : $aventura_options['aventura_header_land_logo_text'];
$aventura_header_land_btn_text = ((!isset($aventura_options['aventura_header_land_btn_text'])) || empty($aventura_options['aventura_header_land_btn_text'])) ? '' : $aventura_options['aventura_header_land_btn_text'];
$aventura_header_land_sticky = ((!isset($aventura_options['aventura_header_land_sticky'])) || empty($aventura_options['aventura_header_land_sticky'])) ? '' : $aventura_options['aventura_header_land_sticky'];
$aventura_header_btn_link = ((!isset($aventura_options['aventura_header_btn_link'])) || empty($aventura_options['aventura_header_btn_link'])) ? '' : $aventura_options['aventura_header_btn_link'];


$aventura_location_menu = $aventura_header_land_menu_locations;
$aventura_logotype = $aventura_header_land_logo_option;
$aventura_img_url = $aventura_header_land_logo_image;
$aventura_text = $aventura_header_land_logo_text;
$aventura_btn = $aventura_header_land_btn_text;
$aventura_btn_lk = $aventura_header_btn_link;
$aventura_sticky = $aventura_header_land_sticky;

if($aventura_sticky == 1){
    $mnld_class = ' fixed';
}
?>
<header class="STD_Menu<?php echo $mnld_class; ?>">
    <div class="STD_width">
        <button class="navbar-toggle collapsed STD_navmenu" type="button" data-target="#tz-navbar-collapse"
                data-toggle="collapse">
            <i class="fa fa-bars"></i>
        </button>
        <a class="STD_logo pull_left" href="<?php echo esc_url(get_home_url('/')); ?>"
           title="<?php bloginfo('name'); ?>">
            <?php

            if ($aventura_logotype == 'logo_text') {
                echo('<span class="tz-logo-text">' . esc_html($aventura_text) . '</span>');
            } else {
                if (isset($aventura_img_url) && !empty($aventura_img_url)) :
                    echo '<img src="' . esc_url($aventura_img_url["url"]) . '" alt="' . get_bloginfo('title') . '" />';
                else :
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/logo.png" alt="' . get_bloginfo('title') . '" />';
                endif;
            }
            ?>
        </a>
        <nav class="nav-collapse STD_landingmenu">
            <?php
            if (has_nav_menu($aventura_location_menu)) :
                wp_nav_menu(array(
                    'theme_location' => $aventura_location_menu,
                    'menu_class' => 'nav navbar-nav collapse navbar-collapse landingmenu',
                    'menu_id' => 'tz-navbar-collapse',
                    'container' => false,
                ));
            endif;
            ?>
        </nav>
        <div class="STD_Btn  pull-right">
            <a class="btn_style" href="<?php echo esc_attr($aventura_btn_lk); ?>" target="_blank"><?php echo esc_attr($aventura_btn); ?></a>
        </div>
    </div>
</header>