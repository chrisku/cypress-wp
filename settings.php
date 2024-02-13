<?php
/**
 * Email Notifications
 */

// Disable auto-update email notifications for plugins
add_filter( 'auto_plugin_update_send_email', '__return_false' );

// Disable auto-update email notifications for themes
add_filter('auto_theme_update_send_email', '__return_false');

// Disable auto core update notifications
add_filter( 'auto_core_update_send_email', 'cy_stop_auto_update_emails', 10, 4 );
  
function cy_stop_auto_update_emails( $send, $type, $core_update, $result ) {
    if ( ! empty( $type ) && $type == 'success' ) {
        return false;
    }
    return true;
}

/**
 * Dashboard Notifications
 */

// Disable periodic admin email verification prompt
add_filter( 'admin_email_check_interval', '__return_false' );


//Remove Gutenberg Block Library CSS 
function cypr_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); 
} 
add_action( 'wp_enqueue_scripts', 'cypr_remove_wp_block_library_css', 100 );

// Remove WordPress Version Number
remove_action('wp_head', 'wp_generator'); // Remove WordPress Generator Version
add_filter('the_generator', '__return_false'); // Remove Generator Name From Rss Feeds.