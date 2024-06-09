<?php

/**
 * Theme settings
 * this file is used to define theme settings and constants
 */

function aag_theme_settings_cb()
{
    add_theme_support('editor-styles');

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        'assets/css/theme.css',
        'assets/css/editor.css'
    ]);
}
