<?php

/**
 * Sets up theme supports.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wis_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'wp-block-styles' );
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('post-thumbnails', ['post', 'page', 'wis_event']);
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );


    register_nav_menus([
        'primary' => __('Primary Menu', 'wis_theme'),
    ]);
}
add_action('after_setup_theme', 'wis_theme_setup');

/**
 * Enqueues style.css on the front.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wis_theme_enqueue_styles() {
    wp_enqueue_style('wis-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style('wis-theme-style', get_parent_theme_file_uri('assets/css/main.css'), array(), wp_get_theme()->get( 'Version' ));
}
add_action('wp_enqueue_scripts', 'wis_theme_enqueue_styles');
