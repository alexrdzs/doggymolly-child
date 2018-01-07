<?php

/**
* Plugin Name: Doggy Molly Homepage Sections Plugin
* Description: Aquí van las secciones del homepage.
* Author: alex rodríguez santibáñez
* Version: 1.1 07 01 18
*/


/*******************************************************************************/

	

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

/*** Sección abajo del Header ***/
function tdmm_storefront_homepage_slider() {
 
    // if not the StoreFront Homepage Page Template return false
    if ( ! is_page_template( 'template-homepage.php' ) ) {
 
        return false;
 
    }
    
     
    echo ( ' <div class="jumbotron hero-image" style="margin:15px; padding:25px;">
       
        <div class="center-block" style="margin:35px">
                        <h2 class="text-center category-heading">Hello, world!</h2>            

            <h1 class="hero-text text-center" style="color:#777">We are on the quest of curating the best dog lover gifts on the web.</h1>

        </div>
    </div>' );
 
}
add_action( 'storefront_before_content', 'tdmm_storefront_homepage_slider', 5 );




/// Nueva sección ANTES de FEATURED ///
            add_action('storefront_homepage_before_featured_products', 'custom_storefront_section2');

function custom_storefront_section2(){ ?>

            <div class="clearfix"></div>
            <section>



                <div class="row" style=" margin:25px 0;">
                    <div class="col-md-12">
                        
                        <h2 class="section-title">Who is your best friend?</h2>

                        <div class="sp-section-description"><p>We know you are a true dog lover, but let's be honest, there's one breed you really, really, reaaaaally love. Good news is we've got something for everyone!</p>
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
	<a href="<?php echo get_the_permalink($post_id1); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id1, 'small' ); ?>" alt="<?php echo get_the_title($post_id1); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id1); ?></h2>
		</a></li> 
        
         <li class="product-category product" id="cat2">
	<a href="<?php echo get_the_permalink($post_id2); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id2, 'small' ); ?>" alt="<?php echo get_the_title($post_id2); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id2); ?></h2>
		</a></li> 
        
        
           <li class="product-category product" id="cat3">
	<a href="<?php echo get_the_permalink($post_id3); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id3, 'small' ); ?>" alt="<?php echo get_the_title($post_id3); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id3); ?></h2>
		</a></li> 
        
            <li class="product-category product" id="cat4">
	<a href="<?php echo get_the_permalink($post_id4); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id4, 'small' ); ?>" alt="<?php echo get_the_title($post_id4); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id4); ?></h2>
		</a></li> 
        
                 <li class="product-category product last" id="cat5">
	<a href="<?php echo get_the_permalink($post_id5); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id5, 'small' ); ?>" alt="<?php echo get_the_title($post_id5); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id5); ?></h2>
		</a></li> 
        
           <li class="product-category product first" id="cat6">
	<a href="<?php echo get_the_permalink($post_id6); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id6, 'small' ); ?>" alt="<?php echo get_the_title($post_id6); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id6); ?></h2>
		</a></li> 
        
        
             <li class="product-category product" id="cat7">
	<a href="<?php echo get_the_permalink($post_id7); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id7, 'small' ); ?>" alt="<?php echo get_the_title($post_id7); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id7); ?></h2>
		</a></li> 
        
          <li class="product-category product" id="cat8">
	<a href="<?php echo get_the_permalink($post_id8); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id8, 'small' ); ?>" alt="<?php echo get_the_title($post_id8); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id8); ?></h2>
		</a></li> 
        
          <li class="product-category product" id="cat9">
	<a href="<?php echo get_the_permalink($post_id9); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id9, 'small' ); ?>" alt="<?php echo get_the_title($post_id9); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id9); ?></h2>
		</a></li> 
        
    <li class="product-category product last" id="cat10">
	<a href="<?php echo get_the_permalink($post_id10); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id10, 'small' ); ?>" alt="<?php echo get_the_title($post_id10); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id10); ?></h2>
		</a></li> 
        
          <li class="product-category product first" id="cat11">
	<a href="<?php echo get_the_permalink($post_id11); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id11, 'small' ); ?>" alt="<?php echo get_the_title($post_id11); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id11); ?></h2>
		</a></li> 
        
        
            <li class="product-category product" id="cat12">
	<a href="<?php echo get_the_permalink($post_id12); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id12, 'small' ); ?>" alt="<?php echo get_the_title($post_id12); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id12); ?></h2>
		</a></li> 
        
            <li class="product-category product" id="cat13">
	<a href="<?php echo get_the_permalink($post_id13); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id13, 'small' ); ?>" alt="<?php echo get_the_title($post_id13); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id13); ?></h2>
		</a></li> 
        
           <li class="product-category product" id="cat14">
	<a href="<?php echo get_the_permalink($post_id14); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id14, 'small' ); ?>" alt="<?php echo get_the_title($post_id14); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id14); ?></h2>
		</a></li> 
        
                  <li class="product-category product last" id="cat15">
	<a href="<?php echo get_the_permalink($post_id15); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post_id15, 'small' ); ?>" alt="<?php echo get_the_title($post_id15); ?>" width="300" height="300" scale="0"><h2 class="woocommerce-loop-category__title"><?php echo get_the_title($post_id15); ?></h2>
		</a></li> 
        
        
<?php endif; ?>
	</ul>

                        </div> 
                    </div>
                    
                </div>

                

            </section>

                <hr class="featurette-divider">


            <?php }

/// Nueva sección después de FEATURED ///
            add_action('storefront_homepage_after_featured_products', 'custom_storefront_section1');

function custom_storefront_section1(){ ?>

            <div class="clearfix"></div>
            <section>


                <hr class="featurette-divider">

                <div class="row featurette" style=" margin:25px 0;">
                    <div class="col-md-7 col-md-push-5" style="padding:35px;">
                        <h2 class="featurette-heading" style="color:#96588a;"><?php the_field('titulo_seccion_secundaria'); ?><br><span class="text-muted"><?php the_field('subtitulo_seccion_secundaria'); ?></span></h2>
                        <p class="lead"><?php the_field('texto_secundario');?></p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="<?php the_field('imagen_secundaria');?>" alt="<?php the_field('descripcion_imagen_secundaria'); ?>" height="280" width="280">
                    </div>
                </div>

                <hr class="featurette-divider">

                


            </section>

            <?php }


/*******************************************************************************/



?>