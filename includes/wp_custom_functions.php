<?php
/* IMAGES RESPONSIVE ON ATTACHMENT IMAGES */
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

/* ADD CONTENT WIDTH FUNCTION */

function opslens_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'opslens_content_width', 1170 );
}
add_action( 'after_setup_theme', 'opslens_content_width', 0 );

/* ADD CONTENT WIDTH FUNCTION */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'topnav') {
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function opslens_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'opslens_pingback_header' );


// Register and load the widget
function wpb_load_widget() {
    register_widget( 'opslens_latest_posts' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget 
class opslens_latest_posts extends WP_Widget {

    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'opslens_latest_posts', 

            // Widget name will appear in UI
            __('Latest Posts', 'opslens'), 

            // Widget description
            array( 'description' => __( 'Simply shows the latest news on site', 'opslens' ), ) 
        );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $quantity = $instance['quantity'];

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        ob_start();
?>
<div class="widget-latest-news-container">
    <div class="row align-items-center">
        <?php $args = array('post_type' => 'post', 'posts_per_page' => $quantity, 'order' => 'DESC', 'orderby' => 'date'); ?>

        <?php $array_latest = new WP_Query($args); ?>
        <?php if ($array_latest->have_posts()) : ?>

        <?php while($array_latest->have_posts()) : $array_latest->the_post(); ?>
        <div class="widget-latest-news-image col-4">
            <a href="<?php the_permalink(); ?>" title="<?php _e('Click here to view more', 'opslens'); ?>">
                <?php the_post_thumbnail(array(100, 100), array('class' => 'img-fluid')); ?>
            </a>
        </div>
        <div class="widget-latest-news-info col-8">
            <a href="<?php the_permalink(); ?>" title="<?php _e('Click here to view more', 'opslens'); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<?php 
        /* GET OB_CACHE CONTENT */
        $content = ob_get_clean();
        echo $content;

        echo $args['after_widget'];
    }

    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'opslens' );
        }

        if ( isset( $instance[ 'quantity' ] ) ) {
            $quantity = $instance[ 'quantity' ];
        }
        else {
            $quantity = 3;
        }
        // Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'quantity' ); ?>"><?php _e( 'Quantity:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'quantity' ); ?>" name="<?php echo $this->get_field_name( 'quantity' ); ?>" type="number" value="<?php echo esc_attr( $quantity ); ?>" />
</p>
<?php 
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? strip_tags( $new_instance['quantity'] ) : 3;
        return $instance;
    }
} // Class wpb_widget ends here
