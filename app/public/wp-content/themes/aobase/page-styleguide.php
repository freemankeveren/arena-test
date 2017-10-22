<?php
/*
Template Name: Styleguide Page
*/

get_header(); ?>

	<div id="primary" class="content-area padder_bot">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<!-- TYPOGRAPHY -->
				<div class="row padder">
					<div class="col-sm-12">
						<h3>Typography <hr></h3>
					</div>
					<div class="col-sm-8">
						<h1>H1 is the <strong>main page heading.</strong></h1>
						<h2>H2 is the page level / section level heading.</h2>
						<h3>H3 The  heading falls below h2 in a document heirarchy.</h3>
						<h4>H4 is typically used for article title or call-to-action elements.</h4>
						<h5>H5 is the fifth level heading.</h5>
						<h6>H6 is the sixth level heading and the lowest.</h6>
					</div>
					<div class="col-sm-4 ">
						<div class="well">
							Styles and fonts are defined in style.css. H1-H3 share similar margins, while H4-H6 share their own.
						</div>
					</div>
					<div class="col-sm-8 padder_sm_top">
						<p class="bigger">
							A lede, or lead, paragraph in literature is the opening paragraph of an article, essay, news story or book chapter. It usually occurs together with the headline or title. It precedes the main body of the article, and it gives the reader the main idea of the story. In both spellings, the word rhymes with the word need.
						</p>
						<p>All paragraphs are wrapped in p tags. Additionally, p elements can be wrapped with a blockquote element if the p element is indeed a quote. Historically, blockquote has been used purely to force indents, but this is now achieved using CSS. Reserve blockquote for quotes.</p>

						<p class="smaller">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-sm-4 ">
						<div class="well">
							Paragraphs wrapped in  <strong>p</strong> tags. There's a <strong>.bigger</strong> class added to the first paragraph, and <strong>.smaller</strong> added to the third.
						</div>
					</div>
					<div class="col-sm-8 padder_sm_top">
						<p>.btn-primary</p>
						<a href="#" class="btn btn-primary btn-lg">Click here <i class="fa fa-arrow-right"></i></a>
						<a href="#" class="btn btn-primary">Sign Up</a>
						<a href="#" class="btn btn-primary btn-sm">Download <i class="fa fa-download"></i></a>
						<br/><br/>
						<p>.btn</p>
						<a href="#" class="btn btn-lg">Click here <i class="fa fa-arrow-right"></i></a>
						<a href="#" class="btn">Sign Up</a>
						<a href="#" class="btn btn-sm">Download <i class="fa fa-download"></i></a>

						<br/><br/>
						<p>.btn-success</p>
						<a href="#" class="btn btn-success btn-lg">Click here <i class="fa fa-arrow-right"></i></a>
						<a href="#" class="btn btn-success">Sign Up</a>
						<a href="#" class="btn btn-success btn-sm">Download <i class="fa fa-download"></i></a>

					</div>
					<div class="col-sm-4 ">
						<div class="well">
							Buttons are chill. Make sure to add <strong>.btn .btn-primary</strong> to a link tag to make it a button. You can also size it with <strong>.btn-lg</strong> and <strong>.btn-sm</strong>
						</div>
					</div>
				</div>

				<!-- FORMS -->
				<div class="row padder_bot">
						<div class="col-sm-12">
							<h3>Forms <hr></h3>
						</div>
						<div class="col-sm-6">
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
						</div>
						<div class="col-sm-6">
							<div class="well">
								[gravityform id="1" title="false" description="false" ajax="true"]
							</div>
						</div>
						<div class="col-sm-12 padder_sm"></div>
						<div class="col-sm-8 form_wide">
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
						</div>
						<div class="col-sm-4">
							<div class="well">
								<xmp><div class="form_wide"></xmp>
								[gravityform id="1" title="false" description="false" ajax="true"]
								<xmp></div></xmp>
							</div>
						</div>

						<div class="col-sm-8 wire bg_black padder">
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
						</div>
						<div class="col-sm-4">
							<div class="well">
								<xmp><div class="wire"></xmp>
								[gravityform id="1" title="false" description="false" ajax="true"]
								<xmp></div></xmp>
							</div>
						</div>
				</div>

				<!-- ANIMATIONS -->
				<div class="row padder_bot">
					<div class="col-sm-12">
						<h3>Scroll Animations <span class="smaller">(disabled below 767px)</span><hr></h3>
					</div>
					<div class="col-sm-3 padder_sm_bot">
						<div class="anim hider bg_blue" style="height:250px;"></div>
						<div class="well">class="anim hider"</div>
					</div>
					<div class="col-sm-3 padder_sm_bot">
						<div class="anim_up hider bg_red d1" style="height:250px;"></div>
						<div class="well">class="anim_up hider"</div>
					</div>
					<div class="col-sm-3 padder_sm_bot">
						<div class="anim_left hider bg_black d2" style="height:250px;"></div>
						<div class="well">class="anim_left hider"</div>
					</div>
					<div class="col-sm-3 padder_sm_bot">
						<div class="anim_right hider bg_green d3" style="height:250px;"></div>
						<div class="well">class="anim_right hider"</div>
					</div>
					<div class="padder_sm"></div>
					<div class="col-sm-12">
						<div class="well">
							Adding <strong>.anim_parent</strong> to a parent element, such as a <strong>ul</strong> or <strong>.row</strong> will auto add animations to the children.
						</div>
						<div class="anim_parent row">
							<div class="col-sm-1"><div class="bg_blue" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_blue" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_blue" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_blue" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_red" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_red" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_red" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_red" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_green" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_green" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_green" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
							<div class="col-sm-1"><div class="bg_green" style="height: 76px;margin:0 0 10px;border-radius: 100%;"></div></div>
						</div>
					</div>
				</div>

				<!-- VIDEO -->
				<div class="row padder_bot">
					<div class="col-sm-12">
						<h3>Responsive Video <hr></h3>
					</div>
					<div class="col-sm-7">
						<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/38772314" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="well">
							<xmp><div class="embed-responsive embed-responsive-16by9">
	  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XXXX?rel=0" frameborder="0" allowfullscreen></iframe>
								</div></xmp>
						</div>
					</div>

				</div>


				<?php	the_content(); ?>

			<?php endwhile;  ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
