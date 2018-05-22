<?php
/* Template Name: Birreria */
get_header('cover') ?>


<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
             <div class="beer_text">
                <h2><?php the_field('sottotitolo') ?></h2>
                <?php if(have_posts()): ?>
                 <?php while(have_posts()): the_post() ?>
                <p><?php the_content() ?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
            </div>
            <div class="beer_tabs_filter">
                <ul class="nav nav-tabs">
                  <?php
            wp_list_categories( array(
                'orderby' => 'ID',
                'include' => array(9, 11, 10, 20 ),
                'title_li' => '',
                'style' => 'list',
               'walker'=> new Walker_Categories_Template

                 ) );?>
                </ul>
            </div>




        </div>
      </div>

      <div class="grid_beer box filter classiche" id="classiche">
          <div class="row">
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


                <div class="beer_thumb">
                    <a href="<?php  the_permalink() ?>"><div class="beer_filter"></div></a>
                    <div class="beer_title">
                        <a href="<?php  the_permalink() ?>"><h3 class="special-title"><?php the_title() ?></h3></a>
                    </div>
                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>

                </div>

                <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          } ?>
          </div>
     <div class="clearfix"></div>
      </div>

   <div class="grid_beer box filter bizzarre" id="bizzarre">
          <div class="row">
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



                <div class="beer_thumb">
                    <a href="<?php  the_permalink() ?>"><div class="beer_filter"></div></a>
                    <div class="beer_title">
                        <a href="<?php  the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                    </div>
                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>

                </div>

                <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          } ?>
          </div>
     <div class="clearfix"></div>
      </div>

       <div class="grid_beer box filter stagionali" id="stagionali">
          <div class="row">
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



                <div class="beer_thumb">
                    <a href="<?php  the_permalink() ?>"><div class="beer_filter"></div></a>
                    <div class="beer_title">
                        <a href="<?php  the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                    </div>
                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>

                </div>

                <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          } ?>
          </div>
     <div class="clearfix"></div>
      </div>




  </div>
</div>



<?php get_footer() ?>
