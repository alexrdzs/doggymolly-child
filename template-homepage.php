<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>



    <!--
    <div class="col-12">
        <div style="text-align: center; background: #3d3d3d; color: #fff; font-weight: bold; font-size:1em; height:3vh;">
            <div class="col-md-3">Get 25% off your first order!</div>
            <div class="col-md-3">Check out our new Jackets!</div>
            <div class="col-md-3">Get 25% off your first order!</div>
            <div class="col-md-3">Check out our new Jackets!</div>


        </div>
    </div>
-->

    <div class="jumbotron" style="margin: 25px auto; padding:25px;">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">


            <!-- Main jumbotron for a primary marketing message or call to action -->



            <?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); 
                
                add_filter('storefront_product_categories_shortcode_args','custom_storefront_category_per_page' );



            
            
            
// Category Products
function custom_storefront_category_per_page( $args ) {
	$args['number'] = 15;
	return $args;
}  ?>

        </main>


        <!-- #main -->
    </div>
    <!-- START THE FEATURETTES -->





    <!-- /END THE FEATURETTES -->


    <section class="storefront-product-section storefront-moreinfo" aria-label="Featured Products">
        <h2 class="section-title">Meet our <span class="text-muted">furr</span>riends!</h2>
        <div class="sp-section-description">
            <p>These are some pics from social media. Use <a href="">#mollysfriends</a> to be featured!</p>
        </div>
        <div class="woocommerce columns-4 "> </div>
    </section>
    <div class="clearfix"></div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7" style="padding:25px;">
            <h2 class="featurette-heading">And lastly, this one. <br> <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="https://placeimg.com/280/280/animals" alt="Generic placeholder image">
        </div>
    </div>

    <!-- #primary -->

    <?php
get_footer();