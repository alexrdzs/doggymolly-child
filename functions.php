<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

/*** BOOTSTRAP ***/

function pwwp_enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_scripts');

function pwwp_enqueue_my_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

 // this will add the stylesheet from it's default theme location if your theme doesn't already //wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_styles');

/*******************************************************************************/


    /* IMPORT GOOGLE FONTS */
add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
	function jk_storefront_header_content() { ?>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Nunito" rel="stylesheet">
    <?php
	}

/* Remove search from header */
add_action( 'init', 'remove_storefront_header_search' );
function remove_storefront_header_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 	40 );
}


/** Cambios del menú en mobile **/

add_filter( 'storefront_handheld_footer_bar_links', 'jk_remove_handheld_footer_links' );
function jk_remove_handheld_footer_links( $links ) {
	unset( $links['my-account'] );
	
	return $links;
}



/*** Esconde el contador de productos **/
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );

        
/* Define cuántas categorías se ven en el homepage */
add_filter( 'storefront_product_categories_args', 'tdmm_storefront_product_categories', 199 );
 
function tdmm_storefront_product_categories( $args ) {
 $args['limit']   = 20;
 $args['columns'] = 5;
 $args['hide_empty'] = 0;
 
 return $args;
}


add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}

