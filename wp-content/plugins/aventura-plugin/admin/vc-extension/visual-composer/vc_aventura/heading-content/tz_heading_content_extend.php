<?php
vc_map(array(
    "name" => esc_html__("Heading Content", "tz-interiart"),
    "icon" => "icon-element",
    "weight" => 1,
    "base" => "tz-heading-content",
    "class" => "tz-heading-content",
    "description" => esc_html__("", "aventura-plugin"),
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
            "heading" => esc_html__("Title Alignment", "aventura-plugin"),
            "param_name" => "tz_text_align",
            "description" => "Section Title",
            "value" => array(
                esc_html__("Left", "tz-interiart") => 'left',
                esc_html__("Center", "tz-interiart") => 'center',
                esc_html__("Right", "tz-interiart") => 'right'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__("Content Alignment - Button Alignment", "aventura-plugin"),
            "param_name" => "tz_cbalign",
            "value" => array(
                esc_html__("Left", "tz-interiart") => 'left',
                esc_html__("Center", "tz-interiart") => 'center',
                esc_html__("Right", "tz-interiart") => 'right'),
        ),
        array(
            'type' => 'textarea_html',
            'heading' => esc_html__('Text', 'js_composer'),
            'param_name' => 'content',
            'admin_label' => false,
            'value' => '<p>' . esc_html__('I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'js_composer') . '</p>',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Button Label', 'plazart-plugin'),
            'param_name' => 'tz_txtlink',
            'description' => esc_html__('', 'plazart-plugin'),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__('URL (Link)', 'plazart-plugin'),
            'param_name' => 'link',
            'description' => esc_html__('', 'plazart-plugin'),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__('Color Title', 'aventura-plugin'),
            "param_name" => "tz_color_title",
            "description" => esc_html__("You can set a color title.", "aventura-plugin"),
            'group' => esc_html__('Customize', 'aventura-plugin'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size Title', 'plazart-plugin'),
            'param_name' => 'tz_fsizeh',
            'description' => esc_html__('Ex: 40', 'plazart-plugin'),
            'admin_label' => false,
            'group' => esc_html__('Customize', 'aventura-plugin'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin Bottom (Title)', 'plazart-plugin'),
            'param_name' => 'tz_marginh',
            'description' => esc_html__('Ex: 40', 'plazart-plugin'),
            'admin_label' => false,
            'group' => esc_html__('Customize', 'aventura-plugin'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin Top (Button)', 'plazart-plugin'),
            'param_name' => 'tz_marginp',
            'description' => esc_html__('Ex: 40', 'plazart-plugin'),
            'admin_label' => false,
            'group' => esc_html__('Customize', 'aventura-plugin'),
        ),
        array(
            'type' => 'css_editor',
            'param_name' => 'css',
            'heading' => esc_html__('CSS box', 'aventura-plugin'),
            'group' => esc_html__('Design Options', 'aventura-plugin'),
        ),
    )
));
?>