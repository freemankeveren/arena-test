<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AO_Base
 */

get_header(); ?>

	<div id="primary" class="content-area padder">
		<main id="main" class="site-main" role="main">

						<div class="row">
		<?php
		while ( have_posts() ) : the_post(); ?>

				<div class="col-sm-8">
					<?php get_template_part( 'template-parts/content' ); ?>
					<?php get_template_part( 'template-parts/related-posts' ); ?>
				</div>
				<div class="col-sm-4">
					<?php get_sidebar(); ?>
				</div>


		<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
