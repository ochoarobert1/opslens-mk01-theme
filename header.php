<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//facebook.com" />
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#F71A13" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#F71A13" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="OpsLens Media Group LLC" />
    <meta name="copyright" content="https://opslens.com" />
    <meta name="geo.position" content="30.199071,-81.3829749" />
    <meta name="ICBM" content="30.199071,-81.3829749" />
    <meta name="geo.region" content="US" />
    <meta name="geo.placename" content="822 A1a North # 310, Ponte Vedra Beach, FL 32082" />
    <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
    <?php get_template_part('includes/fb-script'); ?>
    <?php get_template_part('includes/ga-script'); ?>
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <div id="fb-root"></div>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters">
            <div class="top-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="top-header-left col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="" title="<?php _e('Visit our Facebook Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" title="<?php _e('Visit our Twitter Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" title="<?php _e('Visit our Instagram Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="top-header-center col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'topheader_menu',
                                    'depth'             => 0, // 1 = with dropdowns, 0 = no dropdowns.
                                    'container'         => 'div',
                                    'menu_class'        => 'custom-navbar-nav'
                                ) );
                                ?>
                        </div>
                        <div class="top-header-right col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                            <div>
                                <?php echo date('l, F jS'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="header-left col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12"></div>
                        <div class="header-center col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a class="custom-navbar-brand" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                                <?php ?> <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                                <?php $image = wp_get_attachment_image_src( $custom_logo_id , array('250', '250')); ?>
                                <?php if (!empty($image)) { ?>
                                <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                <?php } ?>
                            </a>
                        </div>
                        <div class="header-right col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone-sprite.png" alt="Download" class="img-fluid img-sprite">
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="navbar-menu col-10">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'header_menu',
                                    'depth'             => 1,
                                    'container'         => 'div',
                                    'menu_class'        => 'main-navbar-nav'
                                ) );
                                ?>
                        </div>
                        <div class="navbar-search col-2">
                            <?php get_template_part('searchform-special'); ?>
                        </div>
                        <div class="navbar-line col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"></div>
                    </div>
                </div>

            </div>
        </div>
    </header>
