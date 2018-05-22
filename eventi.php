<?php
/* Template Name: Eventi */
get_header('cover') ?>
<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <?php
          $args3 = array(
              'post_type' => 'eventi',
              'posts_per_page' => -1
              );

              $eventi = new WP_Query($args3);?>
                <?php while($eventi->have_posts()): $eventi->the_post(); ?>
                  <?php
                   $locandina = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                   $locandina = $locandina[0];
                   ?>
                  <article <?php post_class(); ?>>

                    <div class="meta-info">
                      <h3><i class="far fa-calendar-alt"></i> <?php the_field('data_e_ora'); ?></h3>
                    </div>
                    <figure>
                        <a href="<?php the_permalink() ?>"><img src="<?php echo $locandina ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive"></a>
                    </figure>
                  </article>
                    <hr>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="col-md-1"></div>
          <?php get_sidebar(); ?>
      </div>

  </div>
</div>



<?php get_footer() ?>
