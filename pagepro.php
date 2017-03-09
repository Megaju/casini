<?php
/*
Template Name: page-pro
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

        <section class="home">
        <?php if( post_password_required() ){ ?>
            <div id="contact" class="shadow-box">
            <h2 class="title">Connexion a la partie professionnel</h2>
            <?php the_content(); ?>
            </div>
            <?php
        } else {
          //Mon super affichage personalisé
          ?>

              <!-- PRESENTATION -->
              <div id="home" class="shadow-box back-even">
              <h2 class="title">Page pro</h2>
              <?php query_posts('category_name=pro'); ?>
                  <?php if(have_posts()) : ?>
                      <?php $counter = 0; ?>
                          <?php while(have_posts()) : the_post();?>
                              <?php //$counter++ ?>
                                  <!-- affichage des articles -->
                                  <div class="description">
                                      <!-- image -->
                                      <div class="the-artist">
                                          <?php the_post_thumbnail(array());?>
                                      </div>
                                      <div class="description-content">
                                          <h2><?php the_title(); ?></h2>
                                          <!-- article text -->
                                          <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                      </div>
                                  </div>
                      <?php endwhile; ?>

                  <?php endif; ?>
                  </div>
              <?php
        } ?>

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
