<?php
if(function_exists('vc_map')):
    vc_map( array(
        "name"  => esc_html__("Partner", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-partner",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(

            array(
                'type'        => 'attach_image',
                'param_name'  => 'tz_image',
                "admin_label" => false,
                "heading"       => esc_html__("Upload Partner Image", "aventura-plugin"),
                "value" => "",
                "group" => esc_html__( 'General', 'aventura-plugin' ),

            ),
            array(
                "type" => "textfield",
                "admin_label" => false,
                "heading"       => esc_html__("Image Size", "aventura-plugin"),
                "param_name"    => "tz_image_size",
                "description"   => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use thumbnail size. If used slides per view, this will be used to define carousel wrapper size. ", "aventura-plugin"),
                "value" => "",
                "group" => esc_html__( 'General', 'aventura-plugin' ),
            ),
            array(
                'type' => 'vc_link',
                'heading' => esc_html__( 'URL (Link)', 'plazart-plugin' ),
                'param_name' => 'tz_link',
                'description' => esc_html__( '', 'plazart-plugin' ),
                'admin_label' => false,
                'weight' => 0,
                "group" => esc_html__( 'General', 'aventura-plugin' ),
            ),
            array(
                'type' => 'css_editor',
                'heading' => esc_html__( 'CSS box', 'js_composer' ),
                'param_name' => 'css',
                'group' => esc_html__( 'Design Options', 'js_composer' ),
            ),
        )
    ) );


endif;
?>