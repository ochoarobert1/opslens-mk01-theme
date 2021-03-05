<?php
/**
* Template Name: Template - Empty Page
*/
?>
<?php get_header('empty'); ?>
<?php the_post(); ?>
<!-- start page-wrapper -->
<style type="text/css">
    .emptypage-wrapper {
        display: -webkit-box;
        display: -moz-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        height: 100vh;
        background: #111111;
        color: white;
    }

    h1 {
        font-size: 2.2rem;
        font-weight: 300;
        max-width: 900px;
        line-height: 3rem;
        margin: 0;
    }

    @media (max-width: 600px) {
        h1 {
            font-size: 1.4rem;
            line-height: 2.2rem;
        }
    }

</style>
<div class="emptypage-wrapper">
    <?php the_content(); ?>
</div>
<!-- end page-wrapper -->

<?php get_footer('empty'); ?>
