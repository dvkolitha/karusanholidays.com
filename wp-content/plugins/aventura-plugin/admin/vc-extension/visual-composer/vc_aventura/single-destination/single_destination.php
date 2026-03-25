<?php
/*===============================
element Single-destination
===============================*/
function tzaventura_distinations($atts)
{
    $tz_image = $tz_destination = $tz_size = $css = $tz_tttour = '';
    extract(shortcode_atts(array(
        'tz_destination' => '',
        'css' => '',
        'tz_size' => '',
        'tz_image' => '',
        'tz_tttour' => '',
    ), $atts));
    ob_start();

    global $post;
    $tz_destination_array = explode(',', $tz_destination);

    $tz_img_id = preg_replace('/[^\d]/', '', $tz_image);
    $tz_width_img = '';
    $tz_height_img = '';
    $tz_images_info = wp_get_attachment_image_src($tz_img_id, $size = 'full');
    if (isset($tz_images_info) && !empty($tz_images_info)) {
        $tz_url_img = $tz_images_info[0];
        $tz_width_img = $tz_images_info[1];
        $tz_height_img = $tz_images_info[2];
    }
    ?>
    <div class="tzElement_Distination <?php echo vc_shortcode_custom_css_class($css); ?>">


        <?php
        $tz_args = array(
            'post_type' => 'destination',
            'post__in' => $tz_destination_array,
            'posts_per_page' => 1,
        );
        $tz_query = new WP_Query($tz_args);
        while ($tz_query->have_posts()): $tz_query->the_post();

            $tz_args1 = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'aventura_tour_destination',
                        'value' => $tz_query->post->ID,
                        'compare' => '=',
                    ),
                )
            );
            $tz_query1 = new WP_Query($tz_args1);
            $tz_post_thumbnail_id = get_post_thumbnail_id($post->ID);
            $tz_post_thumbnail = wpb_getImageBySize(array(
                'attach_id' => $tz_post_thumbnail_id,
                'thumb_size' => 'full',
            ));
            $tz_image_thumbnail = $tz_post_thumbnail['thumbnail'];

            $tour_text = esc_html__(' TOUR', 'aventura-plugin');
            if ($tz_query1->post_count > 1) {
                $tour_text = esc_html__(' TOURS', 'aventura-plugin');
            }
            ?>

            <div class="Tz_img">
                <a href="<?php the_permalink(); ?>">
                    <?php if ($tz_image != ''): ?>
                        <img class="Tz_poster_image" width="<?php echo esc_attr($tz_width_img); ?>"
                             height="<?php echo esc_attr($tz_height_img); ?>" alt=""
                             src="<?php echo esc_url($tz_url_img); ?>">
                    <?php
                    else:
                        echo $tz_image_thumbnail;
                    endif;
                    ?>
                    <div class="tz-overlay"></div>
                </a>
            </div>
            <h3 class="title">
                <?php if ($tz_tttour != '0'):?>
                <span class="count-offer"><?php echo $tz_query1->post_count; ?><?php echo esc_html($tour_text); ?></span>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>


    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('tz-distinations', 'tzaventura_distinations');

?>