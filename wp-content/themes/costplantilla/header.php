<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CoST El Salvador</title>

    <meta charset="UTF-8">
    <meta name="CoST El Salvador" content="CoST El Salvador">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/iconmonstr-iconic-font.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/font-awesome.min.css' ?>">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <div class="">
      <header>
        <nav class="navbar navbar-expand-lg navegacion">

          <a class="navbar-brand" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cost@2x.png" class="img-responsive">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#costNavbar" aria-controls="costNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="im im-menu"></span>
          </button>

          <div class="collapse navbar-collapse gotham-bold" id="costNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_home_url() ?>">inicio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_home_url().'/index.php/quienes-somos' ?>">quiénes somos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_home_url().'/index.php/grupo-multisectoria' ?>">grupo multisectorial</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">publicaciones</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">rendición de cuentas</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">empleos</a>
              </li>
            </ul>
            <?php
              /*wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'menu_class' => 'navbar-nav',
                'container_class' => 'collapse navbar-collapse',
                'container' => 'div',
                'container_id' => 'costNavbar',
              ));*/
            ?>
          </div>
        </nav>
      </header>
