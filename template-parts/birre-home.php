<section class="beer" id="beer">
  <div class="container">
<h3 class="title">Le nostre birre piu amate e conosciute</h3>


   <div class="myslider">
        <?php
        $args2 = array(
            'post_type' => 'birre',
            'posts_per_page' => -1
            );

            $birre = new WP_Query($args2);

            while($birre->have_posts()): $birre->the_post(); ?>
                 <?php
                  $beer = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                  $beer = $beer[0];
                  ?>

                  <div class="thumb">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo $beer ?>" alt="" width="80%" height="400" ></a>
                    <div class="info">
                      <h3><?php the_title() ?></h3>

                    </div>
                  </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>
      </div>
</section>
