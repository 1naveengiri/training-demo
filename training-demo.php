<?php
/**
 * Plugin Name: Training  Demo Plugin
 * Description:  This plugin is to create a demo of  how to create a plugin in WordPress.
 * Version: 0.1
 * Author: 1naveengiri
 * Author URI:  https://naveengiri.com
 * Text Domain: training-demo
 */

/**
 * 
 * 1. Actions and Filters in WordPress
 * 2. Create a custom post type
 * 3. wp_Query
 */


 /**
  * **** Hooks 
  * 1. Actions
  * add_action(), do_action()
  */


/**
 * 1. init
 * 2. wp
 * 3. wp_head
 * 4. wp_footer
 * 5. wp_enqueue_scripts
 */

add_action( 'init', 'custom_training_demo_init' );
add_action( 'wp_head', 'custom_training_demo_init' );
function custom_training_demo_init(){
    echo 'Hello world from  training demo  plugin';
}


/**
 * Filters
 * 
 * the_content
 * 
 * apply_filters :  to create a filter
 * add_filter: to  hook code to an existing  filter callback.
 */

add_filter( 'the_content', 'buddy_update_post_content', 10, 1 );
function buddy_update_post_content( $content ){
    $a = 10;
    $b = 12;
    return '<p>Addition of  numbers are following:'. ( $a + $b ).'</p>';
}

