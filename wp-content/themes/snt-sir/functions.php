<?php
function mytheme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

// ========= Start: POST function to store the data in Post of WP-ADMIN =========
function register_contact_message_cpt()
{
    register_post_type('contact_message', [
        'labels' => [
            'name' => 'Contact Messages',
            'singular_name' => 'Contact Message'
        ],
        'public' => false,
        'show_ui' => true, // ✅ important to make it visible in admin
        'menu_icon' => 'dashicons-email',
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'register_contact_message_cpt');

// ========= End: POST function to store the data in Post of WP-ADMIN =========

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], null, true);
    wp_localize_script('main-js', 'myAjax', [
        'url' => admin_url('admin-ajax.php')
    ]);
});

// 
function add_custom_rewrite_rules() {
    add_rewrite_rule(
        '^product/page/([0-9]+)/?',
        'index.php?pagename=product&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'add_custom_rewrite_rules');

function add_paged_query_var($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'add_paged_query_var');


// ================== FRONT PAGE SLIDER CONTENT ==================
function get_slider_data() {
    return [
        // slider 1
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_1.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 2
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_2.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 3
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_3.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 4
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_4.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 5
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_5.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 6
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_6.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 7
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_7.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 8
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_8.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 9
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_9.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 10
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_10.png',
            'title' => 'Innovative Approaches to Education',
            'description' => 'As a forward-thinking educator, I strive to incorporate new teaching methods and technology to enhance student learning experiences.',
            'button_name' => 'Learn More',
            'button_link' => '#'
        ]
    ];
}
