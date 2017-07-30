<?php
require get_template_directory() .'/inc/admin/plugins/class-tgm-plugin-activation.php';

function thb_register_required_plugins() {
	$data = thb_Theme_Admin()->thb_check_for_update_plugins();

	if (isset($data->plugins)) {
		foreach ($data->plugins as $plugin) {
			$case = $plugin->plugin_name === 'WPBakery Visual Composer';
			$slug = $case ? 'js_composer' : 'revslider';
			$plugins[] = array(
				'name'	=> $plugin->plugin_name,
				'slug'		=> $slug,
				'source' => $plugin->download_url,
				'force_activation' => false,
				'force_deactivation' => false,
				'version' => $plugin->version,
				'required' => true,
				'external_url'	 => '',
				'image_url' => Thb_Theme_Admin::$thb_theme_directory_uri .'assets/img/admin/plugins/'.esc_attr($slug).'.png'
			);
		}
	} else {
		$plugins[] = array(
			'name'			=> 'WPBakery Visual Composer', // The plugin name
			'slug'			=> 'js_composer', // The plugin slug (typically the folder name)
			'source'			=> Thb_Theme_Admin::$thb_theme_directory_uri . 'inc/admin/plugins/plugins/codecanyon-242431-visual-composer-page-builder-for-wordpress-wordpress-plugin.zip', 
			'version'				=> '5.1.1',
			'force_activation' => false,
			'force_deactivation' => false,
			'external_url' 	=> '',
			'required'			=> true, // If false, the plugin is only 'recommended' instead of required
			'image_url' => Thb_Theme_Admin::$thb_theme_directory_uri .'assets/img/admin/plugins/js_composer.png'
		);
	}
	$plugins[] = array(
		'name'     				=> esc_html__('WooCommerce', 'werkstatt'), // The plugin name
		'slug'     				=> 'woocommerce', // The plugin slug (typically the folder name)
		'required'			=> true,
		'force_activation'		=> false,
		'force_deactivation'	=> false,
		'image_url' => Thb_Theme_Admin::$thb_theme_directory_uri .'assets/img/admin/plugins/woo.png'
	);
	$plugins[] = array(
		'name'     				=> esc_html__('WerkStatt - Required Plugin', 'werkstatt'), // The plugin name
		'slug'     				=> 'werkstatt-plugin', // The plugin slug (typically the folder name)
		'source'				=> Thb_Theme_Admin::$thb_theme_directory_uri . 'inc/plugins/werkstatt-plugin.zip', // The plugin source
		'version'				=> '1.0.3',
		'required'			=> true,
		'force_activation'		=> false,
		'force_deactivation'	=> false,
		'image_url' => Thb_Theme_Admin::$thb_theme_directory_uri .'assets/img/admin/plugins/werkstatt.png'
	);
	$plugins[] = array(
		'name'     				=> esc_html__('MailChimp for WordPress', 'werkstatt'), // The plugin name
		'slug'     				=> 'mailchimp-for-wp', // The plugin source
		'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
		'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		'force_deactivation' 	=> false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	);
	$plugins[] = array(
		'name'     				=> esc_html__('Contact Form 7', 'werkstatt'), // The plugin name
		'slug'     				=> 'contact-form-7', // The plugin source
		'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
		'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		'force_deactivation' 	=> false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	);
	$config = array(
		'id'              => 'thb',
		'domain'       		=> 'werkstatt',         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_slug'       => 'themes.php',
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', 'werkstatt' ),
			'menu_title'                       			=> __( 'Install Plugins', 'werkstatt' ),
			'installing'                       			=> __( 'Installing Plugin: %s', 'werkstatt' ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'werkstatt' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Theme Plugins', 'werkstatt' ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'werkstatt' ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'werkstatt' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);
	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'thb_register_required_plugins');