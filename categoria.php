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

             <img class="img-circle img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url($postid); ?>" alt="<?php echo $title; ?> section." title="<?php echo get_the_title($postid); ?>" width="150" height="150" style="margin-bottom: 10px;">  
            
            <h1 class="category-heading text-center">
                <?php the_title(); ?>
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
            
            echo do_shortcode('[products columns="4" category="'.$catname.'"]')
            
            
?>



<!-- CONTENIDO POST -->


            <div class="row">


                <div class="col-md-12 content-category">
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
            
             
              
            
                  
                <?php if( have_rows('rep-interlinking') ): ?>
            
            <h2 class="category-heading2 text-center">
                Looking for more?
            </h2>
            <p class="text-muted lead text-center">
                You can take a look at some of these other super loving pups.
            </p>

	<div class="row">

	<?php while( have_rows('rep-interlinking') ): the_row(); 

		// vars
		$link = get_sub_field('url_link', false, false);

		?>
        
        
         <div class="col-md-4">
                           
             
             <?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

                    
				 <img class="img-circle img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $link, 'small' ); ?>" alt="Let's go to the <?php echo $title; ?> section." title="<?php echo get_the_title($post_id1); ?>" width="120" height="120" style="margin-bottom: 20px;">  
                    
                    <h3 class="center-block text-center"><?php echo get_the_title($link); ?></h3>
                    
                    
                   </a>
             
               <p class="center-block text-center"><?php echo $content; ?></p>

			<?php if( $link ): ?>
				
			<?php endif; ?>

        
                          
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