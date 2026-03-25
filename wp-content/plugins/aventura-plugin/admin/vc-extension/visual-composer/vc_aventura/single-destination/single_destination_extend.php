<?php
$tz_destination_args = array();
$tz_args = array(
    'post_type'  => 'destination',
    'type'         => 'post',
    'posts_per_page' => -1,
);
$tz_postslist = get_posts( $tz_args );
foreach($tz_postslist as $tz_list){
    $tz_destination_args[$tz_list -> post_title] = $tz_list -> ID;
}
if(function_exists('vc_map')):
vc_map( array(
    "name" => esc_html__("Single Destination", "aventura-plugin"),
    "weight" => 14,
    "base" => "tz-distinations",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Aventura", "aventura-plugin"),
    "params" => array(
        array(
            'type'        => 'attach_image',
            'param_name'  => 'tz_image',
            "admin_label" => false,
            "heading"       => esc_html__("Upload Image", "aventura-plugin"),
            "description" => esc_html__("If no image is uploaded, the Destination Featured Image will be used", "aventura-plugin"),
            "value" => "",

        ),
        array(
            "type" => "dropdown",
            "heading"       => esc_html__("Destination", "aventura-plugin"),
            "param_name"    => "tz_destination",
            "admin_label"   => true,
            "value"         => $tz_destination_args,
            "description"   => esc_html__("Select Show Destinations", "aventura-plugin"),
        ),

        array(
            "type" => "dropdown",
            "heading"       => esc_html__("Total Tours", "aventura-plugin"),
            "param_name"    => "tz_tttour",
            "admin_label"   => true,
            "value"         => array(
                esc_html__("Show", "aventura-plugin") => '1',
                esc_html__("Hide", "aventura-plugin") => '0',
            ),
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