<?php
global $aventura_options;

/* Header Select Type */
$aventura_newsletter_theme_select = ((!isset($aventura_options['aventura_newsletter_type_select'])) || empty($aventura_options['aventura_newsletter_type_select'])) ? '0' : $aventura_options['aventura_newsletter_type_select'];
$aventura_newsletter_theme_title = ((!isset($aventura_options['aventura_newsletter_title'])) || empty($aventura_options['aventura_newsletter_title'])) ? '0' : $aventura_options['aventura_newsletter_title'];
$aventura_newsletter_theme_subtitle = ((!isset($aventura_options['aventura_newsletter_subtitle'])) || empty($aventura_options['aventura_newsletter_subtitle'])) ? '' : $aventura_options['aventura_newsletter_subtitle'];

$aventura_newsletter_page_option = aventura_metabox('aventura_newsletter_page_option','','','default');
$aventura_newsletter_page_type = aventura_metabox('aventura_newsletter_page_type','','','0');
$aventura_newsletter_page_title = aventura_metabox('aventura_newsletter_page_title','','','');
$aventura_newsletter_page_subtitle = aventura_metabox('aventura_newsletter_page_subtitle','','','');
$aventura_newsletter_page_bgimage = aventura_metabox('aventura_newsletter_page_bgimage','','','');
$aventura_newsletter_page_bgcolo = aventura_metabox('aventura_newsletter_page_bgcolo','','','');

$aventura_type =   aventura_metabox( 'aventura_header_page_type','','','' );
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');

$aventura_bg_image = $aventura_title = $aventura_newsletter_type = $aventura_newsletter_style = $aventura_newsletter_title = $aventura_newsletter_subtitle = $aventura_breadcrumb = $aventura_page_breadcrumb_title = $aventura_page_breadcrumb_path = $aventura_newsletter_backfround = '';

if(is_page() && $aventura_newsletter_page_option == 'custom'):

    $aventura_newsletter_type = $aventura_newsletter_page_type;
    $aventura_newsletter_title = $aventura_newsletter_page_title;
    $aventura_newsletter_subtitle = $aventura_newsletter_page_subtitle;

    if($aventura_newsletter_page_bgimage != '' || $aventura_newsletter_page_bgcolo != ''):
        $aventura_newsletter_style .= 'style="background-size: cover;background-position: center;';
        if($aventura_newsletter_page_bgimage != ''):
            foreach( $aventura_newsletter_page_bgimage as $aventura_image ):
                $aventura_newsletter_style .= 'background-image: url(' . $aventura_image["full_url"] .');';
            endforeach;
        endif;

        if($aventura_newsletter_page_bgcolo != ''):
            $aventura_newsletter_style .= 'background-color:' . $aventura_newsletter_page_bgcolo .';';
        endif;

        $aventura_newsletter_style .= '"';
    endif;

    $aventura_breadcrumb_title = $aventura_page_breadcrumb_title;
    $aventura_breadcrumb_path = $aventura_page_breadcrumb_path;

else:
    $aventura_newsletter_style = '';
    $aventura_newsletter_type = $aventura_newsletter_theme_select;
    $aventura_newsletter_title = $aventura_newsletter_theme_title;
    $aventura_newsletter_subtitle = $aventura_newsletter_theme_subtitle;
    $aventura_newsletter_backfround = "Tz_background";
    if($aventura_bg_image != ''):
        $aventura_breadcrumb_style = 'style="background-image: url(' . $aventura_bg_image["url"] .')"';
    endif;
    $aventura_breadcrumb_title = $aventura_title;
    $aventura_breadcrumb_path = $aventura_breadcrumb;

endif;

$aventura_newsletter_class = '';
$aventura_newsletter_col_class = '';

if($aventura_newsletter_type == '0'){
    $aventura_newsletter_class = 'tz-newsletter-type-1';
    $aventura_newsletter_col_class = 'col-md-6';
}elseif($aventura_newsletter_type == '1'){
    $aventura_newsletter_class = 'tz-newsletter-type-2';
    $aventura_newsletter_col_class = 'col-md-12';
}elseif($aventura_newsletter_type == '3'){
    $aventura_newsletter_class = 'tz-newsletter-type-3';
    $aventura_newsletter_col_class = 'col-md-12';
}elseif($aventura_newsletter_type == '4'){
    $aventura_newsletter_class = 'tz-newsletter-type-4';
    $aventura_newsletter_col_class = 'col-md-12';
}

?>
<?php if(shortcode_exists('newsletter_form') && ( $aventura_newsletter_type == '0' || $aventura_newsletter_type == '1' || $aventura_newsletter_type == '4' || $aventura_newsletter_type == '3') ) { ?>
    <div class="tz-newsletter <?php if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8' ) || ($aventura_type == '' && $aventura_meta_option == '' && $aventura_redux_type == '8')) { echo 'tz-mgleft';} ?> <?php echo esc_attr($aventura_newsletter_class)?> <?php echo $aventura_newsletter_backfround;?>" <?php echo $aventura_newsletter_style;?>>
        <div class="container">
            <div class="row tz-newsletter-flex">
                <div class="newsletter-left <?php echo esc_attr($aventura_newsletter_col_class)?>">
                    <?php if($aventura_newsletter_type == '0'):?>
                        <div class="news-icon">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                    <?php endif;?>
                    <div class="news-content">
                        <h3 class="new-title">
                            <?php echo balanceTags($aventura_newsletter_title); ?>
                        </h3>
                        <?php if ($aventura_newsletter_subtitle != ''): ?>
                            <p><?php echo balanceTags($aventura_newsletter_subtitle); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="newsletter-right <?php echo esc_attr($aventura_newsletter_col_class)?>">
                    <?php
                    echo do_shortcode('[newsletter_form button_label="'. esc_html__('Submit','aventura') .'"][newsletter_field label="'. esc_html__('email','aventura') .'" name="email" placeholder="'. esc_html__('Your email..','aventura') .'"][/newsletter_form]');
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
