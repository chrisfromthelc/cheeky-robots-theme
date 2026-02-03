<?php
/**
 * Tests for block patterns.
 *
 * @package CheekyRobots
 */

declare(strict_types=1);

class PatternsTest extends WP_UnitTestCase {

	/**
	 * Pattern category should be registered.
	 */
	public function test_pattern_category_registered(): void {
		$categories = WP_Block_Pattern_Categories_Registry::get_instance()->get_all_registered();
		$slugs      = array_column( $categories, 'name' );
		$this->assertContains( 'cheeky-robots', $slugs );
	}

	/**
	 * Data provider for expected pattern slugs.
	 *
	 * @return array<string, array{string}>
	 */
	public static function pattern_slug_provider(): array {
		return array(
			'header'              => array( 'cheeky-robots/header' ),
			'footer'              => array( 'cheeky-robots/footer' ),
			'hero-homepage'       => array( 'cheeky-robots/hero-homepage' ),
			'services-grid'       => array( 'cheeky-robots/services-grid' ),
			'approach-terminal'   => array( 'cheeky-robots/approach-terminal' ),
			'stats-bar'           => array( 'cheeky-robots/stats-bar' ),
			'work-grid'           => array( 'cheeky-robots/work-grid' ),
			'testimonial'         => array( 'cheeky-robots/testimonial' ),
			'cta-section'         => array( 'cheeky-robots/cta-section' ),
			'hero-about'          => array( 'cheeky-robots/hero-about' ),
			'built-different'     => array( 'cheeky-robots/built-different' ),
			'core-values'         => array( 'cheeky-robots/core-values' ),
			'timeline'            => array( 'cheeky-robots/timeline' ),
			'faq-accordion'       => array( 'cheeky-robots/faq-accordion' ),
			'hero-services'       => array( 'cheeky-robots/hero-services' ),
			'services-detail-list' => array( 'cheeky-robots/services-detail-list' ),
			'hero-work'           => array( 'cheeky-robots/hero-work' ),
			'blog-archive-header' => array( 'cheeky-robots/blog-archive-header' ),
			'contact-form'        => array( 'cheeky-robots/contact-form' ),
			'ticker-bar'          => array( 'cheeky-robots/ticker-bar' ),
		);
	}

	/**
	 * Test that each expected pattern is registered.
	 *
	 * @dataProvider pattern_slug_provider
	 */
	public function test_pattern_registered( string $slug ): void {
		$registry = WP_Block_Patterns_Registry::get_instance();
		$this->assertTrue(
			$registry->is_registered( $slug ),
			"Pattern '{$slug}' is not registered."
		);
	}
}
