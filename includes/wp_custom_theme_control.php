<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - opslens
-------------------------------------------------------------- */

/* CUSTOM MENU PAGE AND FUNCTIONS IN ADMIN */
function register_opslens_settings() {
    //register our settings
    register_setting( 'opslens-settings-group', 'opslens_dir' );
    register_setting( 'opslens-settings-group', 'opslens_email' );
    register_setting( 'opslens-settings-group', 'opslens_telf' );
    register_setting( 'opslens-settings-group', 'opslens_mob' );
    register_setting( 'opslens-settings-group', 'opslens_fb' );
    register_setting( 'opslens-settings-group', 'opslens_tw' );
    register_setting( 'opslens-settings-group', 'opslens_ig' );
    register_setting( 'opslens-settings-group', 'opslens_yt' );
}

function my_admin_menu() {
    add_menu_page( 'Opciones del Sitio', 'Opciones del Sitio', 'manage_options', 'opslens_custom_options', 'my_custom_menu_page', get_template_directory_uri() . '/images/plugin-icon.png', 120  );
    /* call register settings function */
    add_action( 'admin_init', 'register_opslens_settings' );
}

add_action( 'admin_menu', 'my_admin_menu' );



/* CUSTOM CSS FOR THIS SECTION */
function load_custom_wp_admin_style($hook) {
    if( $hook != 'toplevel_page_opslens_custom_options' ) {
        return;
    }
    /* ENQUEUE THE CSS */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
    wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/* SEPARATOR FOR STYLING THE CUSTOM PAGE */
function add_admin_menu_separator( $position ) {

    global $menu;

    $menu[ $position ] = array(
        0    =>    '',
        1    =>    'read',
        2    =>    'separator' . $position,
        3    =>    '',
        4    =>    'wp-menu-separator'
    );

}

function set_admin_menu_separator() {  do_action( 'admin_init', 119 );  }

add_action( 'admin_init', 'add_admin_menu_separator' );
add_action( 'admin_menu', 'set_admin_menu_separator' );

/* CUSTOM MENU PAGE CONTENT */
function my_custom_menu_page() { ?>

<div class="opslens_custom_options-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo-header" />
    <h1><?php echo get_admin_page_title(); ?></h1>
    <div class="custom-clearfix"></div>
</div>
<div class="opslens_custom_options-content">
    <form method="post" action="options.php">
        <?php settings_fields( 'opslens-settings-group' ); ?>
        <?php do_settings_sections( 'opslens-settings-group' ); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row"><?php _e('Dirección', 'opslens'); ?></th>
                <td><textarea name="opslens_dir" cols="95" rows="5"><?php echo esc_attr( get_option('opslens_dir') ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Correo Electrónico', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_email" value="<?php echo esc_attr( get_option('opslens_email') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Teléfono', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_telf" value="<?php echo esc_attr( get_option('opslens_telf') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Móvil', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_mob" value="<?php echo esc_attr( get_option('opslens_mob') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e('Redes Sociales', 'opslens'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Facebook', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_fb" value="<?php echo esc_attr( get_option('opslens_fb') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Twitter', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_tw" value="<?php echo esc_attr( get_option('opslens_tw') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Instagram', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_ig" value="<?php echo esc_attr( get_option('opslens_ig') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Canal de Youtube', 'opslens'); ?></th>
                <td><input type="text" size="90" name="opslens_yt" value="<?php echo esc_attr( get_option('opslens_yt') ); ?>" /></td>
            </tr>

        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }
