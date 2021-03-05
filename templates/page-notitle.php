<?php
/**
* Template Name: Template - Pagina sin titulo
*
* @package opslens
* @subpackage opslens-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row">
        <section id="post-<?php the_ID(); ?>" class="page-container col-12" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">
                <div class="row">
                    <div class="section-container col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="ads-container col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div id='rectangle_1'></div>
                    </div>
                    <div class="ads-container col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div id='rectangle_2'></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>