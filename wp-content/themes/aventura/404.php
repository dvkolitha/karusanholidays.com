<?php
get_header();
get_template_part('template_inc/inc','menu');
get_template_part('template_inc/inc','breadcrumb');
global $aventura_options;
$aventura_title      = ((!isset($aventura_options['aventura_404_title'])) || empty($aventura_options['aventura_404_title']))? '' : $aventura_options['aventura_404_title'];
$aventura_content    = ((!isset($aventura_options['aventura_404_editor'])) || empty($aventura_options['aventura_404_editor']))? '' : $aventura_options['aventura_404_editor'];

$aventura_type =   aventura_metabox( 'aventura_header_page_type','','','' );
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');

?>
<div class="page-404 <?php if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8' ) || ($aventura_type == '' && $aventura_meta_option == '' && $aventura_redux_type == '8')) { echo 'tz-mgleft';} ?>">
    <div class="container error">
        <div class="bug-content">
            <?php if($aventura_title != ''):?>
                <h3><?php echo esc_html($aventura_title);?></h3>
            <?php endif;?>
            <?php if($aventura_content != ''):?>
                <p><?php echo esc_html($aventura_content);?></p>
            <?php endif;?>
            <span><?php esc_html_e('404', 'aventura');?></span>
            <a class="go-back" href="<?php echo esc_url(home_url('/')); ?>"><?php echo  esc_html__('Go Back Home', 'aventura'); ?></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
