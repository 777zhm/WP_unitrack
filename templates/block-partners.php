<section>
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-10 ">
				<?php if( have_rows('partners') ): ?>
					<div class="partners partners_slider">
						<?php while( have_rows('partners') ): the_row(); 
							$logotype = get_sub_field('logotype');
							$logotype_gray = get_sub_field('logotype_gray');
							?>
							<div class="partner_item">
								<?php if($logotype): ?>  
									<img class="img img-fluid hover" src="<?php echo $logotype['url']; ?>" alt="<?php echo $logotype['alt']; ?>" />
								<?php endif; ?>
								<?php if($logotype_gray): ?>  
									<img class="img img-fluid default" src="<?php echo $logotype_gray['url']; ?>" alt="<?php echo $logotype_gray['alt']; ?>" />
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?> 
			</div>
		</div>
	</div>
</section>