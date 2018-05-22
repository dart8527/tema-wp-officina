<?php
/* Template Name: La storia */
get_header('cover') ?>


<div class="main-content">
  <div class="container">
      <div class="row">

        <div class="col-md-8">
            <?php if(have_posts()) : ?>
            <?php while(have_posts())  : the_post(); ?>

              <article>

                 <?php the_content() ?>

              </article>

     <?php endwhile; ?>
      <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>

      </div>

  </div>
</div>



<?php get_footer() ?>
