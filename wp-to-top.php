<?php
/*
Plugin Name: WP To Top
Plugin URI: http://htmlblog.net
Version: 0.2
Author: Asvin Balloo
Author URI: http://htmlblog.net
Description: Add a "back to top" icon link to your blog
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

// block direct access to plugin
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// include our classes
require_once( plugin_dir_path( __FILE__ ) . 'classes/class-wp-to-top.php' );
require_once( plugin_dir_path( __FILE__ ) . 'classes/class-wp-to-top-admin.php' );

// boot everything up
$wp_to_top = new WP_To_Top();
$wp_to_top_admin = new WP_To_Top_Admin();