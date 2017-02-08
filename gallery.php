<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>

        <section class="home">

        </section>
    </div><!-- end container -->

    <?php wp_footer(); ?>
    <?php get_footer(); ?>

    <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/jquery.gridster.js"></script>
    <script>
	$(document).ready(function() {
        var gridster;
        $(function() {
            gridtster = $(".gridster > ul").gridster({
                widget_margins: [10, 10],
                widget_base_dimensions: [180, 180]
            }).data('gridster').disable();
        });
    });
    </script>

</html>
