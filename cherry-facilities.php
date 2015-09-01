<?php

/*
Plugin Name: Cherry Facilities
Plugin URI: http://www.redcherries.net/cherry-facilities
Description: TODO
Version: 1.0.0
Author: Red Cherries
Author URI: http://www.redcherries.net/
License: GPLv2
*/

/*******************************************
* Plugin CONSTANT
********************************************/
define( 'RCFA_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'RCFA_PLUGIN_URL' , plugin_dir_url( __FILE__ ) );
define( 'RCFA_TEXT_DOMAIN', 'cherry-facilities' );
define( 'RCFA_SLUG',        'cherry-facilities' );

define( 'RCFA_SETTINGS_KEY', 'RCFA_Gallery_Settings_');

/*******************************************
* Global Variables
* variables and costants that are used
* in this plug in
********************************************/



/*******************************************
* Includes
********************************************/

if ( is_admin() ) {
	// include admin side
	include( 'include/installer.php' );
	include( 'include/register-posttype.php' );

} else {
	// include for client side
	include( 'include/display-functions.php');
	include( 'include/display-shortcode.php');

}
