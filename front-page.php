
<?php get_header() ?>

<!-- slider -->
<!-- Indicators -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php  $slide = array(
      'post_type' => 'slider',
      'posts_per_page' => -1,
      );
      // The Query
      $slider = new WP_Query( $slide);
      $x =0;
      while($slider->have_posts()): $slider->the_post(); $x++?>
      <?php $url_slide= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $url_slide=$url_slide[0];?>
          <div class="item <?php if($x == 1){echo'active';} ?>" style="background-image: url('<?php echo $url_slide?>');background-position:center center;height: 600px;background-size:cover;">
            <div class="container">
              <div class="didascalia">
                <figure class="img-title">
                  <img src="<?php the_field('titolo_immagine'); ?>" alt="" class="img-responsive">
                </figure>
                  <?php the_content() ?>
                <div class="slider-icon">
                <i class="o-icon"></i>
                </div>
              </div>
              </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
  </div>

  <ol class="carousel-indicators">
    <?php for ($i=0; $i < $x ; $i++) { ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){echo'active';} ?>"></li>
  <?php  } ?>
  </ol>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <i class="far fa-arrow-alt-circle-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <i class="far fa-arrow-alt-circle-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- sezione 1-->
<?php  get_template_part('template-parts/intro'); ?>
<!--sezione 2-->
<?php  get_template_part('template-parts/menu-home'); ?>
<!-- sezione 3 -->
<?php  get_template_part('template-parts/birre-home2'); ?>
<!-- sezione 3 -->
<?php  get_template_part('template-parts/eventi-home'); ?>

<?php get_footer() ?>
