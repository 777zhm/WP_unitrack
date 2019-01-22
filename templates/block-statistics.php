<section>
	<div class="container statistics_block">
		<div class="row">
			<div class="col-md-6 equal">
				<div class="statistics_item demo_box">
					<h2><?php the_field('heading_1');?></h2>
					<div><?php the_field('subheading_1');?></div>
					<img src="<?php assets_url('img/demo_version.png') ?>" alt="demo_version" class="img img-fluid">
					<div class="button_box">
					<button class="button_second" onclick="location.href='http://gps.unitrack.com.ua/?token=6a8a902e8b1fb80b3c2411d5b47ccccf96E642088A67B9A464BC5F7F806C3ED198CA071C'"><?php the_field('button_text_1_1');?></button><span>&nbsp;</span><button class="button_first" type="button" data-toggle="modal" data-target="#presentationModal"><?php the_field('button_text_1_2');?></button>
					</div>
				</div>
			</div>
			<div class="col-md-6 equal">
				<div class="statistics_item statistics_box">
					<h2><?php the_field('heading_2');?></h2>
					<img src="<?php assets_url('img/statistics.png') ?>" alt="statistics" class="img img-fluid">
					<div><?php the_field('subheading_2');?></div>
					<div class="button_box statistics_button_box">
						<button class="button_second" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_2');?></button>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="statistics_item wages_box d-none d-lg-block">
					<div class="row">
						<div><img src="<?php assets_url('img/wages.png') ?>" alt="wages" class="img img-fluid"></div>
						<div class="col">
							<h2><?php the_field('heading_3');?></h2>
							<div><?php the_field('subheading_3');?></div>
							<div class="button_box">
								<button class="button_second" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_3');?></button>
							</div>
						</div>
					</div>
				</div>
				<div class="statistics_item wages_box d-block d-lg-none">
					<div class="row ">
						<div class="col text-center">
							<div><img src="<?php assets_url('img/wages.png') ?>" alt="wages" class="img img-fluid"></div>
							<h2><?php the_field('heading_3');?></h2>
							<div><?php the_field('subheading_3');?></div>
							<div class="button_box">
								<button class="button_second" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_3');?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="access_box">
					<div style="text-align: center;">
						<?php the_field('section_text');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>