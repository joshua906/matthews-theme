<?php 
	$footer_columns = ot_get_option('footer_columns', 'fourcolumns');
	$footer_effect = ot_get_option('footer_effect', 'off');
	$footer_max_width = ot_get_option('footer_max_width', 'off');
	$disable_footer = get_post_meta(get_the_ID(), 'disable_footer', true); 
	$footer_color = ot_get_option('footer_color', 'light');
	
	$subfooter = ot_get_option('subfooter', 'off');
	$subfooter_max_width = ot_get_option('subfooter_max_width', 'off');
	$subfooter_social_link = ot_get_option('subfooter_social_link');
	
	$footer_classes[] = 'footer';
	$footer_classes[] = $subfooter == 'on' ? 'subfooter-enabled' : false;
	$footer_classes[] = $footer_color;
	$footer_classes[] = $footer_max_width == 'off' ? 'full-width-footer' : false;
	
	$subfooter_classes[] = 'subfooter';
	$subfooter_classes[] = ot_get_option('subfooter_color', 'light');
	$subfooter_classes[] = $subfooter_max_width == 'off' ? 'full-width-footer' : false;
	
	$cond = (ot_get_option('footer', 'on') != 'off' && $disable_footer !== 'on') && !is_page_template('template-fullscreen.php');
	$onepage = (ot_get_option('footer', 'on') != 'off' && $disable_footer !== 'on') && is_page_template('template-onepage.php');
?>
		</div><!-- End role["main"] -->
<?php if ($onepage) { ?>
	<div class="footer-container wpb_row fp-auto-height" id="fp-footer">
<?php } else if ($footer_effect == 'on' && !is_page_template('template-fullscreen.php')) { ?>
	<div class="fixed-footer-container">
<?php } ?>
	<?php if ($cond || $onepage) { ?>
	<!-- Start Footer -->
	<footer id="footer" class="<?php echo implode(' ', $footer_classes); ?>">
		<div class="row">
			<?php if (ot_get_option('call_to_action', 'off') == 'on') { ?>
				<div class="small-12 columns">
					<aside class="thb_call_to_action">
						<div><?php echo wp_kses_post(ot_get_option('call_to_action_text')); ?></div>
						<a href="<?php echo esc_attr(ot_get_option('call_to_action_button_link')); ?>" class="button <?php echo esc_attr(ot_get_option('call_to_action_button_color')); ?> <?php echo esc_attr(ot_get_option('call_to_action_button_style')); ?>" target="_blank" title="<?php echo esc_attr(ot_get_option('call_to_action_button_text')); ?>">
							<span><?php echo esc_html(ot_get_option('call_to_action_button_text')); ?></span>
						</a>
					</aside>
				</div>
			<?php } ?>
			<?php if ($footer_columns == 'fourcolumns') { ?>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		    <?php dynamic_sidebar('footer3'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		    <?php dynamic_sidebar('footer4'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'threecolumns') { ?>
		  <div class="small-12 medium-6 large-4 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 large-4 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <div class="small-12 large-4 columns">
		      <?php dynamic_sidebar('footer3'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'twocolumns') { ?>
		  <div class="small-12 medium-6 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'doubleleft') { ?>
		  <div class="small-12 large-6 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		      <?php dynamic_sidebar('footer3'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'doubleright') { ?>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <div class="small-12 large-6 columns">
		      <?php dynamic_sidebar('footer3'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'fivecolumns') { ?>
		  <div class="small-12 medium-6 large-2 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer2'); ?>
		  </div>
		  <div class="small-12 medium-6 large-2 columns">
		  	<?php dynamic_sidebar('footer3'); ?>
		  </div>
		  <div class="small-12 medium-6 large-3 columns">
		  	<?php dynamic_sidebar('footer4'); ?>
		  </div>
		  <div class="small-12 large-2 columns">
		  	<?php dynamic_sidebar('footer5'); ?>
		  </div>
		  <?php } elseif ($footer_columns == 'onecolumns') { ?>
		  <div class="small-12 columns">
		  	<?php dynamic_sidebar('footer1'); ?>
		  </div>
		  <?php } ?>
		</div>
	</footer>
	<!-- End Footer -->
	<?php } ?>
	<?php if (($subfooter !== 'off' && $disable_footer !== 'on') && !is_page_template('template-fullscreen.php')) { ?>
	<div id="subfooter" class="<?php echo implode(' ', $subfooter_classes); ?>">
		<div class="row">
			<div class="small-12 columns">
				<div class="subfooter-container">
					<div class="row no-padding">
						<div class="small-12 medium-6 thb-copyright columns">
							<?php echo wp_kses_post(ot_get_option('subfooter_text')); ?>
						</div>
						<div class="small-12 medium-6 thb-social columns">
							<?php do_action('thb_social_links', $subfooter_social_link); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if (($footer_effect == 'on' && !is_page_template('template-fullscreen.php')) || $onepage) { ?>
		</div> <!-- End .fixed-footer-container -->
	<?php } ?>
</div> <!-- End #wrapper -->
<?php 
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	 wp_footer(); 
?>
</body>
</html>