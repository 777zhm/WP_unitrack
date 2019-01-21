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
            <h3>Контакты</h3>
            <div class="footer_telephone">
               <?php the_field('telephone', 'theme_settings'); ?>
            </div>

            <?php if( have_rows('socail_networks', 'theme_settings') ): ?>
            <div class="footer_social_block text-left">
               <?php while ( have_rows('socail_networks', 'theme_settings') ) : the_row();
                        $social_icon = get_sub_field('social_icon', 'theme_settings');
                        $social_link = get_sub_field('social_link', 'theme_settings');
                     ?>
               <a href="<?php echo $social_link; ?>">
                  <img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt'] ?>">
               </a>
               <?php endwhile; ?>
            </div>
            <?php else : endif; ?>
            <div class="agenda">
               График работы<br>
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