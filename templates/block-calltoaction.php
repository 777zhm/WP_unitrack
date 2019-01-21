<section>
   <div class="container">
      <div class="row justify-content-center calltoaction_block">
         <div class="col-lg-6">
            <h3><?php the_field('heading_1');?></h3>
            <div><?php the_field('subheading_1');?></div>
            <button class="button_second" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_1');?></button>
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
         </div>
         <div class="col-lg-6">
            <h3><?php the_field('heading_2');?></h3>
            <div><?php the_field('subheading_2');?></div>
            <button class="button_first" type="button" data-toggle="modal" data-target="#presentationModal"><?php the_field('button_text_2');?></button>
         </div>
      </div>
   </div>
</section>