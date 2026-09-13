<?php
/**
 * Parsa Restaurant & Bistro Theme Functions
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function parsa_bistro_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add editor style
    add_editor_style('style.css');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'parsa-bistro'),
        'footer' => __('Footer Navigation', 'parsa-bistro'),
    ));
}
add_action('after_setup_theme', 'parsa_bistro_setup');

/**
 * Enqueue Scripts and Styles
 */
function parsa_bistro_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('parsa-bistro-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('parsa-bistro-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Main JavaScript
    wp_enqueue_script('parsa-bistro-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('parsa-bistro-main', 'parsaBistro', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('parsa-bistro-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'parsa_bistro_enqueue_scripts');

/**
 * Register Custom Post Types
 */
function parsa_bistro_register_post_types() {
    // Menu Items Post Type
    register_post_type('menu_item', array(
        'labels' => array(
            'name' => __('Menu Items', 'parsa-bistro'),
            'singular_name' => __('Menu Item', 'parsa-bistro'),
            'add_new' => __('Add New', 'parsa-bistro'),
            'add_new_item' => __('Add New Menu Item', 'parsa-bistro'),
            'edit_item' => __('Edit Menu Item', 'parsa-bistro'),
            'new_item' => __('New Menu Item', 'parsa-bistro'),
            'view_item' => __('View Menu Item', 'parsa-bistro'),
            'search_items' => __('Search Menu Items', 'parsa-bistro'),
            'not_found' => __('No menu items found', 'parsa-bistro'),
            'not_found_in_trash' => __('No menu items found in trash', 'parsa-bistro'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-food',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'menu'),
        'show_in_rest' => true,
    ));
    
    // Specials Post Type
    register_post_type('special', array(
        'labels' => array(
            'name' => __('Specials', 'parsa-bistro'),
            'singular_name' => __('Special', 'parsa-bistro'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'specials'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'parsa_bistro_register_post_types');

/**
 * Register Custom Taxonomies
 */
function parsa_bistro_register_taxonomies() {
    // Menu Categories
    register_taxonomy('menu_category', 'menu_item', array(
        'labels' => array(
            'name' => __('Categories', 'parsa-bistro'),
            'singular_name' => __('Category', 'parsa-bistro'),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'menu-category'),
    ));
    
    // Dietary Preferences
    register_taxonomy('dietary', 'menu_item', array(
        'labels' => array(
            'name' => __('Dietary Preferences', 'parsa-bistro'),
            'singular_name' => __('Dietary Preference', 'parsa-bistro'),
        ),
        'hierarchical' => false,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'dietary'),
    ));
}
add_action('init', 'parsa_bistro_register_taxonomies');

/**
 * Add Custom Meta Boxes
 */
function parsa_bistro_add_meta_boxes() {
    add_meta_box(
        'menu_item_details',
        __('Menu Item Details', 'parsa-bistro'),
        'parsa_bistro_menu_item_meta_box_callback',
        'menu_item',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'parsa_bistro_add_meta_boxes');

/**
 * Menu Item Meta Box Callback
 */
function parsa_bistro_menu_item_meta_box_callback($post) {
    wp_nonce_field('parsa_bistro_menu_item_meta', 'parsa_bistro_menu_item_meta_nonce');
    
    $price = get_post_meta($post->ID, '_menu_item_price', true);
    $pairing = get_post_meta($post->ID, '_menu_item_pairing', true);
    $ingredients = get_post_meta($post->ID, '_menu_item_ingredients', true);
    
    ?>
    <p>
        <label for="menu_item_price"><?php _e('Price:', 'parsa-bistro'); ?></label>
        <input type="text" id="menu_item_price" name="menu_item_price" value="<?php echo esc_attr($price); ?>" class="widefat">
    </p>
    <p>
        <label for="menu_item_pairing"><?php _e('Wine/Drink Pairing:', 'parsa-bistro'); ?></label>
        <input type="text" id="menu_item_pairing" name="menu_item_pairing" value="<?php echo esc_attr($pairing); ?>" class="widefat">
    </p>
    <p>
        <label for="menu_item_ingredients"><?php _e('Ingredients (one per line):', 'parsa-bistro'); ?></label>
        <textarea id="menu_item_ingredients" name="menu_item_ingredients" class="widefat" rows="5"><?php echo esc_textarea($ingredients); ?></textarea>
    </p>
    <?php
}

/**
 * Save Menu Item Meta Data
 */
function parsa_bistro_save_menu_item_meta($post_id) {
    if (!isset($_POST['parsa_bistro_menu_item_meta_nonce']) || !wp_verify_nonce($_POST['parsa_bistro_menu_item_meta_nonce'], 'parsa_bistro_menu_item_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['menu_item_price'])) {
        update_post_meta($post_id, '_menu_item_price', sanitize_text_field($_POST['menu_item_price']));
    }
    
    if (isset($_POST['menu_item_pairing'])) {
        update_post_meta($post_id, '_menu_item_pairing', sanitize_text_field($_POST['menu_item_pairing']));
    }
    
    if (isset($_POST['menu_item_ingredients'])) {
        update_post_meta($post_id, '_menu_item_ingredients', sanitize_textarea_field($_POST['menu_item_ingredients']));
    }
}
add_action('save_post_menu_item', 'parsa_bistro_save_menu_item_meta');

/**
 * Custom Excerpt Length
 */
function parsa_bistro_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'parsa_bistro_excerpt_length');

/**
 * Custom Excerpt More
 */
function parsa_bistro_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'parsa_bistro_excerpt_more');
