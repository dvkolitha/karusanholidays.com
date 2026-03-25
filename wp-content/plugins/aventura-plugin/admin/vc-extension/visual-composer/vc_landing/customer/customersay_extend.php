<?php
if(function_exists('vc_map')):
vc_map(array(
    "name"   => esc_html__("Landing Customer","aventura-plugin"),
    "icon"  => "icon-element",
    "weight" => 1,
    "base"  => "std-customer",
    "class" => "tzElement_extended",
    "description" => "",
    "category" => esc_html__("Landing Page", "aventura-plugin"),
    "params" => array(
        array(
            "type" => "attach_image",
            "heading"       => esc_html__("Image Icon Customer", "aventura-plugin"),
            "param_name"    => "tz_image_cus",
            "description"   => esc_html__("Upload Image Icon.  ", "aventura-plugin"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Tittle  Customer"),
            "param_name" => "tz_title_cus",
            "description" => esc_html__("Input Tittle Services for Aventura", "aventura-plugin"),
        ),
        array(
            'type' => 'textarea_html',
            'heading' => esc_html__('Text', 'js_composer'),
            'param_name' => 'content',
            'admin_label' => false,
            'value' => '<p>' . esc_html__('I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'js_composer') . '</p>',
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