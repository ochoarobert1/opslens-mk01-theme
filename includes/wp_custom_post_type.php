<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'opslens' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'opslens' ),
        'menu_name'             => __( 'Portafolio', 'opslens' ),
        'name_admin_bar'        => __( 'Portafolio', 'opslens' ),
        'archives'              => __( 'Archivo de Portafolio', 'opslens' ),
        'attributes'            => __( 'Atributos de Portafolio', 'opslens' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'opslens' ),
        'all_items'             => __( 'Todos los Items', 'opslens' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'opslens' ),
        'add_new'               => __( 'Agregar Nuevo', 'opslens' ),
        'new_item'              => __( 'Nuevo Item', 'opslens' ),
        'edit_item'             => __( 'Editar Item', 'opslens' ),
        'update_item'           => __( 'Actualizar Item', 'opslens' ),
        'view_item'             => __( 'Ver Item', 'opslens' ),
        'view_items'            => __( 'Ver Portafolio', 'opslens' ),
        'search_items'          => __( 'Buscar en Portafolio', 'opslens' ),
        'not_found'             => __( 'No hay Resultados', 'opslens' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'opslens' ),
        'featured_image'        => __( 'Imagen Destacada', 'opslens' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'opslens' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'opslens' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'opslens' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'opslens' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'opslens' ),
        'items_list'            => __( 'Listado del Portafolio', 'opslens' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'opslens' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'opslens' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'opslens' ),
        'description'           => __( 'Portafolio de Desarrollos', 'opslens' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
