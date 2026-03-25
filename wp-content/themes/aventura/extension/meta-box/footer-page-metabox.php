<?php
add_filter('rwmb_meta_boxes', 'aventura_footer_page_meta_boxes');
function aventura_footer_page_meta_boxes($aventura_footer_page_meta_boxes)
{
    $aventura_footer_page_meta_boxes[] = array(
        'id' => 'aventura_footer_page_options',
        'title' => esc_html__('Footer Page Options', 'aventura'),
        'post_types' => 'page',
        'autosave' => true,
        'fields' => array(

            array(
                'name' => esc_html__('Footer Top Option', 'aventura'),
                'id' => "aventura_footer_page_option",
                'type' => 'select',
                'desc' => esc_html__('If you select Default, Footer Top will get options in Theme Options', 'aventura'),
                'options' => array(
                    'default' => esc_html__('Default', 'aventura'),
                    'custom' => esc_html__('Custom', 'aventura'),
                ),
                'std' => 'default',
            ),
            array(
                'name' => esc_html__('Footer Type', 'aventura'),
                'id' => "aventura_footer_page_type",
                'type' => 'select',
                'options' => array(
                    '3' => esc_html__('Select Footer Type', 'aventura'),
                    '0' => esc_html__('Footer Type 1', 'aventura'),
                    '1' => esc_html__('Footer type 2', 'aventura'),
                    '2' => esc_html__('Footer type 3', 'aventura'),
                ),
                'std' => '3',
            ),
            array(
                'name' => esc_html__('Option Background', 'aventura'),
                'id' => "aventura_footer_one_option",
                'type' => 'select',
                'options' => array(
                    '0' => esc_html__('Custom Background', 'aventura'),
                    '1' => esc_html__('No Background', 'aventura'),
                ),
                'std' => '1',
            ),
            array(
                'name' => esc_html__('Footer Background Image', 'aventura'),
                'id' => "aventura_footer_page_bgimage",
                'type' => 'image_advanced',
                // Delete image from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same image for multiple posts
                'force_delete' => false,
                // Maximum image uploads
                'max_file_uploads' => 1,
                // Display the "Uploaded 1/2 files" status
                'max_status' => false,
            ),
            array(
                'name' => __(" ".'<span>&nbsp;</span>'."", 'aventura'),
                'desc' => esc_html__('Footer Background Color', 'aventura'),
                'id' => "aventura_footer_page_bgcolo",
                'type' => 'color',
            ),
            array(
                'name' => esc_html__('Padding Bottom', 'aventura'),
                'id' => "aventura_footer_page_padding",
                'type' => 'text',
                'desc' => 'Ex: 50px',
            ),
            array(
                'name' => esc_html__('Branch Gallery', 'aventura'),
                'id' => "aventura_footer_gallery_type",
                'type' => 'select',
                'options' => array(
                    '0' => esc_html__('Show', 'aventura'),
                    '1' => esc_html__('Hide', 'aventura'),
                ),
                'std' => '0',
            ),
            array(
                'name' => esc_html__('Footer Bottom Option', 'aventura'),
                'id' => "aventura_footer_bottom_page_option",
                'type' => 'select',
                'desc' => esc_html__('If you select Default, Footer Bottom will get options in Theme Options', 'aventura'),
                'options' => array(
                    'default' => esc_html__('Default', 'aventura'),
                    'custom' => esc_html__('Custom', 'aventura'),
                ),
                'std' => 'default',
            ),
            array(
                'name' => esc_html__('Footer Bottom Type', 'aventura'),
                'id' => "aventura_footer_bottom_page_type",
                'type' => 'select',
                'options' => array(
                    '0' => esc_html__('Footer Menu', 'aventura'),
                    '1' => esc_html__('Footer Social', 'aventura'),
                    '2' => esc_html__('Footer Logo Branch', 'aventura'),
                ),
                'std' => '0',
            ),

        ),
    );
    return $aventura_footer_page_meta_boxes;
}