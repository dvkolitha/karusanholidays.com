<?php
/*===============================
Shortocde tz-skill-item
===============================*/

function tzinteriart_headingcontent($atts, $content = null)
{
    $tz_marginh = $tz_marginp = $tz_paddh = $tz_fsizeh = $tz_cbalign = $tz_text_align = $css = $tz_icontxt = $tz_txtlink = $link = $tz_title = $tz_color_title = $tz_text_align = '';
    extract(shortcode_atts(array(
        'tz_title' => '',
        'tz_color_title' => '',
        'tz_text_align' => 'left',
        'link' => '',
        'tz_txtlink' => '',
        'tz_icontxt' => '',
        'css' => '',
        'tz_cbalign' => 'left',
        'tz_fsizeh' => '',
        'tz_marginh'=> '',
        'tz_marginp'=> '',
    ), $atts));
    ob_start();

    $content = wpb_js_remove_wpautop($content, true);
    $vc_link = vc_build_link($link);
    $tzinteriart_class = '';
    $tzinteriarts_class = '';
    if ($tz_text_align != '') {
        $tzinteriart_class .= ' Tz_align_' . $tz_text_align;
        $tzinteriarts_class = 'Tz_' . $tz_cbalign;
    }
    $aventura_customh_style = '';
    if ($tz_color_title != '' || $tz_fsizeh != '' ||  $tz_marginh != '' ):
        $aventura_customh_style .= 'style="';
        if ($tz_color_title != ''):
            $aventura_customh_style .= 'color:' . $tz_color_title . 'px;';
        endif;
        if ($tz_fsizeh != ''):
            $aventura_customh_style .= 'font-size:' . $tz_fsizeh . 'px;';
        endif;

        if ($tz_marginh != ''):
            $aventura_customh_style .= 'margin-bottom:' . $tz_marginh . 'px;';
        endif;

        $aventura_customh_style .= '"';
    endif;

    $aventura_customb_style = '';
    if (  $tz_marginp != '' ):
        $aventura_customb_style .= 'style="';
        if ($tz_marginp != ''):
            $aventura_customb_style .= 'margin-top:' . $tz_marginp . 'px;';
        endif;

        $aventura_customb_style .= '"';
    endif;
    ?>

<div class="tzElement-heading-title <?php if ($aventura_customh_style !=''){echo 'tz_custom';} ?> <?php if ($content == '' && $tz_txtlink == '' ){ echo "Tz_Title"; } ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
    <?php if ($tz_title != '') : ?>

    <h2 class="tzTitle <?php echo esc_attr($tzinteriart_class); ?>" <?php echo $aventura_customh_style; ?>>
        <?php echo balanceTags($tz_title); ?>
    </h2>

<?php endif; ?>
    <?php if ($content != '' || $tz_txtlink != ''): ?>
    <div class="Tz_box <?php echo $tzinteriarts_class; ?>">
        <?php if ($content != ''): ?>
            <div class="Tz_content">
                <?php echo balanceTags($content) ?>
            </div>
        <?php endif; ?>

        <?php if ($tz_txtlink != ''): ?>
            <div class="Tz_btn" <?php echo $aventura_customb_style?> >
                <?php if (isset($vc_link['url']) && $vc_link['url'] != ''): ?>
                    <a <?php echo ($vc_link['target'] != '' ? 'target="' . esc_attr($vc_link['target']) . '"' : '') . ' ' . ($vc_link['url'] != '' ? 'href="' . esc_attr($vc_link['url']) . '"' : '') . ' ' . ($vc_link['title'] != '' ? 'title="' . esc_attr($vc_link['title']) . '"' : ''); ?>>
                        <?php echo esc_attr($tz_txtlink); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
</div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-heading-content', 'tzinteriart_headingcontent');
?>
