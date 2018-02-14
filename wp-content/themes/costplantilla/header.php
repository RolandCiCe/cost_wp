<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Cost</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header>
    <nav class="navegacion">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cost@2x.png" class="img-responsive">
          </div>
          <div class="navbar">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'menu_principal'


              ) );
             ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
