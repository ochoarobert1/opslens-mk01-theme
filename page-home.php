<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-bar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-bar-title col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 d-xl-block d-lg-block d-md-block d-sm-block d-none">
                        <h3><?php _e('Breaking News', 'opslens'); ?></h3>
                    </div>
                    <div class="main-bar-slider-container col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                        <div class="main-bar-slider-carousel owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date', 'category_name' => 'featured,opslens'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="main-bar-slider-item">
                                <div class="main-bar-slider-item-wrapper">
                                    <div class="main-bar-slider-item-image">
                                        <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                            <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                            <?php if(!empty($thumb)) { ?>
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
        <section class="main-video-trailer-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-video-trailer-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div style='position: relative;padding-bottom: 56%;padding-top: 20px;height: 0'>
                            <iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%' frameborder='0' scrolling='no' allowFullScreen src='https://ott.streann.com/streaming/player.html?U2FsdGVkX1+ugMQ+0UoWgGacdEw/SiYRlDxgbREOYaxfjVo2p/jPvEcg1byUJqTdQJ6B72USUE3501tHtOuPTFQcjlBKR9sqOQAbTIBn5nNtRLkLaXBzo3HWy+sR0GxDUtiseqOeHLoxPfev00yj3oLdwHNxCSlecbbiXdypNKP2mlxDKYcj/iBuJpw/6UeISFREZWNdzsi8LEpn5vW+VUBXGYFC3I91SPxesyZtDhjBRTtIoXjD1NBGbqQVwz/8HnhIIimeZIqpZkNOYea/0aj/WMISmfytvBnVoGyXsJldkX7iEanykJI+a5IToN6q2R7UDNLJ5UpAudC2E6TxurmHiac8yoyrZesfc5daBLg='></iframe>
                        </div>
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
                                            <?php if(!empty($thumb)) { ?>
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
                                        <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category">OPSLENS</a>
                                        <?php if ($i == 1) { break; }?>
                                        <?php $i++; } ?>
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
                                    <?php if(!empty($thumb)) { ?>
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
                                            <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category">OPSLENS</a>
                                            <?php if ($i == 1) { break; }?>
                                            <?php $i++; } ?>
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
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="http://opslens.com/chrisxradio/">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_06.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item" style="">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="http://opslens.com/the-matt-locke-show/">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_01.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item" style="">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="http://opslens.com/the-situation-room/">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_02.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_03.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_04.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-video-item">
                                <div class="vertical-video-item-wrapper">
                                    <div class="vertical-video-item-image">
                                        <a href="">
                                            <img src="http://opslens.com/wp-content/themes/opslens-mk01-theme/images/shows_banner_05.png" alt="no image" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Opslens - Home Main Banner -->
        <div class="container">
            <div class="row">
                <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8621199295186450" data-ad-slot="7043337497" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
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
                            <div class="block1-main-news-item-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php array_push($array_posted, get_the_ID()); ?>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                        <?php $array_posts = new WP_Query($args); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                        <div class="block1-big-media-item">
                            <div class="block1-big-media-item-wrapper">
                                <div class="block1-big-media-item-image">
                                    <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                    <?php if(!empty($thumb)) { ?>
                                    <?php the_post_thumbnail('custom_big_media', array('class' => 'img-fluid')); ?>
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
                                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fa+5o+4b-dm+b5" data-ad-client="ca-pub-8621199295186450" data-ad-slot="4469776906"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});

                                    </script>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <?php /* BLOQUE 1 - SIDEBAR */?>
                    <div class="block1-sidebar-news col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
                            <?php $array_posts = new WP_Query($args); ?>
                            <?php if ($array_posts->have_posts()) : ?>
                            <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                            <div class="block1-sidebar-news-item col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="block1-sidebar-news-item-image">
                                    <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                    <?php if(!empty($thumb)) { ?>
                                    <?php the_post_thumbnail('custom_vertical_news', array('class' => 'img-fluid')); ?>
                                    <?php } else { ?>
                                    <?php $image = '<img src="' . catch_that_image() . '" alt="" class="img-fluid" />'; ?>
                                    <?php echo $image; ?>
                                    <?php } ?>
                                    <?php $i = 1; ?>
                                    <?php $categories = get_the_category(); ?>
                                    <?php foreach ($categories as $item) { ?>
                                    <a href="<?php echo get_category_link($item); ?>" title="<?php _e('View more from this category', 'opslens'); ?>" class="category"><?php echo $item->name; ?></a>
                                    <?php if ($i == 1) { break; }?>
                                    <?php $i++; } ?>
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
                            <!-- Home - Block 1 - Horizontal -->
                            <div class="container">
                                <div class="row">
                                    <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8621199295186450" data-ad-slot="4673597519" data-ad-format="auto" data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});

                                        </script>
                                    </aside>
                                </div>
                            </div>
                            <div class="block1-latest-news-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="block1-latest-news-wrapper">
                                    <div class="title-container">
                                        <h3><?php _e('Latest News', 'opslens'); ?></h3>
                                    </div>
                                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'post__not_in' => $array_posted, 'order' => 'DESC', 'orderby' => 'date'); ?>
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
                                                <?php if ($i == 1) { break; }?>
                                                <?php $i++; } ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php _e('View post', 'opslens'); ?>">
                                                    <h3><?php the_title(); ?></h3>
                                                </a>
                                                <div class="meta-container">
                                                    <span><?php echo get_the_author(); ?></span> - <span><?php echo get_the_date(); ?></span>
                                                </div>
                                            </div>
                                            <div class="latest-news-media-item-image">
                                                <?php $thumb = get_the_post_thumbnail(get_the_ID()); ?>
                                                <?php if(!empty($thumb)) { ?>
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
        <?php /* BLOQUE 2 */?>

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
    <div class="container">
        <div class="row">
            <aside class="ads-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- Home - Footer - Horizontal -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8621199295186450" data-ad-slot="3896784039" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </aside>
        </div>
    </div>

    <section class="footer-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="footer-banner-content col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
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
                <div class="footer-banner-image col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 d-xl-block d-lg-block d-md-block d-sm-block d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone-sprite.png" alt="Download" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    </div>
</main>
<?php get_footer(); ?>
