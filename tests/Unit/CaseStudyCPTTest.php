<?php
/**
 * Tests for the Case Study custom post type.
 *
 * @package CheekyRobots
 */

declare(strict_types=1);

use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class CaseStudyCPTTest extends TestCase {

	/**
	 * Test that the case study CPT is registered.
	 */
	public function test_cpt_exists(): void {
		$this->assertTrue( post_type_exists( 'cheeky_case_study' ) );
	}

	/**
	 * Test that the CPT is visible in the REST API.
	 */
	public function test_cpt_show_in_rest(): void {
		$post_type = get_post_type_object( 'cheeky_case_study' );
		$this->assertNotNull( $post_type );
		$this->assertTrue( $post_type->show_in_rest );
	}

	/**
	 * Test the CPT rewrite slug.
	 */
	public function test_cpt_rewrite_slug(): void {
		$post_type = get_post_type_object( 'cheeky_case_study' );
		$this->assertNotNull( $post_type );
		$this->assertSame( 'work', $post_type->rewrite['slug'] );
	}

	/**
	 * Test the CPT has archive enabled.
	 */
	public function test_cpt_has_archive(): void {
		$post_type = get_post_type_object( 'cheeky_case_study' );
		$this->assertNotNull( $post_type );
		$this->assertTrue( $post_type->has_archive );
	}

	/**
	 * Test the CPT supports expected features.
	 */
	public function test_cpt_supports(): void {
		$this->assertTrue( post_type_supports( 'cheeky_case_study', 'title' ) );
		$this->assertTrue( post_type_supports( 'cheeky_case_study', 'editor' ) );
		$this->assertTrue( post_type_supports( 'cheeky_case_study', 'thumbnail' ) );
		$this->assertTrue( post_type_supports( 'cheeky_case_study', 'excerpt' ) );
		$this->assertTrue( post_type_supports( 'cheeky_case_study', 'custom-fields' ) );
	}
}
