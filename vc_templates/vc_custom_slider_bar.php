<?php
/* PREVENTS DIRECT ACCESS */
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Silence is Golden' );
}

/* GET ATTS FOR SHORTCODE  */
$section_title  = $content;
$category_selected = explode(',', $atts['category_selection']);
$args = array('post_type' => 'post', 'posts_per_page' => 8, 'order' => 'DESC', 'orderby' => 'date', 'category__in' => $category_selected);
ob_start();
/* SHORTCODE STRUCTURE  */
?>
<div class="custom-slider-bar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container">
        <div class="row align-items-center">
            <div class="custom-slider-bar-title col-2">
                <h2><?php echo $section_title; ?></h2>
            </div>
            <div class="custom-slider-bar-content col-9">
                <?php $array_posts = new WP_Query($args); ?>
                <?php if ($array_posts->have_posts()) : ?>
                <div class="custom-slider-bar-owlcarousel owl-carousel owl-theme">
                    <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                    <div class="custom-slider-bar-item">
                        <div class="custom-slider-bar-item-wrapper">
                            <a href="<?php the_permalink(); ?>" title="<?php _e('Click here to see this post', 'opslens'); ?>">
                                <?php $post_img = get_the_post_thumbnail(get_the_ID(), 'custom_slider_bar', array('class' => 'img-fluid')); ?>
                                <?php if ($post_img != '') { ?>
                                <?php echo $post_img; ?>
                                <?php } else { ?>
                                <img src="http://placehold.it/65x50" alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                                <?php } ?>
                            </a>
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="custom-slider-bar-controls col-1">
                <a href="" class="custom-slider-bar-left"><i class="fa fa-chevron-left"></i></a>
                <a href="" class="custom-slider-bar-right"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
<?php
/* GET OB_CACHE CONTENT */
$content = ob_get_clean();
/* RETURN SHORTCODE */
return $content;

 
