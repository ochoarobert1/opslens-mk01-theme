<?php /* POST FORMAT - DEFAULT */ ?>
<?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
<article id="post-<?php the_ID(); ?>" class="the-single col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" itemscope itemtype="http://schema.org/Article">
    <div class="ads-container col-12">
        <div id="leaderboard_1"></div>
    </div>
    <div class="ads-single-content">
        <?php echo get_auto_banner_contributor(); ?>
    </div>
    <div class="main-single-category">
        <?php the_category(' '); ?>
    </div>
    <header>
        <h1 itemprop="name"><?php the_title(); ?></h1>
        <div class="meta-container">
            <span class="author">By: <?php the_author_posts_link(); ?></span> - <span class="date"><?php the_time('F j, Y'); ?></span>
        </div>
    </header>
    <?php if ( has_post_thumbnail()) : ?>
    <picture class="single-picture-container">
        <?php echo get_sources_logo(); ?>
        <?php the_post_thumbnail('single_img', $defaultargs); ?>
    </picture>
    <?php endif; ?>
    <div class="post-content" itemprop="articleBody">
        <?php the_content() ?>
        <?php wp_link_pages( array(
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'opslens' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>', ) ); ?>
    </div><!-- .post-content -->
    <meta itemprop="datePublished" datetime="<?php echo get_the_time('Y-m-d') ?>" content="<?php echo get_the_date('i') ?>">
    <meta itemprop="author" content="<?php echo esc_attr(get_the_author()) ?>">
    <meta itemprop="url" content="<?php the_permalink() ?>">
    <?php if ( comments_open() ) { comments_template(); } ?>
    <div class="ads-single-content">
        <?php echo get_auto_banner_contributor(); ?>
    </div>
    <div class="ads-container col-12">
        <div id="leaderboard_2"></div>
    </div>
</article> <?php // end article ?>
