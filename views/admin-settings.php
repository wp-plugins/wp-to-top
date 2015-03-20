<?php
/**
* This file contains the view for the plugin's settings page in the WP backend. It can be accessed via Settings -> WP To Top
*/
?>
<div class="wrap">
	<h2><?php echo __( 'WP To Top Settings', 'wp-to-top' ); ?></h2>

	<form method="post" action="options.php" class="tuttr-form">
		<?php settings_fields( 'wp-to-top-settings-group' ); ?>
		<?php do_settings_sections( 'wp-to-top-settings-group' ); ?>
		
		<table class="form-table">
    		<tr valign="top">
    			<th scope="row">
    				<label for="wp-to-top-bg-color"><?php echo __( 'Background Color', 'wp-to-top' ); ?></label>
    			</th>

    			<td>
    				<input type="text" name="wp_to_top_bg_color" id="wp-to-top-bg-color" value="<?php echo esc_attr( get_option( 'wp_to_top_bg_color' ) ); ?>" maxlength="7" placeholder="#000" />
    			</td>
    		</tr>

    		<tr valign="top">
    			<th scope="row">
    				<label for="wp-to-top-fg-color"><?php echo __( 'Foreground Color', 'wp-to-top' ); ?></label>
    			</th>

    			<td>
    				<input type="text" name="wp_to_top_fg_color" id="wp-to-top-fg-color" value="<?php echo esc_attr( get_option( 'wp_to_top_fg_color' ) ); ?>" maxlength="7" placeholder="#fff" />
    			</td>
    		</tr>

            <tr valign="top">
                <th scope="row">
                    <label for="wp-to-top-scroll-duration"><?php echo __( 'Scroll Duration', 'wp-to-top' ); ?></label>
                </th>

                <td>
                    <input type="text" name="wp_to_top_scroll_duration" id="wp-to-top-scroll-duration" value="<?php echo esc_attr( get_option( 'wp_to_top_scroll_duration' ) ); ?>" maxlength="7" placeholder="700" />
                    <p class="description">in milliseconds</p>
                </td>
            </tr>

    		<tr valign="top">
    			<th scope="row">
    				<label for="wp-to-top-icon-type"><?php echo __( 'Icon Type', 'wp-to-top' ); ?></label>
    			</th>

    			<td>
                    <?php
                        $icons = array(
                            'fa-angle-double-up', 
                            'fa-angle-up', 
                            'fa-arrow-circle-o-up', 
                            'fa-arrow-circle-up', 
                            'fa-arrow-up', 
                            'fa-caret-square-o-up', 
                            'fa-caret-up', 
                            'fa-chevron-circle-up', 
                            'fa-chevron-up', 
                            'fa-hand-o-up', 
                            'fa-long-arrow-up', 
                            'fa-toggle-up', 
                        );
                        $current_icon_type = get_option( 'wp_to_top_icon_type' );

                        foreach ( $icons as $icon ) :
                        ?>
                            <label for="radio-<?php echo $icon; ?>" class="wp-to-top-admin-label">
                                <input type="radio" name="wp_to_top_icon_type" id="radio-<?php echo $icon; ?>" value="<?php echo $icon; ?>" <?php checked( $icon, $current_icon_type ); ?> /> 
                                <i class="fa <?php echo $icon; ?>"></i>
                            </label>
                        <?php
                        endforeach;
                    ?>
    			</td>
    		</tr>

            <tr valign="top">
                <th scope="row">
                    <label for="wp-to-top-icon-size"><?php echo __( 'Icon Size', 'wp-to-top' ); ?></label>
                </th>

                <td>
                    <input type="text" name="wp_to_top_icon_size" id="wp-to-top-icon-size" value="<?php echo esc_attr( get_option( 'wp_to_top_icon_size' ) ); ?>" maxlength="5" placeholder="30px" />
                    <p class="description">including px</p>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="wp-to-top-icon-location"><?php echo __( 'Icon Location', 'wp-to-top' ); ?></label>
                </th>

                <td>
                    <?php
                        $locations = array(
                            'left', 
                            'right',
                        );
                        $current_icon_location = get_option( 'wp_to_top_icon_location' );

                        foreach ( $locations as $location ) :
                        ?>
                            <label for="radio-<?php echo $location; ?>" class="wp-to-top-admin-label">
                                <input type="radio" name="wp_to_top_icon_location" id="radio-<?php echo $location; ?>" value="<?php echo $location; ?>" <?php checked( $location, $current_icon_location ); ?> /> 
                                <?php echo ucfirst ( $location ); ?>
                            </label>
                        <?php
                        endforeach;
                    ?>
                    <p class="description">Default: Left</p>
                </td>
            </tr>
		</table>
		<!-- / form-table -->

		<?php submit_button(); ?>
	</form>
	<!-- / tuttr-form -->

</div>
<!-- / wrap -->