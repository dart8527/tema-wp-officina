<section class="menu" id="menu">
  <div class="container">
      <i class="glyph-icon flaticon-food-27 white"></i>
    <h3>LE NOSTRE SPECIALITA'</h3>
       <ul class='menu-tabs'>
            <?php
            wp_list_categories( array(
                'orderby' => 'name',
                'include' => array( 3, 4, 6 ),
                'title_li' => '',
                'style' => 'list',
               'walker'=> new Walker_Categories_Template,
                 ) );?>

        </ul>

    <div class="row">
        <!--menu officina-->
        <div class="box filter menu-officina" id="menu-officina">
            <?php
            $opt = array(
                'post_type' => 'menu_officina',
                'posts_per_page' => 6,
                 'orderby' => 'id'
                );

            $menu_officina = new WP_query($opt);
            while($menu_officina->have_posts()) : $menu_officina->the_post(); ?>
           <div class="col-md-6 menu-animation">

               <div class="menu-post">

                   <div class="post-item">

                       <div class="post-item-inner">
                           <div class="img-thumb">
                             <?php if (has_post_thumbnail()) {
                               the_post_thumbnail('medium', array('class' => 'img-responsive'));
                             }else{?>
                               <img src="<?php echo get_template_directory_uri() ?>\img\placeholder-image.png" alt="" class="img-responsive">
                           <?php  } ?>                           </div><!-- img-thumb -->
                           <div class="content-right">
                               <h3 class="text-left"><?php the_title(); ?><span class="price">15 €</span></h3>
                               <div class="content-desc text-left">
                                  <?php the_content(); ?>
                                </div>
                            </div><!-- content-right -->

                       </div><!-- post-item-inner -->
                     </div><!-- post-item -->

                   </div><!--menu-post -->

               </div><!--col-md-6 -->
               <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
            <div class="clearfix"></div>
           </div><!-- menu officina -->


     <!--menu officina orientale-->
        <div class="box filter menu-officina-orientale none" id="menu-officina-orientale">
            <?php
            $opt = array(
                'post_type' => 'menu_orientale',
                'posts_per_page' => 6
                );

            $menu_orientale = new WP_query($opt);
            while($menu_orientale->have_posts()) : $menu_orientale->the_post(); ?>
           <div class="col-md-6">

               <div class="menu-post">

                   <div class="post-item">

                       <div class="post-item-inner">
                           <div class="img-thumb">
                             <?php if (has_post_thumbnail()) {
                               the_post_thumbnail('medium', array('class' => 'img-responsive'));
                             }else{?>
                               <img src="<?php echo get_template_directory_uri() ?>\img\placeholder-image.png" alt="" class="img-responsive">
                           <?php  } ?>                           </div><!-- img-thumb -->
                           <div class="content-right">
                               <h3 class="text-left"><?php the_title(); ?><span class="price">15 €</span></h3>
                               <div class="content-desc text-left">
                                  <?php the_content(); ?>
                                </div>
                            </div><!-- content-right -->

                       </div><!-- post-item-inner -->
                     </div><!-- post-item -->

                   </div><!--menu-post -->

               </div><!--col-md-6 -->
               <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
            <div class="clearfix"></div>
           </div><!-- menu officina-orientale -->



            <!--pinse-->
        <div class="box filter pinse none" id="pinse">
            <?php
            $opt = array(
                'post_type' => 'le_pinse',
                'posts_per_page' => 6
                );

            $pinse = new WP_query($opt);
            while($pinse->have_posts()) : $pinse->the_post(); ?>
           <div class="col-md-6">

               <div class="menu-post">

                   <div class="post-item">

                       <div class="post-item-inner">
                           <div class="img-thumb">
                             <?php if (has_post_thumbnail()) {
                               the_post_thumbnail('medium', array('class' => 'img-responsive'));
                             }else{?>
                               <img src="<?php echo get_template_directory_uri() ?>\img\placeholder-image.png" alt="" class="img-responsive">
                           <?php  } ?>                           </div><!-- img-thumb -->
                           <div class="content-right">
                               <h3 class="text-left"><?php the_title(); ?><span class="price">15 €</span></h3>
                               <div class="content-desc text-left">
                                  <?php the_content(); ?>
                                </div>
                            </div><!-- content-right -->

                       </div><!-- post-item-inner -->
                     </div><!-- post-item -->

                   </div><!--menu-post -->

               </div><!--col-md-6 -->
               <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
           <div class="clearfix"></div>
           </div><!-- pinse -->


        </div><!-- row -->
    </div><!-- container -->


    <a href="http://127.0.0.1:4001/i-nostri-menu/" class="btn btn-officina"><i class="far fa-list-alt"></i> MENU COMPLETO</a>
  </div>
</section>
