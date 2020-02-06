<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-bar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-bar-title col-2">
                        <h3><?php _e('Breaking News', 'opslens'); ?></h3>
                    </div>
                    <div class="main-bar-slider-container col-10">

                        <div class="main-bar-slider-carousel owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>

                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="main-bar-slider-item">
                                <div class="main-bar-slider-item-wrapper">
                                    <div class="main-bar-slider-item-image">
                                        <?php the_post_thumbnail('custom_slider_bar', array('class' => 'img-fluid')); ?>
                                    </div>
                                    <div class="main-bar-slider-item-content">
                                        <h3><?php the_title(); ?></h3>
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

        <section class="main-featured-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-featured-left col-3">
                        <div class="title-container">
                            <h3><?php _e('Video', 'opslens'); ?></h3>
                        </div>
                        <div id="ticker" class="vertical-media-slider-container">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>

                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="vertical-media-item">
                                <div class="vertical-media-item-wrapper">
                                    <div class="vertical-media-item-image">
                                        <?php the_post_thumbnail('custom_vertical_media', array('class' => 'img-fluid')); ?>
                                    </div>
                                    <div class="vertical-media-item-content">
                                        <?php $categories = get_the_category(); ?>
                                        <?php foreach ($categories as $item) { ?>
                                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                        <?php } ?>
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php echo get_the_author(); ?></h5>
                                        <span><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="main-featured-center col-6">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <div class="featured-news-item">
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="featured-news-item-wrapper">
                                <div class="featured-news-item-image">
                                    <?php the_post_thumbnail('custom_main_news', array('class' => 'img-fluid')); ?>
                                    <div class="featured-news-item-content">
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php echo get_the_author(); ?></h5>
                                        <span><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="main-featured-right col-3">
                        <div class="title-container">
                            <h3><?php _e('Shows', 'opslens'); ?></h3>
                        </div>
                        <div id="ticker2" class="vertical-video-slider-container">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 4); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>

                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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
        <section class="block1-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="block1-main-news col-6">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <div class="block1-main-news-item">
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <div class="block1-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
                            <div class="block1-main-news-item-image">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <?php $categories = get_the_category(); ?>
                                <?php foreach ($categories as $item) { ?>
                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                <?php } ?>
                            </div>
                            <div class="block1-main-news-item-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 2); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                        <div class="block1-big-media-item">
                            <div class="block1-big-media-item-wrapper">
                                <div class="block1-big-media-item-image">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <?php $categories = get_the_category(); ?>
                                    <?php foreach ($categories as $item) { ?>
                                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="block1-big-media-item-content">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="meta-container">
                                        <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="block1-sidebar-news col-6">
                        <div class="row">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 2); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>

                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="block1-sidebar-news-item col-6">
                                <div class="block1-sidebar-news-item-image">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <?php $categories = get_the_category(); ?>
                                    <?php foreach ($categories as $item) { ?>
                                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="block1-sidebar-news-item-content">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-container">
                                        <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                            <div class="block1-latest-news-container col-12">
                                <div class="block1-latest-news-wrapper">
                                    <div class="title-container">
                                        <h3><?php _e('Latest News', 'opslens'); ?></h3>
                                    </div>
                                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 6); ?>
                                    <?php $array_posts = new WP_Query($args); ?>
                                    <?php if ($array_posts->have_posts()) : ?>

                                    <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="latest-news-media-item">
                                        <div class="latest-news-media-item-wrapper">
                                            <div class="latest-news-media-item-content">
                                                <?php $categories = get_the_category(); ?>
                                                <?php foreach ($categories as $item) { ?>
                                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                <?php } ?>
                                                <h3><?php the_title(); ?></h3>
                                                <div class="meta-container">
                                                    <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                                </div>
                                            </div>
                                            <div class="latest-news-media-item-image">
                                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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
                </div>
            </div>
        </section>

        <section class="banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="banner-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="banner-content-wrapper">
                            <h2><?php _e('Experience Driven Comentary')?></h2>
                            <div class="w-100"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-only.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block2-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="block2-main-news col-6">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <div class="block2-main-news-item">
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <div class="block2-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
                            <div class="block2-main-news-item-image">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <?php $categories = get_the_category(); ?>
                                <?php foreach ($categories as $item) { ?>
                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                <?php } ?>
                            </div>
                            <div class="block2-main-news-item-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>


                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 3); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>

                        <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                        <div class="block2-big-media-item">
                            <div class="block2-big-media-item-wrapper">
                                <div class="block2-big-media-item-image">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <?php $categories = get_the_category(); ?>
                                    <?php foreach ($categories as $item) { ?>
                                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="block2-big-media-item-content">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="meta-container">
                                        <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>
                        <?php wp_reset_query(); ?>


                    </div>
                    <div class="block2-sidebar-news col-6">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <div class="block2-main-news-item">
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <div class="block2-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
                            <div class="block2-main-news-item-image">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <?php $categories = get_the_category(); ?>
                                <?php foreach ($categories as $item) { ?>
                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                <?php } ?>
                            </div>
                            <div class="block2-main-news-item-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                        <div class="row">
                            <div class="col-6">
                                <?php $args = array('post_type' => 'post', 'posts_per_page' => 5); ?>
                                <?php $array_posts = new WP_Query($args); ?>
                                <?php if ($array_posts->have_posts()) : ?>

                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                <div class="block2-sidebar-news-item col-12">
                                    <div class="block2-sidebar-news-item-image">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                        <?php foreach ($categories as $item) { ?>
                                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                        <?php } ?>
                                    </div>

                                    <div class="block2-sidebar-news-item-content">
                                        <h2><?php the_title(); ?></h2>
                                        <div class="meta-container">
                                            <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                            <div class="block2-latest-news-container col-6">
                                <div class="block2-latest-news-wrapper">

                                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 6); ?>
                                    <?php $array_posts = new WP_Query($args); ?>
                                    <?php if ($array_posts->have_posts()) : ?>

                                    <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="latest-news-media-item">
                                        <div class="latest-news-media-item-wrapper">
                                            <div class="latest-news-media-item-image">
                                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                            </div>
                                            <div class="latest-news-media-item-content">
                                                <?php foreach ($categories as $item) { ?>
                                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                <?php } ?>
                                                <h2><?php the_title(); ?></h2>
                                                <div class="meta-container">
                                                    <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                                                </div>
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
                </div>
            </div>
        </section>

        <section class="footer-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="footer-banner-content col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/download.png" alt="Logo" class="img-fluid" />
                        <div class="buttons-container">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/appstore.png" alt="Logo" class="img-fluid" />
                            </a>
                            <a>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" alt="Logo" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="footer-banner-image col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone-sprite.png" alt="Download" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
