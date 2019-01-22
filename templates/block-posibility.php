<section>
	<div class="posibility_section">
		<div class="container posibility_block">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2><?php the_field('heading');?></h2>
				</div>
				<?php if( have_rows('posibilities_front') ): ?>
				<?php while( have_rows('posibilities_front') ): the_row(); 
					$image = get_sub_field('image');
					$gif = get_sub_field('gif');
				?>
				<div class="col-md-4 col-sm-6 posibility_item">
					<?php if($gif): ?>  
					<img class="img img-fluid hovered" src="<?php echo $gif['url']; ?>" alt="<?php echo $gif['alt'] ?>" >
					<?php endif; ?>
					<?php if($image): ?>  
					<img class="img img-fluid static" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" >
					<?php endif; ?>
					<h3><?php the_sub_field('heading');?></h3>
					<div><?php the_sub_field('subheading');?></div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center more_opportunities">
				<?php if( have_rows('posibilities_back') ): ?>
				<?php while( have_rows('posibilities_back') ): the_row(); 
					$image = get_sub_field('image');
					$gif = get_sub_field('gif');
				?>
				<div class="col-md-4 col-sm-6 posibility_item">
					<?php if($gif): ?>  
					<img class="img img-fluid hovered" src="<?php echo $gif['url']; ?>" alt="<?php echo $gif['alt'] ?>" >
					<?php endif; ?>
					<?php if($image): ?> 
					<img class="img img-fluid static" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" >
					<?php endif; ?>
					<h3><?php the_sub_field('heading');?></h3>
					<div><?php the_sub_field('subheading');?></div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center">
				<button class="button_first load_more_opportunities"><?php the_field('button_text');?></button>
			</div>
		</div>
	</div>
</section>