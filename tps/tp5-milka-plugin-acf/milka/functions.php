<?php

// ------------------------------------------------ 
// 1. CONSTANTS
// ------------------------------------------------
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMG', THEMEROOT . '/img' );
define( 'JS', THEMEROOT . '/js' );
define( 'CSS', THEMEROOT . '/css' );


// ----------------------------------------
// 2 THEME SETUP
//------------------------------------------
function milka_theme_setup(){
	// activer le ou les menu(s)
	register_nav_menus(
		[
			'menu1' => 'Menu Principal',
			'menu2' => 'Menu Footer'
		]);
	// activer image mise en avant
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'milka_theme_setup');   // the hook ….


// ----------------------------------------
// 3 WIDGET INIT
//------------------------------------------
function milka_widget_init(){
	// desactiver  tous les 22 widgets ...
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Images' );
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget( 'WP_Widget_Archives' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Search' );
	//unregister_widget( 'WP_Widget_Text' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Nav_Menu_Widget' );
	unregister_widget('WP_Widget_Media_Audio' );
	//unregister_widget('WP_Widget_Media_Image');
	unregister_widget( 'WP_Widget_Media_Video' );
	unregister_widget( 'WP_Widget_Custom_HTML' );
	unregister_widget( 'WP_Widget_Media_Gallery' );

	
	register_sidebar([             // definir une zone de depot : side bar
		'name' =>'Colonne de gauche',
		'id' => 'left-colonne',
		'description' => 'Glisser les widgets ici ...',
		'before_widget' => '<p>',
		'after_widget' => '</p>'
	]);
	register_sidebar([             // definir une zone de depot : side bar
		'name' =>'Colonne de droite',
		'id' => 'right-colonne',
		'description' => 'Glisser les widgets ici ...',
		'before_widget' => '<p>',
		'after_widget' => '</p>'
	]);

}
add_action('widgets_init', 'milka_widget_init'); // the hook ...

// ----------------------------------------
// 4 CUSTOM POST
//------------------------------------------
function milka_create_custom_post(){
	register_post_type(
		'serie',
		[
			//'taxonomies' => ['post_tag','category'], // activation etiquette et categorie
			'labels' => [
				'name' => 'Séries',
				'add_new_item' => 'Ajouter une série',
				'singular' => 'série'
			],
			'public' => true,
			'supports' =>[ 'title','editor','thumbnail'], 
			// activer title content image en avant
			'menu_icon' => 'dashicons-welcome-view-site' 
			//https://developer.wordpress.org/resource/dashicons/
		]);
	
	 register_taxonomy( 
    'genre', 
    'serie', 
    array( 
        'hierarchical' => true, 
        'label' => 'Genre', 
        'query_var' => true, 
        'rewrite' => true ) 
    );
   //---
	
}
add_action('init','milka_create_custom_post');

//---------------------------------------------
// 4 Menu
//---------------------------------------------

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);