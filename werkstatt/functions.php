<?php

/*-----------------------------------------------------------------------------------

	Here we have all the custom functions for the theme
	Please be extremely cautious editing this file.
	You have been warned!

-------------------------------------------------------------------------------------*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
// Define Theme Name for localization
define('THB_THEME_ROOT', esc_url(get_template_directory_uri()));
define('THB_THEME_ROOT_ABS', get_template_directory());


// Option-Tree Theme Mode
require get_template_directory() .'/inc/admin/option-tree/init.php';

// Theme Admin
require get_template_directory() .'/inc/admin/welcome/fuelthemes.php';

// TGM Plugin Activation Class
require get_template_directory() .'/inc/admin/plugins/plugins.php';

// Imports
require get_template_directory() .'/inc/admin/imports/import.php';

// Misc
require get_template_directory() .'/inc/misc.php';

// Script Calls
require get_template_directory() .'/inc/script-calls.php';

// CSS Output of Theme Options
require get_template_directory() .'/inc/selection.php';

// Add Menu Support
require get_template_directory() .'/inc/wp3menu.php';

// Enable Sidebars
require get_template_directory() .'/inc/sidebar.php';

// Ajax
require get_template_directory() .'/inc/ajax.php';

// Portfolio Related
require get_template_directory() .'/inc/portfolio-related.php';

// Visual Composer Integration
require get_template_directory() .'/inc/visualcomposer.php';

// Twitter oAuth
require get_template_directory() .'/inc/thb-twitter-api.php';
require get_template_directory() .'/inc/thb-twitter-helper.php';

// Widgets
require get_template_directory() .'/inc/widgets.php';

// WPML Support
require get_template_directory() .'/inc/wpml.php';

// WooCommerce Support
require get_template_directory() .'/inc/woocommerce.php';