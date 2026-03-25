<?php

function tzaventura_tourcategory( $atts )
{
    $image_tour_category = $tz_tour_category = '';

    extract(shortcode_atts(array(
        'image_tour_category'   =>  ' ',
        'tz_tour_category'      =>  '',
    ), $atts));
    if($tz_tour_category !=''){
        $tour_category =  get_term_by('slug', $tz_tour_category, 'tour-category');
        $tour_link = get_term_link ($tour_category,'tour-category');
    }else{
        $tour_category = $tour_link ='';
    }


    ob_start();
    ?>
    <div class="tz_tour_category">
        <div class="content-tour_category">

            <?php if ($image_tour_category != '') :
                echo wp_get_attachment_image($image_tour_category, 'full');
            endif;?>
            <?php if($tz_tour_category !=''){ ?>
            <div class="tour_category-wrapper">
                <a href="<?php echo $tour_link?>" class="full_url"></a>
                <h3 class="title">
                    <a href="<?php echo $tour_link?>"><?php echo esc_html__($tour_category->name,'tz-autoshowroom')?></a>
                </h3>
            </div>
            <?php } ?>

        </div>

    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('tz-tourcategory', 'tzaventura_tourcategory');

?>