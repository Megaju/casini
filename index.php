<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>

        <section class="home">
            <!-- PRESENTATION -->
            <div id="home" class="shadow-box">
            <h2 class="title">Presentation</h2>
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
                </div>

                <!-- ECOUTE -->
                <div id="ecoute" class="shadow-box">
                <h2 class="title">ECOUTER</h2>
                <div class="ecoute content">
                        <?php query_posts('category_name=ecoute'); ?>
                        <?php if(have_posts()) : ?>
                            <?php $counter = 0; ?>
                                <?php while(have_posts() && $counter < 99) : the_post();?>
                                    <?php $counter++ ?>
                                        <!-- affichage des articles -->
                                        <div class="titre-musique">
                                            <!-- image -->
                                            <?php the_post_thumbnail('taille-ecoute');?>
                                            <!-- contenu -->
                                            <div class="music-content">
                                                <h3><?php the_title(); ?></h3>
                                                <!-- article text -->
                                                <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                            </div>
                                        </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
                </div>

                <!-- GALLERIE -->
                <div id="slider" class="shadow-box">
                <h2 class="title">Ma gallerie</h2>
                <?php
                echo do_shortcode("[metaslider id=22]");
                ?>
                </div>

                <!-- CONTACT -->
                <div id="contact" class="shadow-box">
                <h2 class="title">Me contacter</h2>
                <?php echo do_shortcode("[contact-form-7 id='35' title='Contact form 1']"); ?>
                </div>

        </section>


    </div> <!-- end container -->
    <?php wp_footer(); ?>
    <?php get_footer(); ?>

    <script>
	$(document).ready(function() {
        // SCROLL FLUID
		$('.menu>li>a').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top-150 }, speed ); // Go
			return false;
		});
    });
    </script>

</html>
