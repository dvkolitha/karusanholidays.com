<?php
if(function_exists('vc_map')):
vc_map( array(
    "name" => esc_html__("Search Tour", "aventura-plugin"),
    "weight" => 1,
    "base" => "tz-search-tour",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Aventura", "aventura-plugin"),
    "params" => array(
        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Type Search Tour", "aventura-plugin"),
            "param_name"    => "tz_type",
            "value"         => array(
                esc_html__('Type 1', "aventura-plugin")                   => '1',
                esc_html__('Type 2', "aventura-plugin")                   => '2',
                esc_html__('Type 3', "aventura-plugin")                   => '3',
                esc_html__('Type 4', "aventura-plugin")                   => '4',
            ),
            "description"   => esc_html__("", "aventura-plugin"),
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview", "aventura-plugin"),
            "param_name"    => "preview_1",
            "value"         => PLUGIN_PATH."assets/images/seat3.png",
            "dependency" => array('element' => 'tz_type', 'value' => '1')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview", "aventura-plugin"),
            "param_name"    => "preview_2",
            "value"         => PLUGIN_PATH."assets/images/seat2.png",
            "dependency" => array('element' => 'tz_type', 'value' => '2')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview", "aventura-plugin"),
            "param_name"    => "preview_3",
            "value"         => PLUGIN_PATH."assets/images/seat1.png",
            "dependency" => array('element' => 'tz_type', 'value' => '3')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview", "aventura-plugin"),
            "param_name"    => "preview_4",
            "value"         => PLUGIN_PATH."assets/images/seat4.png",
            "dependency" => array('element' => 'tz_type', 'value' => '4')
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Field Name Option", "js_composer"),
            "param_name"    => "tz_name_option",
            "value"         => array(
                esc_html__("Show", "js_composer") => 'show',
                esc_html__("Hide", "js_composer") => "hide"),
            "description"   => esc_html__("", "aventura-plugin"),
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Field Name Label", "aventura-plugin"),
            "param_name" => "tz_name_label",
            "dependency" => array('element' => 'tz_name_option', 'value' => array('show')),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Field Destination Option", "js_composer"),
            "param_name"    => "tz_destination_option",
            "value"         => array(
                esc_html__("Show", "js_composer") => 'show',
                esc_html__("Hide", "js_composer") => "hide"),
            "description"   => esc_html__("", "aventura-plugin"),
            "dependency"    => array('element' => 'tz_type', 'value' => array('1','3','4'))
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Field Destination Label", "aventura-plugin"),
            "param_name" => "tz_destination_label",
            "dependency" => array('element' => 'tz_destination_option', 'value' => array('show')),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Field Date Option", "js_composer"),
            "param_name"    => "tz_date_option",
            "value"         => array(
                esc_html__("Show", "js_composer") => "show",
                esc_html__("Hide", "js_composer") => "hide"),
            "description"   => esc_html__("", "aventura-plugin"),
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Field Date Label", "aventura-plugin"),
            "param_name" => "tz_date_label",
            "description"   => esc_html__("", "aventura-plugin"),
            "dependency" => array('element' => 'tz_date_option', 'value' => array('show')),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Field Duration Option", "js_composer"),
            "param_name"    => "tz_duration_option",
            "value"         => array(
                esc_html__("Show", "js_composer") => 'show',
                esc_html__("Hide", "js_composer") => "hide"),
            "description"   => esc_html__("", "aventura-plugin"),
            "dependency"    => array('element' => 'tz_type', 'value' => array('1','3','4'))
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => false,
            "heading"    => esc_html__("Field Duration Label", "aventura-plugin"),
            "param_name" => "tz_duration_label",
            "dependency" => array('element' => 'tz_duration_option', 'value' => array('show')),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Field Category Option", "js_composer"),
            "param_name"    => "tz_category_option",
            "value"         => array(
                esc_html__("Hide", "js_composer") => "hide",
                esc_html__("Show", "js_composer") => 'show'),
            "description"   => esc_html__("", "aventura-plugin"),
            "dependency"    => array('element' => 'tz_type', 'value' => array('1','3','4'))
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Field Category Label", "aventura-plugin"),
            "param_name" => "tz_category_label",
            "dependency" => array('element' => 'tz_category_option', 'value' => array('show')),
        ),

        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Field Language Label", "aventura-plugin"),
            "param_name" => "tz_language_label",
            "dependency"    => array('element' => 'tz_type', 'value' => array('1'))
        ),

        array(
            "type"       => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading"    => esc_html__("Button Text", "aventura-plugin"),
            "param_name" => "tz_button",
        ),
        array(
            'type'        => 'css_editor',
            'param_name'  => 'css',
            'heading'     => esc_html__( 'CSS box', 'aventura-plugin' ),
            'group'       => esc_html__( 'Design Options', 'aventura-plugin' ),
        ),
    )
) );
endif;
?>