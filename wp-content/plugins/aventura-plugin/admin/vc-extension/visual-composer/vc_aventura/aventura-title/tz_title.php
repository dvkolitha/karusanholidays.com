<?php
/*===============================
Shortocde tz-skill-item
===============================*/

function tzaventura_title($atts, $content = null)
{
    $tz_text_align = $css = $tz_title = $tz_color_title = '';
    extract(shortcode_atts(array(
        'tz_title' => '',
        'tz_color_title' => '',
        'tz_text_align' => 'left',
        'css' => '',
    ), $atts));
    ob_start();

    $tzinteriart_class = '';
    if ($tz_text_align != '') {
        $tzinteriart_class .= ' Tz_align_' . $tz_text_align;
    }
    ?>
    <div class="tzElement_title <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php if ($tz_title != '') : ?>

        <h2 class="tzTitle <?php echo esc_attr($tzinteriart_class); ?>" <?php if ($tz_color_title != '') {
            echo 'style="color:' . esc_attr($tz_color_title) . '"';
        } ?>>
            <?php echo balanceTags($tz_title); ?>
        </h2>

        <?php endif; ?>

    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-title', 'tzaventura_title');
?>
