<?php

get_header('no_cover') ?>
<div class="main-content">
  <div class="container">
      <div class="row">
        <h1>Il nostro blog</h1>
        <div class="col-md-7">

          <?php
                while(have_posts()): the_post(); ?>
                  <?php
                   $locandina = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                   $locandina = $locandina[0];
                   ?>
                  <article <?php post_class(); ?>>


                      <header>
                        <h1> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h1>
                      </header>

                    <figure>
                        <a href="<?php the_permalink() ?>">
                          <img src="<?php echo $locandina ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
                        </a>
                    </figure>
                    <div class="article-content">
                        <?php the_excerpt() ?>
                          <a href="<?php the_permalink() ?>" class="btn btn-officina">Leggi articolo</a>
                    </div>
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
