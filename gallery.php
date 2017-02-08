<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div id="page">
    <!-- menu de navigation -->
    <?php wp_nav_menu(array('theme_location' => 'pasTop')); ?>
    <div class="nav-height"></div>

    <div id="header" style='background-image:url(<?php header_image(); ?>)'>
        <div class="shadow">
            <!-- LOGO -->
            <div class="logo"></div>

            <!-- TITRE DU SITE ET SA DESCRIPTION -->
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>

        </div>
    </div>
</div>

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
