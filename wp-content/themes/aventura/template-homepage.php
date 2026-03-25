<?php
/*
 * Template Name: Template Home Default
 */
?>

<?php
get_header();
get_template_part('template_inc/inc', 'menu');
$aventura_type = aventura_metabox('aventura_header_page_type', '', '', '');
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');
$aventura_header_theme_select = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_header_page_option = aventura_metabox('aventura_header_page_option', '', '', 'default');
$aventura_header_page_select = aventura_metabox('aventura_header_page_type', '', '', '0');
//
$tz_class = '';
if (($aventura_header_theme_select == '0' && $aventura_header_page_option != 'custom') || ($aventura_header_page_select == '0' && $aventura_header_page_option == 'custom')) {
    $tz_class = 'tz_subx';
}elseif (($aventura_header_theme_select == '2' && $aventura_header_page_option != 'custom') || ($aventura_header_page_select == '2' && $aventura_header_page_option == 'custom')) {
    $tz_class = 'tz_suby';
}elseif (($aventura_header_theme_select == '7' && $aventura_header_page_option != 'custom') || ($aventura_header_page_select == '7' && $aventura_header_page_option == 'custom')) {
    $tz_class = 'tz_sub';
}
?>
    <div class="main-content <?php echo $tz_class; ?> <?php if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8')) {echo 'tz-mgleft';} ?>">
        <?php
        if (have_posts()):
            while (have_posts()):the_post();
                the_content();
                wp_link_pages(array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'aventura') . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'aventura') . ' </span>%',
                    'separator' => '<span class="screen-reader-text">, </span>',
                ));
            endwhile;
        endif;
        ?>
    </div>
<?php
get_footer();
?>