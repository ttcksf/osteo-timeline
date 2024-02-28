<?php

/**
 * Plugin Name: Osteo Timeline for WPbakery
 * Description: Osteo Timeline is a timeline addon for WPbakery Page Builder.
 * Plugin URI:  https://twinkledev.xyz/codecanyon/osteo-timeline/
 * Version:     1.0.0
 * Author:      TwinkleTheme
 * Author URI:  https://codecanyon.net/user/twinkletheme
 * License: GPLv2 or later
 * Text Domain: osteo-timeline
 */

final class OsteoTimeline {

    private static $instance;

    private function __construct() {

        add_action( 'plugins_loaded', [$this, 'load_textdomain'] );
        add_action( 'wp_enqueue_scripts', [$this, 'osteo_timeline_assets'] );
        add_action( 'init', array( $this, 'admin_notice_missing_main_plugin' ) );
        $this->include_files();
    }

    function load_textdomain() {
        load_plugin_textdomain( 'osteo-timeline', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    public function osteo_timeline_assets() {

        wp_enqueue_style( 'cmk-hover', plugins_url( '/assets/vendor/css/cmk-hover.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'cmk-box-shadow', plugins_url( '/assets/vendor/css/cmk-box-shadow.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'timeline', plugins_url( '/assets/vendor/css/timeline.min.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'osteo-timeline', plugins_url( '/assets/css/osteo-timeline.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'osteo-timeline-main', plugins_url( '/assets/css/style.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'osteo-timeline-responsive', plugins_url( '/assets/css/responsive.css', __FILE__ ), array(), '1.0.0' );
        
        wp_enqueue_script( 'timeline', plugins_url( '/assets/vendor/js/timeline.min.js', __FILE__ ), array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'osteo-timeline-main', plugins_url( '/assets/js/main.js', __FILE__ ), array('jquery'), '1.0.0', true );

    }

    public function admin_notice_missing_main_plugin() {
        // Check if WPBakery Page Builder is installed
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Extend WPBakery Page Builder is required
            add_action( 'admin_notices', array( $this, 'showVcVersionNotice' ) );
            return;
        }

    }

    public function showVcVersionNotice() {
        $plugin_data = get_plugin_data( __FILE__ );
        echo '
        <div class="updated">
          <p>' . sprintf( __( '<strong>%s</strong> requires <strong><a href="https://wpbakery.com/" target="_blank">WPbakery Page Builder</a></strong> plugin to be installed and activated on your site.', 'vc_extend' ), esc_html( $plugin_data['Name'] ) ) . '</p>
        </div>';
    }

    public function include_files() {
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/functions.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-1.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-2.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-3.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-4.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-5.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-6.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-7.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-8.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-9.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'inc/style-10.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-1.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-2.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-3.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-4.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-5.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-6.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-7.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-8.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-9.php' );
        include_once plugin_dir_path( __FILE__ ) . ( 'widgets/element-10.php' );
    }

    public static function get_instance() {
        if ( !isset( self::$instance ) && !( self::$instance instanceof OsteoTimeline ) ) {
            self::$instance = new OsteoTimeline;
        }

        return self::$instance;
    }
}
OsteoTimeline::get_instance();