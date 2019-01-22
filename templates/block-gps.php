<section>
 <div class="container satelite_block">
    <div class="row">
       <div class="col-md-12">
          <div class="satelite_artbord" style="background-image: url('<?php assets_url('img/satelite_bottom_bg.png') ?>');">
             <h2><?php the_field('heading'); ?></h2>
             <img class="img img-fluid satelite_gps" src="<?php assets_url('img/gifs/satelite_gps.gif') ?>" alt="satelite_gps">
             <img class="img img-fluid satelite_server" src="<?php assets_url('img/gifs/satelite_server.gif') ?>" alt="satelite_server">
             <img class="img img-fluid satelite_mouse" src="<?php assets_url('img/gifs/satelite_mouse.gif') ?>" alt="satelite_mouse">
          </div>
          <div class="satelite_text" style="text-align: center;">
          	<?php the_field('subheading'); ?>
          </div>
       </div>
    </div>
 </div>
</section>