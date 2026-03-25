<?php
function tzaventura_listcategory($atts)
{
    $tz_post_category = $tz_woo_category = $type = $tz_tour_category = $caption = $css = '';
    extract(shortcode_atts(array(
        'tz_tour_category' => '',
        'caption' => 'all categories',
        'css' => '',
        'type' => '0',
        'tz_woo_category' => '',
        'tz_post_category' => '',

    ), $atts));
    ob_start();
    ?>
    <div class="Tz_woo_categories <?php echo vc_shortcode_custom_css_class($css); ?>">
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
                if ($tz_woo_category != ''):
                    $arr = explode(",", $tz_woo_category);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'product_cat');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'product_cat') . '">' . $term->name . '</a></h4>';
                        endif;

                    }
                else:
                    echo '<h4>Empty</h4>';
                endif;
            elseif ($type == '1'):
                if ($tz_tour_category != ''):
                    $arr = explode(",", $tz_tour_category);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'tour-category');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'tour-category') . '">' . $term->name . '</a></h4>';
                        endif;
                    }
                else:
                    echo '<h4>Empty</h4>';
                endif;
            else:
                if ($tz_post_category != ''):
                    $arr = explode(",", $tz_post_category);
                    $count_cat = count($arr);
                    for ($i = 0; $i < $count_cat; $i++) {
                        $term = get_term($arr[$i], 'category');
                        if (Empty($term->slug)): echo '';
                        else:
                            echo '<h4><a  href="' . get_term_link($term->slug, 'category') . '">' . $term->name . '</a></h4>';
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

add_shortcode('tz-listcategory', 'tzaventura_listcategory');

?>