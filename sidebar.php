<?php //... ?>

    <div id="sidebar" class="sidebar">
        <ul>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                <!-- CONTENU DE LA SIDEBAR -->
            <?php endif; ?>
        </ul>
    </div>
