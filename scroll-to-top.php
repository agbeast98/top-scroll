<?php
/*
Plugin Name: top-scroll-khat
Description: Adds a scroll to top button at the bottom left of the screen.
Version: 1.0
Author: <a href:"https://khateweb.com">khateweb</a>
*/

// Enqueue styles and scripts
function stt_enqueue_scripts() {
    wp_enqueue_style('stt-style', plugins_url('style.css', __FILE__));
    wp_enqueue_script('stt-script', plugins_url('script.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'stt_enqueue_scripts');

// Add the button HTML
function stt_add_button() {
    echo '<div id="scrollToTop" class="scroll-to-top"><span>&uarr;</span></div>';
}
add_action('wp_footer', 'stt_add_button');
?>