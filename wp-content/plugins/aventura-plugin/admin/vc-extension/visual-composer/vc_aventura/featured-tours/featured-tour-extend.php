<?php
$tztour_cat = array();
$cat_tour = get_categories(array('taxonomy' => 'tour-category'));

foreach ($cat_tour as $cat) {
    $tztour_cat[$cat->name] = $cat->term_id;
}

$tz_posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'tour'
));
$tz_result = array();
foreach ($tz_posts as $post) {
    $tz_result[] = array(
        'value' => $post->ID,
        'label' => $post->post_title,
    );
}
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Feature Tour", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-feature-tour",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Type Featured Tour", "aventura-plugin"),
                "param_name" => "tz_type",
                "value" => array(
                    esc_html__("Choose Type Featured Tour", "aventura-plugin") => '',
                    esc_html__("Type 1", "aventura-plugin") => "1",
                    esc_html__("Type 2", "aventura-plugin") => "2",
                    esc_html__("Type 3", "aventura-plugin") => "3",
                    esc_html__("Type 4", "aventura-plugin") => "4",
                    esc_html__("Type 5", "aventura-plugin") => "5",
                    esc_html__("Type 6", "aventura-plugin") => "6",
                    esc_html__("Type 7", "aventura-plugin") => "7",
                    esc_html__("Type 8", "aventura-plugin") => "8",
                ),
                "description" => esc_html__("", "aventura-plugin"),
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Title", "aventura-plugin"),
                "param_name" => "tz_title",
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '5', '6', '7')),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Title Background", "aventura-plugin"),
                "param_name" => "tz_title_background",
                "description" => esc_html__("Define a title background for the section", "aventura-plugin"),
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => array('5')),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Title Button", "aventura-plugin"),
                "param_name" => "tz_button_tour",
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => '6'),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Button Link", "aventura-plugin"),
                "param_name" => "button_link",
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => '6'),
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "admin_label" => false,
                "heading" => esc_html__("Description", "aventura-plugin"),
                "param_name" => "tz_description",
                "description" => esc_html__("Define a description for the section(optional)", "aventura-plugin"),
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => array('5', '6', '7')),
            ),

            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Type Tour", "aventura-plugin"),
                "param_name" => "tz_type_tour",
                "value" => array(
                    esc_html__("Choose Type Tour", "aventura-plugin") => '',
                    esc_html__("Category", "aventura-plugin") => "category",
                    esc_html__("Tour Name", "aventura-plugin") => "post",),
                "description" => esc_html__("", "aventura-plugin"),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '5', '6', '7','8'))
            ),

            array(
                "type" => "checkbox",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Tour Categories", "aventura-plugin"),
                "param_name" => "tz_tour_category",
                "value" => $tztour_cat,
                "description" => esc_html__("Select category tour.", "aventura-plugin"),
                "dependency" => array('element' => 'tz_type_tour', 'value' => 'category')
            ),
            array(
                'type' => 'autocomplete',
                'heading' => esc_html__('Input Tour Name', 'aventura-plugin'),
                'param_name' => 'tz_tour_post',
                'admin_label' => true,
                'description' => esc_html__('Add Post by title.', 'aventura-plugin'),
                'settings' => array(
                    'multiple' => true,
                    'sortable' => true,
                    'groups' => true,
                    'values' => $tz_result
                ),
                "dependency" => array('element' => 'tz_type_tour', 'value' => 'post'),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => false,
                "heading" => esc_html__("Limit Items", "aventura-plugin"),
                "param_name" => "tz_page",
                "value" => "",
                "std"   => "6",
                "dependency" => array('element' => 'tz_type_tour', 'value' => 'category')
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Order by", "plazart-plugin"),
                "param_name" => "tz_orderby",
                "value" => array(
                    esc_html__("Date", "aventura-plugin") => "date",
                    esc_html__("ID", "aventura-plugin") => "id",
                    esc_html__("Title", "aventura-plugin") => "title"
                ),
                "description" => "",
                "dependency" => array('element' => 'tz_type_tour', 'value' => 'category')
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Order", "plazart-plugin"),
                "param_name" => "tz_order",
                "value" => array(
                    esc_html__("Descending (3,2,1 or c,b,a)", "plazart-plugin") => "desc",
                    esc_html__("Ascending (1,2,3 or a,b,c)", "plazart-plugin") => "asc"
                ),
                "description" => "",
                "dependency" => array('element' => 'tz_type_tour', 'value' => 'category')
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Image Size", "aventura-plugin"),
                "param_name" => "tz_size",
                "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use \"large\" size.", "aventura-plugin"),
                "value" => "",
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Deals Label", "aventura-plugin"),
                "param_name" => "tz_label",
                "value" => "",
                "std" => "",
                "dependency" => array('element' => 'tz_type', 'value' => '2')
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Deals Link", "aventura-plugin"),
                "param_name" => "tz_link",
                "value" => "",
                "dependency" => array('element' => 'tz_type', 'value' => array('2'))
            ),
            //
            array(
                'type' => 'dropdown',
                'holder' => '',
                'admin_label' => false,
                'heading' => esc_html__('Desktop Columns ', 'aventura-plugin'),
                'description' => "Number of Columns display on the desktop ( Screen Browser  > 1500 ).<br> Number of columns is calculated according to the width of Feature Tour box ",
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'param_name' => 'desktop_columns',
                'std' => '4',
                'value' => array(
                    esc_html__('1 Column', 'aventura-plugin') => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                    esc_html__('6 Columns', 'aventura-plugin') => '6',
                    esc_html__('7 Columns', 'aventura-plugin') => '7',
                    esc_html__('8 Columns', 'aventura-plugin') => '8',
                    esc_html__('9 Columns', 'aventura-plugin') => '9',
                    esc_html__('10 Columns', 'aventura-plugin') => '10',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '7','8'))
            ),
            array(
                'type' => 'dropdown',
                'holder' => '',
                'admin_label' => false,
                'heading' => esc_html__('Desktop Small Columns', 'aventura-plugin'),
                'description' => esc_html__('Number of Columns display on the desktop small( 1200 < Screen Browser < 1500])', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'param_name' => 'desktop_small_columns',
                'std' => '4',
                'value' => array(
                    esc_html__('1 Column', 'aventura-plugin') => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                    esc_html__('6 Columns', 'aventura-plugin') => '6',
                    esc_html__('7 Columns', 'aventura-plugin') => '7',
                    esc_html__('8 Columns', 'aventura-plugin') => '8',
                    esc_html__('9 Columns', 'aventura-plugin') => '9',
                    esc_html__('10 Columns', 'aventura-plugin') => '10',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '7','8'))
            ),
            array(
                'type' => 'dropdown',
                'holder' => '',
                'admin_label' => false,
                'heading' => esc_html__('Tablet Columns', 'aventura-plugin'),
                'description' => esc_html__('Number of Columns display on the  tablet ( 992 < Screen Browser < 1200]).', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'param_name' => 'tablet_columns',
                'std' => '2',
                'value' => array(
                    esc_html__('1 Column', 'aventura-plugin') => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                    esc_html__('6 Columns', 'aventura-plugin') => '6',
                    esc_html__('7 Columns', 'aventura-plugin') => '7',
                    esc_html__('8 Columns', 'aventura-plugin') => '8',
                    esc_html__('9 Columns', 'aventura-plugin') => '9',
                    esc_html__('10 Columns', 'aventura-plugin') => '10',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '7','8'))
            ),
            array(
                'type' => 'dropdown',
                'holder' => '',
                'admin_label' => false,
                'heading' => esc_html__('Tablet  Portrait  Columns', 'aventura-plugin'),
                'description' => esc_html__('Number of Columns display on the tablet  Portrait ( 600 < Screen Browser < 992]).', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'param_name' => 'tablet_portait_columns',
                'std' => '2',
                'value' => array(
                    esc_html__('1 Column', 'aventura-plugin') => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                    esc_html__('6 Columns', 'aventura-plugin') => '6',
                    esc_html__('7 Columns', 'aventura-plugin') => '7',
                    esc_html__('8 Columns', 'aventura-plugin') => '8',
                    esc_html__('9 Columns', 'aventura-plugin') => '9',
                    esc_html__('10 Columns', 'aventura-plugin') => '10',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '7','8'))
            ),
            array(
                'type' => 'dropdown',
                'holder' => '',
                'admin_label' => false,
                'heading' => esc_html__('Mobile Columns', 'aventura-plugin'),
                'description' => esc_html__('Number of Columns display on the mobile ( Screen Browser < 600).', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'param_name' => 'mobile_columns',
                'std' => '1',
                'value' => array(
                    esc_html__('1 Column', 'aventura-plugin') => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                    esc_html__('6 Columns', 'aventura-plugin') => '6',
                    esc_html__('7 Columns', 'aventura-plugin') => '7',
                    esc_html__('8 Columns', 'aventura-plugin') => '8',
                    esc_html__('9 Columns', 'aventura-plugin') => '9',
                    esc_html__('10 Columns', 'aventura-plugin') => '10',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '7','8'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => false,
                "heading" => esc_html__("Margin Columns", "aventura-plugin"),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                "param_name" => "tz_margin",
                "value" => "",
                "std" => "30",
                "description" => esc_html__("Ex: 30", "aventura-plugin"),
                "dependency" => array('element' => 'tz_type', 'value' => array('2', '7','8'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Auto Play', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'auto_play',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '7','8'))
            ),
            array(
                'type' => 'textfield',
                'holder' => '',
                'heading' => esc_html__('Auto Play Timeout', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'timeout',
                'value' => '3000',
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '7','8'))
            ),

            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Pause on Hover', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'pause_on_hover',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '7','8'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Loop', 'aventura-plugin'),
                'group' => esc_html__('Slide Options', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'loop',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '7','8'))
            ),
            array(
                'type' => 'textfield',
                'param_name' => 'el_class',
                'heading' => esc_html__('Extra class name', 'aventura-plugin'),
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Duration', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_duration',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                )
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Date', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_date',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                )
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Departure', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_departure',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '3', '4', '5', '6'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Price', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_price',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                )
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Rating', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_rating',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2', '4', '5'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Review Button', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_review',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Read More Button', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_read_more',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1'))
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('Wishlist Button', 'aventura-plugin'),
                'group' => esc_html__('Show/Hide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'show_wishlist',
                'std' => 'true',
                'value' => array(
                    esc_html__('Yes', 'aventura-plugin') => 'true',
                ),
                "dependency" => array('element' => 'tz_type', 'value' => array('1'))
            ),
            array(
                'type' => 'css_editor',
                'param_name' => 'css',
                'heading' => esc_html__('CSS box', 'aventura-plugin'),
                'group' => esc_html__('Design Options', 'aventura-plugin'),
            ),

        )
    ));
endif;
?>