<?php

function mendoza256_post_types() {
    // Projects
    register_post_type('project', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'rewrite' => array('slug' => 'projects'),
        'menu_icon' => 'dashicons-media-code',
        'labels' => array(
            'name' => 'Projects',
            'add_new_item' => 'Add new project',
            'edit_item' => 'Edit project',
            'all_items' => 'All projects',
            'singular_name' => 'Project'
        )
    ));

    // Footer
    register_post_type('footer', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'rewrite' => array('slug' => 'footer'),
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'labels' => array(
            'name' => 'Footer',
            'add_new_item' => 'Add footer',
            'edit_item' => 'Edit footer',
            'all_items' => 'All footers',
            'singular_name' => 'Footer'
        )
    ));
}

add_action('init', 'mendoza256_post_types');