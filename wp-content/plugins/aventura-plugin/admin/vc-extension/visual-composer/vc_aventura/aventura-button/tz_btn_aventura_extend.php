<?php
vc_map( array(
    "name" => esc_html__("Button Aventura", "aventura-plugin"),
    "icon" => "icon-element",
    "weight" => 1,
    "base" => "tz-button",
    "class" => "tz-button",
    "description" => esc_html__("","aventura-plugin"),
    "category" => esc_html__("Aventura", "aventura-plugin"),
    "params" => array(

        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Choose Button Type", "aventura-plugin"),
            "param_name"    => "tz_type",
            "value"         => array(
                esc_html__("Type 1", "aventura-plugin") => '1',
                esc_html__("Type 2", "aventura-plugin") => '2',
                esc_html__("Type 3", "aventura-plugin") => '3',
            ),
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview Button Type 1", "aventura-plugin"),
            "param_name"    => "preview_3",
            "value"         => PLUGIN_PATH."assets/images/type3_btn.png",
            "dependency" => array('element' => 'tz_type', 'value' => '1')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview Button Type 2", "aventura-plugin"),
            "param_name"    => "preview_4",
            "value"         => PLUGIN_PATH."assets/images/type2_btn.jpg",
            "dependency" => array('element' => 'tz_type', 'value' => '2')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview Button Type 3", "aventura-plugin"),
            "param_name"    => "preview_5",
            "value"         => PLUGIN_PATH."assets/images/btn_3.png",
            "dependency" => array('element' => 'tz_type', 'value' => '3')
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Button Align", "aventura-plugin"),
            "param_name"    => "btn_type",
            "value"         => array(
                esc_html__("Button Left", "aventura-plugin") => 'left',
                esc_html__("Button Center", "aventura-plugin") => 'center',
                esc_html__("Button Right", "aventura-plugin") => 'right',
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Button Label', 'aventura-plugin' ),
            'param_name' => 'tz_txtlink',
            'description' => esc_html__( '', 'aventura-plugin' ),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__( 'URL (Link)', 'aventura-plugin' ),
            'param_name' => 'link',
            'description' => esc_html__( '', 'aventura-plugin' ),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font Size', 'aventura-plugin' ),
            'param_name' => 'tz_fsize',
            'description' => esc_html__( 'Ex: 12px', 'aventura-plugin' ),
            'admin_label' => false,
            'weight' => 0,
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