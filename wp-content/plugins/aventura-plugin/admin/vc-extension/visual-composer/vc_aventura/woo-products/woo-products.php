<?php
/**
 * woocommerce vc element products.
 *
 * @package tz-aventura/vc_templaza/woo-products
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
// Create Shortcode vc-woo-products
if (class_exists('Woocommerce')) :
    function create_vcwooproducts_shortcode($atts, $content = null)
    {
        // Attributes
        $atts = shortcode_atts(
            array(
                'woo_products_layout' => 'slider',
                'woo_products_data' => 'recent',
                'woo_products_items' => '',
                'woo_products_loop' => '',
                'woo_products_autoplay' => '',
                'woo_products_autoplayspeed' => '5000',
                'woo_products_navigation' => '',
                'woo_products_dots' => '',
                'woo_products_maxitem' => 20,
                'woo_products_order' => '',
                'woo_products_orderby' => 'ID',
                'woo_products_category' => '',
                'woo_products_columns' => '4',
                'woo_products_shtitle' => 'show',
                'woo_products_shrating' => 'show',
                'woo_products_shprice' => 'show',
                'woo_products_shthumbnail' => 'show',
                'woo_products_shlinkdetail' => 'show',
                'woo_products_shaddtocart' => 'show',
                'woo_products_shaddtowishlist' => 'show',
                'woo_products_stagePadding' => '0',
                'title' => '',
                'type' => '1',
                'description' => '',
                'css' => '',
            ),
            $atts,
            'vc-woo-products'
        );
        // main tab setting get config
        $woo_products_layout = $atts['woo_products_layout'];
        $woo_products_data = $atts['woo_products_data'];
        $woo_products_maxitem = $atts['woo_products_maxitem'];
        $woo_products_order = $atts['woo_products_order'];
        $woo_products_orderby = $atts['woo_products_orderby'];

        // slider tab setting get config
        $woo_products_items = $atts['woo_products_items'];
        $woo_products_loop = $atts['woo_products_loop'];
        $woo_products_autoplay = $atts['woo_products_autoplay'];
        $woo_products_autoplayspeed = $atts['woo_products_autoplayspeed'];
        $woo_products_nagination = $atts['woo_products_navigation'];
        $woo_products_dots = $atts['woo_products_dots'];
        $woo_products_category = $atts['woo_products_category'];
        $woo_products_columns = $atts['woo_products_columns'];
        $woo_products_stagePadding = $atts['woo_products_stagePadding'];

        // grid tab setting get config

        // Show/hide setting
        $woo_products_shtitle = $atts['woo_products_shtitle'];
        $woo_products_shrating = $atts['woo_products_shrating'];
        $woo_products_shprice = $atts['woo_products_shprice'];
        $woo_products_shthumbnail = $atts['woo_products_shthumbnail'];
        $woo_products_shlinkdetail = $atts['woo_products_shlinkdetail'];
        $woo_products_shaddtocart = $atts['woo_products_shaddtocart'];
        $woo_products_shaddtowishlist = $atts['woo_products_shaddtowishlist'];
        $css = $atts['css'];
        $title = $atts['title'];
        $type = $atts['type'];


        // Create
        if (class_exists('Woocommerce')) :
            add_action('woo_get_rating', 'woocommerce_template_loop_rating', 10);
            add_action('woo_get_add_to_cart', 'woocommerce_template_loop_add_to_cart', 20);
        endif;

        $wpe__class = "grid-layout grid-col-$woo_products_columns";

        ob_start();
        $content = wpb_js_remove_wpautop($content, true);
        if ($woo_products_order == '') {
            $order = "ASC";
        } else {
            $order = $woo_products_order;
        }

        ?>
        <!-- use function uniqid() create random ID   -->
    <div class="woo-products-element woocommerce <?php echo esc_attr($wpe__class); ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php if (!empty($content || $title)): ?>
        <div class="tz_title">
            <?php if (!empty($title)): ?>
                <h2><?php echo esc_html($title) ?></h2>
            <?php endif; ?>
            <?php if (!empty($content)): ?>
                <?php echo balanceTags($content); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
        <div class="wpe__wrapper ">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        switch ($woo_products_data) {
            case "recent":
                $woo_products_args = array(
                    'post_type' => 'product',
                    'posts_per_page' => $woo_products_maxitem,
                    'orderby' => $woo_products_orderby,
                    'order' => $order,
                    'ignore_sticky_posts' => 1,
                    'paged' => $paged,
                    'cat_operator' => 'IN',
                );
                break;
            case "featured":
                $meta_query = WC()->query->get_meta_query();
                $tax_query = WC()->query->get_tax_query();
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field' => 'name',
                    'terms' => 'featured',
                    'operator' => 'IN',
                );

                $woo_products_args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => $woo_products_maxitem,
                    'orderby' => $woo_products_orderby,
                    'order' => $order,
                    'meta_query' => $meta_query,
                    'tax_query' => $tax_query,
                    'paged' => $paged
                );
                break;
            case "category":
                $meta_query = WC()->query->get_meta_query();
                $tax_query = WC()->query->get_tax_query();
                $tax_query[] = array(
                    'taxonomy' => 'product_cat',
                    'field' => 'ID',
                    'terms' => $woo_products_category,
                    'operator' => 'IN',
                );

                $woo_products_args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => $woo_products_maxitem,
                    'orderby' => $woo_products_orderby,
                    'order' => $order,
                    'meta_query' => $meta_query,
                    'tax_query' => $tax_query,
                    'paged' => $paged

                );
                break;
            case "sale":
                $woo_products_args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => $woo_products_maxitem,
                    'orderby' => $woo_products_orderby,
                    'order' => $order,
                    'paged' => $paged,
                    'meta_query' => array(
                        'relation' => 'OR',
                        array( // Simple products type
                            'key' => '_sale_price',
                            'value' => 0,
                            'compare' => '>',
                            'type' => 'numeric'
                        ),
                        array( // Variable products type
                            'key' => '_min_variation_sale_price',
                            'value' => 0,
                            'compare' => '>',
                            'type' => 'numeric'
                        )
                    )
                );
                break;
            case "best":
                $woo_products_args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => $woo_products_maxitem,
                    'orderby' => 'meta_value_num',
                    'meta_key' => 'total_sales',
                    'cat_operator' => 'IN',
                    'paged' => $paged
                );
                break;
            case "rated":
                $woo_products_args = array(
                    'posts_per_page' => $woo_products_maxitem,
                    'no_found_rows' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'product',
                    'meta_key' => '_wc_average_rating',
                    'orderby' => 'meta_value_num',
                    'order' => $order,
                    'meta_query' => WC()->query->get_meta_query(),
                    'tax_query' => WC()->query->get_tax_query(),
                );
                break;
            default:
                $woo_products_args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => -1,
                    'paged' => $paged
                );
        }

        $woo_products_loop = new WP_Query($woo_products_args);
        if ($woo_products_loop->have_posts()) {
            while ($woo_products_loop->have_posts()) : $woo_products_loop->the_post();

                ?>

                <div class="wpe__item">
                <?php if ($woo_products_shthumbnail == 'show'): ?>
                <div class="wpe__Img">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <?php
                    the_post_thumbnail(array(370, 430));
                    ?>
                </a>
                <?php if ($woo_products_shlinkdetail == 'show' || $woo_products_shaddtowishlist == 'show' || $woo_products_shaddtocart == 'show'): ?>
            <?php if ($woo_products_shaddtocart != 'show' || $woo_products_shlinkdetail != 'show'): ?>
                <div class="wpe__Hover tz_woo">
                    <?php else: ?>
                    <div class="wpe__Hover">
                        <?php endif; ?>
                        <?php if ($woo_products_shaddtocart == 'show'):
                            do_action('woo_get_add_to_cart');
                        endif;
                        if ($woo_products_shlinkdetail == 'show'):
                            echo '<a class="xoo-qv-button" qv-id="' . get_the_ID() . '"><i class="fa fa-eye" aria-hidden="true"></i>quick view</a>';
                        endif; ?>

                        <?php

                        if ($woo_products_shaddtowishlist == 'show'):
                            ?>

                            <div class="wpe__wishlist">
                                <?php
                                if (class_exists('YITH_WCWL')) {
                                    echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                <?php if ($type == '1'):
                    echo '<div class="wpe__content">';
                else:
                    echo '<div class="wpe__Content">';
                endif; ?>

                <?php
                if ($woo_products_shtitle == 'show'):
                    ?>
                    <h3 class="wpe__title">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                <?php
                endif;
            if ($woo_products_shprice == 'show'):
                ?>
                <?php if ($type == '1'):
                    echo '<div class="wpe__price">';
                else:
                    echo '<div class="wpe__Price">';
                endif; ?>
                <?php
                global $product;
                $price_html = $product->get_price_html();
                echo $price_html;
                ?>
                </div>
            <?php
            endif;
                if ($woo_products_shrating == 'show'):
                    ?>
                    <?php if ($type == '1'):
                    echo '<div class="wpe__rating">';
                else:
                    echo '<div class="wpe__ratings">';
                endif; ?>

                    <?php

                    do_action('woo_get_rating');
                    ?>
                    </div>
                <?php
                endif;
                ?>
                </div>
                </div>
            <?php
            endwhile;
        } else {
            echo esc_html__('No products found', 'tz-aventura');
        }
        wp_reset_postdata();
        ?>

        </div><!--end slider layout-->

        </div>


        <?php
        return ob_get_clean();
    }

    add_shortcode('vc-woo-products', 'create_vcwooproducts_shortcode');
endif;
