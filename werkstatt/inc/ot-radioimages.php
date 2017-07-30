<?php

function thb_filter_radio_images( $array, $field_id ) {
	
	if ( $field_id == 'fs_layout' ) {
	  $array = array(
	    array(
	      'value'   => 'style1',
	      'label'   => esc_html__( 'Vertical', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/vertical.jpg'
	    ),
	    array(
	      'value'   => 'style2',
	      'label'   => esc_html__( 'Parallax', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/parallax.jpg'
	    ),
	    array(
	      'value'   => 'style3',
	      'label'   => esc_html__( 'Creative', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/creative.jpg'
	    ),
	    array(
	      'value'   => 'style4',
	      'label'   => esc_html__( 'Split', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/split.jpg'
	    ),
	    array(
	      'value'   => 'style5',
	      'label'   => esc_html__( 'Segments', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/segments.jpg'
	    ),
	    array(
	      'value'   => 'style6',
	      'label'   => esc_html__( 'Glitch', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/glitch.jpg'
	    ),
	    array(
	      'value'   => 'style7',
	      'label'   => esc_html__( 'Parallax Objects', 'option-tree' ),
	      'src'     => THB_THEME_ROOT . '/assets/img/admin/fullscreen/objects.jpg'
	    )
	  );
	}
	
  if ( $field_id == 'footer_columns' ) {
    $array = array(
      array(
        'value'   => 'fourcolumns',
        'label'   => esc_html__( 'Four Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/four-columns.png'
      ),
      array(
        'value'   => 'threecolumns',
        'label'   => esc_html__( 'Three Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/three-columns.png'
      ),
      array(
        'value'   => 'twocolumns',
        'label'   => esc_html__( 'Two Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/two-columns.png'
      ),
      array(
        'value'   => 'doubleleft',
        'label'   => esc_html__( 'Double Left Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/doubleleft-columns.png'
      ),
      array(
        'value'   => 'doubleright',
        'label'   => esc_html__( 'Double Right Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/doubleright-columns.png'
      ),
      array(
        'value'   => 'fivecolumns',
        'label'   => esc_html__( 'Five Columns', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/five-columns.png'
      ),
      array(
        'value'   => 'onecolumns',
        'label'   => esc_html__( 'Single Column', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/one-columns.png'
      )
      
    );
  }
  
  if ( $field_id == 'demo-select' ) {
    $array = array(
      array(
        'value'   => '0',
        'label'   => esc_html__( 'Main Demo', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/masonry.jpg'
      ),
      array(
        'value'   => '1',
        'label'   => esc_html__( 'Masonry', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/masonry2.jpg'
      ),
      array(
        'value'   => '2',
        'label'   => esc_html__( 'Simple Agency', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/simple_agency.jpg'
      ),
      array(
        'value'   => '3',
        'label'   => esc_html__( 'Simple Portfolio', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/simple-portfolio.jpg'
      ),
      array(
        'value'   => '4',
        'label'   => esc_html__( 'Grid', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/grid.jpg'
      ),
      array(
        'value'   => '5',
        'label'   => esc_html__( 'Agency', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/agency.jpg'
      ),
      array(
        'value'   => '6',
        'label'   => esc_html__( 'Background Grid', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/bg_grid.jpg'
      ),
      array(
        'value'   => '7',
        'label'   => esc_html__( 'Carousel', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/carousel.jpg'
      ),
      array(
        'value'   => '8',
        'label'   => esc_html__( 'Designer', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/designer.jpg'
      ),
      array(
        'value'   => '9',
        'label'   => esc_html__( 'Freelancer', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/freelancer.jpg'
      ),
      array(
        'value'   => '10',
        'label'   => esc_html__( 'Personal', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/personal.jpg'
      ),
      array(
        'value'   => '11',
        'label'   => esc_html__( 'Modern Agency', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/modern_agency.jpg'
      ),
      array(
        'value'   => '12',
        'label'   => esc_html__( 'Text - Style', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/textstyle.jpg'
      ),
      array(
        'value'   => '13',
        'label'   => esc_html__( 'Full Screen - Vertical', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/vertical.jpg'
      ),
      array(
        'value'   => '14',
        'label'   => esc_html__( 'Full Screen - Segments', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/segments.jpg'
      ),
      array(
        'value'   => '15',
        'label'   => esc_html__( 'Full Screen - Parallax', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/parallax.jpg'
      ),
      array(
        'value'   => '16',
        'label'   => esc_html__( 'Full Screen - Creative', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/creative.jpg'
      ),
      array(
        'value'   => '17',
        'label'   => esc_html__( 'Full Screen - Split', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/split.jpg'
      ),
      array(
        'value'   => '18',
        'label'   => esc_html__( 'Photography', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/photography.jpg'
      ),
      array(
        'value'   => '19',
        'label'   => esc_html__( 'Digital Agency', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/digital_agency.jpg'
      ),
      array(
        'value'   => '20',
        'label'   => esc_html__( 'Architecture', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/architecture.jpg'
      ),
      array(
        'value'   => '21',
        'label'   => esc_html__( 'Full Screen - Glitch', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/glitch.jpg'
      ),
      array(
        'value'   => '22',
        'label'   => esc_html__( 'Full Screen - Objects', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/objects.jpg'
      ),
      array(
        'value'   => '23',
        'label'   => esc_html__( 'Developer', 'option-tree' ),
        'src'     => THB_THEME_ROOT . '/assets/img/admin/demos/developer.jpg'
      ),
    );
  }
  return $array;
  
}
add_filter( 'ot_radio_images', 'thb_filter_radio_images', 10, 2 );

function thb_social_links_settings( $id ) {
    
  $settings = array(
    array(
      'label'       => 'Social Network',
      'id'          => 'social_network',
      'type'        => 'select',
      'desc'        => 'Select your social network',
      'choices'     => array(
        array(
          'label'       => 'Facebook',
          'value'       => 'facebook'
        ),
        array(
          'label'       => 'Twitter',
          'value'       => 'twitter'
        ),
        array(
          'label'       => 'Google Plus',
          'value'       => 'google-plus'
        ),
        array(
          'label'       => 'Pinterest',
          'value'       => 'pinterest'
        ),
        array(
          'label'       => 'Linkedin',
          'value'       => 'linkedin'
        ),
        array(
          'label'       => 'Instagram',
          'value'       => 'instagram'
        ),
        array(
          'label'       => 'Flickr',
          'value'       => 'flickr'
        ),
        array(
          'label'       => 'VK',
          'value'       => 'vk'
        ),
        array(
          'label'       => 'Tumblr',
          'value'       => 'tumblr'
        ),
        array(
          'label'       => 'Spotify',
          'value'       => 'spotify'
        ),
        array(
          'label'       => 'Youtube',
          'value'       => 'youtube'
        ),
        array(
          'label'       => 'Vimeo',
          'value'       => 'vimeo'
        ),
        array(
          'label'       => 'Dribbble',
          'value'       => 'dribbble'
        ),
        array(
          'label'       => '500px',
          'value'       => '500px'
        ),
        array(
          'label'       => 'Behance',
          'value'       => 'behance'
        )
      )
    ),
    array(
      'id'        => 'href',
      'label'     => 'Link',
      'desc'      => sprintf( __( 'Enter a link to the profile or page on the social website. Remember to add the %s part to the front of the link.', 'werkstatt' ), '<code>http://</code>' ),
      'type'      => 'text',
    )
  );
  
  return $settings;

}
add_filter( 'ot_social_links_settings', 'thb_social_links_settings');


function thb_filter_options_name() {
	return wp_kses(__('<a href="http://fuelthemes.net">Fuel Themes</a>', 'werkstatt'), array('a' => array('href' => array(),'title' => array())));
}
add_filter( 'ot_header_version_text', 'thb_filter_options_name', 10, 2 );

function thb_filter_page_title() {
	return wp_kses(__('WerkStatt Theme Options', 'werkstatt'), array('a' => array('href' => array(),'title' => array())));
}
add_filter( 'ot_theme_options_page_title', 'thb_filter_page_title', 10, 2 );

function thb_filter_menu_title() {
	return wp_kses(__('WerkStatt Options', 'werkstatt'), array('a' => array('href' => array(),'title' => array())));
}
add_filter( 'ot_theme_options_menu_title', 'thb_filter_menu_title', 10, 2 );

function thb_filter_upload_text() {
	return wp_kses(__('Send to Theme Options', 'werkstatt'),array('a' => array('href' => array(),'title' => array())));
}
add_filter( 'ot_upload_text', 'thb_filter_upload_text', 10, 2 );

function thb_header_list() {
	echo '<li class="theme_link"><a href="http://fuelthemes.ticksy.com/" target="_blank">Support Forum</a></li>';
	echo '<li class="theme_link right"><a href="http://wpeng.in/fuelt/" target="_blank">Recommended Hosting</a></li>';
	echo '<li class="theme_link right"><a href="https://wpml.org/?aid=85928&affiliate_key=PIP3XupfKQOZ" target="_blank">Purchase WPML</a></li>';
}
add_filter( 'ot_header_list', 'thb_header_list' );

function thb_filter_ot_recognized_font_families( $array, $field_id ) {
	$array['helveticaneue'] = "'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif";
	ot_fetch_google_fonts( true, false );
	$ot_google_fonts = wp_list_pluck( get_theme_mod( 'ot_google_fonts', array() ), 'family' );
  $array = array_merge($array,$ot_google_fonts);
  
  if (ot_get_option('typekit_id')) {
  	$typekit_fonts = trim(ot_get_option('typekit_fonts'), ' ');
  	$typekit_fonts = explode(',', $typekit_fonts);
  	
  	$array = array_merge($array,$typekit_fonts);
  }
  
  foreach ($array as $font => $value) {
		$thb_font_array[$value] = $value;
  }
  return $thb_font_array;
}
add_filter( 'ot_recognized_font_families', 'thb_filter_ot_recognized_font_families', 10, 2 );


function thb_filter_typography_fields( $array, $field_id ) {

	if ( in_array($field_id, array("primary_type", "secondary_type", "button_type", "menu_type") ) ) {
		$array = array( 'font-family' );
	} else if ( in_array($field_id, array('h1_type','h2_type','h3_type','h4_type','h5_type','h6_type') ) ) {
	  $array = array( 'font-size', 'font-style', 'font-weight', 'text-transform', 'line-height', 'letter-spacing' );
	} else if ( in_array($field_id, array('body_type', 'fullmenu_type', 'footer_widget_title_type') ) ) {
		$array = array( 'font-color','font-size', 'font-style', 'font-weight', 'text-transform', 'line-height', 'letter-spacing' );
	}
  return $array;

}

add_filter( 'ot_recognized_typography_fields', 'thb_filter_typography_fields', 10, 2 );

function thb_filter_spacing_fields( $array, $field_id ) {

	if ( in_array($field_id, array("header_padding") ) ) {
		$array = array( 'top', 'bottom' );
	}
  return $array;

}

add_filter( 'ot_recognized_spacing_fields', 'thb_filter_spacing_fields', 10, 2 );

function thb_filter_measurement_unit_types( $array, $field_id ) {
	if ( in_array($field_id, array("site_borders_width") ) ) {
	  $array = array(
	    'px' => 'px',
	    'em' => 'em',
	    'pt' => 'pt'
	  );
	}
	return $array;
}
add_filter( 'ot_measurement_unit_types', 'thb_filter_measurement_unit_types', 10, 2 );

function thb_dateFormatTo_UI_datepicker($dateFormat) { 

    $chars = array( 
        // Day
        'd' => 'dd', 'j' => 'd', 'l' => 'DD', 'D' => 'D',
        // Month 
        'm' => 'mm', 'n' => 'm', 'F' => 'MM', 'M' => 'M', 
        // Year 
        'Y' => 'yy', 'y' => 'y', 
    ); 

    return strtr((string)$dateFormat, $chars); 
} 

function thb_filter_date_format( $array, $field_id ) {

   $fields = array('client_date');
   if ( in_array($field_id, $fields )) {
      $array = thb_dateFormatTo_UI_datepicker(get_option('date_format'));
   }

   return $array;

}

add_filter( 'ot_type_date_picker_date_format', 'thb_filter_date_format', 10, 2 );