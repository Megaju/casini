<?php
/*
Template Name: Page d'écoute
*/
?>


<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>
        <div class="sidebar-fixed"></div>

        <section class="home">
          
        <!-- ECOUTE -->
        <div id="ecoute" class="shadow-box">
        <h2 class="title">Pour plus d'ecoute</h2>
        <div class="ecoute content">
        <?php query_posts('category_name=ecoute'); ?>
        <?php if(have_posts()) : ?>
            <?php $counter = 0; ?>
                <?php while(have_posts()) : the_post();?>
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
