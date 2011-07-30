<?php
/*
-----------------------------------------------------------------------------------
    Copyright 2011  Abban Dunne  (email : himself@abandon.ie)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
-----------------------------------------------------------------------------------


Plugin Name: Abandon Themes Admin
Plugin URI: http://abandon.ie/517/abandon-options-plugin/
Description: This is a plugin to allow a template designer to easily add options.
Version: 0.5.2
Author: Abban Dunne
Author URI: http://abandon.ie
License: GPL2
*/

//Adds the menu item
function ab_custom_actions(){
	$url=WP_PLUGIN_URL .'/abandon-theme-options/icon.png';
    add_menu_page("Theme Options", "Theme Options", 1, "ab_custom", "ab_custom", $url);
    add_submenu_page("ab_custom", "Documentation", "Documentation", 1, "doc", "ab_custom_docs");
}
add_action('admin_menu', 'ab_custom_actions');

add_action('admin_init', 'ab_custom_options', 9,1);
function ab_custom_options(){
	global $ab_options_set;

	if(isset($ab_options_set['tracking'])){
		register_setting('ab_custom_options', 'ab_tracking');
	}
	if(isset($ab_options_set['template_styles'])){
		register_setting('ab_custom_options', 'ab_template_styles');
	}
	if(isset($ab_options_set['layout'])){
		register_setting('ab_custom_options', 'ab_layout');
	}
	if(isset($ab_options_set['favicon'])){
		register_setting('ab_custom_options', 'ab_favicon');
	}
	if(isset($ab_options_set['logo'])){
		register_setting('ab_custom_options', 'ab_logo');
	}
	if(isset($ab_options_set['apple_icon'])){
		register_setting('ab_custom_options', 'ab_apple_icon');
	}
	if(isset($ab_options_set['checkboxes'])){
		foreach($ab_options_set['checkboxes'] as $key=>$cb){
			$name='ab_'.$key;
			register_setting('ab_custom_options', $name);
		}
	}
	if(isset($ab_options_set['inputs'])){
		foreach($ab_options_set['inputs'] as $key=>$cb){
			$name='ab_'.$key;
			register_setting('ab_custom_options', $name);
		}
	}
	if(isset($ab_options_set['textareas'])){
		foreach($ab_options_set['textareas'] as $key=>$cb){
			$name='ab_'.$key;
			register_setting('ab_custom_options', $name);
		}
	}
}

//This includes the admin page
function ab_custom(){
	global $wpdb, $ab_options_set;
	include_once("ab-options.php");
}

//This includes the docs
function ab_custom_docs(){
	global $wpdb, $ab_options_set;
	echo '<div class="wrap">';
	if(file_exists(TEMPLATEPATH .'/documentation.html')){
		include_once(TEMPLATEPATH .'/documentation.html');
	}else{
		include_once('documentation.html');
	}
	echo '</div>';
}


//Adds style sheet to the admin panel
function custom_admin_css(){
	$x = ( 'rtl' == get_bloginfo( 'text_direction' ) ) ? 'left' : 'right';
	echo '<link type="text/css" rel="stylesheet" href="' .WP_PLUGIN_URL .'/abandon-theme-options/style-admin.css" />' . "\n";
}
add_action('admin_head', 'custom_admin_css');

//turn on Thickbox in the options panel
function ab_admin_attachments(){
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	//echo WP_PLUGIN_URL.'/ab-admin/js/script.js';		
	wp_register_script('my-upload', WP_PLUGIN_URL.'/abandon-theme-options/js/script.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}
function ab_admin_styles() {
	wp_enqueue_style('thickbox');
}
if (isset($_GET['page']) && $_GET['page'] == 'ab_custom') {
	add_action('admin_print_scripts', 'ab_admin_attachments');
	add_action('admin_print_styles', 'ab_admin_styles');
}

include_once('functions.php');

?>