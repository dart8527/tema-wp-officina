<?php

get_header('cover');?>


<div class="main-content">
    <div class="container">
        <div class="row">
          <div class="col-md-7">
            <?php
                  while(have_posts()): the_post(); ?>

                    <article <?php post_class(); ?>>

                      <div class="meta-info">
                        <header>
                          <h3><?php the_title(); ?></h3>
                        </header>
                      </div>
                      <div class="article-content">
                          <?php the_content() ?>
                      </div>
                    </article>
                      <hr>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                    <?php comments_template() ?>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>





<?php get_footer();?>
