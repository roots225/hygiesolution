<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?php
    // Print the <title> tag based on what is being viewed.
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    echo " | $site_description";
  }

    // Add a page number if necessary:
  if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
    /* translators: %s: Page number. */
    echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );
  }

  ?>
  </title>

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" type="image/x-icon">

  <meta name="description" content="Une solution pensée par des experts de la restauration qui simplifie vos enregistrements HACCP."/>

  <meta property="og:locale" content="fr_FR" />
  <meta property="og:type" content="software" />
  <meta property="article:publisher" content="https://www.facebook.com/hygiesolution/" />
  <meta name="twitter:site" content="@hygiesolution"/>

  <meta property="og:type" content="application" />
  <meta property="og:title" content="Une solution pensée par des experts de la restauration qui simplifie vos enregistrements HACCP." />
  <meta property="og:url" content="https://www.hygiesolution.com" />
  <meta property="og:site_name" content="Hygie Solutions" />
  <!-- <meta property="og:image" content="https://relaistv.com/app/uploads/2020/11/logo-300x150.png" /> -->
  <meta property="og:image:alt" content="Une solution pensée par des experts de la restauration qui simplifie vos enregistrements HACCP." />
  <meta property="og:description" content="Une solution pensée par des experts de la restauration qui simplifie vos enregistrements HACCP." />

  <meta name="reply-to" content="contact@hygiesolution.com">
  <meta name="category" content="application">
  <meta name="robots" content="index">
  <meta name="revisit-after" content="1 day">
  <meta name="author" lang="fr" content="Hygie Solutions">
  <meta name="copyright" content="Hygie Solutions - Tous droits réservés">
  <meta name="identifier-url" content="https://www.hygiesolution.com">

  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link defer href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <?php wp_head(); ?>
</head>
<body>
<?php
      wp_nav_menu( array( 'theme_location' => 'primary' ) );
    ?>

  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="images/logo-hygie.png" alt=""/></a>
        <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fonctionnalités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-mobile">
      <div class="navbar-container d-flex align-items-center">
        <h1 class="menu-title">Menu</h1>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fonctionnalités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tarifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <?php if(is_home() || is_front_page()): ?>
    <section class="home-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="banner-content d-flex flex-column justify-content-center align-items-center">
              <h1 class="title">Hygie, la solution qui digitalise votre plan de maîtrise sanitaire</h1>
              <div class="description">Une solution pensée et conçue par des experts de la restauration qui simplifie vos enregistrements HACCP.</div>
              <!-- <p>Une solutions pensée et conçue par des experts de la restauration</p> -->
              <div class="btn-group mt-5">
                <a href="#" class="mx-4"><img src="https://foton.qodeinteractive.com/wp-content/uploads/2018/06/side_img1.png" alt=""></a>
                <a href="#"><img src="https://dev.hygiesolution.com/wp-content/uploads/2018/06/frame-button-2-1.png" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app-image-view">
              <img class="" src="https://hygiesolution.com/wp-content/uploads/2020/04/chef_app_illustration.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </header>
  <main>