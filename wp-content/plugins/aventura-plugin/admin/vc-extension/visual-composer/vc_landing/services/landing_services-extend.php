<?php
if(function_exists('vc_map')):
vc_map(array(
    "name"   => esc_html__("Landing Service","aventura-plugin"),
    "icon"  => "icon-element",
    "weight" => 1,
    "base"  => "std-services",
    "class" => "tzElement_extended",
    "description" => "",
    "category" => esc_html__("Landing Page", "aventura-plugin"),
    "params" => array(
        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Type Services", "aventura-plugin"),
            "param_name"    => "type",
            "description"   => esc_html__("", "aventura-plugin"),
            "value"         => array(
                esc_html__("Type 1", "aventura-plugin")             => '1',
                esc_html__("Type 2",  "aventura-plugin")             => '2',
                esc_html__("Type 3",  "aventura-plugin")             => '3'),
            "std"       => '1',
        ),
        array(
            "type" => "attach_image",
            "heading"       => esc_html__("Image Services", "aventura-plugin"),
            "param_name"    => "tz_image_services",
            "description"   => esc_html__("Upload Image Icon.  ", "aventura-plugin"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Tittle Services"),
            "param_name" => "tz_title_services",
            "description" => esc_html__("Input Tittle Services for Aventura", "aventura-plugin"),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description Services"),
            "param_name" => "tz_des_services",
            "description" => esc_html__("Input Description Services for Aventura", "aventura-plugin"),
        ),
        array(
            'type'        => 'textfield',
            'param_name'  => 'el_class',
            'heading'     => esc_html__( 'Extra class name', 'aventura-plugin' ),
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