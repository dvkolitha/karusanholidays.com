<?php

$tztour_to = array(
    'Choose tour category' => '',
);
$cat_tour = get_categories(
    array(
        'taxonomy' => 'tour-category',
        'hide_empty' => 0,
        'post_type' => 'tour',
    )
);

foreach ($cat_tour as $cato) {
    $tztour_to[$cato->name] = $cato->slug;
}

if (function_exists('vc_map')):
    vc_map(array(
        "name" => esc_html__("Tour Categories", "aventura-plugin"),
        "weight" => 14,
        "base" => "tz-tourcategory",
        "icon" => "icon-element",
        "description" => "",
        "class" => "tzElement_extended",
        "category" => esc_html__("Aventura", "aventura-plugin"),
        "params" => array(
            array(
                "type" => "attach_image",
                "class" => "",
                "heading" => esc_html__("Image Tour Category", "aventura-plugin"),
                "param_name" => "image_tour_category",
                "value" => esc_html__("", "aventura-plugin"),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__("Tour Categories", "aventura-plugin"),
                "param_name" => "tz_tour_category",
                "value" => $tztour_to,
            ),
            array(
                'type' => 'css_editor',
                'param_name' => 'css',
                'heading' => esc_html__('CSS box', 'aventura-plugin'),
                'group' => esc_html__('Design Options', 'aventura-plugin'),
            ),
        )
    ));
endif;
?>