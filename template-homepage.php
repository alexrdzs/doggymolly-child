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

<div class="jumbotron" style="margin: 15px; padding:25px;">
       
        <div class="container">
            <h1>Hello, world!</h1>            

            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div> -->



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
do_action('homepage');
?>

        </main>


        <!-- #main -->
    </div>



    <div class="clearfix"></div>
    <hr class="featurette-divider">

<section class="storefront-product-section storefront-moreinfo" aria-label="Featured Products">
                    <div class="sp-section-description">



                        <div class="row featurette">
                            <div class="col-md-12" style="padding:25px;">
                                <h2 class="section-title"><?php the_field('titulo_instagram'); ?></h2>
                                <div class="sp-section-description">
                                    <p><?php the_field('subtitulo_instagram'); ?></p>
                                </div>

                                <p class="lead"><?php the_field('texto_despues_de_instagram'); ?></p>
                            </div>

                        </div>
                    </div>
                </section>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7" style="padding:25px;">
            <h2 class="featurette-heading"><?php the_field('titulo_final'); ?><br /> <span class="text-muted"><?php the_field('subtitulo_final'); ?></span></h2>
            <p class="lead"><?php the_field('texto_final');?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php the_field('imagen_final');?>" alt="<?php the_field('descripcion_imagen_final');?>">
        </div>
    </div>

    <!-- #primary -->

    <?php
get_footer();