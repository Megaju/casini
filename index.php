<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>

        <section class="home">

            <!-- PRESENTATION -->
            <?php query_posts('category_name=home'); ?>
                <?php if(have_posts()) : ?>
                    <?php $counter = 0; ?>
                        <?php while(have_posts() && $counter < 1) : the_post();?>
                            <?php //$counter++ ?>
                                <!-- affichage des articles -->
                                <div class="description">
                                    <!-- image -->
                                    <div class="the-artist">
                                        <?php the_post_thumbnail(array());?>
                                    </div>
                                    <div class="description-content">
                                        <!-- article text -->
                                        <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                    </div>
                                </div>
                    <?php endwhile; ?>

                <?php endif; ?>

                <!-- ECOUTE -->
                <div class="ecoute">
                    <h1>ECOUTER</h1>
                        <?php query_posts('category_name=ecoute'); ?>
                        <?php if(have_posts()) : ?>
                            <?php $counter = 0; ?>
                                <?php while(have_posts() && $counter < 99) : the_post();?>
                                    <?php $counter++ ?>
                                        <!-- affichage des articles -->
                                        <div class="titre-musique">
                                            <!-- image -->
                                                <?php the_post_thumbnail('taille-ecoute');?>
                                            <div class="">
                                                <h3><?php the_title(); ?></h3>
                                                <!-- article text -->
                                                <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                            </div>
                                        </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
                <?php wd_slider(2); ?>

                <?php echo do_shortcode("[contact-form-7 id='35' title='Contact form 1']"); ?>

        </section>


    </div> <!-- end container -->

    <?php get_footer(); ?>

    </body>

</html>
