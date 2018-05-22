<!-- The overlay nav -->
<div id="myNav" class="overlay">
  <!-- Button to close the overlay navigation -->
  <span class="closebtn" id="closebtn"><i class="fas fa-times" ></i></span>


  <?php

  // wp_nav_menu( array(
  //     'container' => '',
  //   'theme_location' =>'primary',
  //   'menu_class' => 'top-menu'
  // ) );
   ?>

  <!-- Overlay content -->
  <div class="overlay-content">
    <div class="container-fluid" style="padding: 0;">
      <div class="row">
        <div class="overlay-inner">
          <div class="colonne"  style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);" id="col-1">
            <span class="trasp" ></span>
            <div class="nav-inner">
              <?php

              wp_nav_menu( array(
                'container' => '',
                'theme_location' =>'col-1',
                'menu_class' => 'nav-col'
              ) );
               ?>

            </div><!-- .nav-inner -->
          </div>
          <div class="colonne" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);" id="col-2">
            <span class="trasp" ></span>
            <div class="nav-inner">
              <?php

              wp_nav_menu( array(
                'container' => '',
                'theme_location' =>'col-2',
                'menu_class' => 'nav-col'
              ) );
               ?>

            </div><!-- .nav-inner -->
          </div>
          <div class="colonne" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);" id="col-3">
            <span class="trasp" ></span>
            <div class="nav-inner">
              <?php

              wp_nav_menu( array(
                'container' => '',
                'theme_location' =>'col-3',
                'menu_class' => 'nav-col'
              ) );
               ?>

            </div><!-- .nav-inner -->
          </div>
          <div class="colonne" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);" id="col-4">
              <span class="trasp" ></span>
              <div class="nav-inner">
                <?php

                wp_nav_menu( array(
                  'container' => '',
                  'theme_location' =>'col-4',
                  'menu_class' => 'nav-col'
                ) );
                 ?>

              </div><!-- .nav-inner -->
          </div>
        </div>






<div class="separetor" style="display:block;width:100%;height:10px;"></div>
        <div class="social-nav">
          <?php

          wp_nav_menu( array(
            'theme_location' =>'social',
            'menu_class' => 'social'
          ) );
           ?>

        </div><!-- .social-nav-->

      </div><!-- .row-->
    </div><!-- .container-fluid -->
  </div><!-- .overlay-content -->
</div><!-- #myNav -->
