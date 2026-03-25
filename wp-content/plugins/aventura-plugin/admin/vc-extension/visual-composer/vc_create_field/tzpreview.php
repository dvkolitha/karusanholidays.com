<?php
function aventura_preview_settings_field( $settings, $value ) {
    return '<div class="tzpreview_block" >'
        .'<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_valueup wpb_vc_param_value wpb-textinput ' .
        esc_attr( $settings['param_name'] ) . ' ' .
        esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />' .
        '<img style="max-width: 100%;" class="vc_preview ' . esc_attr( $settings['param_name'] ) . ' '. esc_attr( $settings['type'] ) . '_field" src="' . esc_attr( $settings['value'] ) . '" / ></div>';
}
function vc_load_vc_preview_param() {
    vc_add_shortcode_param( 'aventura_preview', 'aventura_preview_settings_field' );
}
add_action( 'vc_load_default_params', 'vc_load_vc_preview_param' );
