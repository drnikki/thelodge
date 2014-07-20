<?php

function wpsc_display_upgrades_page() {

	do_action( 'wpsc_gold_module_activation' ); ?>

	<div class='wrap'>
		<div class='metabox-holder wpsc_gold_side'>
		
			<h2><?php esc_html_e( 'Upgrades', 'wpsc' ); ?></h2>
			<div>
				<?php if ( defined( 'WPSC_GOLD_MODULE_PRESENT' ) && ( true == WPSC_GOLD_MODULE_PRESENT ) ) {?>
				<p><?php esc_html_e( 'Enter your API Username and API Key below.', 'wpsc' ); ?></p>
				<p><a href="http://docs.getshopped.org/category/extending-your-store/premium-plugins/gold-cart/"><?php esc_html_e( 'For more information visit our documentation page.', 'wpsc' ); ?></a></p>
				<?php } ?>
				<div class='metabox-holder'>
					<form method='post' id='gold_cart_form' action=''>

						<?php
						if ( defined( 'WPSC_GOLD_MODULE_PRESENT' ) && ( true == WPSC_GOLD_MODULE_PRESENT ) ) {
							do_action( 'wpsc_gold_module_activation_forms' );
						} else {
						?>

							<div id='wpsc_gold_options_outside'>
								<div  class='form-wrap' >
									<p>
										<?php esc_html_e( "You don't have any Upgrades yet!", 'wpsc' ); ?>
									</p>
								</div>
							</div>
						<?php } ?>
					</form>
				<?php do_meta_boxes('wpsc_upgrade_page', 'top', true); ?>
				</div>
			</div>

			<strong><?php esc_html_e( 'WP e-Commerce Upgrades', 'wpsc' ); ?></strong><br />
			<span><?php esc_html_e( 'Add more functionality to your e-Commerce site. Prices may be subject to change.', 'wpsc' ); ?><input type='button' class='button-primary' onclick='window.open ("http://getshopped.org/extend/premium-upgrades/","mywindow");' value='<?php esc_html_e( 'Buy Now', 'wpsc' ); ?>' id='visitInstinct' name='visitInstinct' /></span>

			<br />
			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/extend/premium-upgrades/premium-upgrades/gold-cart-plugin/" target="_blank"><strong><?php esc_html_e( 'Gold Cart', 'wpsc' ); ?></strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'Add product search, multiple image upload, gallery view, Grid View and multiple payment gateway options to your shop', 'wpsc' ); ?></p>
			</div>

			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/premium-upgrades/premium-plugin/members-membership-subscription-plugin-wordpress/" target="_blank"><strong><?php esc_html_e( 'Members Access Plugin', 'wpsc' ); ?></strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'Create product memberships and sell them in your store. Use these memberships to restrict premium content on your posts and pages creating a "members only" area perfect for: Forums, Images and Movies and Podcasts', 'wpsc' ); ?></p>
			</div>

			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/extend/premium-upgrades/premium-upgrades/product-slider-2010/" target="_blank"><strong><?php esc_html_e( 'Product Slider', 'wpsc' ); ?> </strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'Display your products in a new and fancy way using the "Product Slider" module.', 'wpsc' ); ?></p>
			</div>

			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/premium-upgrades/premium-plugin/nextgen-gallery-buy-now-buttons-wordpress-stores/" target="_blank"><strong><?php esc_html_e( 'NextGen Gallery Buy Now Buttons', 'wpsc' ); ?> </strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'Make your Online photo gallery into an e-Commerce solution.', 'wpsc' ); ?></p>
			</div>

			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/premium-upgrades/premium-plugin/mp3-player-plugin-wordpress/" target="_blank"><strong><?php esc_html_e( 'JPlayer - MP3 Plugin', 'wpsc' ); ?> </strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'MP3 Player Plugin for WordPress', 'wpsc' ); ?></p>
			</div>
			<div class='wpsc_gold_module'>
				<br />
				<a href="http://getshopped.org/premium-upgrades/premium-plugin/fedex-shipping-plugin-wordpress/" target="_blank"><strong><?php esc_html_e( 'FedEx Plugin', 'wpsc' ); ?> </strong></a>
				<p class='wpsc_gold_text'><?php esc_html_e( 'This plugin offers shop owners the ability to provide Fedex Shipping Quotes for products with weights.', 'wpsc' ); ?></p>
			</div>
		</div>

	</div>

<?php
}
?>
