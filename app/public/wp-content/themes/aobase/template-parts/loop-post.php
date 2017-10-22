<?php
  //thumbnail conditional setup
  if ( has_post_thumbnail() ) { $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $postthumburl = $postthumb['0']; }
  elseif (get_field('default_post_image','option')){ $postthumburl = get_field('default_post_image','option'); }
  else {   $postthumburl = get_template_directory_uri() . '/inc/img/default-image.jpg'; }
?>
<div class="panel panel-default">
  <div class="panel-body">
    <img src="<?php echo $postthumburl; ?>" alt="<?php the_title(); ?>"/>

    <h3>
      <a href="<?php the_permalink();?>" title="<?php the_title();?>">
        <?php the_title();?>
      </a>
      <br/>
      <small class="date">
        <em>
          <?php echo get_the_date( 'F j, Y' ); ?>
        </em>
      </small>
    </h3>

    <p><?php the_excerpt();?></p>

  </div><!-- end .panel-body -->
  <div class="panel-footer">
    <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="btn btn-primary">READ MORE </a>
    <div class="pull-right">
      <?php $shortcode = '[ssba url='. get_permalink() . ']';
        echo do_shortcode( $shortcode );
      ?>
    </div>
  </div><!-- end .panel-footer -->
</div><!-- end .panel -->
