<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Load Head / CSS -->
    <?php
      wp_head();
    ?>

  </head>
  <body>
    <!-- Navbar -->
    <header>
      <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<div id="" class="navbar-nav"></div>'
          )
        );
      ?>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">DUSTY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Blog</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
          </div>
        </div>
      </nav>

      <!-- Banner section -->
      <div class="banner background_banner">
        <h1 class="banner_title"><?php the_title(); ?></h1>
        <p class="banner_description">A demonstration of WP, Grid and PHP</p>
      </div>
    </header>
