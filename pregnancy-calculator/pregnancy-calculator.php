<?php

/*
Plugin Name: Pregnancy Calculator 2
Plugin URI: https://www.demo.maherhossain.com/pregnancy-calculator
Description: The Pregnancy Calculator can estimate a pregnancy schedule based on the provided due date. An estimated due date, usually based on a sonogram, is typically obtained from a health care provider during a prenatal visit. It is also possible to estimate the due date based on the biological cycle using the Due Date Calculator. You can calculate the Pregnancy by using Multiple Criteria.
Version: 3.0.0
Author: Maher Hossain
Author URI: https://maherhossain.com

*/

if (file_exists(dirname(__FILE__) . '/shortcode.php')) {
	require_once(dirname(__FILE__) . '/shortcode.php');
}
add_action('wp_enqueue_scripts', 'pregnancy_calculator_scripts');
function pregnancy_calculator_scripts()
{
	wp_enqueue_style('style', PLUGINS_URL('css/style.css', __FILE__));
	wp_enqueue_style('jquery-ui', PLUGINS_URL('css/jquery-ui.css', __FILE__));

	wp_enqueue_script('jquery-ui', PLUGINS_URL('js/jquery-ui.js', __FILE__), array('jquery'), '', true);
	wp_enqueue_script('custom', PLUGINS_URL('js/main.js', __FILE__), array('jquery'), '', true);
}

function load_custom_wp_admin_style()
{
	wp_register_style('admin-style', PLUGINS_URL('css/admin-style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');




//Fields of the Pregnancy Calculator
function pc_fields()
{

	add_settings_section("totat_section_id", "Pregnancy Calculator", "totat_section_callback_function", "pregnancy-calculator");

	add_settings_field('pc_title', 'Title of The Calculator', 'pc_title_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'pc_title');

	add_settings_field('last_mp', 'Last Menstrual Period :', 'pc_first_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'last_mp');

	//2nd field
	add_settings_field('date_of_conception', 'Probable date of conception :', 'pc_second_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'date_of_conception');
	//2nd field sub text
	add_settings_field('date_of_conception_subtext', '** Sub text', 'pc_second_field_subtext_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'date_of_conception_subtext');


	//3rd field
	add_settings_field('foetal_age_today', 'Foetal Age Today :', 'pc_third_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'foetal_age_today');

	//4th field
	add_settings_field('date_for_nt_scan', 'Best date range for NT scan :', 'pc_forth_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'date_for_nt_scan');
	//4th field subtext
	add_settings_field('date_for_nt_scan_subtext', '** Sub text', 'pc_forth_field_subtext_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'date_for_nt_scan_subtext');

	//5th field
	add_settings_field('morphology_scan_date', '19 Weeks / Morphology Scan Date :', 'pc_fifth_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'morphology_scan_date');
	//6th field
	add_settings_field('estimated_due_date', 'Estimated Due Date (40 Weeks) :', 'pc_sixth_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'estimated_due_date');
	//7th field
	add_settings_field('uf_date', 'Previous Ultrasound Date and Foetal Age On That Day :', 'pc_seventh_field_output', 'pregnancy-calculator', 'totat_section_id');
	register_setting('totat_section_id', 'uf_date');
}
add_action("admin_init", "pc_fields");


function pc_title_field_output()
{

	echo '<input type="text" class="regular-text" name="pc_title" value="' . get_option("pc_title", "Title of The Calculator") . '" >';
}

function pc_first_field_output()
{

	echo '<input type="text" class="regular-text" name="last_mp" value="' . get_option('last_mp') . '" >';
}
function pc_second_field_output()
{
	echo '<input type="text" class="regular-text" name="date_of_conception" value="' . get_option('date_of_conception') . '" >';
}
function pc_second_field_subtext_output()
{
	echo '<input type="text" placeholder="about two weeks after last menstrual period" class="regular-text" name="date_of_conception_subtext" value="' . get_option('date_of_conception_subtext') . '" >';
}

function pc_third_field_output()
{
	echo '<input type="text" class="regular-text" name="foetal_age_today" value="' . get_option('foetal_age_today') . '" >';
}
function pc_forth_field_output()
{
	echo '<input type="text" class="regular-text" name="date_for_nt_scan" value="' . get_option('date_for_nt_scan') . '" >';
}
function pc_forth_field_subtext_output()
{
	echo '<input placeholder="12 wks 3 days to 13 wks 3 days" type="text" class="regular-text" name="date_for_nt_scan_subtext" value="' . get_option('date_for_nt_scan_subtext') . '" >';
}
function pc_fifth_field_output()
{
	echo '<input type="text" class="regular-text" name="morphology_scan_date" value="' . get_option('morphology_scan_date') . '" >';
}
function pc_sixth_field_output()
{
	echo '<input type="text" class="regular-text" name="estimated_due_date" value="' . get_option('estimated_due_date') . '" >';
}
function pc_seventh_field_output()
{
	echo '<input type="text" class="regular-text" name="uf_date" value="' . get_option('uf_date') . '" >';
}


function totat_section_callback_function()
{
}
// add Pregnancy Calculator item in menu
function pc_top_level_menu()
{
	add_menu_page("Pregnancy Calculator", "Pregnancy Calculator", "manage_options", "pregnancy-calculator", "top_level_menu_output", "dashicons-calendar", 21);
}
add_action("admin_menu", "pc_top_level_menu");

function top_level_menu_output()
{ ?>

	<div class="container">

		<form action="options.php" method="POST" id="field-design">
			<?php do_settings_sections("pregnancy-calculator"); ?>
			<?php settings_fields("totat_section_id"); ?>

			<?php submit_button(); ?>
		</form>

	</div>




<?php }
