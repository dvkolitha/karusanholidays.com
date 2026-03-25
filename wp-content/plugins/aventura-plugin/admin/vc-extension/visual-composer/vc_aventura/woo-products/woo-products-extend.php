<?php
/**
 * woocommerce vc element products.
 *
 * @package aventura-plugin/vc_templaza/woo-products
 * @version 1.0.0
 */
//die('templaza');
defined('ABSPATH') || exit;

$woo_products_cat = array();
$woo_products_cate = get_categories(array('taxonomy' => 'product_cat'));

foreach ($woo_products_cate as $cat) {
    $woo_products_cat[$cat->name] = $cat->term_id;
}
// Create Woocommerce Products element for Visual Composer

vc_map(array(
    'name' => esc_html__('VC - Woocommerce', 'aventura-plugin'),
    "icon" => "icon-element",
    'base' => 'vc-woo-products',
    'class' => 'vc-woo-products',
    'show_settings_on_create' => true,
    'category' => esc_html__('Aventura', 'aventura-plugin'),
    'params' => array(
        // General tab setting
        array(
            'type' => 'dropdown',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__('Select Type ', 'aventura-plugin'),
            'param_name' => 'type',
            'value' => array(
                esc_html__("Type 1", "aventura-plugin") => '1',
                esc_html__("Type 2", "aventura-plugin") => '2',
            ),
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview Type 1", "aventura-plugin"),
            "param_name"    => "preview_w1",
            "value"         => PLUGIN_PATH."assets/images/typew1.jpg",
            "dependency" => array('element' => 'type', 'value' => '1')
        ),
        array(
            "type"          => "aventura_preview",
            "class"         => "",
            "admin_label"   => false,
            "heading"       => esc_html__("Preview Type 2", "aventura-plugin"),
            "param_name"    => "preview_w2",
            "value"         => PLUGIN_PATH."assets/images/typew2.jpg",
            "dependency" => array('element' => 'type', 'value' => '2')
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__('Title', 'aventura-plugin'),
            'param_name' => 'title',
            'value' => ''
        ),
        array(
            'type' => 'textarea_html',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__('Description', 'aventura-plugin'),
            'param_name' => 'content',
            'value' => ''
        ),

        array(
            'type' => 'dropdown',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__('Data', 'aventura-plugin'),
            'param_name' => 'woo_products_data',
            "value" => array(
                esc_html__("Recent Products", "aventura-plugin") => 'recent',
                esc_html__("Featured Products", "aventura-plugin") => 'featured',
                esc_html__("Sale Products", "aventura-plugin") => 'sale',
                esc_html__("Best Selling Products", "aventura-plugin") => 'best',
                esc_html__("Top Rated Products", "aventura-plugin") => 'rated',
                esc_html__("Product Category", "aventura-plugin") => 'category',
            ),
            'default' => 'recent'
        ),
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Select product category', 'aventura-plugin'),
            'param_name' => 'woo_products_category',
            "value" => $woo_products_cat,
            "dependency"    => array('element' => 'woo_products_data', 'value' => 'category'),
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__('Max Item Display', 'aventura-plugin'),
            'param_name' => 'woo_products_maxitem',
            'value' => '20'
        ),
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Order by', 'aventura-plugin'),
            'param_name' => 'woo_products_orderby',
            "value" => array(
                esc_html__("ID", "aventura-plugin") => 'id',
                esc_html__("Order by title", "aventura-plugin") => 'title',
                esc_html__("Order by post name (post slug)", "aventura-plugin") => 'name',
                esc_html__("Order by date", "aventura-plugin") => 'date',
                esc_html__("Random order", "aventura-plugin") => 'rand',
                esc_html__("Order by Page Order", "aventura-plugin") => 'menu_order',
            ),
            'default' => 'id',
            "dependency"    => array('element' => 'woo_products_data', 'value' => array('recent','featured','category','sale')),
        ),
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Order', 'aventura-plugin'),
            'param_name' => 'woo_products_order',
            "value" => array(
                esc_html__("ASC", "aventura-plugin") => 'ASC',
                esc_html__("DESC", "aventura-plugin") => 'DESC'
            ),
            'default' => 'ASC',
            "dependency"    => array('element' => 'woo_products_data', 'value' => array('recent','featured','category','sale','rated')),

        ),


        // show/hide title
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide title', 'aventura-plugin'),
            'param_name' => 'woo_products_shtitle',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // show/hide rating
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide rating', 'aventura-plugin'),
            'param_name' => 'woo_products_shrating',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // show/hide price
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide price', 'aventura-plugin'),
            'param_name' => 'woo_products_shprice',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // show/hide image
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide Thumbnail', 'aventura-plugin'),
            'param_name' => 'woo_products_shthumbnail',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // show/hide link detail
//        array(
//            'type' => 'dropdown',
//            'class' => '',
//            'heading' => esc_html__('Show/hide link detail', 'aventura-plugin'),
//            'param_name' => 'woo_products_shlinkdetail',
//            "value" => array(
//                esc_html__("Show", "aventura-plugin") => 'show',
//                esc_html__("Hide", "aventura-plugin") => 'hide'
//            ),
//            "group" => esc_html__("Show/hidden components", "aventura-plugin")
//        ),

        // show/hide add to cart action
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide Add To Cart', 'aventura-plugin'),
            'param_name' => 'woo_products_shaddtocart',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // show/hide add to wishlist action
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Show/hide Quick View', 'aventura-plugin'),
            'param_name' => 'woo_products_shlinkdetail',
            "value" => array(
                esc_html__("Show", "aventura-plugin") => 'show',
                esc_html__("Hide", "aventura-plugin") => 'hide'
            ),
            "group" => esc_html__("Show/hidden components", "aventura-plugin")
        ),

        // Grid tab setting
        array(
            'type' => 'dropdown',
            'class' => '',
            'heading' => esc_html__('Select columns', 'aventura-plugin'),
            'param_name' => 'woo_products_columns',
            "value" => array(
                esc_html__("1", "aventura-plugin") => 1,
                esc_html__("2", "aventura-plugin") => 2,
                esc_html__("3", "aventura-plugin") => 3,
                esc_html__("4", "aventura-plugin") => 4,
                esc_html__("5", "aventura-plugin") => 5,
            ),
            "group" => esc_html__("Layout Grid Setting", "aventura-plugin"),
        ),

        // Design option
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'my-text-domain' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'my-text-domain' ),
        ),

    )
));
