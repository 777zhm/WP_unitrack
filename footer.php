<footer>
	<div class="container">
		<div class="row justify-content-around text-center text-lg-left">
			<div class="col-lg-3 col-md-12">
				<?php $footer_logo = get_field('footer_logo', 'theme_settings'); ?>
				<img class="logotype" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt'] ?>">
			</div>
			<div class="col-lg-3 col-md-4">
				<h3><?php the_field('column_heading_1', 'theme_settings'); ?></h3>
				<?php wp_nav_menu( array('theme_location' => 'footer_menu_1') ); ?>
			</div>
			<div class="col-lg-2 col-md-4">
				<h3><?php the_field('column_heading_2', 'theme_settings'); ?></h3>
				<?php wp_nav_menu( array('theme_location' => 'footer_menu_2') ); ?>
			</div>
			<div class="col-lg-2 col-md-4">
				<h3><?php the_field('column_heading_3', 'theme_settings'); ?></h3>
				<div class="footer_telephone">
					<?php the_field('telephone', 'theme_settings'); ?>
				</div>

				<?php if( have_rows('socail_networks', 'theme_settings') ): ?>
				<div class="footer_social_block text-left">
					<?php while ( have_rows('socail_networks', 'theme_settings') ) : the_row();
								$social_icon = get_sub_field('social_icon');
								$social_link = get_sub_field('social_link');
							?>
					<a href="<?php echo $social_link; ?>">
						<img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt'] ?>">
					</a>
					<?php endwhile; ?>
				</div>
				<?php else : endif; ?>
				<div class="agenda">
					<?php the_field('schedule_heading', 'theme_settings'); ?><br>
					<?php the_field('schedule', 'theme_settings'); ?>
				</div>
				<div class="footer_email">
					<?php the_field('email', 'theme_settings'); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="backtotop_button"></div>
<section>
	<div class="container-fluid copyright_block">
		<div class="row">
			<div class="col-12 text-center copyright_text">
				<?php the_field('copyright', 'theme_settings'); ?>
			</div>
		</div>
	</div>
</section>
<!-- Start Modal -->
<div class="modal fade" id="consultationModal" tabindex="-1" role="dialog" aria-labelledby="consultationModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Заказать консультацию</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="modal_subtitle">Оставьте свои контактные данные и наш менеджер свяжется с Вами.</p>
				<input type="text" class="form-control" placeholder="Ваше имя *" name="username" required>
				<input type="tel" class="form-control" placeholder="Телефон *" name="usertelephone" required>
				<input type="email" class="form-control" placeholder="Email" name="useremail" required>
			</div>
			<div class="modal-footer">
				<button type="button" class="button_first modal_button_submit">Заказать</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
<!-- Start Modal -->
<div class="modal fade" id="presentationModal" tabindex="-1" role="dialog" aria-labelledby="presentationModal" aria-hidden="true">
	 <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				 <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Заказать презентацию</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				 </div>
				 <form class="contact_form" id="contact_form">
						<div class="modal-body">
							 <p class="modal_subtitle">Оставьте свои контактные данные и наш менеджер свяжется с Вами.</p>
							 <input type="text" class="form-control" placeholder="Ваше имя *" name="username" required>
							 <input type="tel" class="form-control" placeholder="Телефон *" name="usertelephone" required>
							 <input type="email" class="form-control" placeholder="Email" name="useremail" required>
						</div>
						<div class="modal-footer">
							 <button type="submit" class="button_first modal_button_submit">Заказать</button>
						</div>
				 </form>
			</div>
	 </div>
</div>
<!-- End Modal -->
<div id="success_banner">
	<div class="popup_bg">
		<div class="popup">
			<div class="popup_title">
				<p>Спасибо!</p>
				<p>Мы свяжемся с вами в ближайшее время</p>
			</div>
		</div>
		<!--popup-->
	</div>
	<!--popup_bg-->
</div>
<div id="load_banner" class="load_banner">
	<div class="popup_bg">
		<img src="img/loading.gif" alt="loading" >
	</div>
	<!--popup_bg-->
</div>
<?php wp_footer(); ?>
	</body>
</html>