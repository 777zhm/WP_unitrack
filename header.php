<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<div class="row  d-flex align-items-center">
					<div class="col-md-3">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?> 
						<img class="img img-fluid" src="<?php echo $image[0]; ?>" alt="logotype">
					</div>
					<?php if( have_rows('socail_networks', 'theme_settings') ): ?>
					<div class="col-md-4 social_block text-left">
						<?php while ( have_rows('socail_networks', 'theme_settings') ) : the_row();
								$social_icon = get_sub_field('social_icon');
								$social_link = get_sub_field('social_link');
							?>
						<a href="<?php echo $social_link; ?>">
						<?php if($social_icon): ?>
						<img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt'] ?>">
						<?php endif; ?>
						</a>
						<?php endwhile; ?>
					</div>
					<?php else : endif; ?>
					<div class="col-md-2_5">
						<div class="telephone"><?php the_field('telephone', 'theme_settings'); ?></div>
						<div class="telephone_hint"><?php the_field('telephone_hint', 'theme_settings'); ?></div>
					</div>
					<div class="col-md-1_5 header_button_box">
						<div class="button_enter_box"><button class="button_second" onclick="location.href='http://gps.unitrack.com.ua'">Вход в систему
							</button>
						</div>
						<div class="button_demo_box"><button class="button_second" onclick="location.href='http://gps.unitrack.com.ua/?token=6a8a902e8b1fb80b3c2411d5b47ccccf96E642088A67B9A464BC5F7F806C3ED198CA071C'">Демо вход
							</button>
						</div>
					</div>
				</div>
				<div class="row main_menu_row">
					<div class="col-md-7 main_menu">
						<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
					</div>
					<div class="col-md-2_5 ">
						<div class="email">
							<?php the_field('email', 'theme_settings'); ?>
						</div>
					</div>
					<div class="col-md-1_5"></div>
				</div>
			</div>
			<div class="uni_block">
				<div class="container">
					<?php if( have_rows('products', 'theme_settings') ): ?>
					<div class="row">
						<?php while ( have_rows('products', 'theme_settings') ) : the_row();
						$product_icon = get_sub_field('product_icon');
						?>

						<div class="col-lg-3 col-md-4 col-6 ms_icon_box">
							<a href="<?php the_sub_field('product_link') ?>">
								<div class="icon_text_wrapper text-left"><?php the_sub_field('product_market'); ?></div>
								<div class="uni_name">
									<div class="icon_text_wrapper">
										<?php if($product_icon): ?>
										<img src="<?php echo $product_icon['url']; ?>" alt="<?php echo $product_icon['alt'] ?>"><span><?php the_sub_field('product_name'); ?></span>
										<?php endif; ?>
									</div>
								</div>
							</a>
						</div>
						<?php endwhile; ?>
					</div>
					<?php else : endif; ?>
				</div>
			</div>
		</header>