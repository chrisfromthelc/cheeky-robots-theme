<?php
/**
 * Tests for custom blocks.
 *
 * @package CheekyRobots
 */

declare(strict_types=1);

use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class BlocksTest extends TestCase {

	/**
	 * Test that the ticker-bar block is registered.
	 */
	public function test_ticker_bar_block_registered(): void {
		$registry = WP_Block_Type_Registry::get_instance();
		$this->assertTrue( $registry->is_registered( 'cheeky-robots/ticker-bar' ) );
	}

	/**
	 * Test that the ticker-bar block has a render callback.
	 */
	public function test_ticker_bar_has_render_callback(): void {
		$registry   = WP_Block_Type_Registry::get_instance();
		$block_type = $registry->get_registered( 'cheeky-robots/ticker-bar' );
		$this->assertNotNull( $block_type );
		$this->assertNotEmpty( $block_type->render_callback );
	}

	/**
	 * Test that the ticker-bar block has expected attributes.
	 */
	public function test_ticker_bar_attributes(): void {
		$registry   = WP_Block_Type_Registry::get_instance();
		$block_type = $registry->get_registered( 'cheeky-robots/ticker-bar' );
		$this->assertNotNull( $block_type );
		$this->assertArrayHasKey( 'items', $block_type->attributes );
		$this->assertArrayHasKey( 'speed', $block_type->attributes );
		$this->assertArrayHasKey( 'separator', $block_type->attributes );
	}
}
