<?php
/**
 * Class responsible for all backend related things
 *
 * @author Asvin
 */
class WP_To_Top_Admin {

	/**
	 * Class contructor. Initializes the different hooks
	 *
	 * @return null
	 */
	public function __construct() {
		$this->register_hooks();
	}

	/**
	 * Registers all the different hooks
	 *
	 * @return null
	 */
	protected function register_hooks() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'add_css' ) );
	}

	/**
	 * Adds the plugin the menu. It should be under Settings
	 *
	 * @return  null
	 */
	public function add_menu() {
		add_options_page( 'WP To Top', 'WP To Top', 'administrator', 'wp-to-top-plugin-settings', array( $this, 'settings_page' ) );
	}

	/**
	 * Registers all our plugin options. Makes use of the Settings API
	 *
	 * @return  null
	 */
	public function register_settings() {
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_bg_color' );
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_fg_color' );
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_scroll_duration', 'intval' );
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_icon_type' );
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_icon_size' );
		register_setting( 'wp-to-top-settings-group', 'wp_to_top_icon_location' );
	}

	/**
	 * Renders the form fields for our plugin
	 *
	 * @return  null
	 */
	public function settings_page() {
		require_once ( dirname( __DIR__ ) . '/views/admin-settings.php' );
	}

	/**
	 * Adds the plugin css
	 *
	 * @return null
	 */
	public function add_css() {
		wp_register_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_register_style( 'wp-to-top-admin', plugins_url( 'wp-to-top/css/wp-to-top-admin.css' ) );

		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'wp-to-top-admin' );
	}
}
