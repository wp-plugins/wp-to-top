<?php
/**
 * Class responsible for all backend related things
 *
 * @author Asvin
 */
class WP_To_Top {

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
		add_action( 'wp_enqueue_scripts', array( $this, 'add_css' ) );
		add_action( 'wp_footer', array( $this, 'append_html' ) );
	}

	/**
	 * Adds the plugin CSS
	 *
	 * @return null
	 */
	public function add_css() {
		wp_register_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_register_style( 'wp-to-top', plugins_url( 'wp-to-top/css/wp-to-top.css' ) );

		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'wp-to-top' );

		// custom css from the settings
		require_once ( dirname( __DIR__ ) . '/views/css.php' );
		wp_add_inline_style( 'wp-to-top', $custom_css );
	}
	
	/**
	 * Appends the WP To Top container to the page
	 * 
	 * @return null
	 */
	public function append_html() {
		require_once ( dirname( __DIR__ ) . '/views/frontend.php' );

		wp_enqueue_script( 'wp-to-top', plugins_url( 'wp-to-top/js/wp-to-top.js' ), array( 'jquery' ) );
		wp_localize_script( 'wp-to-top', 'wpToTopVars', array( 
				'scrollDuration' => esc_attr( get_option( 'wp_to_top_scroll_duration' ) ), 
		) );
	}
}