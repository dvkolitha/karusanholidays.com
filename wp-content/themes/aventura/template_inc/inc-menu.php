<?php
global $aventura_options;

$aventura_register_page = ((!isset($aventura_options['aventura_register_page'])) || empty($aventura_options['aventura_register_page'])) ? '' : $aventura_options['aventura_register_page'];
if ($aventura_register_page != '') {
    $aventura_register_url = add_query_arg('action', 'register', aventura_get_permalink_clang($aventura_register_page));
} else {
    $aventura_register_url = wp_registration_url();
}

/* Header Select Type */
$aventura_header_theme_select = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_header_page_option = aventura_metabox('aventura_header_page_option', '', '', 'default');
$aventura_header_page_select = aventura_metabox('aventura_header_page_type', '', '', '0');

/* Header Type 1*/
$aventura_header_type_1_location_menu = ((!isset($aventura_options['aventura_header_type_1_menu_locations'])) || empty($aventura_options['aventura_header_type_1_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_1_menu_locations'];
$aventura_header_type_1_top_display = ((!isset($aventura_options['aventura_header_type_1_top_display'])) || empty($aventura_options['aventura_header_type_1_top_display'])) ? '0' : $aventura_options['aventura_header_type_1_top_display'];
$aventura_header_type_1_top_email = ((!isset($aventura_options['aventura_header_type_1_top_email'])) || empty($aventura_options['aventura_header_type_1_top_email'])) ? 'info@aventura.com' : $aventura_options['aventura_header_type_1_top_email'];
$aventura_header_type_1_top_phone = ((!isset($aventura_options['aventura_header_type_1_top_phone'])) || empty($aventura_options['aventura_header_type_1_top_phone'])) ? '+1-888-66-5555' : $aventura_options['aventura_header_type_1_top_phone'];
$aventura_header_type_1_top_address = ((!isset($aventura_options['aventura_header_type_1_top_address'])) || empty($aventura_options['aventura_header_type_1_top_address'])) ? '8 Boulevard du Palais, 75001 Paris, France' : $aventura_options['aventura_header_type_1_top_address'];
$aventura_header_type_1_top_randl = ((!isset($aventura_options['aventura_header_type_1_top_randl'])) || empty($aventura_options['aventura_header_type_1_top_randl'])) ? '0' : $aventura_options['aventura_header_type_1_top_randl'];
$aventura_header_type_1_top_menu = ((!isset($aventura_options['aventura_header_type_1_top_menu'])) || empty($aventura_options['aventura_header_type_1_top_menu'])) ? 'choose' : $aventura_options['aventura_header_type_1_top_menu'];

$aventura_header_type_1_logo_type = ((!isset($aventura_options['aventura_header_type_1_logo_option'])) || empty($aventura_options['aventura_header_type_1_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_1_logo_option'];
$aventura_header_type_1_logo_image = ((!isset($aventura_options['aventura_header_type_1_logo_image'])) || empty($aventura_options['aventura_header_type_1_logo_image'])) ? '' : $aventura_options['aventura_header_type_1_logo_image'];
$aventura_header_type_1_logo_text = ((!isset($aventura_options['aventura_header_type_1_logo_text'])) || empty($aventura_options['aventura_header_type_1_logo_text'])) ? '' : $aventura_options['aventura_header_type_1_logo_text'];
$aventura_header_type_1_cart = ((!isset($aventura_options['aventura_header_type_1_cart'])) || empty($aventura_options['aventura_header_type_1_cart'])) ? '' : $aventura_options['aventura_header_type_1_cart'];
$aventura_header_type_1_search = ((!isset($aventura_options['aventura_header_type_1_search'])) || empty($aventura_options['aventura_header_type_1_search'])) ? '' : $aventura_options['aventura_header_type_1_search'];
$aventura_header_type_1_sticky = ((!isset($aventura_options['aventura_header_type_1_sticky'])) || empty($aventura_options['aventura_header_type_1_sticky'])) ? '' : $aventura_options['aventura_header_type_1_sticky'];

/* Header Type 2*/
$aventura_header_type_2_location_menu = ((!isset($aventura_options['aventura_header_type_2_menu_locations'])) || empty($aventura_options['aventura_header_type_2_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_2_menu_locations'];
$aventura_header_type_2_logo_type = ((!isset($aventura_options['aventura_header_type_2_logo_option'])) || empty($aventura_options['aventura_header_type_2_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_2_logo_option'];
$aventura_header_type_2_logo_image = ((!isset($aventura_options['aventura_header_type_2_logo_image'])) || empty($aventura_options['aventura_header_type_2_logo_image'])) ? '' : $aventura_options['aventura_header_type_2_logo_image'];
$aventura_header_type_2_logo_text = ((!isset($aventura_options['aventura_header_type_2_logo_text'])) || empty($aventura_options['aventura_header_type_2_logo_text'])) ? '' : $aventura_options['aventura_header_type_2_logo_text'];
$aventura_header_type_2_cart = ((!isset($aventura_options['aventura_header_type_2_cart'])) || empty($aventura_options['aventura_header_type_2_cart'])) ? '' : $aventura_options['aventura_header_type_2_cart'];
$aventura_header_type_2_search = ((!isset($aventura_options['aventura_header_type_2_search'])) || empty($aventura_options['aventura_header_type_2_search'])) ? '' : $aventura_options['aventura_header_type_2_search'];
$aventura_header_type_2_sticky = ((!isset($aventura_options['aventura_header_type_2_sticky'])) || empty($aventura_options['aventura_header_type_2_sticky'])) ? '' : $aventura_options['aventura_header_type_2_sticky'];

/* Header Type 3*/
$aventura_header_type_3_location_menu = ((!isset($aventura_options['aventura_header_type_3_menu_locations'])) || empty($aventura_options['aventura_header_type_3_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_3_menu_locations'];
$aventura_header_type_3_top_display = ((!isset($aventura_options['aventura_header_type_3_top_display'])) || empty($aventura_options['aventura_header_type_3_top_display'])) ? '0' : $aventura_options['aventura_header_type_3_top_display'];
$aventura_header_type_3_top_email = ((!isset($aventura_options['aventura_header_type_3_top_email'])) || empty($aventura_options['aventura_header_type_3_top_email'])) ? 'info@aventura.com' : $aventura_options['aventura_header_type_3_top_email'];
$aventura_header_type_3_top_phone = ((!isset($aventura_options['aventura_header_type_3_top_phone'])) || empty($aventura_options['aventura_header_type_3_top_phone'])) ? '+1-888-66-5555' : $aventura_options['aventura_header_type_3_top_phone'];
$aventura_header_type_3_top_address = ((!isset($aventura_options['aventura_header_type_3_top_address'])) || empty($aventura_options['aventura_header_type_3_top_address'])) ? '8 Boulevard du Palais, 75001 Paris, France' : $aventura_options['aventura_header_type_3_top_address'];
$aventura_header_type_3_top_randl = ((!isset($aventura_options['aventura_header_type_3_top_randl'])) || empty($aventura_options['aventura_header_type_3_top_randl'])) ? '0' : $aventura_options['aventura_header_type_3_top_randl'];
$aventura_header_type_3_top_menu = ((!isset($aventura_options['aventura_header_type_3_top_menu'])) || empty($aventura_options['aventura_header_type_3_top_menu'])) ? 'choose' : $aventura_options['aventura_header_type_3_top_menu'];
$aventura_header_type_3_logo_type = ((!isset($aventura_options['aventura_header_type_3_logo_option'])) || empty($aventura_options['aventura_header_type_3_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_3_logo_option'];
$aventura_header_type_3_logo_image = ((!isset($aventura_options['aventura_header_type_3_logo_image'])) || empty($aventura_options['aventura_header_type_3_logo_image'])) ? '' : $aventura_options['aventura_header_type_3_logo_image'];
$aventura_header_type_3_logo_text = ((!isset($aventura_options['aventura_header_type_3_logo_text'])) || empty($aventura_options['aventura_header_type_3_logo_text'])) ? '' : $aventura_options['aventura_header_type_3_logo_text'];
$aventura_header_type_3_cart = ((!isset($aventura_options['aventura_header_type_3_cart'])) || empty($aventura_options['aventura_header_type_3_cart'])) ? '' : $aventura_options['aventura_header_type_3_cart'];
$aventura_header_type_3_search = ((!isset($aventura_options['aventura_header_type_3_search'])) || empty($aventura_options['aventura_header_type_3_search'])) ? '' : $aventura_options['aventura_header_type_3_search'];
$aventura_header_type_3_sticky = ((!isset($aventura_options['aventura_header_type_3_sticky'])) || empty($aventura_options['aventura_header_type_3_sticky'])) ? '' : $aventura_options['aventura_header_type_3_sticky'];

/* Header Type 4*/
$aventura_header_type_4_location_menu = ((!isset($aventura_options['aventura_header_type_4_menu_locations'])) || empty($aventura_options['aventura_header_type_4_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_4_menu_locations'];
$aventura_header_type_4_logo_type = ((!isset($aventura_options['aventura_header_type_4_logo_option'])) || empty($aventura_options['aventura_header_type_4_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_4_logo_option'];
$aventura_header_type_4_logo_image = ((!isset($aventura_options['aventura_header_type_4_logo_image'])) || empty($aventura_options['aventura_header_type_4_logo_image'])) ? '' : $aventura_options['aventura_header_type_4_logo_image'];
$aventura_header_type_4_logo_text = ((!isset($aventura_options['aventura_header_type_4_logo_text'])) || empty($aventura_options['aventura_header_type_4_logo_text'])) ? '' : $aventura_options['aventura_header_type_4_logo_text'];
$aventura_header_type_4_cart = ((!isset($aventura_options['aventura_header_type_4_cart'])) || empty($aventura_options['aventura_header_type_4_cart'])) ? '' : $aventura_options['aventura_header_type_4_cart'];
$aventura_header_type_4_search = ((!isset($aventura_options['aventura_header_type_4_search'])) || empty($aventura_options['aventura_header_type_4_search'])) ? '' : $aventura_options['aventura_header_type_4_search'];
$aventura_header_type_4_sticky = ((!isset($aventura_options['aventura_header_type_4_sticky'])) || empty($aventura_options['aventura_header_type_4_sticky'])) ? '' : $aventura_options['aventura_header_type_4_sticky'];

/* Header Type 5*/
$aventura_header_type_5_revolution_slider = ((!isset($aventura_options['aventura_header_type_5_revolution_slider'])) || empty($aventura_options['aventura_header_type_5_revolution_slider'])) ? '' : $aventura_options['aventura_header_type_5_revolution_slider'];
$aventura_header_type_5_search_options = ((!isset($aventura_options['aventura_header_type_5_search_options'])) || empty($aventura_options['aventura_header_type_5_search_options'])) ? '2' : $aventura_options['aventura_header_type_5_search_options'];
$aventura_header_type_5_field_name_option = ((!isset($aventura_options['aventura_header_type_5_field_name_option'])) || empty($aventura_options['aventura_header_type_5_field_name_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_name_option'];
$aventura_header_type_5_field_name_label = ((!isset($aventura_options['aventura_header_type_5_field_name_label'])) || empty($aventura_options['aventura_header_type_5_field_name_label'])) ? '' : $aventura_options['aventura_header_type_5_field_name_label'];
$aventura_header_type_5_field_destination_option = ((!isset($aventura_options['aventura_header_type_5_field_destination_option'])) || empty($aventura_options['aventura_header_type_5_field_destination_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_destination_option'];
$aventura_header_type_5_field_destination_label = ((!isset($aventura_options['aventura_header_type_5_field_destination_label'])) || empty($aventura_options['aventura_header_type_5_field_destination_label'])) ? '' : $aventura_options['aventura_header_type_5_field_destination_label'];
$aventura_header_type_5_field_date_option = ((!isset($aventura_options['aventura_header_type_5_field_date_option'])) || empty($aventura_options['aventura_header_type_5_field_date_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_date_option'];
$aventura_header_type_5_field_date_label = ((!isset($aventura_options['aventura_header_type_5_field_date_label'])) || empty($aventura_options['aventura_header_type_5_field_date_label'])) ? '' : $aventura_options['aventura_header_type_5_field_date_label'];
$aventura_header_type_5_field_duration_option = ((!isset($aventura_options['aventura_header_type_5_field_duration_option'])) || empty($aventura_options['aventura_header_type_5_field_duration_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_duration_option'];
$aventura_header_type_5_field_duration_label = ((!isset($aventura_options['aventura_header_type_5_field_duration_label'])) || empty($aventura_options['aventura_header_type_5_field_duration_label'])) ? '' : $aventura_options['aventura_header_type_5_field_duration_label'];
$aventura_header_type_5_field_category_option = ((!isset($aventura_options['aventura_header_type_5_field_category_option'])) || empty($aventura_options['aventura_header_type_5_field_category_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_category_option'];
$aventura_header_type_5_field_category_label = ((!isset($aventura_options['aventura_header_type_5_field_category_label'])) || empty($aventura_options['aventura_header_type_5_field_category_label'])) ? '' : $aventura_options['aventura_header_type_5_field_category_label'];
$aventura_header_type_5_field_language_option = ((!isset($aventura_options['aventura_header_type_5_field_language_option'])) || empty($aventura_options['aventura_header_type_5_field_language_option'])) ? '1' : $aventura_options['aventura_header_type_5_field_language_option'];
$aventura_header_type_5_field_language_label = ((!isset($aventura_options['aventura_header_type_5_field_language_label'])) || empty($aventura_options['aventura_header_type_5_field_language_label'])) ? '' : $aventura_options['aventura_header_type_5_field_language_label'];
$aventura_header_type_5_search_button = ((!isset($aventura_options['aventura_header_type_5_search_button'])) || empty($aventura_options['aventura_header_type_5_search_button'])) ? '' : $aventura_options['aventura_header_type_5_search_button'];
$aventura_header_type_5_cart = ((!isset($aventura_options['aventura_header_type_5_cart'])) || empty($aventura_options['aventura_header_type_5_cart'])) ? '' : $aventura_options['aventura_header_type_5_cart'];
$aventura_header_type_5_search = ((!isset($aventura_options['aventura_header_type_5_search'])) || empty($aventura_options['aventura_header_type_5_search'])) ? '' : $aventura_options['aventura_header_type_5_search'];
$aventura_header_type_5_sticky = ((!isset($aventura_options['aventura_header_type_5_sticky'])) || empty($aventura_options['aventura_header_type_5_sticky'])) ? '' : $aventura_options['aventura_header_type_5_sticky'];

$aventura_header_type_5_location_menu = ((!isset($aventura_options['aventura_header_type_5_menu_locations'])) || empty($aventura_options['aventura_header_type_5_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_5_menu_locations'];
$aventura_header_type_5_logo_type = ((!isset($aventura_options['aventura_header_type_5_logo_option'])) || empty($aventura_options['aventura_header_type_5_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_5_logo_option'];
$aventura_header_type_5_logo_image = ((!isset($aventura_options['aventura_header_type_5_logo_image'])) || empty($aventura_options['aventura_header_type_5_logo_image'])) ? '' : $aventura_options['aventura_header_type_5_logo_image'];
$aventura_header_type_5_logo_text = ((!isset($aventura_options['aventura_header_type_5_logo_text'])) || empty($aventura_options['aventura_header_type_5_logo_text'])) ? '' : $aventura_options['aventura_header_type_5_logo_text'];

/* Header Type 6*/
$aventura_header_type_6_location_menu = ((!isset($aventura_options['aventura_header_type_6_menu_locations'])) || empty($aventura_options['aventura_header_type_6_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_6_menu_locations'];
$aventura_header_type_6_logo_type = ((!isset($aventura_options['aventura_header_type_6_logo_option'])) || empty($aventura_options['aventura_header_type_6_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_6_logo_option'];
$aventura_header_type_6_logo_image = ((!isset($aventura_options['aventura_header_type_6_logo_image'])) || empty($aventura_options['aventura_header_type_6_logo_image'])) ? '' : $aventura_options['aventura_header_type_6_logo_image'];
$aventura_header_type_6_logo_text = ((!isset($aventura_options['aventura_header_type_6_logo_text'])) || empty($aventura_options['aventura_header_type_6_logo_text'])) ? '' : $aventura_options['aventura_header_type_6_logo_text'];
$aventura_header_type_6_cart = ((!isset($aventura_options['aventura_header_type_6_cart'])) || empty($aventura_options['aventura_header_type_6_cart'])) ? '' : $aventura_options['aventura_header_type_6_cart'];
$aventura_header_type_6_search = ((!isset($aventura_options['aventura_header_type_6_search'])) || empty($aventura_options['aventura_header_type_6_search'])) ? '' : $aventura_options['aventura_header_type_6_search'];
$aventura_header_type_6_sticky = ((!isset($aventura_options['aventura_header_type_6_sticky'])) || empty($aventura_options['aventura_header_type_6_sticky'])) ? '' : $aventura_options['aventura_header_type_6_sticky'];
/* Header Type 7*/
$aventura_header_type_7_location_menu = ((!isset($aventura_options['aventura_header_type_7_menu_locations'])) || empty($aventura_options['aventura_header_type_7_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_7_menu_locations'];
$aventura_header_type_7_logo_type = ((!isset($aventura_options['aventura_header_type_7_logo_option'])) || empty($aventura_options['aventura_header_type_7_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_7_logo_option'];
$aventura_header_type_7_logo_image = ((!isset($aventura_options['aventura_header_type_7_logo_image'])) || empty($aventura_options['aventura_header_type_7_logo_image'])) ? '' : $aventura_options['aventura_header_type_7_logo_image'];
$aventura_header_type_7_logo_text = ((!isset($aventura_options['aventura_header_type_7_logo_text'])) || empty($aventura_options['aventura_header_type_7_logo_text'])) ? '' : $aventura_options['aventura_header_type_7_logo_text'];
$aventura_header_type_7_cart = ((!isset($aventura_options['aventura_header_type_7_cart'])) || empty($aventura_options['aventura_header_type_7_cart'])) ? '' : $aventura_options['aventura_header_type_7_cart'];
$aventura_header_type_7_search = ((!isset($aventura_options['aventura_header_type_7_search'])) || empty($aventura_options['aventura_header_type_7_search'])) ? '' : $aventura_options['aventura_header_type_7_search'];
$aventura_header_type_7_sticky = ((!isset($aventura_options['aventura_header_type_7_sticky'])) || empty($aventura_options['aventura_header_type_7_sticky'])) ? '' : $aventura_options['aventura_header_type_7_sticky'];
/* Header Type 8*/
$aventura_header_type_8_location_menu = ((!isset($aventura_options['aventura_header_type_8_menu_locations'])) || empty($aventura_options['aventura_header_type_8_menu_locations'])) ? 'custom-menu-6' : $aventura_options['aventura_header_type_8_menu_locations'];
$aventura_header_type_8_logo_type = ((!isset($aventura_options['aventura_header_type_8_logo_option'])) || empty($aventura_options['aventura_header_type_8_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_8_logo_option'];
$aventura_header_type_8_logo_image = ((!isset($aventura_options['aventura_header_type_8_logo_image'])) || empty($aventura_options['aventura_header_type_8_logo_image'])) ? '' : $aventura_options['aventura_header_type_8_logo_image'];
$aventura_header_type_8_logo_text = ((!isset($aventura_options['aventura_header_type_8_logo_text'])) || empty($aventura_options['aventura_header_type_8_logo_text'])) ? '' : $aventura_options['aventura_header_type_8_logo_text'];
$aventura_header_type_8_cart = ((!isset($aventura_options['aventura_header_type_8_cart'])) || empty($aventura_options['aventura_header_type_8_cart'])) ? '' : $aventura_options['aventura_header_type_8_cart'];
$aventura_header_type_8_search = ((!isset($aventura_options['aventura_header_type_8_search'])) || empty($aventura_options['aventura_header_type_8_search'])) ? '' : $aventura_options['aventura_header_type_8_search'];
$aventura_header_type_8_sticky = ((!isset($aventura_options['aventura_header_type_8_sticky'])) || empty($aventura_options['aventura_header_type_8_sticky'])) ? '' : $aventura_options['aventura_header_type_8_sticky'];
$aventura_header_type_8_top_phone = ((!isset($aventura_options['aventura_header_type_8_top_phone'])) || empty($aventura_options['aventura_header_type_8_top_phone'])) ? 'Call us for free' : $aventura_options['aventura_header_type_8_top_phone'];
$aventura_header_type_8_top_phone_lk = ((!isset($aventura_options['aventura_header_type_8_top_phone_lk'])) || empty($aventura_options['aventura_header_type_8_top_phone_lk'])) ? '' : $aventura_options['aventura_header_type_8_top_phone_lk'];
$aventura_header_type_8_top_phone_nb = ((!isset($aventura_options['aventura_header_type_8_top_phone_lk'])) || empty($aventura_options['aventura_header_type_8_top_phone_nb'])) ? '123-456-789' : $aventura_options['aventura_header_type_8_top_phone_nb'];
$aventura_header_type_8_top_flk = ((!isset($aventura_options['aventura_header_type_8_top_flk'])) || empty($aventura_options['aventura_header_type_8_top_flk'])) ? '' : $aventura_options['aventura_header_type_8_top_flk'];
$aventura_header_type_8_top_display = ((!isset($aventura_options['aventura_header_type_8_top_display'])) || empty($aventura_options['aventura_header_type_8_top_display'])) ? '0' : $aventura_options['aventura_header_type_8_top_display'];
$aventura_header_type_8_filter = ((!isset($aventura_options['aventura_header_type_8_filter'])) || empty($aventura_options['aventura_header_type_8_filter'])) ? '0' : $aventura_options['aventura_header_type_8_filter'];
$aventura_header_type_8_top_filter = ((!isset($aventura_options['aventura_header_type_8_top_filter'])) || empty($aventura_options['aventura_header_type_8_top_filter'])) ? 'On order over $50' : $aventura_options['aventura_header_type_8_top_filter'];
$aventura_header_type_8_top_filter_tt = ((!isset($aventura_options['aventura_header_type_8_top_filter_tt'])) || empty($aventura_options['aventura_header_type_8_top_filter_tt'])) ? 'Free Shipping' : $aventura_options['aventura_header_type_8_top_filter_tt'];
/* Header Type 9*/
$aventura_header_type_9_location_menu = ((!isset($aventura_options['aventura_header_type_9_menu_locations'])) || empty($aventura_options['aventura_header_type_9_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_9_menu_locations'];
$aventura_header_type_9_logo_type = ((!isset($aventura_options['aventura_header_type_9_logo_option'])) || empty($aventura_options['aventura_header_type_9_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_9_logo_option'];
$aventura_header_type_9_logo_image = ((!isset($aventura_options['aventura_header_type_9_logo_image'])) || empty($aventura_options['aventura_header_type_9_logo_image'])) ? '' : $aventura_options['aventura_header_type_9_logo_image'];
$aventura_header_type_9_logo_text = ((!isset($aventura_options['aventura_header_type_9_logo_text'])) || empty($aventura_options['aventura_header_type_9_logo_text'])) ? '' : $aventura_options['aventura_header_type_9_logo_text'];
$aventura_header_type_9_sticky = ((!isset($aventura_options['aventura_header_type_9_sticky'])) || empty($aventura_options['aventura_header_type_9_sticky'])) ? '' : $aventura_options['aventura_header_type_9_sticky'];
/* Header Type 10*/
$aventura_header_type_10_location_menu_left = ((!isset($aventura_options['aventura_header_type_10_menu_locations_left'])) || empty($aventura_options['aventura_header_type_10_menu_locations_left'])) ? 'custom-menu-4' : $aventura_options['aventura_header_type_10_menu_locations_left'];
$aventura_header_type_10_location_menu_right = ((!isset($aventura_options['aventura_header_type_10_menu_locations_right'])) || empty($aventura_options['aventura_header_type_10_menu_locations_right'])) ? 'custom-menu-5' : $aventura_options['aventura_header_type_10_menu_locations_right'];
$aventura_header_type_10_logo_type = ((!isset($aventura_options['aventura_header_type_10_logo_option'])) || empty($aventura_options['aventura_header_type_10_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_10_logo_option'];
$aventura_header_type_10_logo_image = ((!isset($aventura_options['aventura_header_type_10_logo_image'])) || empty($aventura_options['aventura_header_type_10_logo_image'])) ? '' : $aventura_options['aventura_header_type_10_logo_image'];
$aventura_header_type_10_logo_text = ((!isset($aventura_options['aventura_header_type_10_logo_text'])) || empty($aventura_options['aventura_header_type_10_logo_text'])) ? '' : $aventura_options['aventura_header_type_10_logo_text'];
$aventura_header_type_10_sticky = ((!isset($aventura_options['aventura_header_type_10_sticky'])) || empty($aventura_options['aventura_header_type_10_sticky'])) ? '' : $aventura_options['aventura_header_type_10_sticky'];
$aventura_header_type_10_search_r = ((!isset($aventura_options['aventura_header_type_10_search_r'])) || empty($aventura_options['aventura_header_type_10_search_r'])) ? '' : $aventura_options['aventura_header_type_10_search_r'];
$aventura_header_type_10_cart_r = ((!isset($aventura_options['aventura_header_type_10_cart_r'])) || empty($aventura_options['aventura_header_type_10_cart_r'])) ? '' : $aventura_options['aventura_header_type_10_cart_r'];
/* Header Type 11*/
$aventura_header_type_11_location_menu = ((!isset($aventura_options['aventura_header_type_11_menu_locations'])) || empty($aventura_options['aventura_header_type_11_menu_locations'])) ? 'primary' : $aventura_options['aventura_header_type_11_menu_locations'];
$aventura_header_type_11_top_display = ((!isset($aventura_options['aventura_header_type_11_top_display'])) || empty($aventura_options['aventura_header_type_11_top_display'])) ? '0' : $aventura_options['aventura_header_type_11_top_display'];
$aventura_header_type_11_top_email = ((!isset($aventura_options['aventura_header_type_11_top_email'])) || empty($aventura_options['aventura_header_type_11_top_email'])) ? 'info@aventura.com' : $aventura_options['aventura_header_type_11_top_email'];
$aventura_header_type_11_top_phone = ((!isset($aventura_options['aventura_header_type_11_top_phone'])) || empty($aventura_options['aventura_header_type_11_top_phone'])) ? '+1-888-66-5555' : $aventura_options['aventura_header_type_11_top_phone'];
$aventura_header_type_11_top_address = ((!isset($aventura_options['aventura_header_type_11_top_address'])) || empty($aventura_options['aventura_header_type_11_top_address'])) ? '8 Boulevard du Palais, 75001 Paris, France' : $aventura_options['aventura_header_type_11_top_address'];
$aventura_header_type_11_top_randl = ((!isset($aventura_options['aventura_header_type_11_top_randl'])) || empty($aventura_options['aventura_header_type_11_top_randl'])) ? '0' : $aventura_options['aventura_header_type_11_top_randl'];
$aventura_header_type_11_top_menu = ((!isset($aventura_options['aventura_header_type_11_top_menu'])) || empty($aventura_options['aventura_header_type_11_top_menu'])) ? 'choose' : $aventura_options['aventura_header_type_11_top_menu'];
$aventura_header_type_11_logo_type = ((!isset($aventura_options['aventura_header_type_11_logo_option'])) || empty($aventura_options['aventura_header_type_11_logo_option'])) ? 'logo_image' : $aventura_options['aventura_header_type_11_logo_option'];
$aventura_header_type_11_logo_image = ((!isset($aventura_options['aventura_header_type_11_logo_image'])) || empty($aventura_options['aventura_header_type_11_logo_image'])) ? '' : $aventura_options['aventura_header_type_11_logo_image'];
$aventura_header_type_11_logo_text = ((!isset($aventura_options['aventura_header_type_11_logo_text'])) || empty($aventura_options['aventura_header_type_11_logo_text'])) ? '' : $aventura_options['aventura_header_type_11_logo_text'];
$aventura_header_type_11_cart = ((!isset($aventura_options['aventura_header_type_11_cart'])) || empty($aventura_options['aventura_header_type_11_cart'])) ? '' : $aventura_options['aventura_header_type_11_cart'];
$aventura_header_type_11_search = ((!isset($aventura_options['aventura_header_type_11_search'])) || empty($aventura_options['aventura_header_type_11_search'])) ? '' : $aventura_options['aventura_header_type_11_search'];
$aventura_header_type_11_sticky = ((!isset($aventura_options['aventura_header_type_11_sticky'])) || empty($aventura_options['aventura_header_type_11_sticky'])) ? '' : $aventura_options['aventura_header_type_11_sticky'];

$aventura_tour_search_tour_length = isset( $aventura_options['aventura_tour_search_tour_length'] ) ? $aventura_options['aventura_tour_search_tour_length'] : 15;
$aventura_header_select = '';
$aventura_header_type = '';
$aventura_location_menu = '';
$aventura_header_top = '';
$aventura_top_email = '';
$aventura_top_phone = '';
$aventura_top_address = '';
$aventura_logotype = '';
$aventura_img_url = '';
$aventura_text = '';


if (is_page() && $aventura_header_page_option == 'custom'):
    $aventura_header_select = $aventura_header_page_select;
else:
    $aventura_header_select = $aventura_header_theme_select;
endif;
if ($aventura_header_select == 0) {

    $aventura_header_type = 'header-type-1';
    $aventura_location_menu = $aventura_header_type_1_location_menu;
    $aventura_header_top = $aventura_header_type_1_top_display;
    $aventura_top_email = $aventura_header_type_1_top_email;
    $aventura_top_phone = $aventura_header_type_1_top_phone;
    $aventura_top_address = $aventura_header_type_1_top_address;
    $aventura_top_randl = $aventura_header_type_1_top_randl;
    $aventura_top_menu = $aventura_header_type_1_top_menu;

    $aventura_logotype = $aventura_header_type_1_logo_type;
    $aventura_img_url = $aventura_header_type_1_logo_image;
    $aventura_text = $aventura_header_type_1_logo_text;
    $aventura_cart = $aventura_header_type_1_cart;
    $aventura_search = $aventura_header_type_1_search;
    $aventura_sticky = $aventura_header_type_1_sticky;

} elseif ($aventura_header_select == 1) {

    $aventura_header_type = 'header-type-2';
    $aventura_location_menu = $aventura_header_type_2_location_menu;
    $aventura_logotype = $aventura_header_type_2_logo_type;
    $aventura_img_url = $aventura_header_type_2_logo_image;
    $aventura_text = $aventura_header_type_2_logo_text;
    $aventura_cart = $aventura_header_type_2_cart;
    $aventura_search = $aventura_header_type_2_search;
    $aventura_sticky = $aventura_header_type_2_sticky;

} elseif ($aventura_header_select == 2) {

    $aventura_header_type = 'header-type-3';
    $aventura_location_menu = $aventura_header_type_3_location_menu;
    $aventura_header_top = $aventura_header_type_3_top_display;
    $aventura_top_email = $aventura_header_type_3_top_email;
    $aventura_top_phone = $aventura_header_type_3_top_phone;
    $aventura_top_address = $aventura_header_type_3_top_address;
    $aventura_top_randl = $aventura_header_type_3_top_randl;
    $aventura_top_menu = $aventura_header_type_3_top_menu;
    $aventura_logotype = $aventura_header_type_3_logo_type;
    $aventura_img_url = $aventura_header_type_3_logo_image;
    $aventura_text = $aventura_header_type_3_logo_text;
    $aventura_cart = $aventura_header_type_3_cart;
    $aventura_search = $aventura_header_type_3_search;
    $aventura_sticky = $aventura_header_type_3_sticky;

} elseif ($aventura_header_select == 3) {

    $aventura_header_type = 'header-type-4';
    $aventura_location_menu = $aventura_header_type_4_location_menu;
    $aventura_logotype = $aventura_header_type_4_logo_type;
    $aventura_img_url = $aventura_header_type_4_logo_image;
    $aventura_text = $aventura_header_type_4_logo_text;
    $aventura_cart = $aventura_header_type_4_cart;
    $aventura_search = $aventura_header_type_4_search;
    $aventura_sticky = $aventura_header_type_4_sticky;

} elseif ($aventura_header_select == 4) {

    $aventura_header_type = 'header-type-5';
    $aventura_location_menu = $aventura_header_type_5_location_menu;
    $aventura_logotype = $aventura_header_type_5_logo_type;
    $aventura_img_url = $aventura_header_type_5_logo_image;
    $aventura_text = $aventura_header_type_5_logo_text;
    $aventura_cart = $aventura_header_type_5_cart;
    $aventura_search = $aventura_header_type_5_search;
    $aventura_sticky = $aventura_header_type_5_sticky;

} elseif ($aventura_header_select == 5) {

    $aventura_header_type = 'header-type-6';
    $aventura_location_menu = $aventura_header_type_6_location_menu;
    $aventura_logotype = $aventura_header_type_6_logo_type;
    $aventura_img_url = $aventura_header_type_6_logo_image;
    $aventura_text = $aventura_header_type_6_logo_text;
    $aventura_cart = $aventura_header_type_6_cart;
    $aventura_search = $aventura_header_type_6_search;
    $aventura_sticky = $aventura_header_type_6_sticky;

} elseif ($aventura_header_select == 6) {

    $aventura_header_type = 'header-type-7';
    $aventura_location_menu = $aventura_header_type_7_location_menu;
    $aventura_logotype = $aventura_header_type_7_logo_type;
    $aventura_img_url = $aventura_header_type_7_logo_image;
    $aventura_text = $aventura_header_type_7_logo_text;
    $aventura_cart = $aventura_header_type_7_cart;
    $aventura_search = $aventura_header_type_7_search;
    $aventura_sticky = $aventura_header_type_7_sticky;

} elseif ($aventura_header_select == 7) {

    $aventura_header_type = 'header-type-8';
    $aventura_location_menu = $aventura_header_type_8_location_menu;
    $aventura_logotype = $aventura_header_type_8_logo_type;
    $aventura_img_url = $aventura_header_type_8_logo_image;
    $aventura_text = $aventura_header_type_8_logo_text;
    $aventura_cart = $aventura_header_type_8_cart;
    $aventura_search = $aventura_header_type_8_search;
    $aventura_sticky = $aventura_header_type_8_sticky;
    $aventura_header_top = $aventura_header_type_8_top_display;
    $aventura_top_phone = $aventura_header_type_8_top_phone;
    $aventura_top_phone_lk = $aventura_header_type_8_top_phone_lk;
    $aventura_filter = $aventura_header_type_8_filter;
    $aventura_top_filer = $aventura_header_type_8_top_filter;
    $aventura_top_ft = $aventura_header_type_8_top_filter_tt;
    $aventura_top_flk = $aventura_header_type_8_top_flk;
    $aventura_top_phone_nb = $aventura_header_type_8_top_phone_nb;

} elseif ($aventura_header_select == 8) {

    $aventura_header_type = 'header-type-9';
    $aventura_location_menu = $aventura_header_type_9_location_menu;
    $aventura_logotype = $aventura_header_type_9_logo_type;
    $aventura_img_url = $aventura_header_type_9_logo_image;
    $aventura_text = $aventura_header_type_9_logo_text;
    $aventura_sticky = $aventura_header_type_9_sticky;

} elseif ($aventura_header_select == 9) {

    $aventura_header_type = 'header-type-10';
    $aventura_location_menu_left = $aventura_header_type_10_location_menu_left;
    $aventura_location_menu_right = $aventura_header_type_10_location_menu_right;
    $aventura_logotype = $aventura_header_type_10_logo_type;
    $aventura_img_url = $aventura_header_type_10_logo_image;
    $aventura_text = $aventura_header_type_10_logo_text;
    $aventura_sticky = $aventura_header_type_10_sticky;
    $aventura_cartr = $aventura_header_type_10_cart_r;
    $aventura_searchr = $aventura_header_type_10_search_r;

} elseif ($aventura_header_select == 10) {

    $aventura_header_type = 'header-type-11';
    $aventura_top = 'type-11';
    $aventura_location_menu = $aventura_header_type_11_location_menu;
    $aventura_header_top = $aventura_header_type_11_top_display;
    $aventura_top_email = $aventura_header_type_11_top_email;
    $aventura_top_phone = $aventura_header_type_11_top_phone;
    $aventura_top_randl = $aventura_header_type_11_top_randl;
    $aventura_logotype = $aventura_header_type_11_logo_type;
    $aventura_img_url = $aventura_header_type_11_logo_image;
    $aventura_text = $aventura_header_type_11_logo_text;
    $aventura_cart = $aventura_header_type_11_cart;
    $aventura_search = $aventura_header_type_11_search;
    $aventura_sticky = $aventura_header_type_11_sticky;

}
$aventura_top_phone = preg_replace('!\s+!', ' ', $aventura_top_phone);
$aventura_top_email = preg_replace('!\s+!', ' ', $aventura_top_email);
$aventura_top_address = preg_replace('!\s+!', ' ', $aventura_top_address);
?>
<?php if ($aventura_header_type != 'header-type-2' && $aventura_header_type != 'header-type-4' && $aventura_header_type != 'header-type-6' && $aventura_header_type != 'header-type-7' && $aventura_header_type != 'header-type-5' && $aventura_header_top == '1' && $aventura_header_type != 'header-type-8' && $aventura_header_type != 'header-type-9' && $aventura_header_type != 'header-type-10' && $aventura_header_type != 'header-type-11') { ?>
    <div class="tz-top">
        <div class="container">
            <div class="row">
                <div class="top-left pull-left">
                    <?php if ($aventura_top_phone != ' '): ?>
                        <a id="tel" href="<?php echo esc_html__('tel:', 'aventura') . esc_url($aventura_top_phone); ?>">
                            <i class="fa fa-headphones"></i>
                            <?php echo esc_html__('Call Center:', 'aventura') . esc_html($aventura_top_phone); ?>
                        </a>
                        <span>|</span>
                    <?php endif; ?>

                    <?php if ($aventura_top_email != ' '): ?>
                        <a id="mail"
                           href="<?php echo esc_html__('mailto:', 'aventura') . esc_html($aventura_top_email); ?>">
                            <i class="fa fa-envelope"></i>
                            <?php echo esc_html($aventura_top_email); ?>
                        </a>
                    <?php endif; ?>

                </div>
                <div class="top-right pull-right">
                    <?php if ($aventura_top_address != ' '): ?>
                        <a id="address" href="javascript:void(0);">
                            <i class="fa fa-map-marker"></i>
                            <?php echo esc_html($aventura_top_address); ?>
                        </a>
                        <span id="space-login">|</span>
                    <?php endif; ?>
                    <?php
                    /*  Get Menu Topbar */
                    if ($aventura_top_menu != 'choose') {
                        wp_nav_menu(array(
                            'menu' => $aventura_top_menu,
                            'menu_class' => 'topbar-menu',
                            'menu_id' => '',
                            'container' => false
                        ));
                    }

                    /*  Get Login   */
                    if (!is_user_logged_in()):
                        if ($aventura_top_randl == '1'):
                            ?>
                            <a id="login" href="<?php echo wp_login_url(); ?>">
                                <i class="fa fa-sign-in"></i>
                                <?php echo esc_html__('Login', 'aventura') ?>
                            </a>
                            <?php if (get_option('users_can_register') == 1) : ?>

                            <a href="<?php echo $aventura_register_url; ?>">
                                <i class="fa fa-user"></i>
                                <?php echo esc_html__('Register', 'aventura') ?>
                            </a>
                        <?php
                        endif;
                        endif;
                    else:
                        if ($aventura_top_randl == true): ?>

                            <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">
                                <i class="fa fa-sign-out"></i>
                                <?php echo esc_html__('Logout', 'aventura'); ?>
                            </a>
                        <?php
                        endif;
                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if ($aventura_header_type == 'header-type-5' && $aventura_header_type_5_revolution_slider != '') { ?>
    <div class="tz-top-slider">
        <?php
        putRevSlider($aventura_header_type_5_revolution_slider);
        ?>
        <?php if ($aventura_header_type_5_search_options == '1'): ?>
            <div class="tz-top-search-wrap">
                <div class="container">
                    <div class="tz-top-search">
                        <span class="tz-search-tour-mobile"><?php echo esc_html__('Search Tour', 'aventura') ?><i
                                    class="fa fa-angle-double-up"></i></span>
                        <form class="tzElement_search_form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="tzElement_search_field">
                                <input type="hidden" name="post_type" value="tour">

                                <?php if ($aventura_header_type_5_field_name_option == '1'): ?>
                                    <div class="form-group form-name">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_name_label != ''):
                                                echo esc_html($aventura_header_type_5_field_name_label);
                                            else:
                                                esc_html_e('Keywords', 'aventura');
                                            endif;
                                            ?>
                                        </label>
                                        <div class="field-box">
                                            <input type="text" class="form-control" name="s"
                                                   placeholder="<?php echo esc_attr__('Enter a keyword here', 'aventura') ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($aventura_header_type_5_field_destination_option == '1'): ?>

                                    <div class="form-group form-destination">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_destination_label != ''):
                                                echo esc_html($aventura_header_type_5_field_destination_label);
                                            else:
                                                esc_html_e('Destination', 'aventura');
                                            endif;
                                            ?>
                                        </label>

                                        <div class="field-box">
                                            <select name="tour_destination[]">
                                                <option value=""><?php echo esc_html__('Any', 'aventura'); ?></option>
                                                <?php

                                                $aventura_args_destinations = array(
                                                    'post_type' => 'destination',
                                                    'post_status' => 'publish',
                                                    'orderby' => 'name',
                                                    'order' => 'ASC',
                                                    'posts_per_page' => -1
                                                );

                                                // The Query
                                                $aventura_destinations_query = new WP_Query($aventura_args_destinations);
                                                // The Loop
                                                if ($aventura_destinations_query->have_posts()) {
                                                    while ($aventura_destinations_query->have_posts()) {
                                                        $aventura_destinations_query->the_post();
                                                        echo '<option  value="' . get_the_ID() . '">' . get_the_title() . '</option>';
                                                    }
                                                    /* Restore original Post Data */
                                                    wp_reset_postdata();
                                                } else {
                                                    // no posts found
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($aventura_header_type_5_field_date_option == '1'): ?>
                                    <div class="form-group form-date">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_date_label != ''):
                                                echo esc_html($aventura_header_type_5_field_date_label);
                                            else:
                                                esc_html_e('Departure Date', 'aventura');
                                            endif;
                                            ?>
                                        </label>

                                        <div class="field-box">
                                            <input class="date-pick form-control" placeholder="Any"
                                                   data-date-format="mm/dd/yyyy" type="text" name="date">
                                        </div>

                                    </div>
                                <?php endif; ?>

                                <?php if ($aventura_header_type_5_field_duration_option == '1'): ?>
                                    <div class="form-group form-duration">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_duration_label != ''):
                                                echo esc_html($aventura_header_type_5_field_duration_label);
                                            else:
                                                esc_html_e('Duration', 'aventura');
                                            endif;
                                            ?>
                                        </label>
                                        <div class="field-box">
                                            <select name="tour_length">
                                                <option  value=""><?php esc_html_e('Any','aventura' ); ?></option>
                                                <?php if($aventura_tour_search_tour_length){
                                                    for ($i =1; $i<=$aventura_tour_search_tour_length;$i++){
                                                        if($i==1){
                                                            ?>
                                                            <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Day','aventura' ); ?></option>
                                                            <?php
                                                        } else{
                                                            ?>
                                                            <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Days','aventura' ); ?></option>
                                                            <?php
                                                        }
                                                    }
                                                } else{ ?>
                                                    <option  value="1"><?php esc_html_e('1 Day','aventura' ); ?></option>
                                                    <option  value="2"><?php esc_html_e('2 Days','aventura' ); ?></option>
                                                    <option  value="3"><?php esc_html_e('3 Days','aventura' ); ?></option>
                                                    <option  value="4"><?php esc_html_e('4 Days','aventura' ); ?></option>
                                                    <option  value="5"><?php esc_html_e('5 Days','aventura' ); ?></option>
                                                    <option  value="6"><?php esc_html_e('6 Days','aventura' ); ?></option>
                                                    <option  value="7"><?php esc_html_e('7 Days','aventura' ); ?></option>
                                                    <option  value="8"><?php esc_html_e('8 Days','aventura' ); ?></option>
                                                    <option  value="9"><?php esc_html_e('9 Days','aventura' ); ?></option>
                                                    <option  value="10"><?php esc_html_e('10 Days','aventura' ); ?></option>
                                                    <option  value="11"><?php esc_html_e('11 Days','aventura' ); ?></option>
                                                    <option  value="12"><?php esc_html_e('12 Days','aventura' ); ?></option>
                                                    <option  value="13"><?php esc_html_e('13 Days','aventura' ); ?></option>
                                                    <option  value="14"><?php esc_html_e('14 Days','aventura' ); ?></option>
                                                    <option  value="15"><?php esc_html_e('15 Days','aventura' ); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>

                                <?php endif; ?>

                                <?php if ($aventura_header_type_5_field_category_option == '1'): ?>

                                    <div class="form-group form-category">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_category_label != ''):
                                                echo esc_html($aventura_header_type_5_field_category_label);
                                            else:
                                                esc_html_e('Category', 'aventura');
                                            endif;
                                            ?>
                                        </label>

                                        <div class="field-box">
                                            <select name="tour_categories[]">
                                                <option value=""><?php esc_html_e('Any', 'aventura'); ?></option>
                                                <?php
                                                $aventura_all_tour_categoies = get_terms('tour-category', array('hide_empty' => 0));
                                                if (!empty($aventura_all_tour_categoies)) :
                                                    foreach ($aventura_all_tour_categoies as $aventura_tour_category) {
                                                        echo '<option  value="' . esc_attr($aventura_tour_category->term_id) . '">' . esc_html($aventura_tour_category->name) . '</option>';
                                                    }
                                                endif; ?>
                                                ?>
                                            </select>
                                        </div>

                                    </div>

                                <?php endif; ?>
                                <?php if ($aventura_header_type_5_field_language_option == '1'): ?>
                                    <div class="form-group form-language">
                                        <label>
                                            <?php
                                            if ($aventura_header_type_5_field_language_label != ''):
                                                echo esc_html($aventura_header_type_5_field_language_label);
                                            else:
                                                esc_html_e('Language', 'aventura');
                                            endif;
                                            ?>
                                        </label>
                                        <div class="field-box">
                                            <select name="tour_languages[]">
                                                <option value=""><?php esc_html_e('Any', 'aventura'); ?></option>
                                                <?php
                                                $aventura_all_tour_languages = get_terms('tour-language', array('hide_empty' => 0));
                                                if (!empty($aventura_all_tour_languages)) :
                                                    foreach ($aventura_all_tour_languages as $aventura_tour_language) {
                                                        echo '<option  value="' . esc_attr($aventura_tour_language->term_id) . '">' . esc_html($aventura_tour_language->name) . '</option>';
                                                    }
                                                endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <div class="tzElement_search_submit">
                                <button type="submit" class="btn btn-default tz-search-btn">
                                    <?php
                                    if ($aventura_header_type_5_search_button != ''):
                                        echo esc_html($aventura_header_type_5_search_button);
                                    else:
                                        esc_html_e('Search', 'aventura');
                                    endif;
                                    ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php } ?>
<?php if ($aventura_header_type != 'header-type-8' && $aventura_header_type != 'header-type-9' && $aventura_header_type != 'header-type-10' && $aventura_header_type != 'header-type-11'): ?>
    <header class="tz-header <?php echo esc_attr($aventura_header_type); ?> <?php if ($aventura_sticky == '1') {
        echo 'fixed';
    } ?>">
        <?php if ($aventura_header_type != 'header-type-2' && $aventura_header_type != 'header-type-6' && $aventura_header_type != 'header-type-7'): ?>
        <div class="container">
            <?php endif; ?>
            <a class="pull-left tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>"
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
            <nav class="nav-collapse pull-right">
                <?php
                if (has_nav_menu($aventura_location_menu)) :
                    wp_nav_menu(array(
                        'theme_location' => $aventura_location_menu,
                        'menu_class' => 'nav navbar-nav collapse navbar-collapse tz-nav',
                        'menu_id' => 'tz-navbar-collapse',
                        'container' => false,
                    ));
                endif;
                ?>
            </nav>
            <div class="tz_box__button pull-right">
                <?php if ($aventura_search == '1'): ?>
                    <div class="tz-header-search Show">
                        <span class='icon_search tz_icon_search'></span>
                        <span class='icon_close tz_icon_close'></span>
                        <div class="tz-header-search-form">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($aventura_cart == '1'): ?>
                    <?php if (class_exists('WooCommerce')) { ?>
                        <div class="tz-header-cart Show 111">
                            <?php do_action('aventura_get_cart_item'); ?>
                            <div class="shop__widget-cart">
                                <?php the_widget('aventura_WC_Widget_Cart', ''); ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php endif; ?>
                <button class="navbar-toggle collapsed tz_icon_menu" type="button" data-target="#tz-navbar-collapse"
                        data-toggle="collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <?php if ($aventura_header_type != 'header-type-2' && $aventura_header_type != 'header-type-6' && $aventura_header_type != 'header-type-7'){ ?>
        </div>
    <?php } ?>
    </header>
<?php endif; ?>
<!--Header type 8-->
<?php if ($aventura_header_type == 'header-type-8') : ?>
    <header class="tz-header tz-header-shop">
        <div class="container">
            <div class="menu-top">
                <a class="pull-left tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>"
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
                <div class="box-infor">
                    <?php if ($aventura_header_top != '0'): ?>
                        <div class="Tz-item">
                            <i class="fas fa-phone-volume"></i>
                            <h4><?php echo esc_attr($aventura_top_phone); ?>
                                <br><?php if ($aventura_top_phone_lk != ''): ?><a
                                        href="tel:<?php echo esc_attr($aventura_top_phone_lk); ?>"><?php endif; ?>
                                    <span><?php echo esc_attr($aventura_top_phone_nb); ?></span>
                                    <?php if ($aventura_top_phone_lk != ''): ?></a><?php endif; ?>
                            </h4>
                        </div>
                    <?php endif; ?>

                    <?php if ($aventura_filter != '0'): ?>
                        <div class="Tz-item">
                            <i class="fas fa-shipping-fast"></i>
                            <h4><?php echo esc_attr($aventura_top_filer); ?><br>
                                <?php if ($aventura_top_flk != ''): ?><a
                                        href="<?php echo esc_attr($aventura_top_flk); ?>"><?php endif; ?>
                                    <span><?php echo esc_attr($aventura_top_ft); ?></span>
                                    <?php if ($aventura_top_flk != ''): ?></a><?php endif; ?>
                            </h4></div>
                    <?php endif; ?>

                    <?php if ($aventura_cart != 0 && class_exists('WooCommerce')) { ?>
                        <div class="Tz-item woo_cart">
                            <div class="tz-shop-cart">
                                <i class="fas fa-shopping-bag"></i>
                                <div class="woo_content">Shopping cart<br>
                                    <?php do_action('aventura_get_cart_shop'); ?>
                                    <div class="shop__widget-cart">
                                        <?php the_widget('aventura_WC_Widget_Cart', ''); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="Tz_shop_menu  <?php if ($aventura_sticky == '1') {
            echo 'fixed';
        } ?> menu-bottom">
            <div class="container">
                <button class="navbar-toggle collapsed tz_icon_menu" type="button" data-target="#tz-navbar-collapse"
                        data-toggle="collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <nav class="nav-collapse pull-left menu-shop <?php if ($aventura_search == 0): echo "tz_full"; endif; ?>">
                    <?php

                    if (has_nav_menu($aventura_location_menu)) :
                        wp_nav_menu(array(
                            'theme_location' => $aventura_location_menu,
                            'menu_class' => 'nav navbar-nav collapse navbar-collapse tz-nav',
                            'link_after' => '<i class="fas fa-caret-down"></i>',
                            'menu_id' => 'tz-navbar-collapse',
                            'container' => false,
                        ));
                    endif;

                    ?>
                </nav>
                <?php if ($aventura_search != 0): ?>
                    <div class="tz-search pull-right">
                        <div class="tz-header-search-form">
                            <form role="search" method="get" class="searchform"
                                  action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="search" class="field Tzsearchform inputbox search-query"
                                       placeholder="<?php echo esc_attr_x('Enter keyword here...', 'placeholder', ''); ?>"
                                       value="<?php echo get_search_query(); ?>" name="s"/>
                                <input type="submit" class="submit searchsubmit" name="submit" value="X">
                                <span aria-hidden="true" class="fa fa-search icon_search"></span>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
<?php endif; ?>
<?php if ($aventura_header_type == 'header-type-9') : ?>
    <header class="tz-home-slide tz-home-croll  <?php if ($aventura_sticky == '') {
        echo 'tz_sticky';
    } ?>">
        <div class="tz-home-left tz_menu">
            <div class="bounceInLeft animated tz_btn_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="tz-home-left-box">
                <div class="tz-home-logo">
                    <a class="tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>"
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
                </div>

                <button class="navbar-toggle collapsed tz_icon_menu" type="button" data-target="#tz-main-menu"
                        data-toggle="collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <nav class="nav-collapse vertical_menu">
                    <?php

                    if (has_nav_menu($aventura_location_menu)) :
                        wp_nav_menu(array(
                            'theme_location' => $aventura_location_menu,
                            'menu_class' => 'nav navbar-nav collapse navbar-collapse main-menu',
                            'menu_id' => 'tz-main-menu',
                            'container' => false,
                        ));
                    endif;

                    ?>
                </nav>

                <div class="sidebar-home-slide">
                    <?php
                    if (is_active_sidebar("tz-sidebar-home-slide")):
                        dynamic_sidebar("tz-sidebar-home-slide");
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>
<!--Header type 10-->
<?php if ($aventura_header_type == 'header-type-10') : ?>
    <header class="tz-header tz-header-twomenu <?php if ($aventura_sticky != '') {
        echo 'fixed';
    } ?>">
        <button class="navbar-toggle collapsed tz_icon_menu tz_twomn" type="button"
                data-target="#tz-navbar-collapse"
                data-toggle="collapse">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="tz_logomb">
            <a class="tz_logomb" href="<?php echo esc_url(get_home_url('/')); ?>"
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
        </div>
        <div id="tz-navbar-collapse" class="box-menu">
            <div class="col-lg-5 tz_menu_left">
                <nav class="nav-collapse tz_onleft">
                    <?php

                    if (has_nav_menu($aventura_location_menu_left)) :
                        wp_nav_menu(array(
                            'theme_location' => $aventura_location_menu_left,
                            'menu_class' => 'nav navbar-nav navbar-collapse tz-nav tz_show',
                            'menu_id' => '',
                            'container' => false,
                        ));
                    endif;

                    ?>
                </nav>
            </div>
            <div class="col-lg-2 tz_logo">
                <a class="tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>"
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
            </div>
            <div class="col-lg-5 tz_menu_right">
                <nav class="nav-collapse tz_onright">
                    <?php

                    if (has_nav_menu($aventura_location_menu_right)) :
                        wp_nav_menu(array(
                            'theme_location' => $aventura_location_menu_right,
                            'menu_class' => 'nav navbar-nav navbar-collapse tz-nav tz_show',
                            'menu_id' => '',
                            'container' => false,
                        ));
                    endif;

                    ?>
                </nav>
                <?php if (($aventura_cartr != 0 && class_exists('WooCommerce') || ($aventura_searchr != 0))) { ?>
                <div class="tz_box_sc">
                    <?php if ($aventura_cartr != 0 && class_exists('WooCommerce')) { ?>
                        <div class="tz-header-cart Show pull-right">
                            <?php do_action('aventura_get_cart_item'); ?>
                            <div class="shop__widget-cart">
                                <?php the_widget('aventura_WC_Widget_Cart', ''); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($aventura_searchr != 0) { ?>
                        <div class="tz-header-search Show pull-right">
                            <span class='icon_search tz_icon_search'></span>
                            <span class='icon_close tz_icon_close'></span>
                            <div class="tz-header-search-form">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>
<!--Header type 11-->
<?php if ($aventura_header_type == 'header-type-11'): ?>
    <header class="tz-header <?php echo esc_attr($aventura_header_type); ?> <?php if ($aventura_sticky == '1') {
        echo 'fixed';
    } ?>">
        <?php if($aventura_header_top != '0'){
        ?>
        <div class="tz-top <?php echo $aventura_top; ?>">
            <div class="container">
                <div class="row">
                    <div class="top-left pull-left">
                        <?php if ($aventura_top_phone != ' ' && $aventura_top_phone != ''): ?>
                            <a id="tel"
                               href="<?php echo esc_html__('tel:', 'aventura') . esc_url($aventura_top_phone); ?>">
                                <i class="fa fa-headphones"></i>
                                <?php echo esc_html__('Call Center:', 'aventura') . esc_html($aventura_top_phone); ?>
                            </a>
                            <span>|</span>
                        <?php endif; ?>

                        <?php if ($aventura_top_email != ' ' && $aventura_top_email != ''): ?>
                            <a id="mail"
                               href="<?php echo esc_html__('mailto:', 'aventura') . esc_html($aventura_top_email); ?>">
                                <i class="fa fa-envelope"></i>
                                <?php echo esc_html($aventura_top_email); ?>
                            </a>
                        <?php endif; ?>

                    </div>
                    <div class="top-right pull-right">
                        <?php if ($aventura_top_address != '' && $aventura_top_address != ' '): ?>
                            <a id="address" href="javascript:void(0);">
                                <i class="fa fa-map-marker"></i>
                                <?php echo esc_html($aventura_top_address); ?>
                            </a>
                        <?php endif; ?>
                        <?php
                        /*  Get Login   */
                        if (!is_user_logged_in()):
                            if ($aventura_top_randl == '1'):
                                ?>
                                <a id="login" href="<?php echo wp_login_url(); ?>">
                                    <i class="fa fa-sign-in"></i>
                                    <?php echo esc_html__('Login', 'aventura') ?>
                                </a>
                                <?php if (get_option('users_can_register') == 1) : ?>

                                <a href="<?php echo $aventura_register_url; ?>">
                                    <i class="fa fa-user"></i>
                                    <?php echo esc_html__('Register', 'aventura') ?>
                                </a>
                            <?php
                            endif;
                            endif;
                        else:
                            if ($aventura_top_randl == true): ?>

                                <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">
                                    <i class="fa fa-sign-out"></i>
                                    <?php echo esc_html__('Logout', 'aventura'); ?>
                                </a>
                            <?php
                            endif;
                        endif;

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="tz-menu-header">
            <div class="container">
                <button class="navbar-toggle collapsed tz_icon_menu" type="button" data-target="#tz-navbar-collapse"
                        data-toggle="collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="pull-left tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>"
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

                <nav class="nav-collapse pull-right">
                    <?php
                    if (has_nav_menu($aventura_location_menu)) :
                        wp_nav_menu(array(
                            'theme_location' => $aventura_location_menu,
                            'menu_class' => 'nav navbar-nav collapse navbar-collapse tz-nav',
                            'menu_id' => 'tz-navbar-collapse',
                            'container' => false,
                        ));
                    endif;
                    ?>
                </nav>
                <div class="tz_box__button pull-right">
                    <?php if ($aventura_search != 0) { ?>
                        <div class="tz-header-search Show">
                            <span class='icon_search tz_icon_search'></span>
                            <span class='icon_close tz_icon_close'></span>
                            <div class="tz-header-search-form">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($aventura_cart == '1'): ?>
                        <?php if (class_exists('WooCommerce')) { ?>
                            <div class="tz-header-cart Show">
                                <?php do_action('aventura_get_cart_item'); ?>
                                <div class="shop__widget-cart">
                                    <?php the_widget('aventura_WC_Widget_Cart', ''); ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>