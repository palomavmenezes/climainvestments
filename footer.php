<?php

	/**
	 * FOOTER TEMPLATE
	 */

?>

</body>
</html>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

  <section id="menus-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 medias-sociais">
          <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Clima Investments">
        </div>

        <div class="col-md-3">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum1' ) ); ?>
        </div>

        <div class="col-md-3">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum2' ) ); ?>
        </div>

        <div class="col-md-3 medias-sociais">
          <ul class="redes-sociais">
            <li><a href="https://instagram.com/climainvestments" target="_blank" class="hvr-icon-pop"><i class="fa fa-instagram hvr-icon"></i></a></li>
            <li><a href="https://facebook.com/climainvestments" target="_blank" class="hvr-icon-pop"><i class="fa fa-facebook hvr-icon"></i></a></li>
            <li><a href="https://linkedin.com/in/climainvestments" target="_blank" class="hvr-icon-pop"><i class="fa fa-linkedin hvr-icon"></i></a></li>
            <li><a href="https://twitter.com/in/climainvestments" target="_blank" class="hvr-icon-pop"><i class="fa fa-twitter hvr-icon"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 txt-footer">
          Clima Investments Ltd is an English Ltd company. It is not an investment platform, you cannot trade using our website, we do not give recommendations on securities, nor do we advise on portfolios. We provide data, information, facts and encourage our users to form their own views. Our users will trade and make investments using third party regulated investment platforms that are regulated entities under different financial authority bodies.
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 copyright">
          &copy; Copyright <strong>Clima Investments Ltd</strong>. All rights reserved. Developed by <a class="itsin" href="https://itsin.com.br">It's In</a>
        </div>
      </div>
    </div>
  </section>

  </footer><!-- #footer -->


  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


<?php wp_footer(); ?>
</body>
</html>