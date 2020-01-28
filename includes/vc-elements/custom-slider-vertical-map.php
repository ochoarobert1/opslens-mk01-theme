<?php
/* PREVENTS DIRECT ACCESS */
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Silence is Golden' );
}

function custom_slider_vertical_map() {
    /* CALL ALL CATEGORIES */
    $categories_array = array();
    $categories = get_categories(array('taxonomy' => 'category', 'hide_empty' => false));
    foreach( $categories as $category ) {
        $categories_array[$category->name] = $category->term_id;
    }

    /* PREPARE SETTINGS FOR VC_MAP */
    $settings = array(
        'name'                    => __( 'Custom Slider Vertical', 'opslens' ),
        'base'                    => 'vc_custom_slider_vertical',
        'category'                => __( 'Elements [OpsLens]', 'opslens' ),
        'description'             => __( 'Add a custom Vertical Slider for breaking news', 'opslens' ),
        'show_settings_on_create' => true,
        'weight'                  => -5,
        'params'                  => array(
            array(
                'type' => 'textfield',
                'class' => '',
                'admin_label' => true,
                'heading' => __('Bar Title', 'opslens'),
                'param_name' => 'content',
                'value' => '',
                'description' => __('Add the bar title here', 'opslens')
            ),
            array(
                'type' => 'checkbox',
                'heading' => __('Category / Categories', 'opslens'),
                'description' => __('Select Category which this section will be configured', 'opslens'),
                'param_name' => 'category_selection',
                'admin_label' => true,
                'value' => $categories_array,
                'std' => ' ',
            )
        )
    );

    /* ADD NEW ELEMENT TO VC_MAP */
    vc_map( $settings );

}

add_action('vc_after_init', 'custom_slider_vertical_map');
