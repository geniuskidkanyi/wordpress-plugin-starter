<?php
/**
 * Enqueue stylesheets
 *
* @author Muhammed Kanyi
* @version 1.0
* @since 7 Jul 2022
 */
function gtheme_admin_styles(){
	wp_enqueue_style('xtheme-admin-css', plugins_url('/css/admin.css', XX_FILE));
}
//add_action('admin_enqueue_scripts','gtheme_admin_styles');

/**
 * Enqueue scripts
 *
 * @author Muhammed kanyi
 * @version 1.0
 * @since 7 Jul 2022
 */
function gtheme_admin_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('gtheme-admin-js', plugins_url('/js/admin.js', XX_FILE));
}
//add_action('admin_enqueue_scripts','gtheme_admin_scripts');
