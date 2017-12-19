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

/*********************************************/


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


/*** Sección Banner Superior 

function storefront_add_topbar() {
    ?>

        <div id="topbar" class="col-12">
            <div style="text-align: center; background: #DFEFF5; color: #3d3d3d; font-weight: bold; font-size:1em; height:10vh;">
                <div class="col-md-4"></div>
                <div class="col-sm-6 col-md-2">1 Get 25% off your first order!</div>
                <div class="col-sm-6 col-md-2"><span style="margin: 0 1em;">2 Check out our new Jackets!</span></div>
                <div class="col-md-4"></div>


            </div>
        </div>
        <?php
}
add_action( 'storefront_before_header', 'storefront_add_topbar' );***/

/// Nueva sección después de FEATURED ///
            add_action('storefront_homepage_after_featured_products', 'custom_storefront_section1');

function custom_storefront_section1(){ ?>

            <div class="clearfix"></div>
            <section>


                <hr class="featurette-divider">

                <div class="row featurette" style=" margin:25px 0;">
                    <div class="col-md-7 col-md-push-5" style="padding:35px;">
                        <h2 class="featurette-heading" style="color:#96588a;">Oh yeah, it's that good. <br><span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="https://placeimg.com/280/280/animals" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                


            </section>

            <?php }

/*** Sección abajo del Header ***/
function tdmm_storefront_homepage_slider() {
 
    // if not the StoreFront Homepage Page Template return false
    if ( ! is_page_template( 'template-homepage.php' ) ) {
 
        return false;
 
    }
     
    echo ( ' <div class="jumbotron" style="margin:15px; padding:25px;">
       
        <div class="container">
            <h1>Hello, world!</h1>            

            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>' );
 
}
add_action( 'storefront_before_content', 'tdmm_storefront_homepage_slider', 5 );

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
 
 return $args;
}


add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}



/*** ACF FIELDS ***/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5a383ea3af82b',
	'title' => 'Categorías',
	'fields' => array(
		array(
			'key' => 'field_5a386dff83e60',
			'label' => 'Subtítulo',
			'name' => 'subtitulo1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a383eb973009',
			'label' => 'Bloque de Texto 1',
			'name' => 'texto1',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5a383f3f7300a',
			'label' => 'Categoría de proudctos',
			'name' => 'cat_products',
			'type' => 'taxonomy',
			'instructions' => 'Selecciona la categoría:',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'product_cat',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5a386ece632b8',
			'label' => 'Título 2',
			'name' => 'titulo2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a386ea892f5d',
			'label' => 'Subtítulo 2',
			'name' => 'subtitulo2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a386ee3632b9',
			'label' => 'Texto 2',
			'name' => 'texto2',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'categoria.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
