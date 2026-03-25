<?php
vc_map(array(
        "name" => __("Our themes", "js_composer"),
        "weight" => 14,
        "base" => "autoshowroom-our-themes",
        "icon" => "tzvc_icon",
        "description" => "",
        "class" => "tz-aventura_our_themes",
        "category" => esc_html__("Landing Page", "js_composer"),
        "params" => array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Title", "tz-tz-aventura"),
                "param_name" => "title",
                "value" => esc_html__("", "tz-autoshowroom"),
                "description" => esc_html__("Enter your  title", "tz-aventura"),
            ),

            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'our_themes_params',
                "heading" => esc_html__("Our theme item", "tz-tz-aventura"),
                // Note params is mapped inside param-group:
                'params' => array(

                    array(
                        "type" => "vc_link",
                        "class" => "",
                        "heading" => esc_html__("URL", "tz-tz-aventura"),
                        "param_name" => "url",
                        "value" => esc_html__("", "tz-tz-aventura"),
                        "description" => esc_html__("", "tz-tz-aventura"),
                    ),

                    array(
                        "type" => "attach_image",
                        "class" => "",
                        "heading" => esc_html__("Image icon", "tz-tz-aventura"),
                        "param_name" => "image_icon",
                        "value" => esc_html__("", "tz-tz-aventura"),
                        "description" => esc_html__("Enter your image icon", "tz-tz-aventura"),
                    ),
                    array(
                        "type" => "attach_image",
                        "class" => "",
                        "heading" => esc_html__("Image ", "tz-tz-aventura"),
                        "param_name" => "image",
                        "value" => esc_html__("", "tz-tz-aventura"),
                        "description" => esc_html__("Enter your image", "tz-tz-aventura"),
                    ),

                    array(
                        "type" => "textarea",
                        "class" => "",
                        "heading" => esc_html__("Theme Description", "tz-tz-aventura"),
                        "param_name" => "description",
                        "value" => '',
                        "description" => esc_html__("", "tz-tz-aventura"),
                    ),
                )

            )
        )

    )
);
?>