<?php
/**
 * Title: Stats Bar
 * Slug: cheeky-robots/stats-bar
 * Categories: cheeky-robots
 */
?>
<!-- wp:group {"align":"full","className":"stats-bar","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"backgroundColor":"teal-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stats-bar has-teal-dark-background-color has-background" style="padding-top:60px;padding-bottom:60px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","className":"stat-number","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center stat-number has-xx-large-font-size"><?php echo esc_html__( '50+', 'cheeky-robots' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"stat-label"} -->
				<p class="has-text-align-center stat-label"><?php echo esc_html__( 'Projects Shipped', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","className":"stat-number","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center stat-number has-xx-large-font-size"><?php echo esc_html__( '100%', 'cheeky-robots' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"stat-label"} -->
				<p class="has-text-align-center stat-label"><?php echo esc_html__( 'On-Time Delivery', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","className":"stat-number","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center stat-number has-xx-large-font-size"><?php echo esc_html__( '10+', 'cheeky-robots' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"stat-label"} -->
				<p class="has-text-align-center stat-label"><?php echo esc_html__( 'Years Experience', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","className":"stat-number","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center stat-number has-xx-large-font-size"><?php echo esc_html__( '0', 'cheeky-robots' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"stat-label"} -->
				<p class="has-text-align-center stat-label"><?php echo esc_html__( 'Corporate Nonsense', 'cheeky-robots' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
