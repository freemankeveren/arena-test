<?php
/*
Template Name: Arena Test
*/

get_header(); ?>

	<div id="primary" class="content-area no_padder">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>

<div class="container">
  <nav>
		<div class="row">
			<div class="col-lg-12">
		    <div class="logo pull-right">
		      <img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/cropped-vector-smart-object-300x211.png"/>
		    </div>
			</div>
		</div>
  </nav>

  <section>
		<div class="row gallery-container">
				<div class="gallery-img">
					<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-1@3x-1024x600.png" />
				</div>

				<div class="gallery-img">
					<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-11@2x-1024x600.png" />
				</div>

				<div class="gallery-img">
					<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-9.png" />
				</div>

			<div class="gallery-img">
				<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-5@3x-1024x600.png" />
			</div>

			<div class="gallery-img">
				<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-4@2x-1024x600.png" />
			</div>

			<div class="gallery-img">
				<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/layer-10.png" />
			</div>
		</div>
  </section>

    <section class="">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
	      <h2 class="text-center callout-title">
	        Keep the Michigan First Energy Law
	      </h2>
			</div>
			</div>
			<div class="row">
	      <div class="col-md-10 col-md-offset-1">
	        <div class="form-title text-center">
	          <h5 class="form-title-text" >Protect Michigan Jobs- Keep the Michigan First Energy Law</h5>
	        </div>
				</div>
			</div>
			<div class="row">
				<div class="form-layout col-md-10 col-md-offset-1">
					<form role="form">
						<div class="row">
							<div class="col-md-12">
								<div class="col-sm-6 form-group">
									<input type="text" class="form-control" id="first-name" placeholder="First Name">
								</div>
								<div class="col-sm-6 form-group">
									<input type="text" class="form-control" id="last-name" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-sm-6 form-group">
									<input type="text" class="form-control" id="zip" placeholder="Zip">
								</div>
							  <div class="col-sm-6 form-group">
							    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							  </div>
							</div>
						</div>
						<div class="row">
							<div class="sign-up-button col-md-12 col-md-offset-3">
							  <button type="submit" class="col-sm-6 btn btn-default">SIGN UP</button>
							</div>
						</div>
					</form>
	      </div>
			</div>
    </section>

		<section>
			<div class="row explaining">
				<div class="col-md-12 explaining-text">
					<h4 class="explaining-text-one">The 2016 Michigan First Energy Law protects 75,000 jobs in Michigan<br /> while keeping our energy affordable, reliable and safe.</h4>
					<h4 class="explaining-text-two">Protect our jobs and families by keeping the 2016 Michigan First Energy Law unchanged and in place</h4>
				</div>
			</div>
		</section>


    <section>
    	<div class="row">
    		<div class="savings col-lg-12">
    			<h1 class="savings-text">SAVING 75,00 MICHIGAN JOBS</h1>
    		</div>
    	</div>
    </section>

    <container>
      <div class="row">
				<div class="col-lg-12 features features-text"
        	<h3 class="features-text">The New Michigan First Energy law ensures Michigan's energy is:</h3>
				</div>
      </div>
			<div class="row check-marks">
				<div class="col-md-10 col-md-offset-1"
	        <ul class="check-position">
	          <li>Reliable</li>
	          <li>Affordable</li>
	          <li>Safe</li>
	          <li>Keeps energy jobs in Michigan</li>
	        </ul>
				</div>
      </div>
    </container>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="bottom-logo">
					<img class="img-responsive" src="http://arena-test.dev/wp-content/uploads/2017/10/cropped-vector-smart-object-300x211.png"/>
				</div>
			</div>
		</div>
    <div class="bottom-bar row">
      <div class="bottom col-lg-12">
        <h5 class="bottom-text">Paid for by citizens for Energizing Michigan's Economy</h5>
      </div>
    </div>
</div>






				<?php	the_content(); ?>

			<?php endwhile;  ?>
			<div class="padder">


			<?php get_template_part('template-parts/blog-wrapper'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
