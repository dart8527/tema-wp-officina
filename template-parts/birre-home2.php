<section class="beer" id="beer">
  <div class="container">
    <h3 class="title">Le nostre birre piu amate e conosciute</h3>
    <div class="row">
      <div class="col-md-4 slider">
        <h3>CLASSICHE</h3>
        <div class="slider-beer">

          <?php $opt = array(
'post_type' => array( 'birre' ),
'posts_per_page' => -1,
'category_name'=>'classiche'

);
// The Query
$lista_birre = new WP_Query( $opt );

// The Loop
if ( $lista_birre->have_posts() ) {
while ( $lista_birre->have_posts() ) {
  $lista_birre->the_post();?>

  <div>
    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/birre/classiche/cortigiana.png" alt=""> -->
    <h2>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
      </h2>
  </div>
        <?php }
  /* Restore original Post Data */
  wp_reset_postdata();
  } ?>
        </div>
      </div>
      <div class="col-md-4 slider">
        <h3>STAGIONALI</h3>
        <div class="slider-beer">
          <?php $opt = array(
  'post_type' => array( 'birre' ),
  'posts_per_page' => -1,
  'category_name'=>'stagionali'

  );
  // The Query
  $lista_birre = new WP_Query( $opt );

  // The Loop
  if ( $lista_birre->have_posts() ) {
  while ( $lista_birre->have_posts() ) {
  $lista_birre->the_post();?>

  <div>
    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/birre/classiche/cortigiana.png" alt=""> -->
    <h2>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
      </h2>
  </div>
        <?php }
  /* Restore original Post Data */
  wp_reset_postdata();
  } ?>
      </div>
      </div>
      <div class="col-md-4 slider">
<h3>BIZZARRE</h3>
        <div class="slider-beer">
          <?php $opt = array(
  'post_type' => array( 'birre' ),
  'posts_per_page' => -1,
  'category_name'=>'bizzarre'

  );
  // The Query
  $lista_birre = new WP_Query( $opt );

  // The Loop
  if ( $lista_birre->have_posts() ) {
  while ( $lista_birre->have_posts() ) {
  $lista_birre->the_post();?>

          <div>
            <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
            <!-- <img src="<?php echo get_template_directory_uri() ?>/img/birre/classiche/cortigiana.png" alt=""> -->
            <h2>
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h2>
          </div>
        <?php }
  /* Restore original Post Data */
  wp_reset_postdata();
  } ?>


      </div>
      </div>
    </div>
  </div>
</section>
