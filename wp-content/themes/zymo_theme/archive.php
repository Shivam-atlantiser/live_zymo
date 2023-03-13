<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package basics
 */

get_header(); ?>

	<div id="primary" class="content-area">
		       
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : 
        
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
        posts content 
        
        
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
