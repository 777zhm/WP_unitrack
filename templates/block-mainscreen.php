<?php $image = get_field('image'); ?>
<section>
     <div class="container-fluid mainscreen_block" style="background-image: url('<?php echo $image['url']; ?>');">
        <div class="row">
           <div class="col-12 ms_heading">
              <h1 style="text-align: center;">Спутниковые системы<br> нового поколения</h1>
           </div>
        </div>
        <?php if( have_rows('features') ): ?>
        <div class="row justify-content-center text-center ms_benefits">
        	<?php while( have_rows('features') ): the_row(); 
					$icon = get_sub_field('icon');
				?>
           <div class="col-md-3">
              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
              <div><?php the_sub_field('heading'); ?></div>
           </div>
			<?php endwhile; ?>
        </div>
    <?php endif; ?>
        <div class="row justify-content-center text-center">
           <div class="col-12 scrolldown">
              <img src="<?php echo get_template_directory_uri().'/assets/img/scrolldown_icon.png'?>" alt="scrolldown_icon">
           </div>
        </div>
     </div>
</section>