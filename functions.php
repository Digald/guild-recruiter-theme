<?php
/*
==========================================
Include scripts
==========================================
 */
function guildrecruiter_script_enqueue() {
    // css
    // wp_enqueue_style($handle, $src, $deps, $ver, $media)
    wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
    // js
    // wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)
    wp_enqueue_script('mainjs', get_template_directory() . '/assets/js/main.js', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'guildrecruiter_script_enqueue');