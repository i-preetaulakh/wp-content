<?php
function stepstyle_enqueue_styles() {
    wp_enqueue_style('stepstyle-main', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'stepstyle_enqueue_styles');
// Custom Post Type: Fashion Tips
function stepstyle_register_fashion_tips() {

    $labels = array(
        'name'                  => _x('Fashion Tips', 'Post Type General Name', 'stepstyle'),
        'singular_name'         => _x('Fashion Tip', 'Post Type Singular Name', 'stepstyle'),
        'menu_name'             => __('Fashion Tips', 'stepstyle'),
        'name_admin_bar'        => __('Fashion Tip', 'stepstyle'),
        'archives'              => __('Fashion Tip Archives', 'stepstyle'),
        'attributes'            => __('Fashion Tip Attributes', 'stepstyle'),
        'parent_item_colon'     => __('Parent Fashion Tip:', 'stepstyle'),
        'all_items'             => __('All Fashion Tips', 'stepstyle'),
        'add_new_item'          => __('Add New Fashion Tip', 'stepstyle'),
        'add_new'               => __('Add New', 'stepstyle'),
        'new_item'              => __('New Fashion Tip', 'stepstyle'),
        'edit_item'             => __('Edit Fashion Tip', 'stepstyle'),
        'update_item'           => __('Update Fashion Tip', 'stepstyle'),
        'view_item'             => __('View Fashion Tip', 'stepstyle'),
        'view_items'            => __('View Fashion Tips', 'stepstyle'),
        'search_items'          => __('Search Fashion Tips', 'stepstyle'),
        'not_found'             => __('Not found', 'stepstyle'),
        'not_found_in_trash'    => __('Not found in Trash', 'stepstyle'),
        'featured_image'        => __('Featured Image', 'stepstyle'),
        'set_featured_image'    => __('Set featured image', 'stepstyle'),
        'remove_featured_image' => __('Remove featured image', 'stepstyle'),
        'use_featured_image'    => __('Use as featured image', 'stepstyle'),
        'insert_into_item'      => __('Insert into fashion tip', 'stepstyle'),
        'uploaded_to_this_item' => __('Uploaded to this fashion tip', 'stepstyle'),
        'items_list'            => __('Fashion Tips list', 'stepstyle'),
        'items_list_navigation' => __('Fashion Tips list navigation', 'stepstyle'),
        'filter_items_list'     => __('Filter fashion tips list', 'stepstyle'),
    );

    $args = array(
        'label'                 => __('Fashion Tip', 'stepstyle'),
        'description'           => __('Posts about fashion tips and trends.', 'stepstyle'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
        'taxonomies'            => array('category', 'post_tag'), 
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-appearance', 
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => array('slug' => 'fashion-tips'),
    );

    register_post_type('fashion_tips', $args);
}

add_action('init', 'stepstyle_register_fashion_tips');

?>
