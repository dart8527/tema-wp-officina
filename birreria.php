<?php
/* Template Name: Birreria */
get_header('cover') ?>


<div class="main-content">
  <div class="list-bar">
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="menu-list">
                <?php
              wp_list_categories( array(
                   'orderby' => 'ID',
                  'include' => array(9, 11, 10 ),
                  'title_li' => '',
                  'style' => 'list',
                   'walker'=> new Walker_Categories_Template
                   ) );?>

              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
  </div>
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
        </div>
      </div>
      <section id="classiche">
            <h1 class="text-center">CLASSICHE</h1>
            <hr>
            <div class="menu-cards">
              <?php
              $opt = array(
                  'post_type' => 'birre',
                  'posts_per_page' => -1,
                  'category_name' => 'classiche'
                  );
                  ?>
                <?php
                $classiche = new WP_query($opt);
                while($classiche->have_posts()) : $classiche->the_post(); ?>
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
                  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a><span class="price"><?php the_field('prezzo') ?></span></h2>
                  <?php the_excerpt() ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          </div><!-- menu-cards -->
      </section>
      <section id="bizzarre">
          <h1 class="text-center">BIZZARRE</h1>
          <hr>
          <div class="menu-cards">
            <?php
            $opt = array(
                'post_type' => 'birre',
                'posts_per_page' => -1,
                'category_name' => 'bizzarre'
                );
                ?>
              <?php
              $bizzarre = new WP_query($opt);
              while($bizzarre->have_posts()) : $bizzarre->the_post(); ?>
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
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a><span class="price"><?php the_field('prezzo') ?></span></h2>
                <?php the_excerpt() ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          </div><!-- menu-cards -->
      </section>
      <section id="stagionali">
          <h1 class="text-center" >STAGIONALI</h1>
          <hr>
          <div class="menu-cards">
            <?php
            $opt = array(
                'post_type' => 'birre',
                'posts_per_page' => -1,
                'category_name' => 'stagionali'
                );
                ?>
              <?php
              $stagionali= new WP_query($opt);
              while($stagionali->have_posts()) : $stagionali->the_post(); ?>
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
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a><span class="price"><?php the_field('prezzo') ?></span></h2>
                <?php the_excerpt() ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          </div><!-- menu-cards -->
      </section>
  </div>

</div>



<?php get_footer() ?>
