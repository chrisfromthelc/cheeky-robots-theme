<?php
/**
 * Title: Hero About
 * Slug: cheeky-robots/hero-about
 * Categories: cheeky-robots
 *
 * @package CheekyRobots
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"primary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-bg-background-color has-background" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
				<!-- wp:paragraph {"className":"section-tag"} -->
				<p class="section-tag">Who We Are</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">About <span class="hero-title-accent">Cheeky Robots</span></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Contract web development services built with precision, personality, and zero corporate nonsense.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-medium"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/robots/robot-hammer.png' ); ?>" alt="Robot with Hammer"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
