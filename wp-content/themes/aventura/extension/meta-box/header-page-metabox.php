<?php
add_filter('rwmb_meta_boxes', 'aventura_header_page_meta_boxes');
function aventura_header_page_meta_boxes($aventura_header_page_meta_boxes)
{
    $aventura_header_page_meta_boxes[] = array(
        'id' => 'aventura_header_footer_page_options',
        'title' => esc_html__('Header Page Options', 'aventura'),
        'post_types' => 'page',
        'autosave' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Header Option', 'aventura'),
                'id' => "aventura_header_page_option",
                'type' => 'select',
                'desc' => esc_html__('If you select Default, Header will get options in Theme Options', 'aventura'),
                'options' => array(
                    'default' => esc_html__('Default', 'aventura'),
                    'custom' => esc_html__('Custom', 'aventura'),
                ),
                'std' => 'default',
            ),
            array(
                'name' => esc_html__('Header Type', 'aventura'),
                'id' => "aventura_header_page_type",
                'type' => 'select',
                'options' => array(
                    '0'  => esc_html__('Header Type 1', 'aventura'),
                    '1'  => esc_html__('Header type 2', 'aventura'),
                    '2'  => esc_html__('Header type 3', 'aventura'),
                    '3'  => esc_html__('Header type 4', 'aventura'),
                    '4'  => esc_html__('Header type 5', 'aventura'),
                    '5'  => esc_html__('Header type 6', 'aventura'),
                    '6'  => esc_html__('Header type 7', 'aventura'),
                    '7'  => esc_html__('Header type 8', 'aventura'),
                    '8'  => esc_html__('Header type 9', 'aventura'),
                    '9'  => esc_html__('Header type 10', 'aventura'),
                    '10' => esc_html__('Header type 11', 'aventura'),
                ),
                'std' => '0',
            ),

        ),
    );
    return $aventura_header_page_meta_boxes;
}