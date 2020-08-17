<?php
/**
 * Plugin Name: Meal Companion Plugin
 * Plugin URI:
 * Description: Meal Companion Plugin for Meal Theme
 * Version: 1.0
 * Author: FM
 * Author URI:
 * license GPLv2 or later
 * Text Domain: meal-companion
 * Domain Path: /languages/
 */

function mealc_load_text_domain() {
    load_plugin_textdomain( 'meal-companion', false, dirname( __FILE__ ) . '/languages' );
}
add_action( 'plugin_loaded', 'mealc_load_text_domain' );

function mealc_register_my_cpts_section() {

    /**
     * Post Type: Sections.
     */

    $labels = [
        "name"                     => __( "Sections", "meal" ),
        "singular_name"            => __( "Section", "meal" ),
        "menu_name"                => __( "Sections", "meal" ),
        "all_items"                => __( "All Sections", "meal" ),
        "add_new"                  => __( "Add new", "meal" ),
        "add_new_item"             => __( "Add new Section", "meal" ),
        "edit_item"                => __( "Edit Section", "meal" ),
        "new_item"                 => __( "New Section", "meal" ),
        "view_item"                => __( "View Section", "meal" ),
        "view_items"               => __( "View Sections", "meal" ),
        "search_items"             => __( "Search Sections", "meal" ),
        "not_found"                => __( "No Sections found", "meal" ),
        "not_found_in_trash"       => __( "No Sections found in trash", "meal" ),
        "parent"                   => __( "Parent Section:", "meal" ),
        "featured_image"           => __( "Featured image for this Section", "meal" ),
        "set_featured_image"       => __( "Set featured image for this Section", "meal" ),
        "remove_featured_image"    => __( "Remove featured image for this Section", "meal" ),
        "use_featured_image"       => __( "Use as featured image for this Section", "meal" ),
        "archives"                 => __( "Section archives", "meal" ),
        "insert_into_item"         => __( "Insert into Section", "meal" ),
        "uploaded_to_this_item"    => __( "Upload to this Section", "meal" ),
        "filter_items_list"        => __( "Filter Sections list", "meal" ),
        "items_list_navigation"    => __( "Sections list navigation", "meal" ),
        "items_list"               => __( "Sections list", "meal" ),
        "attributes"               => __( "Sections attributes", "meal" ),
        "name_admin_bar"           => __( "Section", "meal" ),
        "item_published"           => __( "Section published", "meal" ),
        "item_published_privately" => __( "Section published privately.", "meal" ),
        "item_reverted_to_draft"   => __( "Section reverted to draft.", "meal" ),
        "item_scheduled"           => __( "Section scheduled", "meal" ),
        "item_updated"             => __( "Section updated.", "meal" ),
        "parent_item_colon"        => __( "Parent Section:", "meal" )
    ];

    $args = [
        "label"                 => __( "Sections", "meal" ),
        "labels"                => $labels,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => false,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => false,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "rewrite"               => ["slug" => "section", "with_front" => true],
        "query_var"             => true,
        "menu_position"         => 5,
        "menu_icon"             => "dashicons-admin-page",
        "supports"              => ["title", "editor", "thumbnail"]
    ];

    register_post_type( "section", $args );

    /**
     * Post Type: Recipes.
     */

    $labels = [
        "name"                     => __( "Recipes", "meal" ),
        "singular_name"            => __( "Recipe", "meal" ),
        "menu_name"                => __( "Recipes", "meal" ),
        "all_items"                => __( "All Recipes", "meal" ),
        "add_new"                  => __( "Add new", "meal" ),
        "add_new_item"             => __( "Add new Recipe", "meal" ),
        "edit_item"                => __( "Edit Recipe", "meal" ),
        "new_item"                 => __( "New Recipe", "meal" ),
        "view_item"                => __( "View Recipe", "meal" ),
        "view_items"               => __( "View Recipes", "meal" ),
        "search_items"             => __( "Search Recipes", "meal" ),
        "not_found"                => __( "No Recipes found", "meal" ),
        "not_found_in_trash"       => __( "No Recipes found in trash", "meal" ),
        "parent"                   => __( "Parent Recipe:", "meal" ),
        "featured_image"           => __( "Featured image for this Recipe", "meal" ),
        "set_featured_image"       => __( "Set featured image for this Recipe", "meal" ),
        "remove_featured_image"    => __( "Remove featured image for this Recipe", "meal" ),
        "use_featured_image"       => __( "Use as featured image for this Recipe", "meal" ),
        "archives"                 => __( "Recipe archives", "meal" ),
        "insert_into_item"         => __( "Insert into Recipe", "meal" ),
        "uploaded_to_this_item"    => __( "Upload to this Recipe", "meal" ),
        "filter_items_list"        => __( "Filter Recipes list", "meal" ),
        "items_list_navigation"    => __( "Recipes list navigation", "meal" ),
        "items_list"               => __( "Recipes list", "meal" ),
        "attributes"               => __( "Recipes attributes", "meal" ),
        "name_admin_bar"           => __( "Recipe", "meal" ),
        "item_published"           => __( "Recipe published", "meal" ),
        "item_published_privately" => __( "Recipe published privately.", "meal" ),
        "item_reverted_to_draft"   => __( "Recipe reverted to draft.", "meal" ),
        "item_scheduled"           => __( "Recipe scheduled", "meal" ),
        "item_updated"             => __( "Recipe updated.", "meal" ),
        "parent_item_colon"        => __( "Parent Recipe:", "meal" )
    ];

    $args = [
        "label"                 => __( "Recipes", "meal" ),
        "labels"                => $labels,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => false,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "rewrite"               => ["slug" => "recipe", "with_front" => false],
        "query_var"             => true,
        "menu_position"         => 5,
        "menu_icon"             => "dashicons-admin-page",
        "supports"              => ["title", "editor", "thumbnail","page-attributes"],
        "taxonomies"              => array( 'category' )
    ];

    register_post_type( "recipe", $args );


    
    /**
     * Post Type: Reservations.
     */

    $labels = [
        "name"                     => __( "Reservations", "meal" ),
        "singular_name"            => __( "Reservation", "meal" ),
    ];

    $args = [
        "label"                 => __( "Reservations", "meal" ),
        "labels"                => $labels,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => false,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "rewrite"               => ["slug" => "reservation", "with_front" => false],
        "query_var"             => true,
        "menu_position"         => 5,
        "menu_icon"             => "dashicons-admin-page",
        "supports"              => ["title"],
    ];

    register_post_type( "reservation", $args );
}

add_action( 'init', 'mealc_register_my_cpts_section' );

