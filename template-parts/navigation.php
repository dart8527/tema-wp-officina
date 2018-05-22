<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!--logo-->
      <a class="navbar-brand" href="">

          <img src="<?php echo get_template_directory_uri() ?>/asset/logo/logo-officina.png" class="img-responsive" alt="logo-officina" width="90" height="70">


      </a>
    </div>
    <div class="nav navbar-nav navbar-right">
       <!-- Use any element to open/show the overlay navigation menu -->
      <span id="open">
        <?php if (is_singular('eventi') || is_singular('birre')): ?>
          <i class="fa fa-bars" aria-hidden="true" style="color:#333;">
            <i class="fas fa-bars" ></i>
          </i>
      <?php else:?>
        <i class="fa fa-bars" aria-hidden="true">
          <i class="fas fa-bars" ></i>
        </i>
        <?php endif; ?>

      </span>
    </div>
  </div><!-- /.container-fluid -->
</nav>
