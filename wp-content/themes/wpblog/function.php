<?php
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // Example: wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

function create_sample_pages() {
    $pages = [
        'Home' => '',
        'About' => '(function file)This is the About page.',
        'Contact' => '(function file)This is the Contact page.',
        'Blog' => '(function file)This is the Blog page.' // Will be used as posts page
    ];

    foreach ($pages as $title => $content) {
        // Check if page exists
        if (!get_page_by_title($title)) {
            wp_insert_post([
                'post_title'   => $title,
                'post_content' => $content,
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ]);
        }
    }
}
add_action('after_setup_theme', 'create_sample_pages');
