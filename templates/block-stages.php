<section>
 <div class="container stage_block">
    <div class="row">
       <div class="col-12">
          <h2><?php the_field('heading');?></h2>
       </div>
		<?php if( have_rows('stages') ): $i=1; ?>
			<?php while( have_rows('stages') ): the_row(); 
					$image = get_sub_field('image');
					$gif = get_sub_field('gif');
				?>
       <div class="col-md-4 stage_item">
          <div class="stage_item_box">
             <img class="img img-fluid hovered" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
             <img class="img img-fluid static" src="<?php echo $gif['url']; ?>" alt="<?php echo $gif['alt'] ?>">
             <div class="stage_item_block stage_item_block_<?php echo $i ?>">
                <h3><?php the_sub_field('heading'); ?></h3>
                <div><?php the_sub_field('editor'); ?><span class="show_more_dots">...</span><span class="show_more">потребности клиента. После формирования ТЗ мы подбираем оптимальное оборудование и согласовываем с заказчиком его пожелания.</span>
                </div>
             </div>
          </div>
       </div>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
    </div>
 </div>
</section>