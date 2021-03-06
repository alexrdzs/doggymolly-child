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
       
       <div class="row featurette">
          
                 
                <?php if( get_the_post_thumbnail_url($postid) ): ?>
                 <div class="col-md-3 ">
            
             <img class="img-circle img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url($postid); ?>" alt="<?php echo $title; ?> section." title="<?php echo get_the_title($postid); ?>" width="150" height="150" style="margin-bottom: 10px;"> 
                
                <h2 class="morado text-center"><?php the_title(); ?></h2>
              
                     
                     </div>
                <?php endif; ?>
                               

           
	<div class="col-md-9">
		
         <h1 class="category-heading"><?php the_field('subtitulo-inicial'); ?></h1>

		<p class="lead"><?php the_field('texto-inicial'); ?></p>
	</div>
	
</div>
   <hr class="featurette-divider">    
       
      <?php  
         $catname = get_field( "cat_products" );
         
         echo do_shortcode('[products columns="4" orderby="date" order="DESC" category="'.$catname.'"]')?>
      <!-- CONTENIDO POST -->
      <div class="row">
         <div class="col-md-12 content-category">
                   <hr class="featurette-divider">

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
      <!-- INTERLINKING -->
                          <hr class="featurette-divider">

      <?php if( have_rows('rep-interlinking') ): ?>
      <h2 class="category-heading text-center">
         Looking for more?
      </h2>
      <p class="lead text-center">
         You can take a look at some of these other super loving dogs.
      </p>
      <div class="row">
         <?php while( have_rows('rep-interlinking') ): the_row(); 
            // vars
            $linkint = get_sub_field('url_link', false, false);
            
            ?>
         <div class="col-md-2">
            <?php if( $linkint ): ?>
            <a href="<?php echo get_the_permalink($linkint); ?>">
               <?php endif; ?>
               <img class="img-circle img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $linkint, 'small' ); ?>" alt="Let's go to the <?php echo get_the_title($linkint); ?> section." title="<?php echo get_the_title($linkint); ?>" style="margin-bottom: 20px;">  
               <h3 class="text-center"><?php echo get_the_title($linkint); ?></h3>
            </a>
            <p class="text-center"><?php echo $content; ?></p>
            <?php if( $linkint ): ?>
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
