<?php
function tzaventura_listtags($atts)
{
    $tz_post_tags = $tz_woo_tags = $type = $tz_tour_tags = $caption = $css = '';
    extract(shortcode_atts(array(
        'tz_tour_tags' => '',
        'caption' => 'all tags',
        'css' => '',
        'type' => '0',
        'tz_woo_tags' => '',
        'tz_post_tags' => '',

    ), $atts));
    ob_start();
    ?>
    <div class="Tz_woo_tags <?php echo vc_shortcode_custom_css_class($css); ?>">
        <div class="tz_cat_top">
            <div class="icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h3><?php echo esc_attr($caption); ?></h3>
        </div>
        <div class="tz_catbottom">
            <?php

            if ($type == '2'):
                if ($tz_woo_tags != ''):
                    $arr = explode(",", $tz_woo_tags);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'product_tag');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'product_tag') . '">' . $term->name . '</a></h4>';
                        endif;
                    }
                else:
                    echo '<h4>Empty</h4>';
                endif;
            elseif ($type == '1'):
                if ($tz_tour_tags != ''):
                    $arr = explode(",", $tz_tour_tags);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'tour-language');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'tour-language') . '">' . $term->name . '</a></h4>';
                        endif;
                    }
                else:
                    echo '<h4>Empty</h4>';
                endif;
            else:
                if ($tz_post_tags != ''):
                    $arr = explode(",", $tz_post_tags);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'post_tag');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'post_tag') . '">' . $term->name . '</a></h4>';
                        endif;
                    }
                else:
                    echo '<h4>Empty</h4>';
                endif;
            endif;
            ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('tz-listtags', 'tzaventura_listtags');

?>