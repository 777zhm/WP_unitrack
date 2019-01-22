<section>
   <div class="container blog_block">
   <div class="row">
      <div class="col-12">
         <h2><?php the_field('heading');?></h2>
      </div>
      <?php
      $args = array( 'posts_per_page' => 3, );
      $query = new WP_Query( $args );
      if ( $query -> have_posts() ) : while (  $query -> have_posts() ) :  $query -> the_post(); setup_postdata( $post ) ?>
      <div class="post_item col-lg-4 col-md-6 col-sm-12 col-12">
         <div class="post_image" style="background-image:url( <?php echo get_the_post_thumbnail_url($post->ID); ?> )"></div>
         <div class="post_date"><img src="<?php assets_url('img/calendar_icon.png') ?>" alt="calendar_icon"><?php the_date(); ?></div>
         <div class="post_title"><?php the_title(); ?></div>
         <div class="post_text">
            <div class="post_short_text"><?php the_excerpt(); ?></div>
            <div class="post_full_text"><?php the_content(); ?></div>
         </div>
      </div>
      <?php endwhile; else: ?>
      <?php endif; wp_reset_postdata(); ?>
   </div>
</section>