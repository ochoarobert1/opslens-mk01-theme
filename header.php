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
    <meta name="DC.title" content="<?php if (is_home()) {
                                        echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
                                    } else {
                                        echo get_the_title() . ' | ' . get_bloginfo('name');
                                    } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
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
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '265467951477030');
        fbq('track', 'PageView');
    </script>

    <!-- End Facebook Pixel Code -->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <div id="fb-root"></div>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=265467951477030&ev=PageView&noscript=1" /></noscript>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters">
            <div class="top-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="top-header-left col-xl-3 col-lg-2 col-md-2 col-sm-12 col-12">
                            <a href="https://www.facebook.com/OpsLens/" title="<?php _e('Visit our Facebook Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/opslens" title="<?php _e('Visit our Twitter Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/opslens_ol/" title="<?php _e('Visit our Instagram Profile', 'opslens'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="top-header-center col-xl-6 col-lg-8 col-md-8 col-sm-6 col-6 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'topheader_menu',
                                'depth'             => 0, // 1 = with dropdowns, 0 = no dropdowns.
                                'container'         => 'div',
                                'menu_class'        => 'custom-navbar-nav'
                            ));
                            ?>
                        </div>
                        <div class="top-header-right col-xl-3 col-lg-2 col-md-2 col-sm-6 col-6 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                            <div>
                                <?php echo date('l, F jS'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-center col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="header-left">
                                <div class="menu-bars d-xl-none d-lg-none d-md-inline-block d-sm-inline-block d-inline-block">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <a class="custom-navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                                <?php ?> <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                                <?php $image = wp_get_attachment_image_src($custom_logo_id, array('250', '250')); ?>
                                <?php if (!empty($image)) { ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                <?php } ?>
                            </a>
                            <div class="header-right-container d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header-banner.png" alt="Download" class="img-fluid img-sprite d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                <div class="header-buttons-text">
                                    <p>Feel Free to express yourself without censorship</p>
                                    <a href="" class="btn btn-md btn-header">Download Now</a>
                                    <div class="header-right-buttons-container">
                                        <a href="https://apps.apple.com/us/app/opslens-network/id1498033459" title="Download from Appstore" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/appstore.png" alt="Download from Appstore" class="img-fluid" />
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=com.streann.opslens" title="Download from Google Play" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" alt="Download from Google Play" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="roku-apple-header">
                                        Available on <a href="https://channelstore.roku.com/es-co/details/6fc5e6d04955bd6a48e5992289f4a0d2/opslens-network" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/roku.png" alt="" class="img-fluid"></a> <a href="https://apps.apple.com/us/app/opslens-network/id1498033459#?platform=appleTV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/appletv.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="navbar-menu col-10">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'header_menu',
                                'depth'             => 1,
                                'container'         => 'div',
                                'menu_class'        => 'main-navbar-nav'
                            ));
                            ?>
                        </div>
                        <div class="navbar-search col-2">
                            <?php get_template_part('searchform-special'); ?>
                        </div>
                        <div class="navbar-line col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"></div>
                    </div>
                </div>
            </div>

            <div class="navbar-mobile navbar-mobile-hidden">
                <div class="close-button">
                    <div class="close-button-container">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="navbar-menu-mobile">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'header_menu',
                        'depth'             => 1,
                        'container'         => 'div',
                        'menu_class'        => 'main-navbar-nav'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </header>