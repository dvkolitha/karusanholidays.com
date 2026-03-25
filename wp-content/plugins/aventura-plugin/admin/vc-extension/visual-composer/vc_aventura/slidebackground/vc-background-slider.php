<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Parallax Slider", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-bgsl",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                'type' => 'attach_images',
                'param_name' => 'tz_image',
                "admin_label" => false,
                "heading" => esc_html__("Upload Image", "aventura-plugin"),
                "description" => esc_html__("Upload image image gallery. ", "aventura-plugin"),
            ),
            array(
                'type' => 'dropdown',
                'param_name' => 'tz_style',
                "admin_label" => false,
                "heading" => esc_html__("Parallax", "aventura-plugin"),
                "description" => esc_html__("", "aventura-plugin"),
                "value" => array(
                    esc_html__("ON", "aventura-plugin") => "2",
                    esc_html__("OFF", "aventura-plugin") => "1",
                ),
                "std"   => "1"
            ),
            array(
                'type' => 'dropdown',
                'param_name' => 'tz_bgov',
                "admin_label" => false,
                "heading" => esc_html__("Background Overlay", "aventura-plugin"),
                "description" => esc_html__("", "aventura-plugin"),
                "value" => array(
                    esc_html__("ON", "aventura-plugin") => "1",
                    esc_html__("OFF", "aventura-plugin") => "2",
                ),
                "std"   => "1"
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__('Select Color', 'aventura-plugin'),
                "param_name" => "tz_color_title",
                "description" => esc_html__("Select Color", "aventura-plugin"),
                "std" => 'rgba(0,0,0,0.4)',
                "dependency"    => array('element' => 'tz_bgov', 'value' => array('1')),
            ),
            array(
                'type' => 'dropdown',
                'param_name' => 'tz_scroll',
                "admin_label" => true,
                "heading" => esc_html__("Scroll Down", "aventura-plugin"),
                "description" => esc_html__(" If it's ".'"Show"'.", it requires an ".'"ID (tz_target)"'." to be added in Row Setting of the target element where you scroll down to.", "aventura-plugin"),
                "value" => array(
                    esc_html__("Hide", "aventura-plugin") => "1",
                    esc_html__("Show", "aventura-plugin") => "2",
                ),
                "std" => "1",
            ),
            array(
                'type' => 'textfield',
                'param_name' => 'tz_txtscroll',
                "admin_label" => true,
                "heading" => esc_html__("Scroll Down Text", "aventura-plugin"),
                "description" => esc_html__("Ex: Scroll Down.", "aventura-plugin"),
                "value" => '',
                "std" => "",
                "dependency"    => array('element' => 'tz_scroll', 'value' => array('2')),

            ),
        )
    ));


endif;
?>
