<?php

defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', 'marmot_child_enqueue_styles');

function marmot_child_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_uri(),
            array('marmot'),
            wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
