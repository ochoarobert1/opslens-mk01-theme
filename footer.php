<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="footer-item footer-fixed col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="img-fluid img-logo-footer" />
                    </div>
                    <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                        <?php if (is_active_sidebar('sidebar_footer')) : ?>
                        <ul id="sidebar-footer1">
                            <?php dynamic_sidebar('sidebar_footer'); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                        <?php if (is_active_sidebar('sidebar_footer-2')) : ?>
                        <ul id="sidebar-footer2">
                            <?php dynamic_sidebar('sidebar_footer-2'); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="footer-item col-xl col-lg col-md col-sm-12 col-12 align-self-start">
                        <?php if (is_active_sidebar('sidebar_footer-3')) : ?>
                        <ul id="sidebar-footer3">
                            <?php dynamic_sidebar('sidebar_footer-3'); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="w-100"></div>
                    <div class="footer-copy col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'footer_menu',
                            'depth'             => 1,
                            'container'         => 'div',
                            'menu_class'        => 'footer-navbar-nav'
                        ));
                        ?>
                        <h5>&copy; 2020 OpsLens Media Group, LLC. <?php _e('ALL RIGHTS RESERVED', 'opslens'); ?></h5>
                        <h6><?php printf(__('DESIGNED & DEVELOPED BY <a href="%s">STREANN</a>', 'opslens'), 'https://streann.com'); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if ((!is_page('opslens-worldview')) && (!is_page('worldview-news'))) : ?>
<script type="text/javascript" src="https://streann-static.s3.amazonaws.com/inside-ad-ima-2/player2.js"></script>
<script>obApi('track', 'OpsLensWeb');</script>
<?php endif; ?>
<?php wp_footer() ?>
</body>

</html>
