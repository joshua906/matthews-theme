<?php 
if ( !is_admin() ) { return; }

require get_template_directory() . '/inc/admin/imports/one-click-demo-import/one-click-demo-import.php';

function thb_ocdi_import_files() {
	return thb_Theme_Admin()->thbDemos();
}
add_filter( 'pt-ocdi/import_files', 'thb_ocdi_import_files' );

function thb_ocdi_before_widgets_import($selected_import_files) {
  $options_import_data = $selected_import_files;
	$options = unserialize( ot_decode( $options_import_data ) );
	
	/* get settings array */
	$settings = get_option( ot_settings_id() );
	
	/* has options */
	if ( is_array( $options ) ) {
	  
	  /* validate options */
	  if ( is_array( $settings ) ) {
	  
	    foreach( $settings['settings'] as $setting ) {
	    
	      if ( isset( $options[$setting['id']] ) ) {
	        
	        $content = ot_stripslashes( $options[$setting['id']] );
	        
	        $options[$setting['id']] = ot_validate_setting( $content, $setting['type'], $setting['id'] );
	        
	      }
	    
	    }
	  
	  }
	  
	  /* update the option tree array */
	  update_option( ot_options_id(), $options );
	}
}
add_action( 'pt-ocdi/before_widgets_import', 'thb_ocdi_before_widgets_import', 2, 2 );

function thb_ocdi_after_import( $selected_import ) {
	
	/* Set Pages */
	update_option( 'show_on_front', 'page' );
	
	if ( 'Simple Portfolio Demo' === $selected_import['import_file_name'] ) {
		$home = get_page_by_title('3 Columns');
	} else if ( 'Grid Demo' === $selected_import['import_file_name'] ) {
		$home = get_page_by_title('Grid - 4 Columns');
	} else {
		$home = get_page_by_title('Home');
	}
	$blog = get_page_by_title('Blog');
	
	update_option( 'page_on_front', $home->ID );
	update_option( 'page_for_posts', $blog->ID );
	
	/* Set Menus */
	$navigation = get_term_by('name', 'navigation', 'nav_menu');
	$secondary = get_term_by('name', 'secondary', 'nav_menu');
	
	set_theme_mod( 'nav_menu_locations' , array('nav-menu' => $navigation->term_id, 'secondary-menu' => $secondary->term_id ) );
}
add_action( 'pt-ocdi/after_import', 'thb_ocdi_after_import' );

/* Disable Branding */
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/* Remove Plugin Page */
function thb_ocdi_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = false;

    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'thb_ocdi_plugin_page_setup' );