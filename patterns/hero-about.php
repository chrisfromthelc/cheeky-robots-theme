<?php
/**
 * Title: Hero About
 * Slug: cheeky-robots/hero-about
 * Categories: cheeky-robots
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"primary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-bg-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"section-tag"} -->
		<p class="section-tag"><?php esc_html_e( 'Who We Are', 'cheeky-robots' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'About <span class="hero-title-accent">Cheeky Robots</span>', 'cheeky-robots' ) ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Contract web development services built with precision, personality, and zero corporate nonsense.', 'cheeky-robots' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
