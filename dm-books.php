<?php

/**
 * Plugin Name: DM Books
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 * Version: 1.09.2
 * GitHub Plugin URI: https://github.com/DesignMissoula/DM-books
 * GitHub Branch: master
 */
 
     add_action( 'init', 'register_cpt_book' );
    function register_cpt_book() {
    $labels = array(
    'name' => _x( 'Books', 'book' ),
    'singular_name' => _x( 'book', 'book' ),
    'add_new' => _x( 'Add New', 'book' ),
    'add_new_item' => _x( 'Add New book', 'book' ),
    'edit_item' => _x( 'Edit book', 'book' ),
    'new_item' => _x( 'New book', 'book' ),
    'view_item' => _x( 'View book', 'book' ),
    'search_items' => _x( 'Search Books', 'book' ),
    'not_found' => _x( 'No books found', 'book' ),
    'not_found_in_trash' => _x( 'No books found in Trash', 'book' ),
    'parent_item_colon' => _x( 'Parent book:', 'book' ),
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