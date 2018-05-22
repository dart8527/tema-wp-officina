<?php
/* Template Name: Pinseria */
get_header('cover') ?>


<div class="main-content">


    <div class="container">


          <section id="pinse">
            <h2><?php the_field('sottotitolo') ?></h2>
              <div class="menu-cards">
                <?php
                $opt = array(
                    'post_type' => 'le_pinse',
                    'posts_per_page' => -1,
                    'category_name' => 'pinse'
                    );
                    ?>
                  <?php
                  $pinseria = new WP_query($opt);
                  while($pinseria->have_posts()) : $pinseria->the_post(); ?>
                <div class="menu-card">

                  <?php if (has_post_thumbnail()) {?>
                    <div class="menu-card-img">
                      <?php
                      $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                      $img_url = $img_url[0];
                      ?>
                      <a href="<?php echo $img_url ?>" data-fancybox="gallery" data-toggle="tooltip" title="<?php the_title() ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive'));?></a>
                    </div>
                <?php  }?>
                  <div class="menu-card-content">
                    <h2><?php the_title() ?><span class="price">15</span></h2>
                    <?php the_content() ?>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              </div><!-- menu-cards -->
          </section>

    </div><!-- container -->

</div><!-- main content -->
<?php get_footer() ?>
