<?php

// setup
define('AAG_THEME_VERSION', '1.0.0');
define('AAG_THEME_DIR', get_template_directory());
define('AAG_THEME_URI', get_template_directory_uri());

// includes
$rootFiles = glob(AAG_THEME_DIR . '/includes/*.php');
$subdirectories = glob(AAG_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectories);

foreach ($allFiles as $file) {
    include_once($file);
}

// hooks
add_action('wp_enqueue_scripts', 'aag_enqueue_cb');
add_action('wp_head', 'aag_head_cb');
add_action('after_setup_theme', 'aag_theme_settings_cb');
