<?php
/*
   Plugin Name: Genesis Notification Bar
   Plugin URI: https://github.com/loudivers/genesis-notification-bar
   Version: 0.1
   Author: Lou Divers
   Description: Notification bar for Genesis framework
   Text Domain: genesis-notification-bar
   License: GPLv3
  */

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die( 'Go Catch A Case Of Corona You Dirty Hacker' );

// Register notification bar widget area.
genesis_register_sidebar(
	array(
		'id'          => 'notification-bar',
		'name'        => __( 'Notification Bar', 'genesis' ),
		'description' => __( 'Widgets in this widget area will display above everything in the header.', 'genesis' ),
	)
);

// Priority One Places this above everything 
add_action( 'genesis_before_header', 'display_notification', 1 );
/**
 * Add top widget.
 */
function display_notification() {
	genesis_widget_area(
		'notification-bar',
		array(
			'before' => '<div class="notification-bar"><div class="widget-area">',
			'after'  => '</div></div>',
		)
	);
}
