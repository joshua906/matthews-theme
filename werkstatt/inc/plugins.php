<?php
add_action('tgmpa_register', 'thb_register_required_plugins');
function thb_register_required_plugins() {
	$plugins = array(
		array(
			'name'					=> esc_html__('WerkStatt Required Plugin', 'werkstatt'), // The plugin name
			'slug'					=> 'werkstatt-plugin', // The plugin slug (typically the folder name)
			'source'				=> get_template_directory_uri() . '/inc/plugins/werkstatt-plugin.zip', // The plugin source
			'version'				=> '1.0.3',
			'required'				=> true, // If false, the plugin is only 'recommended' instead of required
			'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation'	=> true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),
		array(
			'name'					=> esc_html__('WPBakery Visual Composer', 'werkstatt'), // The plugin name
			'slug'					=> 'js_composer', // The plugin slug (typically the folder name)
			'source'				=> get_template_directory_uri() . '/inc/plugins/codecanyon-242431-visual-composer-page-builder-for-wordpress-wordpress-plugin.zip', // The plugin source
			'version'				=> '5.1',
			'required'				=> true, // If false, the plugin is only 'recommended' instead of required
			'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation'	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),
		array(
			'name'     				=> esc_html__('WooCommerce', 'werkstatt'), // The plugin name
			'slug'     				=> 'woocommerce', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),
		array(
			'name'     				=> esc_html__('MailChimp for WordPress', 'werkstatt'), // The plugin name
			'slug'     				=> 'mailchimp-for-wp', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),
		array(
			'name'     				=> esc_html__('Contact Form 7', 'werkstatt'), // The plugin name
			'slug'     				=> 'contact-form-7', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		)
	);
	$config = array(
		'domain'       		=> 'werkstatt',         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> esc_html__(  'Install Required Plugins', 'werkstatt' ),
			'menu_title'                       			=> esc_html__(  'Install Plugins', 'werkstatt' ),
			'installing'                       			=> esc_html__(  'Installing Plugin: %s', 'werkstatt' ), // %1$s = plugin name
			'oops'                             			=> esc_html__(  'Something went wrong with the plugin API.', 'werkstatt' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'werkstatt' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'werkstatt' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'werkstatt' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'werkstatt' ),
			'return'                           			=> esc_html__(  'Return to Required Plugins Installer', 'werkstatt' ),
			'plugin_activated'                 			=> esc_html__(  'Plugin activated successfully.', 'werkstatt' ),
			'complete' 									=> esc_html__(  'All plugins installed and activated successfully. %s', 'werkstatt' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);
	tgmpa($plugins, $config);
}