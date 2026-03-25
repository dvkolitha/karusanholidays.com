<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Slider Images", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-shop-sld",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(

            array(
                'type' => 'param_group',
                'param_name' => 'meta',
                'heading' => esc_html__('Slider Text', 'aventura-plugin'),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2')),
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'param_name' => 'tz_image',
                        "admin_label" => false,
                        "heading" => esc_html__("Upload Image", "aventura-plugin"),
                        "description" => esc_html__("Upload image image gallery. ", "aventura-plugin"),
                    ),
                    array(
                        "type" => "textfield",
                        "admin_label" => false,
                        "heading" => esc_html__("Image Size", "aventura-plugin"),
                        "param_name" => "tz_image_size",
                        "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use thumbnail size. If used slides per view, this will be used to define carousel wrapper size. ", "aventura-plugin"),
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => false,
                        "heading" => esc_html__("Sub Title", "aventura-plugin"),
                        "param_name" => "subtitle",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => true,
                        "heading" => esc_html__("Title", "aventura-plugin"),
                        "description" => esc_html__("You Can Use <br> In Title,EX :Discover The Amazing<br>World Around me ", "aventura-plugin"),
                        "param_name" => "title",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textarea",
                        "class" => "",
                        "admin_label" => false,
                        "heading" => esc_html__("Description", "aventura-plugin"),
                        "param_name" => "description",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),

                    array(
                        'type' => 'vc_link',
                        'heading' => esc_html__( 'Button Link (Link)', 'plazart-plugin' ),
                        'param_name' => 'link',
                        'description' => esc_html__( '', 'plazart-plugin' ),
                        'admin_label' => false,
                        'weight' => 0,
                        "group" => esc_html__('General', 'aventura-plugin')
                    ),
                ),
            ),


            //SLide option
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Auto Play", "aventura-plugin"),
                "param_name" => "tz_slauto",
                "value" => array(
                    esc_html__("true", "aventura-plugin") => '1',
                    esc_html__("false", "aventura-plugin") => '2',
                ),
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Slide Loop", "aventura-plugin"),
                "param_name" => "tz_slloop",
                "value" => array(
                    esc_html__("true", "aventura-plugin") => '1',
                    esc_html__("false", "aventura-plugin") => '2',
                ),
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Speed", "aventura-plugin"),
                "description" => __("Default: 5000", "aventura-plugin"),
                "param_name" => "tz_slspeed",
                "value" => "5000",
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
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
