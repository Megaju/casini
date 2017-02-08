<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>
        <div class="sidebar-fixed"></div>

        <section class="home shadow-box">
            <h2 class="title">Ma gallerie</h2>
            <?php the_content(); ?>
        </section>

        <style media="screen">
            .home {
                margin: 50px auto;
            }
        </style>

    </div><!-- end container -->

    <?php wp_footer(); ?>
    <?php get_footer(); ?>

</html>
