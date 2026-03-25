<?php
$tztour_cat = array();
$cat_tour = get_categories(array('taxonomy'=>'product_tag','hide_empty' => 0));

foreach ($cat_tour as $cat){
        $tztour_cat[$cat->name] = $cat->term_id;
}

$tztour_ca = array();
$ca_tour = get_categories(array('taxonomy'=>'post_tag','hide_empty' => 0));

foreach ($ca_tour as $cate){
    $tztour_ca[$cate->name] = $cate->term_id;
}

$tztour_to = array();
$cat_tour = get_categories(array('taxonomy'=>'tour-language','hide_empty' => 0,'post_type'=>'tour'));

foreach ($cat_tour as $cato){
    $tztour_to[$cato->name] = $cato->term_id;
}


if(function_exists('vc_map')):
vc_map( array(
    "name" => esc_html__("List Tags", "aventura-plugin"),
    "weight" => 14,
    "base" => "tz-listtags",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Aventura", "aventura-plugin"),
    "params" => array(

        array(
            "type" => "dropdown",
            "class" => "",
            "admin_label" => true,
            "heading" =>  esc_html__("Select The Tags", "aventura-plugin"),
            "param_name" => "type",
            "value" => array(
                esc_html__("Post Tags", "aventura-plugin")=>'0',
                esc_html__("Tour Language", "aventura-plugin")=>'1',
                esc_html__("Woocommerce Tags", "aventura-plugin")=>'2',
            ),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "admin_label" => true,
            "heading" =>  esc_html__("Title tags", "aventura-plugin"),
            "param_name" => "caption",
            "value" => "all tags",
        ),
        array(
            "type" => "checkbox",
            "class" => "",
            "admin_label" => true,
            "heading" =>  esc_html__("Woocommerce Tags", "aventura-plugin"),
            "param_name" => "tz_woo_tags",
            "value" => $tztour_cat,
            "dependency"    => array('element' => 'type', 'value' => '2'),
        ),
        array(
            "type" => "checkbox",
            "class" => "",
            "admin_label" => true,
            "heading" =>  esc_html__("Tour Language", "aventura-plugin"),
            "param_name" => "tz_tour_tags",
            "value" => $tztour_to,
            "dependency"    => array('element' => 'type', 'value' => '1'),
        ),
        array(
            "type" => "checkbox",
            "class" => "",
            "admin_label" => true,
            "heading" =>  esc_html__("Post Tags", "aventura-plugin"),
            "param_name" => "tz_post_tags",
            "value" => $tztour_ca,
            "dependency"    => array('element' => 'type', 'value' => '0'),
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