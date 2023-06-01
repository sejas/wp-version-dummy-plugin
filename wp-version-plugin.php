<?php
/*
* Plugin Name: WP Version Plugin
*/

// Display the WordPress version in a top banner in the homepage

add_action( 'wp_body_open', function(){
    if ( is_front_page() ) {
        echo '<div id="wordpress-version" style="background-color: #0073aa; color: #fff; padding: 10px; text-align: center; max-width: 100%;">';
        echo 'This site is running on WordPress version <i>"' . get_bloginfo( 'version' ) . '"</i> and PHP version <i>"' . phpversion() . '"</i> .';
        echo '</div>';
    }
} );