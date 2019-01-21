<section>
   <div class="mobile_section">
      <div class="container mobile_block">
         <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
               <div class="mobile_img_box">
                  <h2 class="mobile_img_heading"><?php the_field('heading');?></h2>
                  <img src="<?php echo get_template_directory_uri().'/assets/img/mobile_unitrack.png'?>" alt="mobile_unitrack" class="img img-fluid">
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="col-lg-12 col-md-6 google_play_box">
                  <a href="<?php the_field('button_link_playmerket') ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/google_play.png'?>" alt="google_play" class="img"></a>
               </div>
               <div class="col-lg-12 col-md-6 app_store_box">
                  <a href="<?php the_field('button_link_appstore') ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/app_store.png'?>" alt="app_store" class="img"></a>
               </div>
               <div class="col-lg-12 col-md-6 button_howto_box">
                  <button class="button_second"><?php the_field('button_text_3');?></button>
               </div>
            </div>
            <div class="col-12">
               <div class="mobile_block_text" style="text-align: center;"><?php the_field('subheading');?></div>
            </div>
         </div>
      </div>
   </div>
</section>