<?php
/*=====================================
 * Visual Composer
 =====================================*/
function aventura_plugin_init() {
    if ( class_exists('WPBakeryVisualComposerAbstract')):
        function aventura_includevisual(){
            $dir_vc = dirname( __FILE__ );

            /*
             * Icons Of Element In Admin Panel
             */
            require_once $dir_vc . '/visual-composer/tz_icon_element.php';

            if(function_exists('vc_add_param') && function_exists('vc_map')){
                require_once $dir_vc . '/visual-composer/vc_custom/vc_extend.php';
            }
            // VC Templates
            $vc_templates_dir = $dir_vc . '/visual-composer/vc_custom/';
            if(function_exists('vc_set_shortcodes_templates_dir')){
                vc_set_shortcodes_templates_dir($vc_templates_dir);
            }
            /*
             * Template Of Templaza
             */

            $tz_templates_dir = $dir_vc . '/visual-composer/vc_aventura/';
            //Aventura Services
            require_once $tz_templates_dir . '/services/services.php';
            require_once $tz_templates_dir . '/services/services-extend.php';
            //Aventura Counter
            require_once $tz_templates_dir . '/counter/counter.php';
            require_once $tz_templates_dir . '/counter/counter-extend.php';
            //Aventura Counter
            require_once $tz_templates_dir . '/hotline/hotline.php';
            require_once $tz_templates_dir . '/hotline/hotline-extend.php';
            //Aventura Articles
            require_once $tz_templates_dir . '/articles/articles.php';
            require_once $tz_templates_dir . '/articles/articles-extend.php';
            //Aventura About
            require_once $tz_templates_dir . '/about/about.php';
            require_once $tz_templates_dir . '/about/about-extend.php';
            //Aventura Destination
            require_once $tz_templates_dir . '/destination/destination.php';
            require_once $tz_templates_dir . '/destination/destination-extend.php';
            //Aventura Featured Tour
            require_once $tz_templates_dir . '/featured-tours/featured-tour.php';
            require_once $tz_templates_dir . '/featured-tours/featured-tour-extend.php';
            //Aventura Latest Tour
            require_once $tz_templates_dir . '/latest-tour/latest-tour.php';
            require_once $tz_templates_dir . '/latest-tour/latest-tour-extend.php';
            //Aventura Testimonials
            require_once $tz_templates_dir . '/testimonials/testimonials.php';
            require_once $tz_templates_dir . '/testimonials/testimonials-extend.php';
            //Aventura Testimonials
            require_once $tz_templates_dir . '/tour-kind/tour-kind.php';
            require_once $tz_templates_dir . '/tour-kind/tour-kind-extend.php';
            //Aventura Our Team
            require_once $tz_templates_dir . '/our-team/our-team.php';
            require_once $tz_templates_dir . '/our-team/our-team-extend.php';
            //Aventura Search Tour
            require_once $tz_templates_dir . '/search_tour/search_tour.php';
            require_once $tz_templates_dir . '/search_tour/search_tour_extend.php';

            //Aventura Latest Posts
            require_once $tz_templates_dir . '/latest-posts/latest-posts.php';
            require_once $tz_templates_dir . '/latest-posts/latest-posts-extend.php';

            //Aventura Carousel Slide
            require_once $tz_templates_dir . '/carousel-slider/carousel-slider.php';
            require_once $tz_templates_dir . '/carousel-slider/vc-carousel-slider.php';
            //Aventura Top Comment
            require_once $tz_templates_dir . '/quote/quote.php';
            require_once $tz_templates_dir . '/quote/vc-quote.php';
            //title
            require_once $tz_templates_dir . '/aventura-title/tz_title.php';
            require_once $tz_templates_dir . '/aventura-title/tz_title_extend.php';
            //Video popup
            require_once $tz_templates_dir . '/video-popup/video-popup.php';
            require_once $tz_templates_dir . '/video-popup/vc-video-popup-extend.php';
            //heading content
            require_once $tz_templates_dir . '/heading-content/tz_heading_content.php';
            require_once $tz_templates_dir . '/heading-content/tz_heading_content_extend.php';
            //partner
            require_once $tz_templates_dir . '/partner/partner.php';
            require_once $tz_templates_dir . '/partner/vc-partner-extend.php';
            //Distination
            require_once $tz_templates_dir . '/single-destination/single_destination.php';
            require_once $tz_templates_dir . '/single-destination/single_destination_extend.php';
            //Button aventura
            require_once $tz_templates_dir . '/aventura-button/tz_btn_aventura.php';
            require_once $tz_templates_dir . '/aventura-button/tz_btn_aventura_extend.php';
            //Shop Slider
            require_once $tz_templates_dir . '/shopslider/shop-slider.php';
            require_once $tz_templates_dir . '/shopslider/vc-shop-slider.php';
            //Listcategory
            require_once $tz_templates_dir . '/list-category/listcategory.php';
            require_once $tz_templates_dir . '/list-category/listcategory-extend.php';
            //woo product
            require_once $tz_templates_dir . '/woo-products/woo-products.php';
            require_once $tz_templates_dir . '/woo-products/woo-products-extend.php';
            //list tags
            require_once $tz_templates_dir . '/list-tags/listtag.php';
            require_once $tz_templates_dir . '/list-tags/listtag-extend.php';
            //banner
            require_once $tz_templates_dir . '/baner-Item/baner_item.php';
            require_once $tz_templates_dir . '/baner-Item/baner_item-extend.php';
            //Back ground Slide
            require_once $tz_templates_dir . '/slidebackground/background-slider.php';
            require_once $tz_templates_dir . '/slidebackground/vc-background-slider.php';

            //Tour Category
            require_once $tz_templates_dir . '/tour-category/tourcategory.php';
            require_once $tz_templates_dir . '/tour-category/tourcategory-extend.php';

        }

        add_action('init', 'aventura_includevisual', 20);
    endif;
}
add_action( 'plugins_loaded', 'aventura_plugin_init' );
?>
