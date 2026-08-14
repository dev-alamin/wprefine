<?php
add_action( 'init', 'wprefine_cpt_case_study' );
/**
 * Register Post Type POST Case Studies
 *
 * @return void
 **/
function wprefine_cpt_case_study() {
    $labels = array(
        'name'               => __( 'Case Studies', 'wprefine' ),
        'singular_name'      => __( 'Case Study', 'wprefine' ),
        'add_new'            => __( 'Add New Case Study', 'wprefine' ),
        'add_new_item'       => __( 'Add New Case Study', 'wprefine' ),
        'edit_item'          => __( 'Edit Case Study', 'wprefine' ),
        'new_item'           => __( 'New Case Study', 'wprefine' ),
        'view_item'          => __( 'View Case Study', 'wprefine' ),
        'search_items'       => __( 'Search Case Studies', 'wprefine' ),
        'not_found'          => __( 'Not found Case Studies', 'wprefine' ),
        'not_found_in_trash' => __( 'Not found Case Studies in trash', 'wprefine' ),
    );
    $args   = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true, // Adds gutenberg support.
        'query_var'          => true,
        'rewrite'            => array(
            'slug'       => _x( 'case-study', 'slug', 'wprefine' ),
            'with_front' => false,
        ),
        'has_archive'        => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/.
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
    );
    register_post_type( 'case_study', $args );
}

function wpr_register_services_cpt() {
    $labels = [
        'name'          => 'Services',
        'singular_name' => 'Service',
        'add_new_item'  => 'Add New Service',
        'edit_item'     => 'Edit Service',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'services'],
        'menu_icon'          => 'dashicons-performance',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true, // Essential for Gutenberg Block Editor
    ];

    register_post_type('service', $args);
}
add_action('init', 'wpr_register_services_cpt');