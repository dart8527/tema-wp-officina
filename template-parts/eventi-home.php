<section class="eventi" id="eventi" style="margin-bottom:0;">
  <div class="container">
    <div class="row">
        <h3 class="title">EVENTI & COLLABORAZIONI</h3>
        <!--<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="62" height="9" viewBox="0 0 41.889 5.875" enable-background="new 0 0 41.889 5.875" xml:space="preserve">
					<path fill="none" stroke="#489489" stroke-width="2.5" stroke-miterlimit="10" d="M41.889,1.408c-1.258,0-2.381,0.506-3.18,1.207 c-0.943,0.826-1.566,1.852-3.801,1.852c-2.236,0-2.896-1.025-3.84-1.852c-0.799-0.701-1.887-1.207-3.143-1.207 c-1.258,0-2.34,0.506-3.139,1.207c-0.943,0.826-1.609,1.852-3.844,1.852s-2.854-1.025-3.797-1.852 c-0.797-0.701-1.928-1.207-3.184-1.207s-2.33,0.506-3.129,1.207C9.895,3.441,9.215,4.466,6.982,4.466 c-2.236,0-2.91-1.025-3.852-1.852C2.332,1.914,1.258,1.408,0,1.408"></path>
				</svg>-->
        <?php
        $args3 = array(
            'post_type' => 'eventi',
            'posts_per_page' => 3
            );

            $eventi = new WP_Query($args3);

            while($eventi->have_posts()): $eventi->the_post(); ?>
                 <?php
                  $locandina = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                  $locandina = $locandina[0];
                  ?>
                  <div class="event-box col-md-4">
                      <div class="inner-box">
                        <div class="event-image">
                          <a href="<?php the_permalink() ?>"><img src="<?php echo $locandina ?>" alt="" class="img-responsive"></a>
                        </div>
                      </div>
                    </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
  </div>
    <!--<div class="myslider">
        <?php
        $args3 = array(
            'post_type' => 'eventi',
            'posts_per_page' => -1
            );

            $eventi = new WP_Query($args3);

            while($eventi->have_posts()): $eventi->the_post(); ?>
                 <?php
                  $locandina = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                  $locandina = $locandina[0];
                  ?>

                  <div class="thumb">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo $locandina ?>" alt="" width="200" height="300"></a>

                  </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>-->
      </div>
</section>
