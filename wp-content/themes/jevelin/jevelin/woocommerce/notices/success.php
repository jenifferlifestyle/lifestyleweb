<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<div class="sh-alert sh-alert-success">
	<div class="sh-alert-data sh-table">
		<div class="sh-table-cell sh-alert-data-icon">
			<i class="icon-check sh-alert-icon"></i>
		</div>
		<div class="sh-table-cell width-full">
			<h3 class="sh-alert-title">
				<?php foreach ( $messages as $message ) : ?>
				<div><?php echo wp_kses_post( $message ); ?></div>
				<?php endforeach; ?>
			</h3>
		</div>
	</div>

	<div class="sh-alert-close">
		<div class="sh-table-full">
			<div class="sh-table-cell">
				<i class="ti-close"></i>
			</div>
		</div>
	</div>
</div>