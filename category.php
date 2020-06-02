<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
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
        <div class="category-title-container col-12">
            <h1><?php single_cat_title(); ?></h1>
        </div>
        <div class="category-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container p-0">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <section class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="row">
                            <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" class="archive-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                                <div class="container p-0">
                                    <div class="row align-items-center">
                                        <picture class="col-6">
                                            <?php if ( has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_post_thumbnail('blog_img', $defaultatts); ?>
                                            </a>
                                            <?php else : ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <img itemprop="image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.jpg" alt="No img" class="img-fluid" />
                                            </a>
                                            <?php endif; ?>
                                        </picture>
                                        <div class="col-6">
                                            <header>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                                                </a>
                                                <div class="meta-container">
                                                    <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                                </div>
                                            </header>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile; ?>
                        </div>
                        <div class="pagination col-12">
                            <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                        </div>
                    </section>
                    <aside class="main-sidebar col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php get_sidebar(); ?>
                    </aside>
                    <?php else: ?>
                    <section>
                        <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'opslens'); ?></h2>
                        <h3><?php _e('Dirígete nuevamente al', 'opslens'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'opslens'); ?>"><?php _e('inicio', 'opslens'); ?></a>.</h3>
                    </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <section class="footer-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="footer-banner-content col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/download.png" alt="Logo" class="img-fluid" />
                        <div class="buttons-container">
                          <a href="https://apps.apple.com/us/app/opslens-network/id1498033459" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/appstore.png" alt="Logo" class="img-fluid" />
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.streann.opslens" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" alt="Logo" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="footer-banner-image col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone-sprite.png" alt="Download" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
