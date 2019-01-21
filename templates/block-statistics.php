<section>
 <div class="container statistics_block">
    <div class="row">
       <div class="col-md-6 equal">
          <div class="statistics_item demo_box">
             <h2><?php the_field('heading_1');?></h2>
             <div><?php the_field('subheading_1');?></div>
             <img src="<?php echo get_template_directory_uri().'/assets/img/demo_version.png'?>" alt="demo_version" class="img img-fluid">
             <div class="button_box">
                <button class="button_second" onclick="location.href='http://gps.unitrack.com.ua/?token=6a8a902e8b1fb80b3c2411d5b47ccccf96E642088A67B9A464BC5F7F806C3ED198CA071C'"><?php the_field('button_text_1_1');?></button>
                <button class="button_first" type="button" data-toggle="modal" data-target="#presentationModal"><?php the_field('button_text_1_2');?></button>
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
             </div>
          </div>
       </div>
       <div class="col-md-6 equal">
          <div class="statistics_item statistics_box">
             <h2><?php the_field('heading_2');?></h2>
             <img src="<?php echo get_template_directory_uri().'/assets/img/statistics.png'?>" alt="statistics" class="img img-fluid">
             <div><?php the_field('subheading_2');?></div>
             <div class="button_box statistics_button_box">
                <button class="button_second" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_2');?></button>
             </div>
          </div>
       </div>
       <div class="col-sm-12">
          <div class="statistics_item wages_box d-none d-lg-block">
             <div class="row">
                <div><img src="<?php echo get_template_directory_uri().'/assets/img/wages.png'?>" alt="wages" class="img img-fluid"></div>
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
                   <div><img src="<?php echo get_template_directory_uri().'/assets/img/wages.png'?>" alt="wages" class="img img-fluid">
                   </div>
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