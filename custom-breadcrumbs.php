<?php
/*
 * Plugin Name:       Custom Breadcrumbs
 * Plugin URI:        https://sumitjha.info.np
 * Description:       Creates Custom Breadcrumbs through shortcode in any page of the website.
 * Author:            Sumit Jha
 * Author URI:        https://sumitjha.info.np
 */

//  Setup
 define('PLUGIN_URL', plugin_dir_url(__FILE__));

// Includes
 include('includes/breadcrumbs.php');
 include('front/enqueue.php');


//  Hooks
add_action('wp_enqueue_scripts', 'custom_breadcrumbs_scripts', 100);