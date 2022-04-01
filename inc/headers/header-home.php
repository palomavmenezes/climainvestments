<!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top home">
    <div class="container">

      <nav class="main-nav float-left d-none d-lg-block">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

          <li><?php if(is_user_logged_in()) : ?>
            <a href="<?php get_site_url(); ?>/wp-login.php?action=logout&_wpnonce=0dc79479c3" class="logout">Logout</a>
          <?php endif; ?>
          </li>
      </nav><!-- .main-nav -->

      <div class="logo float-right">
        <a href="<?php echo get_site_url(); ?>" class="scrollto"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="" class="img-fluid"></a>
      </div>
      
    </div>
  </header><!-- #header -->