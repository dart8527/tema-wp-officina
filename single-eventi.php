<?php

get_header('no_cover');?>


<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <article>
                <figure>
                  <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                </figure>
                <header>
                  <hgroup>
                    <h1><?php the_title() ?></h1>
                  </hgroup>
                </header>
                <div class="article-content">
                  <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                   <?php the_content() ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <hr>
                    <ul class="gallery-event">
                      <li <?php if(!get_field('immagine01')){echo 'style="display:none"';} ?>>
                        <a href="<?php echo get_field('immagine01') ?>" <?php if(get_field('immagine01')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php echo get_field('immagine01') ?>" alt="" class="img-responsive"></a>
                      </li>
                      <li <?php if(!get_field('immagine02')){echo 'style="display:none"';} ?>>
                        <a href="<?php the_field('immagine02') ?>" <?php if(get_field('immagine02')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php the_field('immagine02') ?>" alt="" class="img-responsive"></a>
                      </li>
                      <li <?php if(!get_field('immagine03')){echo 'style="display:none"';} ?>>
                        <a href="<?php the_field('immagine03') ?>" <?php if(get_field('immagine03')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php the_field('immagine03') ?>" alt="" class="img-responsive"></a>
                      </li>
                      <li <?php if(!get_field('immagine04')){echo 'style="display:none"';} ?>>
                        <a href="<?php the_field('immagine04') ?>" <?php if(get_field('immagine04')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php the_field('immagine04') ?>" alt="" class="img-responsive"></a>
                      </li>
                      <li <?php if(!get_field('immagine05')){echo 'style="display:none"';} ?>>
                        <a href="<?php the_field('immagine05') ?>" <?php if(get_field('immagine05')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php the_field('immagine05') ?>" alt="" class="img-responsive"></a>
                      </li>
                      <li <?php if(!get_field('immagine06')){echo 'style="display:none"';} ?>>
                        <a href="<?php the_field('immagine06') ?>" <?php if(get_field('immagine06')){echo 'data-fancybox="gallery"';} ?>>  <img src="<?php the_field('immagine06') ?>" alt="" class="img-responsive"></a>
                      </li>
                    </ul>
                    <hr>

                            <?php comments_template() ?>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <div class="info-event">
                <h3>Informazioni evento</h3>
                <hr>
                <h4><i class="fas fa-map-marker-alt"></i> L'Officina Food N' Music </h4>
                <p>
                  <a href="https://www.google.it/maps/dir//Piazza+dei+Re+di+Roma,+12,+00183+Roma+RM/@41.8812406,12.5116682,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x132f61ec151d3437:0xe74d2688ca3bcc8f!2m2!1d12.5138569!2d41.8812406">Piazza Roma 12 00015 Monterotondo</a>
                </p>

                <i class="fas fa-clock"></i>  <?php the_field('data_e_ora'); ?>
              </div>
              <div class="share">
                <h3>Condividi Evento</h3>

                <ul class="share-buttons">
                  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&quote=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="<?php echo get_template_directory_uri() ?>/img/Facebook.png" /></a></li>
                  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="<?php echo get_template_directory_uri() ?>/img/Twitter.png" /></a></li>
                  <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="<?php echo get_template_directory_uri() ?>/img/Google+.png" /></a></li>
                  <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="<?php echo get_template_directory_uri() ?>/img/Email.png" /></a></li>
                </ul>
              </div>
              <div id="TA_cdswritereviewlg902" class="TA_cdswritereviewlg">
                <ul id="zCV0RRRzMkvL" class="TA_links hPNOz8fllX9">
                  <li id="5BgvFhhiI" class="nsWhFGNkY">
                    <a target="_blank" href="https://www.tripadvisor.it/"><img src="https://www.tripadvisor.it/img/cdsi/img2/branding/medium-logo-12097-2.png" alt="TripAdvisor"/></a>
                  </li>
                </ul>
              </div>
              <script async src="https://www.jscache.com/wejs?wtype=cdswritereviewlg&amp;uniq=902&amp;locationId=11667279&amp;lang=it&amp;lang=it&amp;display_version=2"></script>
              <div class="other-event">
                <h3>Altri eventi</h3>

                <ul class="list-event">
                  <?php
                $ID = get_the_ID();
                  $args3 = array(
                    'post__not_in' => array( $ID ),
                      'post_type' => 'eventi',
                      'posts_per_page' => -1
                      );

                      $eventi = new WP_Query($args3);?>
                        <?php while($eventi->have_posts()): $eventi->the_post(); ?>
                  <li>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a><br>
                    <span><i class="fas fa-clock"></i>  <?php the_field('data_e_ora'); ?></span>
                   </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </ul>
              </div>




            </div>

        </div>


    </div>
</div>





<?php get_footer();?>
