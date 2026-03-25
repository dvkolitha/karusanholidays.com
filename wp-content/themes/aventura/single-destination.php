<?php
get_header();
get_template_part('template_inc/inc','menu');
//get_template_part('template_inc/inc', 'breadcrumb');
global $aventura_options;

$aventura_single_sidebar    =   ((!isset($aventura_options['aventura_blog_single_sidebar'])) || empty($aventura_options['aventura_blog_single_sidebar'])) ? '3' : $aventura_options['aventura_blog_single_sidebar'];
$aventura_single_related    =   ((!isset($aventura_options['aventura_blog_single_related'])) || empty($aventura_options['aventura_blog_single_related'])) ? '1' : $aventura_options['aventura_blog_single_related'];
$aventura_single_comment    =   ((!isset($aventura_options['aventura_blog_single_comment'])) || empty($aventura_options['aventura_blog_single_comment'])) ? '1' : $aventura_options['aventura_blog_single_comment'];

$aventura_single_date       =   ((!isset($aventura_options['aventura_blog_single_date'])) || empty($aventura_options['aventura_blog_single_date'])) ? '1' : $aventura_options['aventura_blog_single_date'];
$aventura_single_author     =   ((!isset($aventura_options['aventura_blog_single_author'])) || empty($aventura_options['aventura_blog_single_author'])) ? '1' : $aventura_options['aventura_blog_single_author'];
$aventura_single_cat        =   ((!isset($aventura_options['aventura_blog_single_cat'])) || empty($aventura_options['aventura_blog_single_cat'])) ? '1' : $aventura_options['aventura_blog_single_cat'];
$aventura_single_tag        =   ((!isset($aventura_options['aventura_blog_single_tag'])) || empty($aventura_options['aventura_blog_single_tag'])) ? '1' : $aventura_options['aventura_blog_single_tag'];
$aventura_single_title      =   ((!isset($aventura_options['aventura_blog_single_title'])) || empty($aventura_options['aventura_blog_single_title'])) ? '1' : $aventura_options['aventura_blog_single_title'];

$aventura_type =   aventura_metabox( 'aventura_header_page_type','','','' );
$aventura_redux_type = ((!isset($aventura_options['aventura_header_type_select'])) || empty($aventura_options['aventura_header_type_select'])) ? '0' : $aventura_options['aventura_header_type_select'];
$aventura_meta_option = aventura_metabox('aventura_header_page_option', '', '', 'default');

$aventura_archive_btn        = isset( $aventura_options['aventura_tour_archive_button'] ) ? $aventura_options['aventura_tour_archive_button'] : 'book';
$aventura_tour_thumb_url        = isset( $aventura_options['aventura_tour_thumb_url'] ) ? $aventura_options['aventura_tour_thumb_url'] : '0';
$aventura_tour_booking_form        = isset( $aventura_options['aventura_tour_booking_form'] ) ? $aventura_options['aventura_tour_booking_form'] : '';
$aventura_show_views        = isset( $aventura_options['aventura_tour_views'] ) ? $aventura_options['aventura_tour_views'] : '1';
?>
<div class="tz-blog-single tz-destination-single  <?php if (($aventura_type == '8' && $aventura_redux_type == '8') || ($aventura_meta_option != 'default' && $aventura_type == '8') || ($aventura_meta_option == 'default' && $aventura_redux_type == '8' ) || ($aventura_type == '' && $aventura_meta_option == '' && $aventura_redux_type == '8')) { echo 'tz-mgleft';} ?>">
    <?php
    if ( have_posts() ) : while (have_posts()) : the_post();
    aventura_setPostViews(get_the_ID());
    $aventura_comment_count  = wp_count_comments($post->ID);
    $aventura_view = aventura_getPostViews($post->ID);

    ?>
    <!--    Image-->
    <div class="tz-blog-thumbnail">
        <?php the_post_thumbnail();?>
        <div class="content">
            <div class="container">
                <h1 class="tz-blog-title"><?php the_title(); ?></h1>
                <div class="tz-blog-meta">
                    <span>
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        <?php
                        $aventura_args = array(
                            'post_type' => 'tour',
                            'posts_per_page' => -1,
                            'meta_query' => array(
                                array(
                                    'key' => 'aventura_tour_destination',
                                    'value' => $post->ID,
                                    'compare' => '=',
                                ),
                            )
                        );
                        $aventura_query = new WP_Query($aventura_args);
                        ?>
                        <?php echo $aventura_query -> post_count; ?> <?php echo esc_html__('Deal Offers','aventura'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                        get_template_part( 'template_inc/content/content','info' );
                    ?>
                </div>
                <?php
                $aventura_args_1 = array(
                    'post_type' => 'tour',
                    'posts_per_page' => -1,
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'aventura_tour_destination',
                            'value' => $post->ID,
                            'compare' => '=',
                        ),
                    )
                );
                $aventura_query_1 = new WP_Query($aventura_args_1);
                $tour_slug = (!empty(get_option('aventura_tour_slug'))) ? get_option('aventura_tour_slug') : 'tour';
                    if($aventura_query_1->have_posts()){
                        ?>
                        <div class="destination-tour">
                            <h3>
                                <?php echo esc_html__('Tour to ','aventura'); ?><?php the_title();?>
                                <a href="<?php echo esc_url(get_home_url('/')) . '/'.$tour_slug.'/?tour_destination[]=' . $post->ID; ?>"><?php echo esc_html__('Find More','aventura')?> <i class="fa fa-angle-double-right"></i></a>
                            </h3>
                            <div class="destination-tour-grid">

                                    <?php

                                    $aventura_wishlist = array();
                                    if ( is_user_logged_in() ) {
                                        $aventura_user_id = get_current_user_id();
                                        $aventura_wishlist = get_user_meta( $aventura_user_id, 'wishlist', true );
                                    }

                                    if ( ! is_array( $aventura_wishlist ) ) $aventura_wishlist = array();

                                    $aventura_wishlist_url = aventura_get_tour_wishlist_page();

                                    $aventura_count = 1;
                                    $aventura_total = $aventura_query_1->post_count;

                                    while( $aventura_query_1->have_posts() ) {
                                        $aventura_query_1->the_post();
                                        global $aventura_options;

                                        $aventura_max_adults        = isset( $aventura_options['aventura_tour_detail_max_adults'] ) ? $aventura_options['aventura_tour_detail_max_adults'] : 3;
                                        $aventura_max_kids          = isset( $aventura_options['aventura_tour_detail_max_kids'] ) ? $aventura_options['aventura_tour_detail_max_kids'] : 0;

                                        $aventura_duration      =   aventura_metabox( 'aventura_tour_duration','',$aventura_query_1->post->ID,'' );
                                        $aventura_address       =   aventura_metabox( 'address','',$aventura_query_1->post->ID,'' );
                                        $aventura_destination   =   aventura_metabox( 'aventura_tour_destination','',$aventura_query_1->post->ID,'' );

                                        $aventura_tour_type             =   aventura_metabox( 'aventura_tour_type','',$aventura_query_1->post->ID,'' );
                                        $aventura_tour_external_button  =   aventura_metabox( 'aventura_tour_external_button','',$aventura_query_1->post->ID,esc_html__('Book Now','aventura') );
                                        $aventura_tour_external_link    =   aventura_metabox( 'aventura_tour_external_link','',$aventura_query_1->post->ID,'#' );
                                        $aventura_departure_date        =   aventura_metabox( 'aventura_departure_date','',$aventura_query_1->post->ID,'' );
                                        $aventura_adult_price           =   aventura_metabox( 'aventura_adult_price','',$aventura_query_1->post->ID,'0');
                                        $aventura_child_price           =   aventura_metabox( 'aventura_child_price','',$aventura_query_1->post->ID,'0' );
                                        $aventura_discount              =   aventura_metabox( 'aventura_tour_discount','',$aventura_query_1->post->ID,'0' );
                                        $aventura_tour_available_days   =   aventura_metabox( 'aventura_available_days','',$aventura_query_1->post->ID,'' );
                                        $aventura_tour_start_date       =   aventura_metabox( 'aventura_tour_start_date','',$aventura_query_1->post->ID,'' );
                                        $aventura_tour_end_date         =   aventura_metabox( 'aventura_tour_end_date','',$aventura_query_1->post->ID,'' );
                                        $aventura_tour_departure_time   =   aventura_metabox( 'aventura_departure_time','',$aventura_query_1->post->ID,'' );

                                        $aventura_tour_start_date_milli_sec = 0;
                                        if ( ! empty( $aventura_tour_end_date ) ) {
                                            $aventura_tour_start_date_milli_sec = strtotime( $aventura_tour_start_date) * 1000;
                                        }
                                        $aventura_tour_end_date_milli_sec = 0;
                                        if ( ! empty( $aventura_tour_end_date ) ) {
                                            $aventura_tour_end_date_milli_sec = strtotime( $aventura_tour_end_date) * 1000;
                                        }

                                        if( $aventura_tour_type == 'daily' ){
                                            $aventura_date = date(get_option('date_format'), strtotime($aventura_tour_start_date));
                                        }else{
                                            $aventura_date = date(get_option('date_format'), strtotime($aventura_departure_date));;
                                        }

//                                        $aventura_check_tour_available = aventura_tour_check_availability( $aventura_query_1->post->ID );
                                        $aventura_check_tour_available = aventura_tour_check_availability_advance( $aventura_query_1->post->ID, '', '' );
                                        $aventura_allow_manager_people = aventura_metabox( 'aventura_tour_manager_people','',$aventura_query_1->post->ID,'' );
                                        $aventura_total_people = aventura_metabox( 'aventura_tour_total_people','',$aventura_query_1->post->ID,'' );
//        var_dump($aventura_check_tour_available);

                                        ?>
                                        <?php if($aventura_count%3 == 1):?>
                                        <div class="row">
                                        <?php endif;?>

                                        <div class="col-md-4 col-sm-6 destination-tour-item">
                                            <div class="item-content">
                                                <div class="tz-thumb">
                                                    <?php
                                                    if($aventura_tour_thumb_url == 0){
                                                        ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php
                                                            the_post_thumbnail('large');
                                                            ?>
                                                        </a>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span>
                                                            <?php
                                                            the_post_thumbnail('large');
                                                            ?>
                                                        </span>
                                                        <?php
                                                    }
                                                    ?>

                                                    <?php
                                                    if ( ( $aventura_allow_manager_people == '1' && $aventura_total_people == '0' ) || $aventura_tour_type == 'special' && empty($aventura_tour_departure_time) && $aventura_check_tour_available['0'] == '0' ) {
                                                        ?>
                                                        <span class="tz-tour-sold-out"><?php echo esc_html__('Sold Out','aventura')?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php if( $aventura_discount != '' && $aventura_discount != 0 ) echo '<div class="discount"><span>'.esc_html($aventura_discount).esc_html__('% OFF','aventura').'</span></div>';?>
                                                <div class="tz-info">
                                                    <div class="tz-row tz-title">
                                                        <h4><a href="<?php the_permalink($aventura_query_1->post->ID); ?>"><?php echo get_the_title($aventura_query_1->post->ID); ?></a></h4>
                                                        <?php if( $aventura_duration != ''){ ?>
                                                            <span><i class="fa fa-clock-o"></i><?php echo  esc_html($aventura_duration);?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="tz-row tz-review-price">
                                                        <div class="tz-reviews">
                                                            <?php
                                                            if( class_exists( 'Comment_Rating_Output' ) ):
                                                                $aventura_average_rating = get_post_meta( $aventura_query_1->post->ID, 'tz-average-rating', true );
                                                                if ( empty( $aventura_average_rating ) ) {
                                                                    $aventura_average_rating = 0;
                                                                }
                                                                echo '<div class="tz-average-rating"><div class="tz-rating tz-rating-' . esc_attr($aventura_average_rating) . '"></div></div>';
                                                            endif;

                                                            $aventura_review_count = aventura_parent_comment_counter($aventura_query_1->post->ID);
                                                            if( $aventura_review_count > 1 ){
                                                                $aventura_review_count_text = esc_html__(' Reviews','aventura');
                                                            }else{
                                                                $aventura_review_count_text = esc_html__(' Review','aventura');
                                                            }
                                                            ?>
                                                            <span class="reviews-count"><?php echo esc_html(aventura_parent_comment_counter($aventura_query_1->post->ID).$aventura_review_count_text); ?></span>
                                                        </div>
                                                        <?php
                                                        if($aventura_adult_price != '' || $aventura_child_price != ''):
                                                            ?>
                                                            <div class="tz-price">
                                                                <p class="from"><?php esc_html_e('From','aventura'); ?></p>
                                                                <p class="price">
                                                                    <?php
                                                                    if($aventura_adult_price != ''){
                                                                        echo aventura_price($aventura_adult_price);
                                                                    }elseif($aventura_child_price != ''){
                                                                        echo aventura_price($aventura_child_price);
                                                                    }?>
                                                                </p>
                                                            </div>
                                                        <?php endif;?>
                                                    </div>
                                                    <div class="tz-row tz-time">
                                                        <?php if( $aventura_date != '' ){ ?>
                                                            <div class="tz-date">
                                                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                                                <p><?php esc_html_e('Date','aventura') ?></p>
                                                                <span class="text"><?php echo esc_html($aventura_date); ?></span>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if( $aventura_address != '' ){ ?>
                                                            <div class="tz-depature">
                                                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                                                <p><?php esc_html_e('Departure','aventura') ?></p>
                                                                <span class="text"><?php echo esc_html($aventura_address); ?></span>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="tz-row tz-button">
                                                        <?php if($aventura_show_views =='1'){ ?>
                                                        <span class="view"><i class="fa fa-eye"></i><?php echo esc_html(aventura_getPostViews($aventura_query_1->post->ID)); ?></span>
                                                        <?php } ?>
                                                        <?php if ( ! empty( $aventura_wishlist_url ) ) : ?>
                                                            <a class="tz-btn-wishlist btn-add-wishlist" href="#" data-post-id="<?php echo esc_attr( $aventura_query_1->post->ID ); ?>"<?php echo ( in_array( $aventura_query_1->post->ID, $aventura_wishlist) ? ' style="display:none;"' : '' ) ?>>
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a class="tz-btn-wishlist btn-remove-wishlist" href="#" data-post-id="<?php echo esc_attr( $aventura_query_1->post->ID ); ?>"<?php echo ( ! in_array( $aventura_query_1->post->ID, $aventura_wishlist) ? ' style="display:none;"' : '' ) ?>>
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                        <?php
                                                        if($aventura_archive_btn == 'book'){
                                                        if( $aventura_tour_type == 'external' ){
                                                            if($aventura_tour_external_button != ''):
                                                                echo '<a class="booking" href="'.esc_url($aventura_tour_external_link).'" title="'.esc_html($aventura_tour_external_button).'" target="_blank"><i class="fa fa-shopping-cart"></i>'.esc_html($aventura_tour_external_button).'</a>';
                                                            endif;
                                                        }else{ ?>
                                                            <a class="booking book-now-ajax-btn<?php
                                                            if ( ( $aventura_allow_manager_people == '1' && $aventura_total_people == '0' ) || $aventura_tour_type == 'special' && empty($aventura_tour_departure_time) && $aventura_check_tour_available['0'] == '0' ) {
                                                                echo ' disabled';
                                                            }
                                                            ?>" href="<?php the_permalink($aventura_query_1->post->ID);?>"
                                                                <?php if($aventura_tour_type == 'special' && empty($aventura_tour_departure_time) && $aventura_check_tour_available['2'] != ''){?>
                                                                    data-people-available="<?php echo $aventura_check_tour_available['2'];?>"
                                                                <?php }else{?>
                                                                    data-people-available=""
                                                                <?php } ?>
                                                               data-post-id="<?php echo esc_attr( $aventura_query_1->post->ID ); ?>" data-tour-type="<?php echo esc_attr($aventura_tour_type); ?>" data-max-adults="<?php echo esc_attr( $aventura_max_adults ); ?>" data-max-kids="<?php echo esc_attr( $aventura_max_kids ); ?>" data-adults-price="<?php echo esc_attr( $aventura_adult_price ); ?>" data-child-price="<?php echo esc_attr( $aventura_child_price ); ?>" data-discount="<?php echo esc_attr( $aventura_discount ); ?>" data-available-days='<?php echo json_encode( $aventura_tour_available_days ); ?>' data-start-date="<?php echo esc_attr( $aventura_tour_start_date_milli_sec ); ?>" data-end-date="<?php echo esc_attr( $aventura_tour_end_date_milli_sec ); ?>" data-departure-time='<?php echo json_encode( $aventura_tour_departure_time ); ?>'>
                                                                <i class="fa fa-shopping-cart"></i><?php esc_html_e('Book Now','aventura'); ?>
                                                                <span class="loading-ajax"></span>
                                                            </a>
                                                        <?php }
                                                        }
                                                        if($aventura_archive_btn == 'detail'){
                                                            ?>
                                                            <a class="booking tour_view_detail" href="<?php the_permalink($aventura_query_1->post->ID); ?>">
                                                                <?php echo esc_html__('View Detail','aventura'); ?>

                                                            </a>
                                                            <?php
                                                        }
                                                        if($aventura_archive_btn == 'book_form'){
                                                            ?>
                                                            <a class="booking tour_view_detail" href="#" data-toggle="modal" data-target="#tour_booking_form<?php echo esc_attr($aventura_query_1->post->ID);?>">
                                                                <?php echo esc_html__('Book Now','aventura'); ?>
                                                            </a>
                                                            <div class="modal fade tour_booking_form" id="tour_booking_form<?php echo esc_attr($aventura_query_1->post->ID);?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title($aventura_query_1->post->ID); ?></h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php echo do_shortcode('[contact-form-7 id="'.$aventura_tour_booking_form.'" title=""]');?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $aventura_count%3 == 0 || $aventura_count == $aventura_total ):?>
                                        </div>
                                        <?php endif;?>
                                        <?php
                                        $aventura_count++;
                                    }
                                    wp_reset_postdata();
                                    ?>
                            </div>

<!--                            <div class="tz-form-booking-ajax-content"></div>-->
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
        <?php
    endwhile; // end while ( have_posts )
    endif; // end if ( have_posts )
    ?>
</div>
<?php
get_footer();
?>

