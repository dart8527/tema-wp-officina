<!-- The overlay nav -->
<div id="myNav" class="overlay">
  <!-- Button to close the overlay navigation -->
  <span class="closebtn" id="closebtn"><i class="fas fa-times" ></i></span>
  <?php

  wp_nav_menu( array(
    'theme_location' =>'primary',
    'menu_class' => 'primary-menu'
  ) );
   ?>

  <!-- Overlay content -->
  <div class="overlay-content">
    <div class="container-fluid" style="padding: 0;">
      <div class="row">
        <div class="col-md-3 col-sm-6" id="col-1">
          <span class="menu-back-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);"></span>
          <span class="velo-nero-trasp" ></span>
          <div class="menu-colon">
            <div class="menu-slide">
                <div class="menu-content">
                  <?php

                  wp_nav_menu( array(
                    'theme_location' =>'col-1',
                    'menu_class' => 'nav-col'
                  ) );
                   ?>

                </div><!-- .menu-content -->
            </div><!-- .menu-slide -->
          </div><!-- .menu.colon -->
        </div><!-- .col-md-3 -->

        <div class="col-md-3 col-sm-6" id="col-2">
          <span class="menu-back-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/birre.jpg);"></span>
          <span class="velo-nero-trasp"></span>
          <div class="menu-colon">
            <div class="menu-slide">
                <div class="menu-content">
                  <?php

                  wp_nav_menu( array(
                    'theme_location' =>'col-2',
                    'menu_class' => 'nav-col'
                  ) );
                   ?>

                </div><!-- .menu-content -->
            </div><!-- .menu-slide -->
          </div><!-- .menu.colon -->
        </div><!-- .col-md-3 -->

        <div class="col-md-3 col-sm-6" id="col-3">
          <span class="menu-back-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);"></span>
          <span class="velo-nero-trasp" ></span>
          <div class="menu-colon">
            <div class="menu-slide">
                <div class="menu-content">
                  <?php

                  wp_nav_menu( array(
                    'theme_location' =>'col-3',
                    'menu_class' => 'nav-col'
                  ) );
                   ?>

                </div><!-- .menu-content -->
            </div><!-- .menu-slide -->
          </div><!-- .menu.colon -->
        </div><!-- .col-md-3 -->

        <div class="col-md-3 col-sm-6" id="col-4">
          <span class="menu-back-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero.jpeg);"></span>
          <span class="velo-nero-trasp" ></span>
          <div class="menu-colon">
            <div class="menu-slide">
                <div class="menu-content">
                  <?php

                  wp_nav_menu( array(
                    'theme_location' =>'col-4',
                    'menu_class' => 'nav-col'
                  ) );
                   ?>

                </div><!-- .menu-content -->
            </div><!-- .menu-slide -->
          </div><!-- .menu.colon -->
        </div><!-- .col-md-3 -->
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
