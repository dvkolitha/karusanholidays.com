<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu');
//$aventura_breadcrumb    = aventura_metabox('aventura_page_breadcrumb','','','show');
//$aventura_row           = aventura_metabox('aventura_page_row','','','container');
//$aventura_paddingTop    = aventura_metabox('aventura_page_padding_top','','','');
//$aventura_paddingBottom = aventura_metabox('aventura_page_padding_bottom','','','');
//$aventura_background_color = aventura_metabox('aventura_page_backgroud_color','','','');

$aventura_row           = aventura_metabox('aventura_page_general_row','','','container');
$aventura_paddingTop    = aventura_metabox('aventura_page_general_padding_top','','','');
$aventura_paddingBottom = aventura_metabox('aventura_page_general_padding_bottom','','','');
$aventura_background_color = aventura_metabox('aventura_page_general_backgroud_color','','','');

$aventura_type =   aventura_metabox( 'aventura_header_page_type','','','' );
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');

//if($aventura_breadcrumb == 'show'){
    get_template_part('template_inc/inc','breadcrumb');
//}

$aventura_style = '';
if($aventura_paddingTop != '' || $aventura_paddingBottom != '' || $aventura_background_color != '' ):
    $aventura_style .= 'style=';
    if($aventura_paddingTop != ''):
        $aventura_style .= 'padding-top:' . $aventura_paddingTop . 'px;';
    endif;

    if($aventura_paddingBottom != ''):
        $aventura_style .= 'padding-bottom:' . $aventura_paddingBottom . 'px;';
    endif;

    if($aventura_background_color != ''):
        $aventura_style .= 'background-color:' . $aventura_background_color . ';';
    endif;
endif;
?>

<div class="tz_page_content <?php if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8' ) || ($aventura_type == '' && $aventura_meta_option == '' && $aventura_redux_type == '8')) { echo 'tz-mgleft';} ?>" <?php echo esc_attr($aventura_style)?>>
    <?php if($aventura_row == 'container'){ ?>
    <div class="container">
    <?php } ?>
    <?php
    while (have_posts()) : the_post() ;
        ?>
            <?php
                the_content();
                wp_link_pages() ;
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'aventura' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'aventura' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        <div class="tzComments">
        <?php
        comments_template( '', true ); ?>
        </div><!-- end comments -->
        <?php
    endwhile;
    ?>
    <?php if($aventura_row == 'container'){ ?>
    </div><!--End Container -->
    <?php } ?>
</div><!--End Page Content -->
<?php
get_template_part('template_inc/inc','footer');
get_footer();
?>

