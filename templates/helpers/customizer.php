<?php
/**
 * 
 * Theme Name: Wordpress customizer Settings
 * 
 */

 // WP_Customizer_Control
function fn_customizer_settings($wp_customizer){

    // add a customizer setting
    // include new section
    $wp_customizer->add_section('header', array(
        'title' => __('Header Settinggs', 'Ema'),
        'priority' => 70
    ));


    // allow us to add capability to the customizer
    $wp_customizer->add_setting('header_imagen', array(
        'capability'    => 'edit_theme_options'
    ));

    //add controls in the customizer settings
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label'         => __('Header Omage', 'Ema'),
        'section'       => 'header'
    )));
}

add_action('customize_register', 'fn_customizer_settings');




?>