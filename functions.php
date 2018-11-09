<?php
/*
==========================================
Include scripts
==========================================
 */
function guildrecruiter_script_enqueue() {
    // css
    // wp_enqueue_style($handle, $src, $deps, $ver, $media)
    wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all');

    // js
    // wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainjs', get_template_directory() . '/assets/js/main.js', array(), '', 'all');
}

add_action('wp_enqueue_scripts', 'guildrecruiter_script_enqueue');

/*
==========================================
Activate menus
==========================================
 */
function guildrecruiter_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Front Page Navigation Display');
}

add_action('init', 'guildrecruiter_theme_setup');