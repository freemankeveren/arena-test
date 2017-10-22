<?php
/*
Template Name: Home Page
*/

get_header(); ?>

	<div id="primary" class="content-area no_padder">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>

				<section class="full_width text-center white safe_bg" style="background-image:url(<? echo $url; ?>);">
					<div class="container">
						<h1 class="anim hider">Extravagance. Simplicity. Eternity.</h1>
					</div>
				</section><!-- section -->



				<?php	the_content(); ?>

			<?php endwhile;  ?>
			<div class="padder">


			<?php get_template_part('template-parts/blog-wrapper'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
