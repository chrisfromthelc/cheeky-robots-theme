<?php
/**
 * Title: Contact Form
 * Slug: cheeky-robots/contact-form
 * Categories: cheeky-robots
 *
 * @package CheekyRobots
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"}}},"backgroundColor":"primary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-bg-background-color has-background" style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":null} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"45%"} -->
			<div class="wp-block-column" style="flex-basis:45%">
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Let's Talk</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Tell us about your project and we'll get back to you within 24 hours.</p>
				<!-- /wp:paragraph -->

				<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-medium"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/robots/robot-contact.png' ); ?>" alt="Contact Robot"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="margin-top:40px">
					<!-- wp:heading {"level":4} -->
					<h4 class="wp-block-heading">Direct Contact</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>📧 hello@cheekyrobots.com</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>📍 Chandler, Arizona</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>🕐 Mon-Fri, 9am-5pm MST</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"55%"} -->
			<div class="wp-block-column" style="flex-basis:55%">
				<!-- wp:shortcode -->
				[contact-form-7 id="" title="Contact Form"]
				<!-- /wp:shortcode -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
