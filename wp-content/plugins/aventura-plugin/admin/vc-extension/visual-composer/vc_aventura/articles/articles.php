<?php

function tzaventura_articles($atts)
{
    $tz_des = $tz_tbl = $tz_mb = $tz_desm = $tz_title = $tz_category = $tz_perpage = $tz_size = $tz_orderby = $tz_order = $tz_label = $tz_link = $el_class = $css = $tz_type = '';
    extract(shortcode_atts(array(
        'tz_title' => '',
        'tz_category' => '',
        'tz_perpage' => '6',
        'tz_size' => 'large',
        'tz_orderby' => '',
        'tz_order' => '',
        'tz_label' => '',
        'tz_link' => '',
        'el_class' => '',
        'css' => '',
        'tz_type' => '1',
        'tz_des' => '4',
        'tz_desm' => '4',
        'tz_tbl' => '6',
        'tz_mb' => '12',
    ), $atts));
    ob_start();
    global $post;
    ?>
<div class="tzElement_Articles<?php if ($el_class != '') echo esc_attr($el_class); ?> <?php echo vc_shortcode_custom_css_class($css); ?> type-<?php echo esc_attr($tz_type); ?>">
    <?php if ($tz_type == 1 || $tz_type == 2 || $tz_type == 3) : ?>
    <div class="Articles-top">
        <?php if ($tz_title != '') { ?>
            <h2 class="Articles-Title"><?php echo esc_html($tz_title); ?></h2>
        <?php } ?>
        <?php if ($tz_label != '') { ?>
            <a href="<?php echo esc_html($tz_link); ?>" class="view-more"><?php echo esc_html($tz_label); ?></a>
        <?php } ?>
    </div>

    <div class="row">
        <?php
        $tz_cat_id = get_cat_ID($tz_category);
        $tz_args = array(
            'post_type' => 'post',
            'posts_per_page' => $tz_perpage,
            'orderby' => $tz_orderby,
            'order' => $tz_order,
            'cat' => $tz_cat_id,
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array('post-format-link', 'post-format-quote'),
                    'operator' => 'NOT IN'
                )
            )
        );

        $tz_news_query = '';
        $tz_news_query = new WP_Query($tz_args);

        if ($tz_news_query->have_posts()) : while ($tz_news_query->have_posts()) :
            $tz_news_query->the_post();
            $tz_post_thumbnail_id = get_post_thumbnail_id($post->ID);
            $tz_post_thumbnail = wpb_getImageBySize(array(
                'attach_id' => $tz_post_thumbnail_id,
                'thumb_size' => $tz_size,
            ));
            $tz_image_thumbnail = $tz_post_thumbnail['thumbnail'];
            ?>
            <?php if ($tz_type == '1' || $tz_type == '2' || $tz_type == '3') : ?>
            <?php if ($tz_des != '0' || $tz_desm != '0' | $tz_tbl != '' | $tz_mb != '0'): ?>
                <div class="tzArticle-item col-lg-<?php echo esc_attr($tz_des) ?> col-md-<?php echo esc_attr($tz_desm) ?> col-sm-<?php echo esc_attr($tz_tbl) ?> col-xs-<?php echo esc_attr($tz_mb) ?>">
            <?php else: ?>
                <div class="tzArticle-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <?php endif; ?>
            <?php if ($tz_type == '1' || $tz_type == '2') : ?>

                <div class="content-article">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $tz_image_thumbnail; ?>
                    </a>
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div class="info">
                    <span class="author"> <?php the_author(); ?></span>
                    <span class="date"><?php echo get_the_date(); ?></span>
                </div>

            <?php else: ?>

                <div class="content-article">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $tz_image_thumbnail; ?>
                    </a>
                </div>
                <div class="infos">
                    <span class="dates"><?php echo get_the_date(); ?></span>
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>

            <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php
        endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
<?php endif; ?>
</div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-articles', 'tzaventura_articles');

?>