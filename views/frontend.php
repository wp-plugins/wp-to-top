<?php 
	$icon_type = esc_attr( get_option( 'wp_to_top_icon_type' ) );

	if ( ! $icon_type || '' === $icon_type ) :
		$icon_type = 'fa-arrow-up';
	endif;
?>
<a href="#" class="wp-to-top hvr-wobble-vertical hvr-glow">
	<i class="fa <?php echo $icon_type; ?>"></i>
</a>
<!-- / wp-to-top -->