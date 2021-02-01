<?php
/*
Plugin Name: SWS ALPS Modifications - Sharon
Plugin URI: http://www.ccharacter.com/
Description: Make style modifications available across the multi-site
 * Version:           1.8
 * Requires at least: 5.2
 * Requires PHP:      5.5
 * Author:            Sharon Stromberg
 * Author URI:        https://ccharacter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sws-alps-mod
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once plugin_dir_path(__FILE__).'inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/ccharacter/sws-alps-mod/main/plugin.json',
	__FILE__,
	'sws_alps_mod'
);

function sws_alps_mod_styles() {
    wp_enqueue_style( 'shortcode', plugin_dir_url( __FILE__ ) . 'alps-mod-style.css' );
}

add_action( 'wp_enqueue_scripts', 'sws_alps_mod_styles' );


?>