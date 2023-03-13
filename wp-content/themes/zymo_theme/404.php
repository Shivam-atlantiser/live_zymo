<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package basics
 */

get_header(); ?>
<style>
    section.error-404.not-found {
    padding-top: 300px;
    padding-bottom: 200px;
}
section.error-404.not-found .container{
    text-align:center;
}
.error-num {
    font-size: 81px;
    line-height: 90px;
}
p.error-text {
    font-size: 22px;
    line-height: 1.5;
    margin-bottom: 30px;
    margin-top: 10px;
}
section.error-404.not-found .container a{
        margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    margin-bottom: 30px;
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
			    <div class="container">
			        	<div class="error-num"><?php esc_html_e( '404','basics' ); ?></div>
				<p class="error-text"><?php esc_html_e( 'The page you are looking for is not exist.', 'basics' ); ?></p>
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-button w-inline-block">
                            <div class="button-text">Go to home</div>
                            <img data-src="<?php echo home_url() ?>/wp-content/themes/zymo_theme/images/svg/right-arrow.svg" alt="" class="button-icon-x lazy entered loaded" data-ll-status="loaded" src="https://zymocosmetics.com/wp-content/themes/zymo_theme/images/svg/right-arrow.svg">
                        </a>
				<?php //get_search_form(); ?>
				</div>
			</section><!-- .error-404 -->
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

    <?php    
get_footer();
