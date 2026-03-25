<?php
/*
 * Element tz-feature-item
 * */

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function autoshowroom_our_themes($atts, $content = null)
{
    $description = $title = $our_demos_params = '';
    extract(shortcode_atts(array(
        'title' => '',
        'description' => '',
        'our_themes_params' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="our-themes our-themes-container">
        <?php if ($title != '') : ?>
            <h2 class="title"><?php echo balanceTags($title); ?></h2>
        <?php endif; ?>
        <div class="our-theme">
            <?php
            if (!empty(vc_param_group_parse_atts($atts['our_themes_params']))):
                $i = 0;
                foreach (vc_param_group_parse_atts($atts['our_themes_params']) as $params):
                    $i++;
                    ?>
                    <div class="our-theme-item">
                        <?php if ($params['image_icon'] != '') : ?>
                            <a target="_blank"
                               href="<?php echo esc_url(vc_build_link($params['url'])['url']); ?>"
                               title="<?php echo esc_attr(vc_build_link($params['url'])['title']); ?>">
                                <?php
                                echo wp_get_attachment_image($params['image_icon'], 'full', "", array("class" => "img-theme-icon",
                                    "alt" => "image"));
                                ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($params['image'] != '') : ?>
                            <div class="STD_boxhover">
                                <a target="_blank"
                                   href="<?php echo esc_url(vc_build_link($params['url'])['url']); ?>"
                                   title="<?php echo esc_attr(vc_build_link($params['url'])['title']); ?>">
                                    <?php
                                    echo wp_get_attachment_image($params['image'], 'full', "", array("class" => "img-theme",
                                        "alt" => "image"));
                                    ?>
                                </a>
                                <div class="ourtheme_content">
                                    <h3><?php echo esc_attr(vc_build_link($params['url'])['title']); ?></h3>
                                    <p><?php echo balanceTags($params['description']); ?></p>
                                </div>
                            </div>
                        <?php
                        endif; ?>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('autoshowroom-our-themes', 'autoshowroom_our_themes');
?>