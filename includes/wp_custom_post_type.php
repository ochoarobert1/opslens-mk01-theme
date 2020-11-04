<?php

// Register Custom Post Type
function opslens_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Videos', 'Post Type General Name', 'opslens' ),
        'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'opslens' ),
        'menu_name'             => __( 'Videos', 'opslens' ),
        'name_admin_bar'        => __( 'Videos', 'opslens' ),
        'archives'              => __( 'Video Archives', 'opslens' ),
        'attributes'            => __( 'Video Attributes', 'opslens' ),
        'parent_item_colon'     => __( 'Parent Video:', 'opslens' ),
        'all_items'             => __( 'All Videos', 'opslens' ),
        'add_new_item'          => __( 'Add New Video', 'opslens' ),
        'add_new'               => __( 'Add New', 'opslens' ),
        'new_item'              => __( 'New Video', 'opslens' ),
        'edit_item'             => __( 'Edit Video', 'opslens' ),
        'update_item'           => __( 'Update Video', 'opslens' ),
        'view_item'             => __( 'View Video', 'opslens' ),
        'view_items'            => __( 'View Videos', 'opslens' ),
        'search_items'          => __( 'Search Video', 'opslens' ),
        'not_found'             => __( 'Not found', 'opslens' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'opslens' ),
        'featured_image'        => __( 'Featured Image', 'opslens' ),
        'set_featured_image'    => __( 'Set featured image', 'opslens' ),
        'remove_featured_image' => __( 'Remove featured image', 'opslens' ),
        'use_featured_image'    => __( 'Use as featured image', 'opslens' ),
        'insert_into_item'      => __( 'Insert into Video', 'opslens' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Video', 'opslens' ),
        'items_list'            => __( 'Videos list', 'opslens' ),
        'items_list_navigation' => __( 'Videos list navigation', 'opslens' ),
        'filter_items_list'     => __( 'Filter Videos list', 'opslens' ),
    );
    $args = array(
        'label'                 => __( 'Videos', 'opslens' ),
        'description'           => __( 'Videos on Site', 'opslens' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-video',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'video', $args );


    $labels2 = array(
        'name'                  => _x( 'Items', 'Post Type General Name', 'opslens' ),
        'singular_name'         => _x( 'Item', 'Post Type Singular Name', 'opslens' ),
        'menu_name'             => __( 'Opslens TV', 'opslens' ),
        'name_admin_bar'        => __( 'Opslens TV', 'opslens' ),
        'archives'              => __( 'Opslens TV Archives', 'opslens' ),
        'attributes'            => __( 'Opslens TV Attributes', 'opslens' ),
        'parent_item_colon'     => __( 'Parent Opslens TV:', 'opslens' ),
        'all_items'             => __( 'All Opslens TV', 'opslens' ),
        'add_new_item'          => __( 'Add New Opslens TV', 'opslens' ),
        'add_new'               => __( 'Add New', 'opslens' ),
        'new_item'              => __( 'New Item', 'opslens' ),
        'edit_item'             => __( 'Edit Item', 'opslens' ),
        'update_item'           => __( 'Update Item', 'opslens' ),
        'view_item'             => __( 'View Item', 'opslens' ),
        'view_items'            => __( 'View Items', 'opslens' ),
        'search_items'          => __( 'Search Item', 'opslens' ),
        'not_found'             => __( 'Not found', 'opslens' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'opslens' ),
        'featured_image'        => __( 'Featured Image', 'opslens' ),
        'set_featured_image'    => __( 'Set featured image', 'opslens' ),
        'remove_featured_image' => __( 'Remove featured image', 'opslens' ),
        'use_featured_image'    => __( 'Use as featured image', 'opslens' ),
        'insert_into_item'      => __( 'Insert into Item', 'opslens' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Item', 'opslens' ),
        'items_list'            => __( 'Opslens TV list', 'opslens' ),
        'items_list_navigation' => __( 'Opslens TV list navigation', 'opslens' ),
        'filter_items_list'     => __( 'Filter Opslens TV list', 'opslens' ),
    );
    $args2 = array(
        'label'                 => __( 'Item', 'opslens' ),
        'description'           => __( 'Opslens TV', 'opslens' ),
        'labels'                => $labels2,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-video-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'opslenstv', $args2 );

}
add_action( 'init', 'opslens_custom_post_type', 0 );

// Register Custom Taxonomy
function opslens_sources() {

    $labels = array(
        'name'                       => _x( 'Sources', 'Taxonomy General Name', 'opslens' ),
        'singular_name'              => _x( 'Source', 'Taxonomy Singular Name', 'opslens' ),
        'menu_name'                  => __( 'Sources', 'opslens' ),
        'all_items'                  => __( 'All Sources', 'opslens' ),
        'parent_item'                => __( 'Parent Source', 'opslens' ),
        'parent_item_colon'          => __( 'Parent Source:', 'opslens' ),
        'new_item_name'              => __( 'New Source Name', 'opslens' ),
        'add_new_item'               => __( 'Add New Source', 'opslens' ),
        'edit_item'                  => __( 'Edit Source', 'opslens' ),
        'update_item'                => __( 'Update Source', 'opslens' ),
        'view_item'                  => __( 'View Source', 'opslens' ),
        'separate_items_with_commas' => __( 'Separate Sources with commas', 'opslens' ),
        'add_or_remove_items'        => __( 'Add or remove Sources', 'opslens' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'opslens' ),
        'popular_items'              => __( 'Popular Sources', 'opslens' ),
        'search_items'               => __( 'Search Sources', 'opslens' ),
        'not_found'                  => __( 'Not Found', 'opslens' ),
        'no_terms'                   => __( 'No Sources', 'opslens' ),
        'items_list'                 => __( 'Sources list', 'opslens' ),
        'items_list_navigation'      => __( 'Sources list navigation', 'opslens' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'sources', array( 'post' ), $args );

}
add_action( 'init', 'opslens_sources', 0 );


function manage_my_category_columns($columns)
{
    $columns['icon'] = 'Icon/Logo';
    return $columns;
}

add_filter('manage_edit-category_columns','manage_my_category_columns');
add_filter('manage_edit-sources_columns','manage_my_category_columns');

function manage_category_custom_fields($deprecated,$column_name,$term_id)
{
    if ($column_name == 'icon') {
        $icon_id = get_term_meta($term_id, 'ops_cat_icon_id', true);

        echo wp_get_attachment_image( $icon_id, 'custom_logo', false, array( "class" => "img-responsive" ) );
    }
}
add_filter ('manage_category_custom_column', 'manage_category_custom_fields', 10,3);
add_filter ('manage_sources_custom_column', 'manage_category_custom_fields', 10,3);
