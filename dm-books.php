<?php

/**
 * Plugin Name: DM Books
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 * Version: 1.09.5
 * GitHub Plugin URI: https://github.com/DesignMissoula/DM-books
 * GitHub Branch: german-cookbooks
 */
 
     add_action( 'init', 'register_cpt_book' );
    function register_cpt_book() {
    $labels = array(
    'name' => _x( 'German CookBooks', 'book' ),
    'singular_name' => _x( 'book', 'book' ),
    'add_new' => _x( 'Add New', 'book' ),
    'add_new_item' => _x( 'Add New book', 'book' ),
    'edit_item' => _x( 'Edit cookbook', 'book' ),
    'new_item' => _x( 'New cookbook', 'book' ),
    'view_item' => _x( 'View cookbook', 'book' ),
    'search_items' => _x( 'Search CookBooks', 'book' ),
    'not_found' => _x( 'No cookbooks found', 'book' ),
    'not_found_in_trash' => _x( 'No cookbooks found in Trash', 'book' ),
    'parent_item_colon' => _x( 'Parent cookbook:', 'book' ),
    'menu_name' => _x( 'Books', 'book' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'menu_icon' => 'dashicons-book',
    'capability_type' => 'post'
    );
    register_post_type( 'book', $args );
    } 