<?php
if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Carousel Slider", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-carousel",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Select Type", "aventura-plugin"),
                "param_name" => "tz_type",
                "description" => "",
                "value" => array(
                    esc_html__("Type 1", "aventura-plugin") => '1',
                    esc_html__("Type 2", "aventura-plugin") => '2',

                ),
                "group" => esc_html__('General', 'aventura-plugin'),
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'meta',
                'heading' => esc_html__('Slider Text', 'aventura-plugin'),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1', '2')),
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'param_name' => 'tz_image',
                        "admin_label" => false,
                        "heading" => esc_html__("Upload Image", "aventura-plugin"),
                        "description" => esc_html__("Upload image image gallery. ", "aventura-plugin"),
                    ),
                    array(
                        "type" => "textfield",
                        "admin_label" => false,
                        "heading" => esc_html__("Image Size", "aventura-plugin"),
                        "param_name" => "tz_image_size",
                        "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use thumbnail size. If used slides per view, this will be used to define carousel wrapper size. ", "aventura-plugin"),
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => true,
                        "heading" => esc_html__("Title", "aventura-plugin"),
                        "description" => esc_html__("You Can Use <br> In Title,EX :Discover The Amazing<br>World Around me ", "aventura-plugin"),
                        "param_name" => "title",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin'),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => false,
                        "heading" => esc_html__("Button Title", "aventura-plugin"),
                        "param_name" => "tz_button",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin')
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => false,
                        "heading" => esc_html__("Button Link", "aventura-plugin"),
                        "param_name" => "tz_link",
                        "value" => "",
                        "group" => esc_html__('General', 'aventura-plugin')
                    ),
                ),
            ),
            array(
                'type' => 'checkbox',
                'holder' => '',
                'heading' => esc_html__('', 'aventura-plugin'),
                "group" => esc_html__('General', 'aventura-plugin'),
                'admin_label' => false,
                'param_name' => 'taget',
                'std' => 'true',
                'value' => array(
                    esc_html__('Open link In A New Tab', 'aventura-plugin') => 'true',
                ),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Title Video", "aventura-plugin"),
                "param_name" => "title_video",
                "value" => "",
                "description" => esc_html__("Ex: watch<em>Intro video</em>", "aventura-plugin"),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => false,
                "heading" => esc_html__("Video", "aventura-plugin"),
                "param_name" => "tz_content",
                "value" => "",
                "description" => esc_html__("Ex: https://vimeo.com/110353157", "aventura-plugin"),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('1')),

            ),

            // home V 7

            array(
                'type' => 'param_group',
                'param_name' => 'metasocial',
                'heading' => esc_html__('Social Icons ', 'aventura-plugin'),
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('2')),
                'params' => array(
                    array(
                        "type" => "iconpicker",
                        "class" => "",
                        "admin_label" => false,
                        "heading" => esc_html__("Socials Icon", "aventura-plugin"),
                        "param_name" => "tz_icontxt",
                        "description" => esc_html__(" Choose icon from library", "aventura-plugin"),
                        'value' => 'fa fa-home',
                        'settings' => array(
                            'emptyIcon' => false, // default true, display an "EMPTY" icon?
                            'iconsPerPage' => 100, // default 100, how many icons per/page to display
                        ),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => true,
                        "heading" => esc_html__("Icon Title", "aventura-plugin"),
                        "param_name" => "tz_icontitle",
                        "value" => "",
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "admin_label" => true,
                        "heading" => esc_html__("Socials Link", "aventura-plugin"),
                        "param_name" => "tz_iconlnk",
                        "value" => "",
                    ),
                ),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Blurred Global Text", "aventura-plugin"),
                "param_name" => "tz_textglb",
                "value" => "",
                "group" => esc_html__('General', 'aventura-plugin'),
                "dependency" => array('element' => 'tz_type', 'value' => array('2')),
            ),
            //SLide option
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Auto Play", "aventura-plugin"),
                "param_name" => "tz_slauto",
                "value" => array(
                    esc_html__("true", "aventura-plugin") => '1',
                    esc_html__("false", "aventura-plugin") => '2',
                ),
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Slide Loop", "aventura-plugin"),
                "param_name" => "tz_slloop",
                "value" => array(
                    esc_html__("true", "aventura-plugin") => '1',
                    esc_html__("false", "aventura-plugin") => '2',
                ),
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => __("Speed", "aventura-plugin"),
                "description" => __("Default: 5000", "aventura-plugin"),
                "param_name" => "tz_slspeed",
                "value" => "5000",
                "group" => esc_html__('Slide Option', 'aventura-plugin'),
            ),

        )
    ));


endif;
?>