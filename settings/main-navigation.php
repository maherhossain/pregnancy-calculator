<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die("Don't try to access directly :-(");
}
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

add_menu_page("Pregnancy Calculator", "Pregnancy Calculator", "manage_options", "pregnancy-calculator", "mhpcnew_main_menu", "dashicons-calculator", 25);

add_submenu_page( 'pregnancy-calculator', 'Information', 'Calculator Information', 'manage_options', 'theme-op-settings-2', 'mhpcnew_submenu');
