<?php
/**
 * Tests for theme setup and configuration.
 *
 * @package CheekyRobots
 */

declare(strict_types=1);

use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class ThemeSetupTest extends TestCase {

	/**
	 * Test that the global style handle is registered.
	 */
	public function test_global_style_is_registered(): void {
		do_action( 'wp_enqueue_scripts' );
		$this->assertTrue( wp_style_is( 'cheeky-robots-global', 'registered' ) );
	}

	/**
	 * Test that the blocks style handle is registered.
	 */
	public function test_blocks_style_is_registered(): void {
		do_action( 'wp_enqueue_scripts' );
		$this->assertTrue( wp_style_is( 'cheeky-robots-blocks', 'registered' ) );
	}

	/**
	 * Test that blocks style depends on global style.
	 */
	public function test_blocks_style_depends_on_global(): void {
		do_action( 'wp_enqueue_scripts' );
		$styles = wp_styles();
		$blocks = $styles->registered['cheeky-robots-blocks'] ?? null;
		$this->assertNotNull( $blocks );
		$this->assertContains( 'cheeky-robots-global', $blocks->deps );
	}

	/**
	 * Test that the theme version constant is defined.
	 */
	public function test_theme_version_constant(): void {
		$this->assertTrue( defined( 'CHEEKY_ROBOTS_VERSION' ) );
		$this->assertSame( '1.0.0', CHEEKY_ROBOTS_VERSION );
	}
}
