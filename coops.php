<?php
/**
 * Plugin Name: Coops Widgets
 * Description: Elementor custom widgets from Coops.
 * Plugin URI:  https://www.google.com/
 * Version:     1.0.0
 * Author:      James Cooper
 * Author URI:  https://www.google.com/
 * Text Domain: coops-widgets
 *
 * Elementor tested up to: 3.14.1
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
 }

 /**
 * Register Widgets.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

 function register_coops_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/card-widget.php' );   // include the widget file

    $widgets_manager->register( new Coops_Card_Widget() );  // register the widget

}
add_action( 'elementor/widgets/register', 'register_coops_widgets' );