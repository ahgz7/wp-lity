<?php
/*
Plugin Name: WP Lity
Description: Lightweight, accessible and responsive lightbox for Wordpress.
Author:      ahgz7
Author URI:  http://github.com/ahgz7
Version: 0.1.0
 */

if (!class_exists('WP_Litty')) {
  class WP_Litty {

    public function __construct() {
      wp_enqueue_style('wp-litty-style', plugins_url('assets/lity.min.css', __FILE__), array(), '2.3.0');
      wp_enqueue_script('wp-litty-main', plugins_url('assets/main.js', __FILE__), array('jquery'), '0.1.0', true);
      wp_enqueue_script('wp-litty-script', plugins_url('assets/lity.min.js', __FILE__), array('jquery', 'wp-litty-main'), '2.3.0', true);
    }

  }
}

add_action('init', 'init_wp_litty');
function init_wp_litty() {
  new WP_Litty();
}
