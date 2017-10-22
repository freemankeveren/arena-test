<?php
?>
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer padder_sm text-center" role="contentinfo">
		<div class="container">
			<div class="copyright">
				<?php if( function_exists('the_field')) { the_field('footer_text','option'); } ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php if( function_exists('the_field')) { the_field('footer_scripts','option'); } ?>
<?php wp_footer(); ?>

</body>
</html>
