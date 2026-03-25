<?php
function tzaventura_searchtour($atts)
{
    $tz_name_option = $tz_name_label = $tz_destination_option = $tz_destination_label = $tz_date_option = $tz_date_label = $tz_duration_option = $tz_duration_label = $tz_category_option = $tz_category_label = $tz_language_option = $tz_language_label = $tz_button = '';
    $el_class = $css = $tz_type = '';
    extract(shortcode_atts(array(
        'tz_name_option' => 'show',
        'tz_name_label' => '',
        'tz_destination_option' => 'show',
        'tz_destination_label' => '',
        'tz_date_option' => 'show',
        'tz_date_label' => '',
        'tz_duration_option' => 'show',
        'tz_duration_label' => '',
        'tz_category_option' => 'hide',
        'tz_category_label' => '',
        'tz_language_option' => 'hide',
        'tz_language_label' => '',
        'tz_button' => '',
        'css' => '',
        'el_class' => '',
        'tz_type' => '1',

    ), $atts));
    ob_start();

    wp_enqueue_style('bootstrap-datepicker');
    wp_enqueue_script('bootstrap-datepicker');
    wp_enqueue_script('bootstrap-datepicker-localization');
    global $aventura_options;
    $aventura_day_start_week = get_option('start_of_week');
    $aventura_tour_search_tour_length = isset( $aventura_options['aventura_tour_search_tour_length'] ) ? $aventura_options['aventura_tour_search_tour_length'] : 15;
    $aventura_class = '';
    if ($tz_type != '4') {
        $aventura_class = 'tzElement_search_form';
    } else {
        if ($tz_duration_option == '' || $tz_destination_option == '' || $tz_date_option == '') {
            $aventura_class = 'tzElement_pecial_form';
        }
    }

    if ($tz_type != '4') {
        $tz_place = 'Search your destination';
        $tz_date = 'Choose date from calendar';
        $tz_des = 'any';
        $tz_cate = 'any';
        $tz_duray = 'Choose Day Tour';
    } else {
        if ($tz_name_label == '') {
            $tz_name_label = 'Search your destination';
        }
        if ($tz_date_label == '') {
            $tz_date_label = 'Choose date from calendar';
        }
        if ($tz_destination_label == '') {
            $tz_destination_label = 'any';
        }
        if ($tz_category_label == '') {
            $tz_category_label = 'any';
        }
        if ($tz_duration_label == '') {
            $tz_duration_label = 'Choose Day Tour';
        }
        $tz_place = $tz_name_label;
        $tz_date = $tz_date_label;
        $tz_des = $tz_destination_label;
        $tz_cate = $tz_category_label;
        $tz_duray = $tz_duration_label;
    }
    $tz_rs = '';
    if ($tz_type == '4') {
        $tz_rs .= ' tz_rsize';
    }
    ?>
    <div class="tzElement_Search<?php if ($el_class != '') echo esc_attr($el_class); ?> type-<?php echo esc_html($tz_type . $tz_rs); ?> <?php echo vc_shortcode_custom_css_class($css); ?>">
        <?php if ($tz_type == '1' || $tz_type == '3' || $tz_type == '4') : ?>
            <?php if ($tz_type == '3' || $tz_type == '4') : ?>
                <div class="container ">
            <?php endif; ?>
            <?php if ($tz_type == '4'): ?>
                <span class="tz_sw"><i class="far fa-calendar-alt"></i></span>
                <span class="tz_sw tz_clsw"><i class="fas fa-times"></i></span>
            <?php endif; ?>
            <form class="<?php echo $aventura_class; ?>" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="tzElement_search_field">
                    <input type="hidden" name="post_type" value="tour">
                    <?php
                    if ($tz_name_option == 'show') {
                        ?>
                        <div class="form-group form-name">
                            <?php if ($tz_type == '1' || $tz_type == '3'): ?>
                                <label>
                                    <?php
                                    if ($tz_name_label != '') {
                                        echo esc_html($tz_name_label);
                                    } else {
                                        esc_html_e('Keywords', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                            <?php endif; ?>
                            <div class="field-box tz_search">
                                <?php if ($tz_type == '1'): ?>
                                    <input type="text" class="form-control" name="s"
                                           placeholder="<?php echo esc_attr__('Enter a keyword here', 'aventura-plugin') ?>">
                                <?php else: ?>
                                    <input type="text" class="form-control" name="s"
                                           placeholder="<?php echo esc_attr__($tz_place, 'aventura-plugin') ?>">

                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (($tz_duration_option == 'show' && $tz_type == '3') || $tz_duration_option == 'show' && $tz_type == '4') {
                        ?>
                        <div class="form-group form-duration">
                            <?php if ($tz_type == '3'): ?>
                                <label>
                                    <?php
                                    if ($tz_duration_label != '') {
                                        echo esc_html($tz_duration_label);
                                    } else {
                                        esc_html_e('Duration', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                            <?php endif; ?>
                            <div class="field-box">
                                <select name="tour_length">
                                    <option  value=""><?php esc_html_e('Any','aventura' ); ?></option>
                                    <?php if($aventura_tour_search_tour_length){
                                        for ($i =1; $i<=$aventura_tour_search_tour_length;$i++){
                                            if($i==1){
                                                ?>
                                                <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Day','aventura' ); ?></option>
                                                <?php
                                            } else{
                                                ?>
                                                <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Days','aventura' ); ?></option>
                                                <?php
                                            }
                                        }
                                    } else{ ?>
                                        <option value=""><?php esc_html_e($tz_duray, 'aventura-plugin'); ?></option>
                                        <option value="1"><?php esc_html_e('1 Day', 'aventura-plugin'); ?></option>
                                        <option value="2"><?php esc_html_e('2 Days', 'aventura-plugin'); ?></option>
                                        <option value="3"><?php esc_html_e('3 Days', 'aventura-plugin'); ?></option>
                                        <option value="4"><?php esc_html_e('4 Days', 'aventura-plugin'); ?></option>
                                        <option value="5"><?php esc_html_e('5 Days', 'aventura-plugin'); ?></option>
                                        <option value="6"><?php esc_html_e('6 Days', 'aventura-plugin'); ?></option>
                                        <option value="7"><?php esc_html_e('7 Days', 'aventura-plugin'); ?></option>
                                        <option value="8"><?php esc_html_e('8 Days', 'aventura-plugin'); ?></option>
                                        <option value="9"><?php esc_html_e('9 Days', 'aventura-plugin'); ?></option>
                                        <option value="10"><?php esc_html_e('10 Days', 'aventura-plugin'); ?></option>
                                        <option value="11"><?php esc_html_e('11 Days', 'aventura-plugin'); ?></option>
                                        <option value="12"><?php esc_html_e('12 Days', 'aventura-plugin'); ?></option>
                                        <option value="13"><?php esc_html_e('13 Days', 'aventura-plugin'); ?></option>
                                        <option value="14"><?php esc_html_e('14 Days', 'aventura-plugin'); ?></option>
                                        <option value="15"><?php esc_html_e('15 Days', 'aventura-plugin'); ?></option>
                                    <?php } ?>

                                </select>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if ($tz_destination_option == 'show') {
                        ?>
                        <div class="form-group form-destination">
                            <?php if ($tz_type == '1' || $tz_type == '3'): ?>
                                <label>
                                    <?php
                                    if ($tz_destination_label != '') {
                                        echo esc_html($tz_destination_label);
                                    } else {
                                        esc_html_e('Destination', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                            <?php endif; ?>
                            <div class="field-box">
                                <select name="tour_destination[]">
                                    <option value=""><?php echo esc_html__($tz_des, 'aventura-plugin'); ?></option>
                                    <?php

                                    $aventura_args_destinations = array(
                                        'post_type' => 'destination',
                                        'post_status' => 'publish',
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                        'posts_per_page' => -1
                                    );

                                    // The Query
                                    $aventura_destinations_query = new WP_Query($aventura_args_destinations);
                                    // The Loop
                                    if ($aventura_destinations_query->have_posts()) {
                                        while ($aventura_destinations_query->have_posts()) {
                                            $aventura_destinations_query->the_post();
                                            echo '<option  value="' . get_the_ID() . '">' . get_the_title() . '</option>';
                                        }
                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    } else {
                                        // no posts found
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if (($tz_date_option == 'show' && $tz_type == '1') || ($tz_date_option == 'show' && $tz_type == '3') || ($tz_date_option == 'show' && $tz_type == '4')) {
                        ?>
                        <div class="form-group form-date">
                            <?php if ($tz_type == '1' || $tz_type == '3'): ?>
                                <label>
                                    <?php
                                    if ($tz_date_label != '') {
                                        echo esc_html($tz_date_label);
                                    } else {
                                        esc_html_e('Departure Date', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                            <?php endif; ?>
                            <div class="field-box tz_date">
                                <?php if ($tz_type == '1'): ?>
                                    <input class="date-pick form-control"
                                           data-locale="<?php echo esc_attr(get_locale()); ?>"
                                           data-day-start-week="<?php echo esc_attr($aventura_day_start_week); ?>"
                                           placeholder="<?php echo esc_attr__('Any', 'aventura-plugin'); ?>"
                                           data-date-format="mm/dd/yyyy" type="text" name="date">
                                <?php else: ?>
                                    <input class="date-pick form-control"
                                           data-locale="<?php echo esc_attr(get_locale()); ?>"
                                           data-day-start-week="<?php echo esc_attr($aventura_day_start_week); ?>"
                                           placeholder="<?php echo esc_attr__($tz_date, 'aventura-plugin'); ?>"
                                           data-date-format="mm/dd/yyyy" type="text" name="date">
                                <?php endif; ?>
                            </div>

                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if ($tz_duration_option == 'show' && $tz_type == '1') {
                        ?>
                        <div class="form-group form-duration">
                            <label>
                                <?php
                                if ($tz_duration_label != '') {
                                    echo esc_html($tz_duration_label);
                                } else {
                                    esc_html_e('Duration', 'aventura-plugin');
                                }
                                ?>
                            </label>
                            <div class="field-box">
                                <select name="tour_length">
                                    <option  value=""><?php esc_html_e('Any','aventura' ); ?></option>
                                    <?php if($aventura_tour_search_tour_length){
                                        for ($i =1; $i<=$aventura_tour_search_tour_length;$i++){
                                            if($i==1){
                                                ?>
                                                <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Day','aventura' ); ?></option>
                                                <?php
                                            } else{
                                                ?>
                                                <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Days','aventura' ); ?></option>
                                                <?php
                                            }
                                        }
                                    } else{ ?>
                                        <option value=""><?php esc_html_e($tz_duray, 'aventura-plugin'); ?></option>
                                        <option value="1"><?php esc_html_e('1 Day', 'aventura-plugin'); ?></option>
                                        <option value="2"><?php esc_html_e('2 Days', 'aventura-plugin'); ?></option>
                                        <option value="3"><?php esc_html_e('3 Days', 'aventura-plugin'); ?></option>
                                        <option value="4"><?php esc_html_e('4 Days', 'aventura-plugin'); ?></option>
                                        <option value="5"><?php esc_html_e('5 Days', 'aventura-plugin'); ?></option>
                                        <option value="6"><?php esc_html_e('6 Days', 'aventura-plugin'); ?></option>
                                        <option value="7"><?php esc_html_e('7 Days', 'aventura-plugin'); ?></option>
                                        <option value="8"><?php esc_html_e('8 Days', 'aventura-plugin'); ?></option>
                                        <option value="9"><?php esc_html_e('9 Days', 'aventura-plugin'); ?></option>
                                        <option value="10"><?php esc_html_e('10 Days', 'aventura-plugin'); ?></option>
                                        <option value="11"><?php esc_html_e('11 Days', 'aventura-plugin'); ?></option>
                                        <option value="12"><?php esc_html_e('12 Days', 'aventura-plugin'); ?></option>
                                        <option value="13"><?php esc_html_e('13 Days', 'aventura-plugin'); ?></option>
                                        <option value="14"><?php esc_html_e('14 Days', 'aventura-plugin'); ?></option>
                                        <option value="15"><?php esc_html_e('15 Days', 'aventura-plugin'); ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if ($tz_category_option == 'show') {
                        ?>
                        <div class="form-group form-category">
                            <?php if ($tz_type == '1' || $tz_type == '3'): ?>
                                <label>
                                    <?php
                                    if ($tz_category_label != '') {
                                        echo esc_html($tz_category_label);
                                    } else {
                                        esc_html_e('Category', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                            <?php endif; ?>
                            <div class="field-box">
                                <select name="tour_categories[]">
                                    <option value=""><?php esc_html_e($tz_cate, 'aventura-plugin'); ?></option>
                                    <?php
                                    $aventura_all_tour_categoies = get_terms('tour-category', array('hide_empty' => 0));
                                    if (!empty($aventura_all_tour_categoies)) :
                                        foreach ($aventura_all_tour_categoies as $aventura_tour_category) {
                                            echo '<option  value="' . esc_attr($aventura_tour_category->term_id) . '">' . esc_html($aventura_tour_category->name) . '</option>';
                                        }
                                    endif; ?>
                                </select>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                    <?php if ($tz_type == '4') {?>
                        <div class="form-group tzElement_search_submit">
                            <button type="submit" class="btn btn-default tz-search-btn" data-hover="<?php echo esc_attr($tz_button); ?>">
                                <?php
                                if ($tz_button != '') {
                                    echo esc_html($tz_button);
                                } else {
                                    esc_html_e('Search', 'aventura-plugin');
                                }
                                ?>
                            </button>
                        </div>
                    <?php }?>
                    <?php
                    if ($tz_language_option == 'show') {
                        ?>
                        <div class="form-group form-language">
                            <label>
                                <?php
                                if ($tz_language_label != '') {
                                    echo esc_html($tz_language_label);
                                } else {
                                    esc_html_e('Language', 'aventura-plugin');
                                }
                                ?>
                            </label>
                            <div class="field-box">
                                <select name="tour_languages[]">
                                    <option value=""><?php esc_html_e('Any', 'aventura-plugin'); ?></option>
                                    <?php
                                    $aventura_all_tour_languages = get_terms('tour-language', array('hide_empty' => 0));
                                    if (!empty($aventura_all_tour_languages)) :
                                        foreach ($aventura_all_tour_languages as $aventura_tour_language) {
                                            echo '<option  value="' . esc_attr($aventura_tour_language->term_id) . '">' . esc_html($aventura_tour_language->name) . '</option>';
                                        }
                                    endif;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php if ($tz_type != '4') {?>
                <div class="tzElement_search_submit">
                    <button type="submit" class="btn btn-default tz-search-btn">
                        <?php
                        if ($tz_button != '') {
                            echo esc_html($tz_button);
                        } else {
                            esc_html_e('Search', 'aventura-plugin');
                        }
                        ?>
                    </button>
                </div>
                <?php }?>
            </form>
            <?php if ($tz_type == '3' || $tz_type == '4') : ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>
        <?php if ($tz_type == '2') : ?>
            <div class="container">
                <form class="tzElement_search_form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="tzElement_search_field">
                        <input type="hidden" name="post_type" value="tour">
                        <?php
                        if ($tz_name_option == 'show') {
                            ?>
                            <div class="form-group form-name">
                                <label>
                                    <?php
                                    if ($tz_name_label != '') {
                                        echo esc_html($tz_name_label);
                                    } else {
                                        esc_html_e('Keywords', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                                <div class="field-box">
                                    <input type="text" class="form-control" name="s"
                                           placeholder="<?php echo esc_attr__('Search your destination', 'aventura-plugin') ?>">
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($tz_destination_option == 'show') {
                            ?>
                            <div class="form-group form-destination">
                                <label>
                                    <?php
                                    if ($tz_destination_label != '') {
                                        echo esc_html($tz_destination_label);
                                    } else {
                                        esc_html_e('Destination', 'aventura-plugin');
                                    }
                                    ?>
                                </label>

                                <div class="field-box">
                                    <select name="tour_destination[]">
                                        <option value=""><?php echo esc_html__('Any', 'aventura-plugin'); ?></option>
                                        <?php

                                        $aventura_args_destinations = array(
                                            'post_type' => 'destination',
                                            'post_status' => 'publish',
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'posts_per_page' => -1
                                        );

                                        // The Query
                                        $aventura_destinations_query = new WP_Query($aventura_args_destinations);
                                        // The Loop
                                        if ($aventura_destinations_query->have_posts()) {
                                            while ($aventura_destinations_query->have_posts()) {
                                                $aventura_destinations_query->the_post();
                                                echo '<option  value="' . get_the_ID() . '">' . get_the_title() . '</option>';
                                            }
                                            /* Restore original Post Data */
                                            wp_reset_postdata();
                                        } else {
                                            // no posts found
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($tz_date_option == 'show') {
                            ?>
                            <div class="form-group form-date">
                                <label>
                                    <?php
                                    if ($tz_date_label != '') {
                                        echo esc_html($tz_date_label);
                                    } //else {
                                    //                                        esc_html_e('Departure Date', 'aventura-plugin');
                                    //                                    }
                                    ?>
                                </label>

                                <div class="field-box">
                                    <input class="date-pick form-control"
                                           data-locale="<?php echo esc_attr(get_locale()); ?>"
                                           data-day-start-week="<?php echo esc_attr($aventura_day_start_week); ?>"
                                           placeholder="<?php echo esc_attr__('Choose date from calendar', 'aventura-plugin'); ?>"
                                           data-date-format="mm/dd/yyyy" type="text" name="date">
                                </div>

                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($tz_duration_option == 'show') {
                            ?>
                            <div class="form-group form-duration">
                                <label>
                                    <?php
                                    if ($tz_duration_label != '') {
                                        echo esc_html($tz_duration_label);
                                    } else {
                                        esc_html_e('Duration', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                                <div class="field-box">
                                    <select name="tour_length">
                                        <option  value=""><?php esc_html_e('Any','aventura' ); ?></option>
                                        <?php if($aventura_tour_search_tour_length){
                                            for ($i =1; $i<=$aventura_tour_search_tour_length;$i++){
                                                if($i==1){
                                                    ?>
                                                    <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Day','aventura' ); ?></option>
                                                    <?php
                                                } else{
                                                    ?>
                                                    <option  value="<?php echo esc_attr($i);?>"><?php echo esc_attr($i);?><?php esc_html_e(' Days','aventura' ); ?></option>
                                                    <?php
                                                }
                                            }
                                        } else{ ?>
                                            <option value=""><?php esc_html_e($tz_duray, 'aventura-plugin'); ?></option>
                                            <option value="1"><?php esc_html_e('1 Day', 'aventura-plugin'); ?></option>
                                            <option value="2"><?php esc_html_e('2 Days', 'aventura-plugin'); ?></option>
                                            <option value="3"><?php esc_html_e('3 Days', 'aventura-plugin'); ?></option>
                                            <option value="4"><?php esc_html_e('4 Days', 'aventura-plugin'); ?></option>
                                            <option value="5"><?php esc_html_e('5 Days', 'aventura-plugin'); ?></option>
                                            <option value="6"><?php esc_html_e('6 Days', 'aventura-plugin'); ?></option>
                                            <option value="7"><?php esc_html_e('7 Days', 'aventura-plugin'); ?></option>
                                            <option value="8"><?php esc_html_e('8 Days', 'aventura-plugin'); ?></option>
                                            <option value="9"><?php esc_html_e('9 Days', 'aventura-plugin'); ?></option>
                                            <option value="10"><?php esc_html_e('10 Days', 'aventura-plugin'); ?></option>
                                            <option value="11"><?php esc_html_e('11 Days', 'aventura-plugin'); ?></option>
                                            <option value="12"><?php esc_html_e('12 Days', 'aventura-plugin'); ?></option>
                                            <option value="13"><?php esc_html_e('13 Days', 'aventura-plugin'); ?></option>
                                            <option value="14"><?php esc_html_e('14 Days', 'aventura-plugin'); ?></option>
                                            <option value="15"><?php esc_html_e('15 Days', 'aventura-plugin'); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($tz_category_option == 'show') {
                            ?>
                            <div class="form-group form-category">
                                <label>
                                    <?php
                                    if ($tz_category_label != '') {
                                        echo esc_html($tz_category_label);
                                    } else {
                                        esc_html_e('Category', 'aventura-plugin');
                                    }
                                    ?>
                                </label>

                                <div class="field-box">
                                    <select name="tour_categories[]">
                                        <option value=""><?php esc_html_e('any', 'aventura-plugin'); ?></option>
                                        <?php
                                        $aventura_all_tour_categoies = get_terms('tour-category', array('hide_empty' => 0));
                                        if (!empty($aventura_all_tour_categoies)) :
                                            foreach ($aventura_all_tour_categoies as $aventura_tour_category) {
                                                echo '<option  value="' . esc_attr($aventura_tour_category->term_id) . '">' . esc_html($aventura_tour_category->name) . '</option>';
                                            }
                                        endif; ?>
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($tz_language_option == 'show') {
                            ?>
                            <div class="form-group form-language">
                                <label>
                                    <?php
                                    if ($tz_language_label != '') {
                                        echo esc_html($tz_language_label);
                                    } else {
                                        esc_html_e('Language', 'aventura-plugin');
                                    }
                                    ?>
                                </label>
                                <div class="field-box">
                                    <select name="tour_languages[]">
                                        <option value=""><?php esc_html_e('Any', 'aventura-plugin'); ?></option>
                                        <?php
                                        $aventura_all_tour_languages = get_terms('tour-language', array('hide_empty' => 0));
                                        if (!empty($aventura_all_tour_languages)) :
                                            foreach ($aventura_all_tour_languages as $aventura_tour_language) {
                                                echo '<option  value="' . esc_attr($aventura_tour_language->term_id) . '">' . esc_html($aventura_tour_language->name) . '</option>';
                                            }
                                        endif;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="tzElement_search_submit">
                        <button type="submit" class="btn btn-default tz-search-btn">
                            <?php
                            if ($tz_button != '') {
                                echo esc_html($tz_button);
                            } else {
                                esc_html_e('Search', 'aventura-plugin');
                            }
                            ?>
                        </button>
                    </div>
                </form>
            </div>
            <!--            <script>-->
            <!--                // When the user scrolls down 20px from the top of the document, slide down the navbar-->
            <!--                window.onscroll = function() {scrollFunction()};-->
            <!---->
            <!--                function scrollFunction() {-->
            <!--                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {-->
            <!--                        document.getElementById("tz_scrollSearch").style.marginTop = "-100px";-->
            <!--                    } else {-->
            <!--                        document.getElementById("tz_scrollSearch").style.marginTop = "0";-->
            <!--                    }-->
            <!--                }-->
            <!--            </script>-->
        <?php endif; ?>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";

                //var lang = '<?php //echo substr(str_replace( '_', '-', get_locale()), 0, 2) ?>//';

                if (jQuery('input.date-pick').length) {

                    var lang = jQuery('input.date-pick').data('locale');
                    lang = lang.replace('_', '-');
                    var day_start_week = jQuery('input.date-pick').data('day-start-week');

                    jQuery('input.date-pick').datepicker({
                        startDate: "today",
                        language: lang,
                        autoclose: true,
                        weekStart: day_start_week,
                        disableTouchKeyboard: true
                    });
                }
            });
        </script>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('tz-search-tour', 'tzaventura_searchtour');
?>