<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

/* --------------------------------------------------------------
/* DEPENDENCIES AND MAPPING
-------------------------------------------------------------- */
function vc_opslens_map_dependencies() {
    if ( ! defined( 'WPB_VC_VERSION' ) ) {
        echo '
        <div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/js_composer" target="_blank">WPBakery Page Builder</a></strong> plugin to be installed and activated on your site.', 'vc_extend'),  'OpsLens [Mk.01]').'</p>
        </div>';
    }
}

add_action( 'admin_notices', 'vc_opslens_map_dependencies' );

/* MAPPING TEMPLATES */
function vc_opslens_setup() {
    $dir = get_template_directory() . '/vc_templates';
    vc_set_shortcodes_templates_dir( $dir );
}

add_action( 'vc_before_init', 'vc_opslens_setup' );

/* --------------------------------------------------------------
/* CALL FILE DEPENDENCIES (CSS / JS / AJAX HANDLER)
-------------------------------------------------------------- */
function vc_pahoy_frontend_scripts_caller() {
    $version_remove = NULL;
    /*- MAIN STYLE -*/
    wp_register_style('vc-opslens-style', get_template_directory_uri() . '/css/vc-opslens-style.css', false, $version_remove, 'all');
    wp_enqueue_style('vc-opslens-style');

    wp_enqueue_script( 'vc-opslens-frontend-script', get_template_directory_uri() . '/js/vc-opslens-frontend-scripts.js', array( 'jquery'), false, false );

    wp_localize_script( 'vc-opslens-frontend-script', 'opslens_vc_admin_url', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
}

add_action('wp_enqueue_scripts', 'vc_pahoy_frontend_scripts_caller', 99);

/* --------------------------------------------------------------
/* CUSTOM WPBAKERY FUNCTIONS
-------------------------------------------------------------- */
require_once('vc-elements/custom-slider-bar-map.php');
require_once('vc-elements/custom-slider-vertical-map.php');
