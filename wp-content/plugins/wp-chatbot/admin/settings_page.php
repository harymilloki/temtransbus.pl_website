<?php
/**
 * template for options page
 * @uses HTCC_Admin::settings_page
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

?>

<!-- style="display: flex; flex-wrap: wrap;" -->
<div class="wrap">


    <?php settings_errors(); ?>
    
    <div class="row">
        <div class="col s12 m12 xl6 options">
            <form action="options.php" method="post" class="">               
                <div class="mobilemonkey-logo"></div>
                <h6 class="options-subtitle">WP-Chatbot is <a href="https://mobilemonkey.com/" target="_blank">powered by MobileMonkey</a>: an Official Facebook Messenger Solutions Provider Partner</h6>               
                <?php settings_fields( 'htcc_settings_group' ); ?>               
                <?php do_settings_sections( 'htcc_options_settings' ) ?>
                <?php submit_button() ?>
            </form>
        </div>

        <div class="col s12 m12 xl6 ht-cc-admin-sidebar">
            <?php include_once 'commons/ht-cc-admin-sidebar.php'; ?>
        </div>
    </div>

        
</div>