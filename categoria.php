<?php
/**
 * Template de categorías.
 *
 * 
 * Template name: Categoría
 *
 * @package storefront
 */
get_header();  ?>




    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <h1 class="category-heading">
                <?php the_title(); ?>
            </h1>
            <h2 class="text-muted category-subheading">
                <?php the_field('subtitulo1'); ?>
            </h2>


            <p class="lead text-center">
                <?php the_field('texto1'); ?>
            </p>

            <hr class="featurette-divider">

            <?php  echo do_shortcode('[ajax_load_more post_type="product" taxonomy="product_cat" taxonomy_terms="categoria1" css_classes="products" posts_per_page="12" transition="fade" button_loading_label="Loading..."]');
            
?>

            <hr class="featurette-divider">

           
            
                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="https://placeimg.com/280/280/animals" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">
                            <?php the_field('titulo2'); ?><br><span class="text-muted"><?php the_field('subtitulo2'); ?></span></h2>
                        <p class="lead text-sm-center">
                            <?php the_field('texto2'); ?>
                        </p>
                    </div>

                </div>
                <hr class="featurette-divider">



                <div class="row">


                    <div class="col-md-12">
                        <div>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>


        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
do_action( 'storefront_sidebar' );
get_footer();