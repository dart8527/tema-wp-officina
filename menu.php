<?php
/* Template Name: Menu */
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
                  'include' => array(3, 4, 6 ),
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
          <section id="menu-officina">
                <h1 class="text-center">MENU OFFICINA</h1>
                <hr>
                <div class="menu-cards">
                  <?php
                  $opt = array(
                      'post_type' => 'menu_officina',
                      'posts_per_page' => -1,
                      'category_name' => 'menu-officina'
                      );
                      ?>
                    <?php
                    $menu_officina = new WP_query($opt);
                    while($menu_officina->have_posts()) : $menu_officina->the_post(); ?>
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
          <section id="menu-officina-orientale">
              <h1 class="text-center">MENU OFFICINA ORIENTALE</h1>
              <hr>
              <div class="menu-cards">
                <?php
                $opt = array(
                    'post_type' => 'menu_orientale',
                    'posts_per_page' => -1,
                    'category_name' => 'menu-officina-orientale'
                    );
                    ?>
                  <?php
                  $menu_officina_orientale = new WP_query($opt);
                  while($menu_officina_orientale->have_posts()) : $menu_officina_orientale->the_post(); ?>
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
          <section id="pinse">
              <h1 class="text-center" >PINSERIA</h1>
              <hr>
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
