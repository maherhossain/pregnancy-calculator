<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die("Don't try to access directly :-( ");
}
?>
<div class="mhpcnew-container">
    <h2 style="font-size: 24px;">Pregnency Calculator Settings</h2>
    <?php settings_errors(); ?>
    <form action="options.php" method="POST" id="mhpcnew-design">
        <?php do_settings_sections("pregnancy-calculator"); ?>
        <?php settings_fields("mhpcnew_event_section_id"); ?>
        <?php submit_button(); ?>
    </form>
</div>