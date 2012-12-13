<?php
/**
 * @package Just_Write
 * @version 0.1
 */
/*
Plugin Name: Just Write
Plugin URI: http://andrewspittle.net/projects/just-write
Description: Automatically trigger fullscreen writing mode on new posts.
Author: Andrew Spittle
Version: 0.1
Author URI: http://andrewspittle.net/
*/

function jw_enqueue($hook) {
    if( 'post-new.php' != $hook )
        return;
    wp_enqueue_script( 'jw_fullscreen', plugins_url('/jw-fullscreen.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'jw_enqueue' );


?>