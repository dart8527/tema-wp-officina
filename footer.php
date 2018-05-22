
<footer class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php

        wp_nav_menu( array(
          'container' => '',
          'theme_location' =>'col-1',
          'menu_class' => 'footer-nav'
        ) );
         ?>

      </div>
      <div class="col-md-3">
        <?php

        wp_nav_menu( array(
          'container' => '',
          'theme_location' =>'col-2',
          'menu_class' => 'footer-nav'
        ) );
         ?>

      </div>
      <div class="col-md-3">
        <?php

        wp_nav_menu( array(
          'container' => '',
          'theme_location' =>'col-3',
          'menu_class' => 'footer-nav'
        ) );
         ?>

      </div>
      <div class="col-md-3">
        <?php

        wp_nav_menu( array(
          'container' => '',
          'theme_location' =>'col-4',
          'menu_class' => 'footer-nav'
        ) );
         ?>

      </div>
      <div class="clearfix"></div>
      <div class="footer-social">
        <?php

        wp_nav_menu( array(
          'container' => '',
          'theme_location' =>'social',
          'menu_class' => 'social'
        ) );
         ?>

      </div>
      <div class="copyright">
      
        <div id="TA_cdsscrollingravewide889" class="TA_cdsscrollingravewide">
            <ul id="30RwLy" class="TA_links AZeuWUS9z20">
              <li id="vIWDw0C5Ki" class="bfWUsP">
                <a target="_blank" href="https://www.tripadvisor.it/"><img src="https://static.tacdn.com/img2/t4b/Stacked_TA_logo.png" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
              </li>
            </ul>
        </div>
        <script async src="https://www.jscache.com/wejs?wtype=cdsscrollingravewide&amp;uniq=889&amp;locationId=11667279&amp;lang=it&amp;border=false&amp;shadow=true&amp;display_version=2"></script>

        <div class="loghetto">
          <img src="<?php echo get_template_directory_uri() ?>/asset/logo/logo-officina.png" alt="" width="100" height="60">
        </div>
        <span>L'officina food n' music - Piazza Roma 12 Monterotondo (RM) | Tel. 06 9096 8826 | info@lofficinafoodnmusic.it | P.Iva: 01503350702</span>
        <span>Privacy Policy | Cookie Policy | Credits</span>
        <div class="clearfix"></div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.1.0.js"></script>

<?php wp_footer(); ?>



  </body>
</html>
