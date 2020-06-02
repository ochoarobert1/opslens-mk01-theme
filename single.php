<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0">
    <div class="row no-gutters">
        <section class="main-bar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-bar-title col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3">
                        <h3><?php _e('Breaking News', 'opslens'); ?></h3>
                    </div>
                    <div class="main-bar-slider-container col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                        <div class="main-bar-slider-carousel owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="main-bar-slider-item">
                                <div class="main-bar-slider-item-wrapper">
                                    <div class="main-bar-slider-item-image">
                                        <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                            <?php the_post_thumbnail('custom_slider_bar', array('class' => 'img-fluid')); ?>
                                        </a>
                                    </div>
                                    <div class="main-bar-slider-item-content">
                                        <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </section>
        <div class="single-main-container col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div class="container p-0">
                <div class="row">
                    <?php /* GET THE POST FORMAT */ ?>
                    <?php get_template_part( 'post-formats/format', get_post_format() ); ?>
                    <aside class="main-sidebar col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none" role="complementary">
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
