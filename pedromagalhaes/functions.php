<?php

// pegar o arquivo logo header
require get_template_directory() . '/inc/logo.php';


//WIDGETS E MENU
if (function_exists('register_sidebar'))
{
	register_sidebar(array(

	));
}

// Imagem destacada
add_theme_support('post-thumbnails');


//sidebar dinamica
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'sidebarblog',
        'id' => 'main-sidebar',
        'description' => ( 'sidebar editavel principal'),
        'before_widget' => '<id="%1$s" class="widget %2$s">',
		'after_widget'  => '',
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => '</span>',
    ));
    register_sidebar( array(
        'name' => 'sidebarinicial',
        'id' => 'inicial-sidebar',
        'description' => ( 'sidebar editavel principal'),
        'before_widget' => '<id="%1$s" class="widget %2$s">',
        'after_widget'  => '',
        'before_title'  => '<span class="widgettitle">',
        'after_title'   => '</span>',
    ));
}


?>

