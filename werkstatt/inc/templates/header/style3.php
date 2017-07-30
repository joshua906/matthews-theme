<?php 
	$logo = ot_get_option('logo', THB_THEME_ROOT. '/assets/img/logo.png');
	$logo_light = ot_get_option('logo_light', THB_THEME_ROOT. '/assets/img/logo-light.png');
	
	$classes[] = 'header style3';
	$classes[] = ot_get_option('header_lateral_color', 'light');
?>
<!-- Start Header -->
<header class="<?php echo implode(' ', $classes); ?>">
	<div class="row expanded no-padding align-middle">
		<div class="small-12 columns">
			<div class="logo-holder">
				<a href="<?php echo esc_url(home_url()); ?>" class="logolink" title="<?php bloginfo('name'); ?>">
					<img src="<?php echo esc_url($logo); ?>" class="logoimg logo-dark" alt="<?php bloginfo('name'); ?>"/>
					<img src="<?php echo esc_url($logo_light); ?>" class="logoimg logo-light" alt="<?php bloginfo('name'); ?>"/>
				</a>
			</div>
			<div>
				<?php do_action( 'thb_header_button' ); ?>
				<?php do_action( 'thb_quick_cart' ); ?>
				<?php do_action( 'thb_quick_search' ); ?>
				<?php do_action( 'thb_mobile_toggle' ); ?>
			</div>
		</div>
	</div>
	<?php get_template_part( 'inc/templates/header/full-menu' ); ?> 
	<div class="mobile-menu-bottom">
		<?php if ($menu_footer = ot_get_option('menu_footer')) { ?>
			<div class="menu-footer">
				<div>
					<?php echo do_shortcode($menu_footer); ?>
				</div>
			</div>
		<?php } ?>
		<?php $fullmenu_social_link = ot_get_option('fullmenu_social_link'); ?>
		<?php do_action( 'thb_social_links', $fullmenu_social_link, true ); ?>
		<?php do_action( 'thb_language_switcher_mobile' ); ?>
	</div>
</header>
<!-- End Header -->