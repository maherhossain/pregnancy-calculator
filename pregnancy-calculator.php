<?php

/*
Plugin Name: Pregnancy Calculator
Plugin URI: https://www.demo.maherhossain.com/pregnancy-calculator
Description: The Pregnancy Calculator can estimate a pregnancy schedule based on the provided due date. An estimated due date, usually based on a sonogram, is typically obtained from a health care provider during a prenatal visit. It is also possible to estimate the due date based on the biological cycle using the Due Date Calculator. You can calculate the Pregnancy by using Multiple Criteria.
Version: 3.0.0
Author: Maher Hossain
Author URI: https://maherhossain.com

*/


if ( ! defined( 'ABSPATH' ) ) {die("Don't try to access directly :-( ");}

    if( file_exists( dirname( __FILE__ ) . '/shortcode.php' ) ) {
        require_once( dirname( __FILE__ ) . '/shortcode.php' );
    }

    add_action('wp_enqueue_scripts', 'mhpcnew_calculator_scripts');
    function mhpcnew_calculator_scripts(){
        wp_enqueue_style('mhpcnew-style', PLUGINS_URL('css/style.css',__FILE__));
        wp_enqueue_style('mhpcnew-jquery-ui', PLUGINS_URL('css/jquery-ui.css', __FILE__));

        wp_enqueue_script('mhpcnew-jquery-ui-script', PLUGINS_URL('js/jquery-ui.js', __FILE__ ), array( 'jquery' ), '', true);
        wp_enqueue_script('mhpcnew-main-script', PLUGINS_URL('js/main.js', __FILE__ ), array( 'jquery' ), '', true);
    }



function mhpcnew_admin_scripts() {
    wp_enqueue_style('mhpcnew-admin-style', plugins_url('css/admin.css',__FILE__ ));
    wp_enqueue_script('mhpcnew-admin-script', PLUGINS_URL('js/admin.js', __FILE__ ));
}
add_action('admin_enqueue_scripts', 'mhpcnew_admin_scripts' );

/**
*
* Fields of the ParticleJS 
*
*/

    function mhpcnew_fields(){   
        
        if( file_exists(  dirname( __FILE__ ) . '/config/init.php' )) {
            require_once( dirname( __FILE__ ) . '/config/init.php' );
        }
    }
    add_action("admin_init", "mhpcnew_fields");

/**
* @param $page_title
* @param $menu_title
* @param $capability
* @param $menu_slug
* @param $function ( callback function )
* @param $icon_url
* @param $position
*
* Add Pregnancy Calculator item in the top level menu
*/

    function mhpcnew_top_menu(){
        if( file_exists(dirname( __FILE__ ) . '/settings/main-navigation.php' )) {
            require_once( dirname( __FILE__ ) . '/settings/main-navigation.php' );
        }
    }
    add_action("admin_menu", "mhpcnew_top_menu");

/**
* @param $tag
* @param $function_to_add
*/
    function mhpcnew_main_menu(){
        if( file_exists(dirname( __FILE__ ) . '/settings/menu-settings.php' )) {
            require_once( dirname( __FILE__ ) . '/settings/menu-settings.php' );
        } 
    }

    function mhpcnew_submenu(){
        if( file_exists(dirname( __FILE__ ) . '/settings/submenu-settings.php' )) {
            require_once( dirname( __FILE__ ) . '/settings/submenu-settings.php' );
        } 
    }


?>
