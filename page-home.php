<?php get_header(); ?>
<?php the_post(); ?>


<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php /*
        <section class="main-bar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-bar-title col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 d-xl-block d-lg-block d-md-block d-sm-block d-none">
                        <h3><?php _e('Breaking News', 'opslens'); ?></h3>
                    </div>
                    <div class="main-bar-slider-container col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                        <div class="main-bar-slider-carousel owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date', 'category_name' => 'featured,opslens,recent'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="main-bar-slider-item">
                                        <div class="main-bar-slider-item-wrapper">
                                            <div class="main-bar-slider-item-image">
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                                    <?php if (!empty($thumb)) { ?>
                                                        <?php the_post_thumbnail('custom_slider_bar', array('class' => 'img-fluid')); ?>
                                                    <?php } else { ?>
                                                        <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                        <?php echo $image; ?>
                                                    <?php } ?>
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


        <section class="banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="shop-banner-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="<?php echo home_url('/store'); ?>" title="go to opslens store">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-banner.jpg" alt="" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
*/ ?>
        <section class="main-video-worldview-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="main-video-worldview-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <iframe class="inner" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="global network background animation" width="100%" height="100%" src="https://www.youtube.com/embed/itQQCkA87Hs?playlist=itQQCkA87Hs&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;mute=1&amp;wmode=transparent&amp;origin=https%3A%2F%2Fopslens.com&amp;widgetid=1" id="widget2" style="max-width: 1000%; margin-left: 0px; margin-top: -263px; width: 1903px; height: 1070.44px;"></iframe>
                <div class="wrapper-content text-center">
                    <div class="image-banner-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-wv.png" alt="Worldview" class="img-fluid" />
                    </div>
                    <div class="text-banner-content text-center" style="color: #fff; text-shadow: 0 0 6px black;">
                        <h2>OpsLens World View</h2>
                        <h3 style="color: #fff; text-shadow: 0 0 6px black;">The new way to VIEW the world<br/>
                            Find all types of articles and obtain a clear vision of the entire world<br/>
                            Searching any kind of information and finding the truth behind the headlines</h3>
                        <a href="https://opslens.com/opslens-worldview/" class="btn btn-md btn-danger btn-worldview mt-3">Learn More</a>
                    </div>
                    <div class="image-banner-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-wv.png" alt="Worldview" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        

        <section class="main-featured-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-featured-left col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <div class="title-container">
                            <h3><?php _e('RECENT', 'opslens'); ?></h3>
                        </div>
                        <div id="ticker" class="vertical-media-slider-container">
                            <?php $array_posted = array(); ?>
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date',  'category_name' => 'featured,opslens'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="vertical-media-item">
                                        <div class="vertical-media-item-wrapper">
                                            <div class="vertical-media-item-image">
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                                    <?php if (!empty($thumb)) { ?>
                                                        <?php the_post_thumbnail('custom_vertical_media', array('class' => 'img-fluid')); ?>
                                                    <?php } else { ?>
                                                        <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                        <?php echo $image; ?>
                                                    <?php } ?>
                                                </a>
                                            </div>
                                            <div class="vertical-media-item-content">
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
                                                <h5><?php echo get_the_author(); ?></h5>
                                                <span><?php echo get_the_date(); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php array_push($array_posted, get_the_ID()); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="main-featured-center col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php $array_posted = array(); ?>
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date', 'category_name' => 'featured,opslens'); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                            <div class="featured-news-item">
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="featured-news-item-wrapper">
                                        <div class="featured-news-item-image">
                                            <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                            <?php if (!empty($thumb)) { ?>
                                                <?php the_post_thumbnail('custom_main_news', array('class' => 'img-fluid')); ?>
                                            <?php } else { ?>
                                                <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                <?php echo $image; ?>
                                            <?php } ?>
                                            <div class="featured-news-item-content">
                                                <div class="featured-news-main-item-category">
                                                    <?php $categories = get_the_category(); ?>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($categories as $item) { ?>
                                                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                        <?php if ($i == 1) {
                                                            break;
                                                        } ?>
                                                    <?php $i++;
                                                    } ?>

                                                    <?php echo get_sources_logo(); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <h3><?php the_title(); ?></h3>
                                                </a>
                                                <div class="featured-news-main-item-meta">
                                                    <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php array_push($array_posted, get_the_ID()); ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="main-featured-right col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <div class="title-container">
                            <h3><?php _e('Shows', 'opslens'); ?></h3>
                        </div>
                        <div id="ticker2" class="vertical-video-slider-container">
                            <?php echo do_shortcode('[opslenstv_shortcode]'); ?>
                            <?php /*
                            <div class="vertical-video-item" style="">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="https://opslens.com/the-matt-locke-show/">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/matt-locke.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item" style="">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="https://opslens.com/the-situation-room/">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/situation-room.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/beer-for-brunch.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/eye-on-the-target-radio.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/polite-society.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/real-and-unfiltered.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/locke-and-road.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/Armed-American-Radio.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="https://opslens.com/wp-content/themes/opslens-mk01-theme/images/American-Snippets.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php */ ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opslens - Home Main Banner -->
        <div class="container">
            <div class="row">
			<aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href="https://athleticjunction.com/opslens/" title="Visit our Store"><img src="https://opslens.com/files/2022/12/OL-Store_1300x250.png" class="img-fluid" /></a>
                </aside>
                <aside class="ads-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div id="leaderboard_1"></div>
                </aside>
                <aside class="ads-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div id="leaderboard_2"></div>
                </aside>
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
        </div>


        <?php /* BLOQUE 1 */ ?>
        <section class="block1-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php /* BLOQUE 1 - GRANDE */ ?>
                    <div class="block1-main-news col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                            <div class="block1-main-news-item">
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <div class="block1-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
                                    <div class="block1-main-news-item-image">
                                        <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                        <?php if (!empty($thumb)) { ?>
                                            <?php the_post_thumbnail('custom_main_news', array('class' => 'img-fluid')); ?>
                                        <?php } else { ?>
                                            <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                            <?php echo $image; ?>
                                        <?php } ?>
                                        <?php $categories = get_the_category(); ?>
                                        <?php $i = 1; ?>
                                        <?php echo get_sources_logo(); ?>
                                        <?php foreach ($categories as $item) { ?>
                                            <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                            <?php if ($i == 1) {
                                                break;
                                            } ?>
                                        <?php $i++;
                                        } ?>
                                    </div>
                                    <div class="block1-main-news-item-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <?php array_push($array_posted, get_the_ID()); ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div id="rectangle_3"></div>
                        </aside>
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                <div class="block1-big-media-item">
                                    <div class="block1-big-media-item-wrapper">
                                        <div class="block1-big-media-item-image">
                                            <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                            <?php if (!empty($thumb)) { ?>
                                                <?php the_post_thumbnail('custom_big_media', array('class' => 'img-fluid')); ?>
                                            <?php } else { ?>
                                                <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                <?php echo $image; ?>
                                            <?php } ?>
                                            <?php echo get_sources_logo(); ?>
                                            <?php $categories = get_the_category(); ?>
                                            <?php $i = 1; ?>
                                            <?php foreach ($categories as $item) { ?>
                                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                <?php if ($i == 1) {
                                                    break;
                                                } ?>
                                            <?php $i++;
                                            } ?>
                                        </div>
                                        <div class="block1-big-media-item-content">
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
                        <div class="container">
                            <div class="row">
                                <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div id="skyscrapper_1"></div>
                                </aside>

                            </div>
                        </div>

                    </div>
                    <?php /* BLOQUE 1 - SIDEBAR */ ?>
                    <div class="block1-sidebar-news col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row">

                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                    <div class="block1-sidebar-news-item col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="block1-sidebar-news-item-image">
                                            <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                            <?php if (!empty($thumb)) { ?>
                                                <?php the_post_thumbnail('custom_vertical_news', array('class' => 'img-fluid')); ?>
                                            <?php } else { ?>
                                                <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                <?php echo $image; ?>
                                            <?php } ?>
                                            <?php $i = 1; ?>
                                            <?php echo get_sources_logo(); ?>
                                            <?php $categories = get_the_category(); ?>
                                            <?php foreach ($categories as $item) { ?>
                                                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                                <?php if ($i == 1) {
                                                    break;
                                                } ?>
                                            <?php $i++;
                                            } ?>
                                        </div>
                                        <div class="block1-sidebar-news-item-content">
                                            <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                            <div class="meta-container">
                                                <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php array_push($array_posted, get_the_ID()); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                            <div class="ads-container col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div id='rectangle_1'></div>
                            </div>
                            <div class="ads-container col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div id='rectangle_2'></div>
                            </div>
                            <div class="block1-latest-news-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="block1-latest-news-wrapper">
                                    <div class="title-container">
                                        <h3><?php _e('Latest News', 'opslens'); ?></h3>
                                    </div>
                                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 5, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
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
                                                    <div class="latest-news-media-item-image">
                                                        <?php echo get_sources_logo(); ?>
                                                        <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                                        <?php if (!empty($thumb)) { ?>
                                                            <?php the_post_thumbnail('custom_vertical_news', array('class' => 'img-fluid')); ?>
                                                        <?php } else { ?>
                                                            <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                                            <?php echo $image; ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php array_push($array_posted, get_the_ID()); ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="skyscrapper_2"></div>
                                    </aside>
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
                            <h2><?php _e('Experience Driven Commentary', 'opslens'); ?></h2>
                            <div class="w-100"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-only.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php /* BLOQUE 2 */ ?>

        <?php /*
        <section class="block2-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="block2-main-news col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
        <?php $array_posts = new WP_Query($args); ?>
        <?php if ($array_posts->have_posts()) : ?>
        <div class="block2-main-news-item">
            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <div class="block2-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
            <div class="block2-main-news-item-image">
                <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                <?php if(!empty($thumb)) { ?>
                <?php the_post_thumbnail('custom_main_news', array('class' => 'img-fluid')); ?>
                <?php } else { ?>
                <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                <?php echo $image; ?>
                <?php } ?>
                <?php $categories = get_the_category(); ?>
                <?php $i = 1; ?>
                <?php foreach ($categories as $item) { ?>
                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                <?php if ($i == 1) { break; }?>
                <?php $i++; } ?>
            </div>
            <div class="block2-main-news-item-content">
                <?php the_excerpt(); ?>
            </div>
            <?php array_push($array_posted, get_the_ID()); ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <?php $args = array('post_type' => 'post', 'posts_per_page' => 5, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
        <?php $array_posts = new WP_Query($args); ?>
        <?php if ($array_posts->have_posts()) : ?>
        <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
        <div class="block2-big-media-item">
            <div class="block2-big-media-item-wrapper">
                <div class="block2-big-media-item-image">
                    <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                    <?php if(!empty($thumb)) { ?>
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    <?php } else { ?>
                    <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                    <?php echo $image; ?>
                    <?php } ?>
                    <?php $categories = get_the_category(); ?>
                    <?php $i = 1; ?>
                    <?php foreach ($categories as $item) { ?>
                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                    <?php if ($i == 1) { break; }?>
                    <?php $i++; } ?>
                </div>
                <div class="block2-big-media-item-content">
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
    <div class="block2-sidebar-news col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <?php $args = array('post_type' => 'post', 'posts_per_page' => 1, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
        <?php $array_posts = new WP_Query($args); ?>
        <?php if ($array_posts->have_posts()) : ?>
        <div class="block2-main-news-item">
            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <div class="block2-main-news-item-meta-container"><span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span></div>
            <div class="block2-main-news-item-image">
                <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                <?php if(!empty($thumb)) { ?>
                <?php the_post_thumbnail('custom_main_news', array('class' => 'img-fluid')); ?>
                <?php } else { ?>
                <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                <?php echo $image; ?>
                <?php } ?>
                <?php $categories = get_the_category(); ?>
                <?php $i = 1; ?>
                <?php foreach ($categories as $item) { ?>
                <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                <?php if ($i == 1) { break; }?>
                <?php $i++; } ?>
            </div>
            <div class="block2-main-news-item-content">
                <?php the_excerpt(); ?>
            </div>
            <?php array_push($array_posted, get_the_ID()); ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <div class="row">
            <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <?php $args = array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                <?php $array_posts = new WP_Query($args); ?>
                <?php if ($array_posts->have_posts()) : ?>
                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                <div class="block2-sidebar-news-item col-12">
                    <div class="block2-sidebar-news-item-image">
                        <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                        <?php if(!empty($thumb)) { ?>
                        <?php the_post_thumbnail('custom_vertical_news', array('class' => 'img-fluid')); ?>
                        <?php } else { ?>
                        <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                        <?php echo $image; ?>
                        <?php } ?>
                        <?php $categories = get_the_category(); ?>
                        <?php foreach ($categories as $item) { ?>
                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                        <?php } ?>
                    </div>

                    <div class="block2-sidebar-news-item-content">
                        <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="meta-container">
                            <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
                <?php array_push($array_posted, get_the_ID()); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <?php $args = array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                <?php $array_posts = new WP_Query($args); ?>
                <?php if ($array_posts->have_posts()) : ?>
                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                <div class="block2-sidebar-news-item col-12">
                    <div class="block2-sidebar-news-item-image">
                        <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                        <?php if(!empty($thumb)) { ?>
                        <?php the_post_thumbnail('custom_vertical_news', array('class' => 'img-fluid')); ?>
                        <?php } else { ?>
                        <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                        <?php echo $image; ?>
                        <?php } ?>
                        <?php $categories = get_the_category(); ?>
                        <?php foreach ($categories as $item) { ?>
                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                        <?php } ?>
                    </div>

                    <div class="block2-sidebar-news-item-content">
                        <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="meta-container">
                            <span><?php echo get_the_author(); ?> <?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
                <?php array_push($array_posted, get_the_ID()); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    */ ?>

        <section class="footer-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="header-right-container banner-footer d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/header-banner.png" alt="Download" class="img-fluid img-sprite d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <div class="header-buttons-text black-text">
                    <p>Feel Free to express yourself without censorship</p>
                    <div class="header-right-buttons-container">
                        <a href="https://apps.apple.com/us/app/opslens-network/id1498033459" title="Download from Appstore" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/appstore.png" alt="Download from Appstore" class="img-fluid" />
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.streann.opslens" title="Download from Google Play" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" alt="Download from Google Play" class="img-fluid" />
                        </a>
                    </div>
                    <div class="roku-apple-header">
                        Available on <a href="https://channelstore.roku.com/details/58c071e18e357fb45d40698129de0947/opslens" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/roku.png" alt="" class="img-fluid"></a> <a href="https://apps.apple.com/us/app/opslens-network/id1498033459#?platform=appleTV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/appletv.png" alt="" class="img-fluid"></a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>