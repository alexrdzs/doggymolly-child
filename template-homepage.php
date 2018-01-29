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

 <div class="jumbotron hero-image">
        <div class="center-block ">                  
            <h1 class="text-center">The best gift shop for dog lovers.</h1>
        </div>
    </div>

<div id="primary" class="content-area">
    
<div class="site-main">
	
	<div class="clearfix"></div>
	<section class="storefront-product-section" aria-label="Best Friends">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Who is your best friend?</h2>
				<div class="sp-section-description">
					<p>We know you are a true dog lover, but let's be honest, there's one breed you really, really, reaaaaally love. Good news is we've got something for everyone!</p>
				</div>
				<div class="woocommerce columns-5">
					<ul class="products">
						<?php 
							// vars
							$post_id1 = get_field('url1', false, false);
							$post_id2 = get_field('url2', false, false);
							$post_id3 = get_field('url3', false, false);
							$post_id4 = get_field('url4', false, false);
							$post_id5 = get_field('url5', false, false);
							
							$post_id6 = get_field('url6', false, false);
							$post_id7 = get_field('url7', false, false);
							$post_id8 = get_field('url8', false, false);
							$post_id9 = get_field('url9', false, false);
							$post_id10 = get_field('url10', false, false);
							                                      
							$post_id11 = get_field('url11', false, false);
							$post_id12 = get_field('url12', false, false);
							$post_id13 = get_field('url13', false, false);
							$post_id14 = get_field('url14', false, false);
							$post_id15 = get_field('url15', false, false);
							
							                                      
							// check 
							if( $post_id1 ): ?>
						<li class="product-category product first" id="cat1">
							<a href="<?php echo get_the_permalink($post_id1); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id1, 'small' ); ?>" alt="<?php echo get_the_title($post_id1); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id1); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat2">
							<a href="<?php echo get_the_permalink($post_id2); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id2, 'small' ); ?>" alt="<?php echo get_the_title($post_id2); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id2); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat3">
							<a href="<?php echo get_the_permalink($post_id3); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id3, 'small' ); ?>" alt="<?php echo get_the_title($post_id3); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id3); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat4">
							<a href="<?php echo get_the_permalink($post_id4); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id4, 'small' ); ?>" alt="<?php echo get_the_title($post_id4); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id4); ?></h2>
							</a>
						</li>
						<li class="product-category product last" id="cat5">
							<a href="<?php echo get_the_permalink($post_id5); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id5, 'small' ); ?>" alt="<?php echo get_the_title($post_id5); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id5); ?></h2>
							</a>
						</li>
						<li class="product-category product first" id="cat6">
							<a href="<?php echo get_the_permalink($post_id6); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id6, 'small' ); ?>" alt="<?php echo get_the_title($post_id6); ?>" width="300" height="300">
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id6); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat7">
							<a href="<?php echo get_the_permalink($post_id7); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id7, 'small' ); ?>" alt="<?php echo get_the_title($post_id7); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id7); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat8">
							<a href="<?php echo get_the_permalink($post_id8); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id8, 'small' ); ?>" alt="<?php echo get_the_title($post_id8); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id8); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat9">
							<a href="<?php echo get_the_permalink($post_id9); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id9, 'small' ); ?>" alt="<?php echo get_the_title($post_id9); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id9); ?></h2>
							</a>
						</li>
						<li class="product-category product last" id="cat10">
							<a href="<?php echo get_the_permalink($post_id10); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id10, 'small' ); ?>" alt="<?php echo get_the_title($post_id10); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id10); ?></h2>
							</a>
						</li>
						<li class="product-category product first" id="cat11">
							<a href="<?php echo get_the_permalink($post_id11); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id11, 'small' ); ?>" alt="<?php echo get_the_title($post_id11); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id11); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat12">
							<a href="<?php echo get_the_permalink($post_id12); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id12, 'small' ); ?>" alt="<?php echo get_the_title($post_id12); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id12); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat13">
							<a href="<?php echo get_the_permalink($post_id13); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id13, 'small' ); ?>" alt="<?php echo get_the_title($post_id13); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id13); ?></h2>
							</a>
						</li>
						<li class="product-category product" id="cat14">
							<a href="<?php echo get_the_permalink($post_id14); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id14, 'small' ); ?>" alt="<?php echo get_the_title($post_id14); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id14); ?></h2>
							</a>
						</li>
						<li class="product-category product last" id="cat15">
							<a href="<?php echo get_the_permalink($post_id15); ?>">
								<img class="img-thumbnail img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id15, 'small' ); ?>" alt="<?php echo get_the_title($post_id15); ?>" width="300" height="300" >
								<h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id15); ?></h2>
							</a>
						</li>
                        
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<hr class="featurette-divider">
	<div class="clearfix"></div>
	<section class="storefront-product-section" aria-label="Featured Products">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title morado">Dog Lovers Gifts</h2>
				<div class="sp-section-description">
					<p>This is the best of the best, the cutest, the coolest, just pure awesomeness for dog lovers.</p>
				</div>                
                <?php echo do_shortcode('[featured_products columns="5" orderby="title" order="ASC"]') ?>
			</div>
		</div>
	</section>

    
    <div class="clearfix"></div>
 <div class="storefront-product-section storefront-blog columns-3">
     <h2 class="section-title">The Doggy Molly Digest</h2>
     <div class="sp-section-description">
         
				</div>
     
<div class="container">
    <div class="row">

		<?php // Display blog posts on any page @ https://m0n.co/l
		
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=3');                
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  
<article class="post type-post has-post-thumbnail col-md-4">
    
       <header class="entry-header">
           
           
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
         <span class="posted-on">	<?php the_time('F jS, Y'); ?></span>
       </header>
    
       <div class="entry-content">
           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-thumbnail img-responsive center-block')); ?></a>
           
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
    
<div class="row featurette">
	<div class="col-md-7" style="padding:25px;">
		<h2 class="featurette-heading morado"><?php the_field('titulo_final'); ?></h2>
        <h3><?php the_field('subtitulo_final'); ?></h3>
		<p class="lead"><?php the_field('texto_final');?></p>
	</div>
	<div class="col-md-5">
		<img class="featurette-image img-responsive center-block" src="<?php the_field('imagen_final');?>" alt="<?php the_field('descripcion_imagen_final');?>" height="280" width="280">
	</div>
</div>
    </div>
<!-- #primary -->
<?php
get_footer();