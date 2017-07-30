
<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$thumbnail_size    = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
$placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
$image_title       = get_post_field( 'post_excerpt', $post_thumbnail_id );

$shop_product_lightbox = ot_get_option('shop_product_lightbox', 'lightbox');
if( $product->has_child() && $product->is_type( 'variable' )) { 
	$available_variations = $product->get_available_variations();
}
$attachment_ids = $product->get_gallery_image_ids();
$product_style = isset($_GET['product_style']) ? $_GET['product_style'] : ot_get_option('product_style', 'style1');

$classes[] = 'product-images';
$classes[] = 'thb_gallery';
$classes[] = 'product-'.$product_style;

if($product_style === 'style1') {
	$classes[] = 'carousel slick';	
}
?>
<div class="woocommerce-product-gallery <?php //echo 'woocommerce-product-gallery--columns-' . sanitize_html_class( $columns ) . ' columns-' . sanitize_html_class( $columns ); ?> images">
	<?php do_action('thb_product_badge'); ?>
	<div id="product-images" class="<?php echo implode(' ', $classes); ?>" data-navigation="true" data-autoplay="false" data-columns="1" data-asnavfor="#product-thumbnails">
			<?php if ( $attachment_ids ) {								
				foreach ( $attachment_ids as $attachment_id ) {
					$image_link = wp_get_attachment_url( $attachment_id );
					$image_src_link = wp_get_attachment_image_src($attachment_id,'full');
					$src = wp_get_attachment_image_src( $attachment_id, false, '' );
					$src_small = wp_get_attachment_image_src( $attachment_id,  apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));
					$image_title = esc_attr( get_the_title( $attachment_id ) );
					$attr = '';
					if (isset($available_variations)) {
						foreach($available_variations as $prod_variation) {
						  if ($src_small[0] == $prod_variation['image']['src']) {
						  	$attr .= implode(',', $prod_variation['attributes']) . ',';
						  }
						}
					}
					$attr = trim($attr, ',');
					?>
						<figure itemprop="image"<?php if ($shop_product_lightbox == 'zoom') { echo ' class="easyzoom"'; } ?> data-variation="<?php echo esc_attr($attr); ?>">
							<a href="<?php echo esc_attr($src[0]); ?>" itemprop="image" data-size="<?php echo esc_attr($src_small[1].'x'.$src_small[2]); ?>">
								<img src="<?php echo esc_attr($src_small[0]); ?>" title="<?php echo esc_attr($image_title); ?>" />
							</a>
						</figure>
					
					<?php
				}
			}
		?>
	</div>
	<?php if($product_style === 'style1') { do_action( 'woocommerce_product_thumbnails' ); }?>
</div>
