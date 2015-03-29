<?php

// Define the content width
if (!isset($content_width)) {
    $content_width = 600;
}

// Add support for WordPress 3.0's custom menus
add_action('init', 'register_my_menu');

// Register area for custom menu
function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
    register_nav_menu('secondary_menu', __('Secondary Menu'));
}

// Display Admin->links in version 3.5 or later
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// Register our sidebars and widgetized area
function arphabet_widgets_init() {
    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ) );
}
add_action ( 'widgets_init', 'arphabet_widgets_init' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

// Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar();
}

// Add custom background support
add_custom_background();

// Enable post and comments RSS feed links to head
add_theme_support('automatic-feed-links');

// Control excerpt length using filers
function custom_excerpt_length($length) {
    return 200;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Exclude some categories
function exclude_category($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $ids = '';
        $category_names = array('portfolio');
        foreach ($category_names as $key => $val) {
            $ids .= '-';
            $ids .= get_cat_ID($val);
            $ids .= ',';
        }
        $query->set('cat', $ids);
    }
}
add_action('pre_get_posts', 'exclude_category');

// Hide the admin bar
show_admin_bar(false);
?>