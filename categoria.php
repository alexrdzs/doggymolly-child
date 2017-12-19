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


            <h1 class="category-heading text-center">
                <?php the_title(); ?> <span>Gifts</span>
            </h1>
            <h2 class="text-muted category-subheading text-center">
                <?php the_field('subtitulo-inicial'); ?>
            </h2>


            <p class="lead text-center">
                <?php the_field('texto-inicial'); ?> 
            </p>

            <hr class="featurette-divider">

            <?php  
            
            $catname = get_field( "cat_products" );
            
            echo do_shortcode('[ajax_load_more post_type="product" taxonomy="product_cat" taxonomy_terms="'.$catname.'" css_classes="products" posts_per_page="12" transition="fade" button_loading_label="Loading..."]');
            
?>

            <hr class="featurette-divider">


<!-- CONTENIDO POST -->


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

            <!-- FIN CONTENIDO POST -->
            
            
            <hr class="featurette-divider">
            
            
            <!-- INTERLINKING -->
            
             <h2 class="category-heading2 text-center">
                <?php the_field('titulo-interlinking'); ?> 
            </h2>
            <p class="text-muted lead text-center">
                <?php the_field('subtitulo-interlinking'); ?> Lorem IpsumLorem Ipsum
            </p>
              
            
                  
                <?php if( have_rows('rep-interlinking') ): ?>

	<div class="row">

	<?php while( have_rows('rep-interlinking') ): the_row(); 

		// vars
		$image = get_sub_field('imagen_relacionado');
        $title = get_sub_field('titulo-relacionado');
		$content = get_sub_field('texto_relacionado');
		$link = get_sub_field('url_link');

		?>
        
        
         <div class="col-md-4">
                           
             
             <?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

                    
                    
                    
				 <img class="img-circle img-thumbnail img-responsive center-block" src="<?php echo $image; ?>" alt="Let's go to the <?php echo $title; ?> section." title="<?php echo $title; ?>" width="120" height="120" style="margin-bottom: 20px;">      

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

             <h3 class="center-block text-center"><?php echo $title; ?></h3>
		    
                        
                  
          <p class="center-block text-center"><?php echo $content; ?></p>
           <p><a class="btn btn-default center-block" href="<?php echo $link; ?>" role="button">View</a></p>  
                          
                </div>
        
	<?php endwhile; ?>

	</div>

<?php endif; ?>
  
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


    <?php
do_action( 'storefront_sidebar' );
get_footer();