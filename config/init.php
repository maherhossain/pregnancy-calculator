<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die("Don't try to access directly :-( ");
}
/**
* @param $section_id
* @param $Section_title
* @paran Section callback Function
* @param setting section ID
* 
* Particle Events Settings Section
*
*/

add_settings_section("mhpcnew_event_section_id", " ", "mhpcnew_events_section_callback_function", "pregnancy-calculator");

/**
* @param $field_id
* @param $title_name
* @paran Field callback Function
* @param setting section ID
* @param Settings Section ID
* 
* Particle Events Settings Field
*
* Register Settings
* @param $section_id
* @param $field_id
*/

function mhpcnew_settings_fields($fields, $sectionId){
    
    foreach( $fields as $field ){
        add_settings_field( $field[0], $field[1], function() use ($field) {echo '<input id="field-'.$field[0].'" type="text" class="regular-text" name="'.$field[0].'" value="'.get_option( $field[0], $field[2]).'" placeholder="'.$field[3].'">';}, "pregnancy-calculator", $sectionId);
        register_setting($sectionId, $field[0]);
    }
}

$titleFields = [
    ['name_of_the_calculator', 'Name of the Calculator', 'Pregnancy Calculator', 'Pregnancy Calculator'],

    ['first_day_of_last_period', 'First Day of Last Menstrual Period (LMP)', 'First Day of Last Menstrual Period (LMP)', 'First Day of Last Menstrual Period (LMP)'],

    ['date_of_conception', 'Probable Date of Conception', 'Conception Occured', 'Probable date of conception'],
    ['date_of_conception_sub_text', 'Conception Sub Text', 'about two weeks after last menstrual period', 'About two weeks after last menstrual period'],

    ['dating_scan', 'Dating Scan', 'Dating Scan', 'Dating Scan'],
    ['dating_scan_sub_text', 'Dating Scan Duration', 'between weeks 7 and 12', 'Between weeks 7 and 12'],

    ['nipt_ttesting', 'NIPT Testing', 'NIPT Testing', 'NIPT Testing'],
    ['nipt_ttesting_sub_text', 'NIPT Testing Duration', 'from week 10', 'From week 10'],

    ['nt_scan', 'Nuchal Translucency Scan', 'Nuchal Translucency Scan', 'NT Scan'],
    ['nt_scan_sub_text', 'Nuchal Translucency Scan Duration', 'approx. 12 weeks to 13.5 weeks', 'Approx. 12 weeks to 13.5 weeks)'],

    ['pre_eclampsia_screening', 'Pre-eclampsia screening', 'Pre-eclampsia screening', 'Pre-eclampsia screening'],
    ['pre_eclampsia_screening_sub_text', 'Pre-eclampsia screening Range', 'approx. 12 weeks to 13.5 weeks', 'Approx. 12 weeks to 13.5 weeks'],

    ['structural_scan', 'Structural Scan', 'Structural Scan', 'Structural Scan'],
    ['structural_scan_sub_text', 'Structural Scan Duration' , 'between week 12 and 16', 'Between week 12 and 16'],

    ['morphology_scan', 'Morphology Scan', 'Morphology Scan', 'Morphology Scan'],
    ['morphology_scan_sub_text', 'Morphology Scan Duration', 'between 19 – 20 weeks', 'between 19 – 20 weeks'],

    
    ['growth_scan', 'Growth Scan', 'Growth Scan', 'Growth Scan'],
    ['growth_scan_sub_text', 'Growth Scan Duration', 'from 24 weeks', 'From 24 weeks'],
    
    ['estimated_due_date', 'Estimated Due Date (EDD)', 'Estimated Due Date (EDD)', 'Estimated Due Date (EDD)'],
];

mhpcnew_settings_fields($titleFields, "mhpcnew_event_section_id");


/**
*
* Section Description
*
*/
function mhpcnew_events_section_callback_function(){
    return;
}




