<?php
/*
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=yes" />-->
    <?php wp_head(); ?>
</head>
<?php
global $aventura_options;
$aventura_thousands_sep      = isset( $aventura_options['aventura_currency_thousands_sep'] ) ? $aventura_options['aventura_currency_thousands_sep'] : ',';

if(aventura_is_woocommerce_integration_enabled()){
    $aventura_thousands_sep     = wc_get_price_thousand_separator();
}
?>
<body id="bd" <?php body_class(); ?> data-thousand="<?php echo esc_attr($aventura_thousands_sep);?>">
<!--Include Loading Template-->
<?php get_template_part('template_inc/inc','loading'); ?>
