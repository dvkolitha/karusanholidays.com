<?php
vc_map( array(
    "name" => esc_html__("Title", "tz-interiart"),
    "icon" => "icon-element",
    "weight" => 1,
    "base" => "tz-title",
    "class" => "tz-title",
    "description" => esc_html__("","aventura-plugin"),
    "category" => esc_html__("Aventura", "aventura-plugin"),
    "params" => array(


        array(
            "type" => "textarea",
            "holder" => "div",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__("Section Title", "aventura-plugin"),
            "param_name" => "tz_title",
            "value" => "",
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "admin_label" => true,
            "heading"       => esc_html__("Title Alignment", "aventura-plugin"),
            "param_name"    => "tz_text_align",
            "description"   => "Section Title",
            "value"         => array(
                esc_html__("Left", "tz-interiart")     => 'left',
                esc_html__("Center", "tz-interiart")     => 'center',
                esc_html__("Right", "tz-interiart")     => 'right'),
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__('Color Title', 'aventura-plugin'),
            "param_name" => "tz_color_title",
            "description" => esc_html__("You can set a color title.", "aventura-plugin"),
        ),

        array(
            'type'        => 'css_editor',
            'param_name'  => 'css',
            'heading'     => esc_html__( 'CSS box', 'aventura-plugin' ),
            'group'       => esc_html__( 'Design Options', 'aventura-plugin' ),
        ),

    )
));
?>