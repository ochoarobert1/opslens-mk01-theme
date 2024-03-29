<?php

add_action('cmb2_admin_init', 'opslens_register_custom_metabox');
function opslens_register_custom_metabox()
{
    $prefix = 'ops_';

    $cmb_category_metabox = new_cmb2_box(array(
        'id'            => $prefix . 'category_metabox',
        'title'         => esc_html__('Category Metabox', 'opslens'),
        'object_types'     => array( 'term' ),
        'taxonomies'       => array( 'category', 'post_tag', 'sources' )
    ));

    $cmb_category_metabox->add_field(array(
        'id'   => $prefix . 'cat_icon',
        'name' => esc_html__('Icon/Logo', 'opslens'),
        'desc' => esc_html__('Select the logo for this category', 'opslens'),
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__('Agregar Icon/Logo', 'opslens'),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'medium'
    ));


    $cmb_opslenstv_metabox = new_cmb2_box(array(
        'id'            => $prefix . 'opslenstv_metabox',
        'title'         => esc_html__('Chat Metabox', 'opslens'),
        'object_types'     => array( 'opslenstv' )
    ));

    $cmb_opslenstv_metabox->add_field(array(
        'id'   => $prefix . 'chat_code',
        'name' => esc_html__('Chat Code', 'opslens'),
        'desc' => esc_html__('Enter the chat code for this program', 'opslens'),
        'type' => 'textarea_code'
    ));

    $cmb_product_metabox = new_cmb2_box(array(
        'id'            => $prefix . 'product_metabox',
        'title'         => esc_html__('Product Metabox', 'opslens'),
        'object_types'     => array( 'product' ),
    ));

    $cmb_product_metabox->add_field(array(
        'id'   => $prefix . 'product_custom_price',
        'name' => esc_html__('Custom Price', 'opslens'),
        'desc' => esc_html__('Enter the custom price for this product', 'opslens'),
        'type' => 'text'
    ));
}
