<!--sezione 1-->
<section class="infoUs" id="intro">
  <div class="container">
    <div class="row">
      <?php
                  $args = array(
          'post_type' => array( 'page' ),
          'posts_per_page' => 1,
          'name' => 'benvenuto'
          );
          // The Query
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
              $the_query->the_post();?>
                  <div class="col-md-6">
                    <div class="text" id="text-intro" >
                      <h3><?php echo get_the_title()  ?></h3>
                      <h4><?php the_field('sottotitolo') ?></h4>
                      <?php the_content() ?>

                      <!--<a href="<?php echo get_permalink_by_name('la-nascita-dellofficina'); ?>" class="btn btn-officina">Visita la nostra Gallery</a>-->
                    </div>
                  </div>
                  <div class="col-md-6" id="img-intro">
                    <?php
                    $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $img_url = $img_url[0];
                    ?>
                    <img src="<?php echo $img_url ?>" alt="" class="img-responsive img-1">
                  </div>
              <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          } ?>
    </div>
  </div>
</section>
