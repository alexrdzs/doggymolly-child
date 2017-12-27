<?php

/**
* Plugin Name: Doggy Molly Homepage Sections Plugin
* Description: Aquí van las secciones del homepage.
* Author: alex rodríguez santibáñez
* Version: 0.1
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

            <h1 class="hero-text text-center" style="color:#777">We are on the quest of curating the greatest dog lover gifts on the web.</h1>

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
                        
                                <?php echo do_shortcode('[product_categories hide_empty="0" columns="5"]'); ?>
                    </div>
                    
                </div>


                


            </section>

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