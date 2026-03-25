<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("TZ Quote", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-comment",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(

            array(
                'type' => 'dropdown',
                'holder' => '',
                'heading' => esc_html__('Choose Type Slide', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'tz_full',
                'std' => '1',
                "group" => esc_html__('General', 'aventura-plugin'),
                'value' => array(
                    esc_html__('Full Width', 'aventura-plugin') => '1',
                    esc_html__('Boxed - Align To The Right', 'aventura-plugin')    => '0',
                    esc_html__('No Background Image', 'aventura-plugin')    => '2',
                    esc_html__('Image On The Left', 'aventura-plugin')    => '3',
                ),
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                "admin_label" => false,
                'param_name' => 'disme_marketing_params',
                'heading' => esc_html__("Add new content", "aventura-plugin"),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_full', 'value' =>  array('0','1','3')),
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'admin_label' => true,
                        'value' => '',
                        'heading' => esc_html__("Author", "aventura-plugin"),
                        'param_name' => 'author',
                    ),
                    array(
                        'type' => 'textarea',
                        'value' => '',
                        'heading' => esc_html__("Content", "aventura-plugin"),
                        'param_name' => 'content',
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => esc_html__("Upload Image", "aventura-plugin"),
                        "param_name" => "tz_image",
                        "admin_label" => false,
                        "description" => esc_html__("Upload image image gallery. ", "aventura-plugin"),
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__("Image Size", "aventura-plugin"),
                        "param_name" => "tz_image_size",
                        "admin_label" => false,
                        "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use thumbnail size. If used slides per view, this will be used to define carousel wrapper size. ", "aventura-plugin"),
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                )
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                "admin_label" => false,
                'param_name' => 'disme_marketing_parames',
                'heading' => esc_html__("Add new content", "aventura-plugin"),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_full', 'value' =>  array('2')),
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'admin_label' => true,
                        'value' => '',
                        'heading' => esc_html__("Author", "aventura-plugin"),
                        'param_name' => 'author',
                    ),
                    array(
                        'type' => 'textarea',
                        'value' => '',
                        'heading' => esc_html__("Content", "aventura-plugin"),
                        'param_name' => 'content',
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__("Position", "aventura-plugin"),
                        "param_name" => "tz_position",
                        "admin_label" => false,
                        "description" => esc_html__("Ex: Traveler", "aventura-plugin"),
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                )
            ),
            array(
                'type'        => 'css_editor',
                'param_name'  => 'css',
                'heading'     => esc_html__( 'CSS box', 'aventura-plugin' ),
                'group'       => esc_html__( 'Design Options', 'aventura-plugin' ),
            ),
        )
    ));


endif;
?>