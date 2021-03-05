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
<div class="custom-slider-vertical-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container">
        <div class="row align-items-center">
            <div class="custom-slider-vertical-title col-12">
                <h2><?php echo $section_title; ?></h2>
            </div>
            <div class="custom-slider-vertical-content col-12">
                <?php $array_posts = new WP_Query($args); ?>
                <?php if ($array_posts->have_posts()) : ?>
                <div id="ticker" class="custom-slider-vertical-slider">
                    <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                    <div class="custom-slider-vertical-item">
                        <a href="<?php the_permalink(); ?>" title="<?php _e('Click here to see this post', 'opslens'); ?>" class="custom-slider-vertical-image">
                            <?php $post_img = get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid')); ?>
                            <?php if ($post_img != '') { ?>
                            <?php echo $post_img; ?>
                            <?php } else { ?>
                            <img src="http://placehold.it/65x50" alt="<?php echo get_the_title(); ?>" class="img-fluid" />
                            <?php } ?>
                        </a>
                        <div class="custom-slider-vertical-text">
                            <div class="custom-slider-vertical-item-category">
                                <?php $array_cat = get_the_category(); ?>
                                <?php foreach ($array_cat as $item_cat) { ?>
                                <a href="<?php echo get_term_link($item_cat); ?>" title="<?php _e('View more post of this category', 'opslens'); ?>">
                                    <?php echo $item_cat->name; ?>
                                </a>
                                <?php } ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" title="<?php _e('Click here to see this post', 'opslens'); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="custom-slider-vertical-author">
                                <?php echo get_the_author_link(); ?>
                            </div>
                            <span class="custom-slider-vertical-date"><?php echo get_the_date(); ?></span>
                        </div>

                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<?php
/* GET OB_CACHE CONTENT */
$content = ob_get_clean();
/* RETURN SHORTCODE */
return $content;
