<?php 
//fonction pour la modif de l'image du header
$args = array(
'width'         => 800,
'height'        => 600,
'default-image' => get_template_directory_uri() . '/img/cover.jpg',
'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
//widget sidebar - indiquer le nombres de colones dans register_sidebar(ici), ne rien mettre si < 2 colones
if ( function_exists('register_sidebar') ) register_sidebar();
//Fonction d'ajout d'image à la une
add_theme_support( 'post-thumbnails' );
//Menu personalisé
register_nav_menus( array('Top' => 'Navigation principale',) );
?>