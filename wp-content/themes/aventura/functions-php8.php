<?php
function tz_aventura_register_required_demos($value)
{
    $value = array(
        'envatoid'      => 20450670,
        'productname'   => 'Aventura WordPress Theme',
        'demo-imports'  => array(
            'wp_aventura' => array(
// Pack Info
                'slug' => 'wp_aventura_default', // Produce code created on server
                'title' => 'Aventura WordPress Theme - Full demo',
                'desc' => 'The Aventura is an excellent theme for any tours related business such as travelling blog, tour book.',
                'front_page' => true,
                'front_page_title'  => 'Home',
                'menu_locations'    => array(
                    array(
                        'title'     => 'Main-menu',
                        'location'  => 'primary'
                    ),
                    array(
                        'title'     => 'Footer Link',
                        'location'  => 'footer-menu'
                    ),
                    array(
                        'title'     => 'menu-left',
                        'location'  => 'custom-menu-4'
                    ),
                    array(
                        'title'     => 'menu-right',
                        'location'  => 'custom-menu-5'
                    ),
                    array(
                        'title'     => 'Menu-shop',
                        'location'  => 'custom-menu-6'
                    )
                ),
// Pack Data
                'thumb' => 'http://templaza.net/install/aventura/home1.jpg',
                'category' => 'wordpress',
                'demo_url' => 'http://aventura.templaza.net/',
                'doc_url' => 'https://www.templaza.com/docs/aventura_wp/',
                'plugins' => array
                (

                    // This is an example of how to include a plugin pre-packaged with a theme
                    array(
                        'name'     				=> esc_html__('Aventura Plugin','aventura'), // The plugin name
                        'slug'     				=> 'aventura-plugin', // The plugin slug (typically the folder name)
                        'source'   				=> get_template_directory() . '/plugins/aventura-plugin.zip', // The plugin source
                        'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
                        'version' 				=> '1.5.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                        'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                        'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                        'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
                    ),
                    array(
                        'name'     				=> esc_html__('Vafpress Post Formats UI','aventura'), // The plugin name
                        'slug'     				=> 'vafpress-post-formats-ui-develop', // The plugin slug (typically the folder name)
                        'source'   				=> get_template_directory() . '/plugins/vafpress-post-formats-ui-develop.zip', // The plugin source
                        'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
                        'version' 				=> '1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                        'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                        'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                        'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
                    ),

                    array(
                        'name'     				=> esc_html__('Slider Revolution','aventura'), // The plugin name
                        'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
                        'source'   				=> get_template_directory() . '/plugins/revslider.zip', // The plugin source
                        'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
                        'version' 				=> '6.6.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                        'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                        'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                        'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
                    ),
                    array(
                        'name'     				=> esc_html__('WPBakery Visual Composer','aventura'), // The plugin name
                        'slug'     				=> 'js_composer', // The plugin slug (typically the folder name)
                        'source'   				=> get_template_directory() . '/plugins/js_composer.zip', // The plugin source
                        'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
                        'version' 				=> '6.10.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                        'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                        'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                        'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
                    ),

                    // This is an example of how to include a plugin from the WordPress Plugin Repository
                    array(
                        'name'    => 'Woocommerce',
                        'slug'    => 'woocommerce',
                        'required'  => true,
                    ),
                    array(
                        'name'    => 'Quick View WooCommerce',
                        'slug'    => 'quick-view-woocommerce',
                        'required'  => true,
                    ),
                    array(
                        'name'    => 'WPZOOM Social Feed Widget',
                        'slug'    => 'instagram-widget-by-wpzoom',
                        'required'  => true,
                    ),
                    array(
                        'name'      => esc_html__('Redux Framework','aventura'),
                        'slug'      => 'redux-framework',
                        'required'  => true,
                    ),
                    array(
                        'name'      => esc_html__('Meta Box','aventura'),
                        'slug'      => 'meta-box',
                        'required'  => true,
                    ),
                    array(
                        'name'      => esc_html__('Shortcodes Ultimate','aventura'),
                        'slug'      => 'shortcodes-ultimate',
                        'required'  => true,
                    ),
                    array(
                        'name'      => esc_html__('Contact Form 7','aventura'),
                        'slug'      => 'contact-form-7',
                        'required'  => true,
                    ),
                    array(
                        'name'      => esc_html__('Newsletter','aventura'),
                        'slug'      => 'newsletter',
                        'required'  => true,
                    ),

                    array(
                        'name'      => esc_html__('WP Editor Widget','aventura'),
                        'slug'      => 'wp-editor-widget',
                        'required'  => true,
                    ),
                ),

                'demo-datas' => array(
                    array(
                        'title' => esc_html__('Default Content', 'aventura'),
                        'desc' => esc_html__('This will import posts, pages, contact and menu', 'aventura'),
                        'slug' => 'wp_aventura_default',
                        'checked' => true,

                    ),
                    array(
                        'title' => esc_html__('Media', 'aventura'),
                        'desc' => esc_html__('This will import Media data'),
                        'slug' => 'wp_aventura_media',
                        'checked' => true,
                    ),
                    array(
                        'title' => esc_html__('Theme Options', 'aventura'),
                        'desc' => esc_html__('This will import theme options and will rewrite all current settings in Appearance » Theme Options.', 'aventura'),
                        'slug' => 'wp_theme_options', // The package type from server
                        'demo_type' => 'redux-framework', // The type to call function import
                        'checked' => true,
                    ),

                    array(
                        'title' => esc_html__('Aventura Widgets', 'aventura'),
                        'desc' => esc_html__('This will import default widgets presented in demo site of this content package.', 'aventura'),
                        'slug' => 'wp_aventura_widgets',
                        'demo_type' => 'widget-importer',
                        'checked' => true,
                    ),

                    array(
                        'title' => esc_html__('Revolution Slider', 'aventura'),
                        'desc' => esc_html__('This will import all sliders presented in demo site of this content package.', 'aventura'),
                        'slug' => 'wp_aventura_slider_home1',
                        'demo_type' => 'revslider',
                        'checked' => true,

                    ),

                )
            ),
        )
    );
    return $value;
}