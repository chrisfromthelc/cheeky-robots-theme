<?php
/**
 * Render callback for the Ticker Bar block.
 *
 * @package CheekyRobots
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content.
 * @var WP_Block $block      Block instance.
 */

declare(strict_types=1);

$items = $attributes['items'] ?? array();
$speed = $attributes['speed'] ?? 30;

if ( empty( $items ) ) {
	return '';
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'style' => '--ticker-speed: ' . absint( $speed ) . 's;',
	)
);

?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="ticker-scroll" aria-hidden="true">
		<?php
		// Output items twice for seamless loop.
		for ( $i = 0; $i < 2; $i++ ) {
			foreach ( $items as $item ) {
				?>
				<span class="ticker-item">
					<span class="ticker-dot"></span>
					<?php echo esc_html( $item ); ?>
				</span>
				<?php
			}
		}
		?>
	</div>
</div>
