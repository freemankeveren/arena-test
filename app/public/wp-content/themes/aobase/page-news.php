<?php
/*
Template Name: News Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('template-parts/page-title'); ?>
				<?php	the_content(); ?>
				<?php get_template_part('template-parts/blog-wrapper'); ?>

				 </div><!-- end .row -->

			<?php endwhile;  ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
