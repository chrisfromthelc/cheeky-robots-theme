<?php
/**
 * Title: Hero Homepage
 * Slug: cheeky-robots/hero-homepage
 * Categories: cheeky-robots
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"primary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-bg-background-color has-background" style="padding-top:100px;padding-bottom:100px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:paragraph {"className":"hero-tag"} -->
				<p class="hero-tag"><?php echo esc_html__( 'Web Development Services', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading"><?php echo esc_html__( 'We Build the', 'cheeky-robots' ); ?><br><span class="hero-title-accent"><?php echo esc_html__( 'Future of Web', 'cheeky-robots' ); ?></span></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Handcrafted Shopify, WordPress, and custom web solutions from Chandler, Arizona. Precision engineering with personality — because your website should work as hard as you do.', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"orange-accent","className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-orange-accent-background-color has-background wp-element-button"><?php echo esc_html__( 'Start a Project →', 'cheeky-robots' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'View Our Work', 'cheeky-robots' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/robot-placeholder.png' ); ?>" alt="<?php echo esc_attr__( 'Cheeky Robot', 'cheeky-robots' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
