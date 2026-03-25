<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Video Popup", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-video-popup",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Video Info Box", "aventura-plugin"),
                "param_name" => "tz_align",
                'std' => '1',
                "value" => array(
                    esc_html__("On The left", "tz-interiart") => '1',
                    esc_html__("On The Right", "tz-interiart") => '2'
                ),

            ),
            array(
                'type' => 'attach_image',
                'param_name' => 'tz_image',
                "admin_label" => false,
                "heading" => esc_html__("Upload Poster Image", "aventura-plugin"),
                "value" => "",

            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Title Video", "aventura-plugin"),
                "param_name" => "tz_title",
                "value" => "",
                "description" => esc_html__("EX: Intro Video", "aventura-plugin"),

            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Sub Title", "aventura-plugin"),
                "param_name" => "tz_subtitle",
                "value" => "",
                "description" => esc_html__("EX: Watch", "aventura-plugin"),

            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => false,
                "heading" => esc_html__("Link Video", "aventura-plugin"),
                "description" => esc_html__("Ex:https://www.youtube.com/watch?v=wPURXkOwjIg", "aventura-plugin"),
                "param_name" => "content",
                "value" => "",
            ),
            array(
                'type' => 'css_editor',
                'heading' => esc_html__('CSS box', 'js_composer'),
                'param_name' => 'css',
                'group' => esc_html__('Design Options', 'js_composer'),
            ),

            // home V 7

        )
    ));


endif;
?>