<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-shows-slider-container col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="main-show-slider-title col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <h2>Featured <br />Live Shows</h2>
                    </div>
                    <div class="main-show-slider-content  col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="main-shows-slider-carousel owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'opslenstv', 'posts_per_page' => -1); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="main-bar-slider-item">
                                        <div class="main-bar-slider-item-wrapper">
                                            <div class="main-bar-slider-item-image">
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                                </a>
                                            </div>
                                            <div class="main-bar-slider-item-content">
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <h5><?php the_title(); ?></h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-show-container col-12">
            <div class="container">
                <div class="row">
                    <div class="video-container col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                        <?php $args = array('post_type' => 'opslenstv', 'posts_per_page' => 1); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                <div class="video-wrapper">
                                    <?php the_content(); ?>
                                </div>
                                <div class="video-title-wrapper">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="sidebar-container col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="block1-latest-news-wrapper">
                            <div class="title-container">
                                <h3><?php _e('Latest News', 'opslens'); ?></h3>
                            </div>
                            <?php if (!isset($array_posted)) { $array_posted = array(); } ?>
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="latest-news-media-item">
                                        <div class="latest-news-media-item-wrapper">
                                            <div class="latest-news-media-item-content">
                                                <?php $categories = get_the_category(); ?>
                                                <?php $i = 1; ?>

                                                <?php foreach ($categories as $item) { ?>
                                                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                    <?php if ($i == 1) {
                                                        break;
                                                    } ?>
                                                <?php $i++;
                                                } ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <h3><?php the_title(); ?></h3>
                                                </a>
                                                <div class="meta-container">
                                                    <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php array_push($array_posted, get_the_ID()); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <?php /* if (is_user_logged_in()) { ?>
                            <div data-room-id="0" data-height="300px" data-width="100%" class="iflychat-embed"></div>
                        <?php } else { ?>
                            <div class="opslens-login-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Opslens" class="img-fluid" />
                                <h3><?php _e('To participate in the public chatroom, you will need to log in', 'opslens'); ?></h3>
                                <a href="<?php echo home_url('/login'); ?>" class="btn btn-sm btn-danger"><?php _e('Log In', 'opslens'); ?></a>
                            </div>
                        <?php } */?>
                        <div id="rectangle_1"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Opslens - Home Main Banner -->
        <section class="container">
            <div class="row">
                <aside class="ads-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="http://bit.ly/3o75rfB" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/banner-leaderboard.png" alt="" class="img-fluid" />
                    </a>
                </aside>
                <aside class="ads-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="http://bit.ly/39aiHfn" target="_blank">
                        <img src="https://opslens.com/files/2020/10/Frog-Fuel-728x90-1.png" alt="" class="img-fluid" />
                    </a>
                </aside>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>