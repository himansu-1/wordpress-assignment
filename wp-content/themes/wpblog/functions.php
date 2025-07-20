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

// function create_sample_pages() {
//     $pages = [
//         'Home' => '',
//         'About' => '(function file)This is the About page.',
//         'Contact' => '(function file)This is the Contact page.',
//         'Blog' => '(function file)This is the Blog page.' // Will be used as posts page
//     ];

//     foreach ($pages as $title => $content) {
//         // Check if page exists
//         if (!get_page_by_title($title)) {
//             wp_insert_post([
//                 'post_title'   => $title,
//                 'post_content' => $content,
//                 'post_status'  => 'publish',
//                 'post_type'    => 'page',
//             ]);
//         }
//     }
// }
// add_action('after_setup_theme', 'create_sample_pages');

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

add_action('template_redirect', function () {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form_submitted'])) {
        $name       = sanitize_text_field($_POST['name']);
        $email      = sanitize_email($_POST['email']);
        $phone      = sanitize_text_field($_POST['phone']);
        $address    = sanitize_textarea_field($_POST['address']);
        $requirement = sanitize_textarea_field($_POST['requirement']);

        $content_data = json_encode([
            'email'      => $email,
            'phone'      => $phone,
            'address'    => $address,
            'requirement' => $requirement
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        $post_data = [
            'post_title'   => $name,
            'post_content' => $content_data,
            'post_type'    => 'contact_message',
            'post_status'  => 'pending'
        ];

        $post_id = wp_insert_post($post_data);
        if (!is_wp_error($post_id)) {
            wp_redirect(add_query_arg('submitted', 'true', get_permalink()));
            exit;
        }
    }
});
// ========= End: POST function to store the data in Post of WP-ADMIN =========
add_action('wp_ajax_nopriv_fetch_cart_item', 'fetch_cart_item');
add_action('wp_ajax_fetch_cart_item', 'fetch_cart_item');

function fetch_cart_item()
{
    global $wpdb;
    $product_id = intval($_GET['product_id']);
    $type_id    = intval($_GET['product_type_id']);
    $image_id   = intval($_GET['product_image_id']);

    $product = $wpdb->get_row($wpdb->prepare("SELECT name FROM {$wpdb->prefix}custom_products WHERE id = %d", $product_id));
    $type    = $wpdb->get_row($wpdb->prepare("SELECT type_name FROM {$wpdb->prefix}custom_product_types WHERE id = %d", $type_id));
    $image   = $wpdb->get_row($wpdb->prepare("SELECT image_path FROM {$wpdb->prefix}custom_product_images WHERE id = %d", $image_id));

    wp_send_json([
        'product_name' => $product->name ?? 'Unknown',
        'type_name'    => $type->type_name ?? 'Unknown',
        'image_url'    => $image->image_path ?? 'https://random-image-pepebigotes.vercel.app/api/random-image'
    ]);
}

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
