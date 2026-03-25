<?php
/*===============================
Shortocde tz-skill-item
===============================*/

function tzinteriart_buttonaventura($atts, $content = null)
{
    $tz_fsize = $btn_type = $tz_type = $css = $tz_icontxt = $tz_txtlink = $link = $tz_title = $tz_color_title = $tz_text_align = '';
    extract(shortcode_atts(array(
        'tz_title' => '',
        'tz_fsize' => '',
        'tz_color_title' => '',
        'tz_text_align' => 'center',
        'link' => '',
        'tz_txtlink' => '',
        'tz_icontxt' => '',
        'css' => '',
        'tz_type' => '1',
        'btn_type'  => 'left',
    ), $atts));
    ob_start();

    $vc_link = vc_build_link($link);

    $btn_align = "tz_btn_align_".$btn_type;

    ?>
    <?php if ($tz_type == '1'):?>
        <div class="<?php echo vc_shortcode_custom_css_class($css)?> TzElement_btn_aventura <?php echo $btn_align?>">
    <?php  else:?>
        <div class="<?php echo vc_shortcode_custom_css_class($css)?> TzElement_btn_type<?php echo $tz_type?> <?php echo $btn_align?>">
    <?php endif;?>

        <?php if ($tz_txtlink != ''): ?>
            <?php if (isset($vc_link['url']) && $vc_link['url'] != ''): ?>
                <a <?php echo ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?> data-hover ="<?php echo esc_html($tz_txtlink); ?>" <?php if ($vc_link['target'] != ''): ?>target="_blank"<?php endif; ?> <?php if ($tz_fsize != ''): ?>style="font-size:<?php echo $tz_fsize;?>"<?php endif;?>>
                    <?php if ($tz_type == '3'){echo'<span class="icon-arrow-right"></span>';} ?><?php echo balanceTags($tz_txtlink); ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    <?php echo '</div>';?>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-button', 'tzinteriart_buttonaventura');
?>
