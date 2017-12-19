<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' );
?>

	<?php
	/**
	* woocommerce_before_main_content hook.
	*
	* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	* @hooked woocommerce_breadcrumb - 20
	* @hooked WC_Structured_Data::generate_website_data() - 30
	*/
	do_action( 'woocommerce_before_main_content' );
	?>
	
	<header class="woocommerce-products-header">
	
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		
		<?php endif; ?>
		
		<?php
		/**
		* woocommerce_archive_description hook.
		*
		* @hooked woocommerce_taxonomy_archive_description - 10
		* @hooked woocommerce_product_archive_description - 10
		*/
		do_action( 'woocommerce_archive_description' );
		?>
	
	</header>
	
	<?php if ( have_posts() ) : ?>
	
		<?php
		if(is_archive()){
			$obj = get_queried_object();
			$taxonomy = $obj->taxonomy;
			$taxonomy_term = $obj->slug;
			
			// Product Taxonomy Archive
			echo do_shortcode('[ajax_load_more post_type="product" taxonomy="'. $taxonomy .'" taxonomy_terms="'. $taxonomy_term .'" taxonomy_operator="IN" css_classes="products" posts_per_page="3" transition="fade"]');
		} else {
		
			// Shop Landing Page
			echo do_shortcode('[ajax_load_more post_type="product" css_classes="products" posts_per_page="6" transition="fade"]');
		}
		?>
	
	<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
	
		<?php
		/**
		* woocommerce_no_products_found hook.
		*
		* @hooked wc_no_products_found - 10
		*/
		do_action( 'woocommerce_no_products_found' );
		?>
	
	<?php endif; ?>
	
	<?php
		/**
		* woocommerce_after_main_content hook.
		*
		* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		*/
		do_action( 'woocommerce_after_main_content' );
	?>
	
	<?php
		/**
		* woocommerce_sidebar hook.
		*
		* @hooked woocommerce_get_sidebar - 10
		*/
		do_action( 'woocommerce_sidebar' );
	?>
<?php get_footer( 'shop' ); ?>