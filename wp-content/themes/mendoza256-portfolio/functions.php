<?php

function mendoza256portfolio_features() {
    register_nav_menu('footerMenuLocation', 'Footer Menu');
    add_theme_support('title_tag');
}
add_action('after_setup_theme', 'mendoza256portfolio_features');

function scripts() {
    wp_register_style('style', get_template_directory_uri() .  '/dist/style.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('index', get_template_directory_uri() . '/dist/index.js', ['jquery'], 1, true);
    wp_enqueue_script('index');
}
add_action('wp_enqueue_scripts', 'scripts');