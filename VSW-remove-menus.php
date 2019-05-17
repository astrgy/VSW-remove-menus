<?php
/*
Plugin Name: VSW Remove Admin Menus
Plugin URI:  https://developer.wordpress.org/
Description: Remove useless admin menu options 
Version:     1.0.0
Author:      Ash at verysimplewebsites.com.au
Author URI:  http://verysimplewebsites.com.au
Text Domain: wporg
Domain Path: /languages
License:     GPL2

/*
VSW Remove Admin Menus is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.
VSW Remove Admin Menus is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with VSW Remove Admin Menus. If not, see {URI to Plugin License}.
*/


function remove_menus() {
	remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'tools.php' );                  //Tools
	remove_menu_page( 'options-general.php' );        //Settings
	remove_menu_page( 'contentstudio_settings' );     //Content studio
	remove_menu_page( 'yasr_settings_page' );         //Settings
	remove_menu_page( 'theme-my-login' );             //My login
	remove_menu_page( 'loginizer' );                  //Loginizer
	remove_menu_page( 'edit.php?post_type=acf-field-group' );        //ACF
}
add_action( 'admin_menu', 'remove_menus' );

?>