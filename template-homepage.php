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
   

<div id="primary" class="content-area">
    
<div class="site-main">
	
    <h1 class="home-heading text-center"><?php the_field('main_title'); ?></h1>
    
	<div class="clearfix"></div>
	<section class="storefront-product-section" aria-label="Best Friends">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title"><?php the_field('title_section_1'); ?></h2>
				<div class="sp-section-description morado">
					<p><?php the_field('description_section_1'); ?></p>
				</div>
				
                <div>
                <?php echo do_shortcode("[pt_view id=b4baea8mhp]"); ?>
                    <br>
<div class="text-center">  <a class="button homebutton" href="./all-our-breeds" rel="nofollow">View All</a> </div>
                    
                    
				</div>
                
			</div>
		</div>
	</section>
	<hr class="featurette-divider">
	<div class="clearfix"></div>
	<section class="storefront-product-section" aria-label="Featured Products">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title morado"><?php the_field('title_featured'); ?></h2>
				<div class="sp-section-description">
					<p><?php the_field('description_featured'); ?></p>
				</div>                
                <?php echo do_shortcode('[featured_products limit="5" columns="5" orderby="date" order="ASC"]') ?>
                <?php echo do_shortcode('[products limit="5" columns="5" orderby="date"  on_sale="false" ]
') ?>
			</div>
		</div>
	</section>


    <section class="storefront-product-section storefront-moreinfo" aria-label="After Instagram">

    <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading">
                            <?php the_field('titulo_seccion_secundaria'); ?></h2>
                            <h3 class="text-muted morado">
                                <?php the_field('subtitulo_seccion_secundaria'); ?></h3>
                       
                        <p class="lead"><?php the_field('texto_secundario');?></p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="<?php the_field('imagen_secundaria');?>" alt="<?php the_field('descripcion_imagen_secundaria'); ?>" height="280" width="280">
                    </div>
                </div>
    </section>

    <hr class="featurette-divider">

    <div class="clearfix"></div>
 <div class="storefront-product-section storefront-blog columns-3">
     <h2 class="section-title"><?php the_field('blog_title'); ?></h2>
     <div class="sp-section-description">
         
				</div>
     
<div class="container">
    <div class="row">

		<?php // Display blog posts on any page @ https://m0n.co/l
		
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=3');                
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  
<article class="post type-post has-post-thumbnail col-md-4">
    
    
    
    <header class="entry-header">
        
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-thumbnail img-responsive center-block')); ?></a>
        
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
         <span class="posted-on">	<?php the_time('F jS, Y'); ?></span>
       </header>
    
       <div class="entry-content">
          
		<?php the_excerpt(); ?>
           
           <a class="button more-link" href="<?php the_permalink(); ?>">Continue reading</a>
           </div>
	</article>
    
		<?php endwhile; ?>
     </div>
         </div>
        <?php wp_reset_query(); ?>

    </div>
    
    
<div class="clearfix"></div>
    
<hr class="featurette-divider">
    
<section class="storefront-product-section storefront-moreinfo" aria-label="Instagram Feed">
	<div class="sp-section-description">
		<div class="row featurette">
			<div class="col-md-12">
				<h2 class="section-title"><?php the_field('titulo_instagram'); ?></h2>
				<div class="sp-section-description">
					<p><?php the_field('subtitulo_instagram'); ?> </p>
				</div>
				<?php echo do_shortcode('[instagram-feed sortby=random imageres=auto]'); ?>
			</div>
            <p class="lead"><?php the_field('texto_despues_de_instagram'); ?></p>
		</div>
	</div>
</section>
   

    
<div class="row featurette">
	<div class="col-md-7" style="padding:25px;">
		<h2 class="featurette-heading morado"><?php the_field('titulo_final'); ?></h2>
        <h3><?php the_field('subtitulo_final'); ?></h3>
		<p class="lead"><?php the_field('texto_final');?></p>
	</div>
	<div class="col-md-5">
		<img class="featurette-image img-thumbnail img-responsive center-block" src="<?php the_field('imagen_final');?>" alt="<?php the_field('descripcion_imagen_final');?>">
	</div>
</div>
    
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
    
    </div>
<!-- #primary -->
<?php
get_footer();