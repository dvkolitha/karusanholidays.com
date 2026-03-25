<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Banner Item", "aventura-plugin"),
        "weight" => 1,
        "base" => "tz-baners",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "attach_image",
                "heading" => esc_html__("Background Image", "aventura-plugin"),
                "param_name" => "tz_bg",
                "description" => esc_html__("Upload Image.  ", "aventura-plugin"),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Sub Title", "aventura-plugin"),
                "param_name" => "tz_subtitle",
                "value" => "",
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Title", "aventura-plugin"),
                "param_name" => "tz_title",
                "value" => "",
            ),
            array(
                'type' => 'vc_link',
                'heading' => esc_html__('URL (Link)', 'plazart-plugin'),
                'param_name' => 'link',
                'description' => esc_html__('', 'plazart-plugin'),
                'admin_label' => false,
                'weight' => 0,
            ),
//            array(
//                "type" => "attach_image",
//                "heading" => esc_html__("Image Mouse Cursor", "aventura-plugin"),
//                "param_name" => "img_cs",
//                "description" => esc_html__("Upload Image.  ", "aventura-plugin"),
//            ),
            array(
                'type' => 'css_editor',
                'param_name' => 'css',
                'heading' => esc_html__('CSS box', 'aventura-plugin'),
                'group' => esc_html__('Design Options', 'aventura-plugin'),
            ),
        )
    ));
endif; ?>