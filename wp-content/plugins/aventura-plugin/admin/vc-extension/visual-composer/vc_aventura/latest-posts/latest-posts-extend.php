<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Latest Posts", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-latest-posts",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Select Type", "aventura-plugin"),
                "param_name" => "tz_type",
                "description" => esc_html__("Choose Your Type You Need", "aventura-plugin"),
                "value" => array(
                    esc_html__('Type 1', 'aventura-plugin') => '1',
                    esc_html__('Type 2', 'aventura-plugin') => '2',
                ),
                "group" => esc_html__('General', 'aventura-plugin'),
            ),
            array(
                "type"          => "aventura_preview",
                "class"         => "",
                "admin_label"   => false,
                "heading"       => esc_html__("Preview Type 2", "aventura-plugin"),
                "param_name"    => "preview_l1",
                "value"         => PLUGIN_PATH."assets/images/latest_post1.png",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => '2'),
            ),
            array(
                "type"          => "aventura_preview",
                "class"         => "",
                "admin_label"   => false,
                "heading"       => esc_html__("Preview Type 1", "aventura-plugin"),
                "param_name"    => "preview_l2",
                "value"         => PLUGIN_PATH."assets/images/last_post2.png",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Title", "aventura-plugin"),
                "param_name" => "tz_title",
                "description" => esc_html__("Define a title for the section", "aventura-plugin"),
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Title Background", "aventura-plugin"),
                "param_name" => "tz_title_background",
                "description" => esc_html__("Define a title background for the section", "aventura-plugin"),
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),
            ),

            array(
                "type" => "textarea",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Description", "aventura-plugin"),
                "param_name" => "tz_description",
                "description" => esc_html__("Define a description for the section(optional)", "aventura"),
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Limit Posts", "aventura-plugin"),
                "param_name" => "tz_limit",
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Image Size", "aventura-plugin"),
                "param_name" => "tz_size",
                "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use \"large\" size.", "aventura-plugin"),
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
            ),

            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Desktop Colums", "aventura-plugin"),
                "param_name" => "tz_des",
                "value" => array(
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                    esc_html__('4 Columns', 'aventura-plugin') => '4',
                    esc_html__('5 Columns', 'aventura-plugin') => '5',
                ),
                "std"         => '3',
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('2')),
            ),

            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Tablets Colums", "aventura-plugin"),
                "param_name" => "tz_tab",
                "value" => array(
                    esc_html__('1 Column', 'aventura-plugin')  => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                    esc_html__('3 Columns', 'aventura-plugin') => '3',
                ),
                "std"         => '2',
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('2')),
            ),

            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Mobile Colums", "aventura-plugin"),
                "param_name" => "tz_mob",
                "value" => array(
                    esc_html__('1 Column', 'aventura-plugin')  => '1',
                    esc_html__('2 Columns', 'aventura-plugin') => '2',
                ),
                "std"         => '1',
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('2')),
            ),

            array(
                'type' => 'checkbox',
                "class" => "",
                'heading' => esc_html__('Show next/prev buttons', 'aventura-plugin'),
                'admin_label' => true,
                'param_name' => 'tz_nav_button',
                "value" => esc_html__("", "aventura-plugin"),
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
            ),

            array(
                'type' => 'checkbox',
                "class" => "",
                'heading' => esc_html__('Show dots navigation', 'aventura-plugin'),
                'admin_label' => true,
                'param_name' => 'tz_dots',
                "value" => esc_html__("", "aventura-plugin"),
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),
            ),

            array(
                'type' => 'checkbox',
                "class" => "",
                'heading' => esc_html__('Auto Play', 'aventura-plugin'),
                'admin_label' => true,
                'param_name' => 'tz_auto_play',
                "value" => esc_html__("", "aventura-plugin"),
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
            ),
            array(
                'type' => 'textfield',
                'class' => '',
                'heading' => esc_html__('Timeout', 'aventura-plugin'),
                'admin_label' => true,
                'param_name' => 'tz_timeout',
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
            ),
            array(
                'type' => 'checkbox',
                'class' => '',
                'heading' => esc_html__('Loop', 'aventura-plugin'),
                'admin_label' => true,
                'param_name' => 'tz_loop',
                "value" => esc_html__("", "aventura-plugin"),
                "group" => esc_html__('Slider Options', 'aventura-plugin'),
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