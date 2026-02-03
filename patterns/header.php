<?php
/**
 * Title: Header
 * Slug: cheeky-robots/header
 * Categories: cheeky-robots
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-bg","className":"site-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull site-header has-primary-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:site-title {"level":0} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
				<!-- wp:navigation-link {"label":"Services","url":"#services"} /-->
				<!-- wp:navigation-link {"label":"Approach","url":"#approach"} /-->
				<!-- wp:navigation-link {"label":"Work","url":"/work/"} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"nav-cta"} -->
				<div class="wp-block-button nav-cta"><a class="wp-block-button__link wp-element-button" href="/contact/">Get a Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
