<?php get_header('no_cover') ?>
<?php /* Template Name: Contatti */ ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.5853983919087!2d12.617270815446597!3d42.05207007920875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6e2a5a95fc63%3A0xdab4e853a008a808!2sL&#39;Officina!5e0!3m2!1sit!2sit!4v1525797679673" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php  if (have_posts()): ?>
            <?php while(have_posts()) : the_post() ?>
          <article>
              <h1>Contattaci</h1>
              <p><?php the_content() ?></p>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
        </div>
        <div class="col-md-4 form-wrapper">
          <h1>Scrivici</h1>
        <?php echo do_shortcode('[contact-form-7 id="332" title="Contact form 1"]');?>
        </div>
        <div class="col-md-4">
          <h1>Seguici</h1>
          <ul class="contact-social">
            <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
              <li> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>

  </div>
</div>



<?php get_footer() ?>
