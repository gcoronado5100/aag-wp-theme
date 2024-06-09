<?php

function aag_enqueue_cb()
{
    // Bootstrap 5 
    wp_enqueue_style('glasse-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], '5.0', 'all');
    wp_enqueue_script('glasse-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], '5.0', true);

    // Font Awesome
    wp_enqueue_style('glasse-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"', [], '5.15.4', 'all');

    // Google Fonts - Inter
    wp_enqueue_style('glasse-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], '1.0.0', 'all');

    // Theme
    wp_enqueue_style('aag-theme-main', AAG_THEME_URI . '/assets/css/theme.css', [], AAG_THEME_VERSION, 'all');
    wp_enqueue_script('aag-theme-main-js', AAG_THEME_URI . '/assets/js/theme.js', [], AAG_THEME_VERSION, true);

    if (is_single()) {
        wp_enqueue_script('aag-table-content', AAG_THEME_URI . '/assets/js/single-table-content.js', [], AAG_THEME_VERSION, true);
    }
}
