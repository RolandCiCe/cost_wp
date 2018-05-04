<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CoST El Salvador</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="CoST El Salvador" content="CoST El Salvador">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/iconmonstr-iconic-font.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/font-awesome.min.css' ?>">

    <?php wp_head(); ?>
    <script>
        (function() {
          var cx = '008001883176470576403:953m6nuf9iu';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();

      window.onload = function(){
      document.getElementById('gsc-i-id1').placeholder = '¿Qué información está buscando? ';
      }
  </script>
  </head>

  <body <?php body_class(); ?> >
    <div class="">
      <header>
        <div class="pre-nav">
          <a class="" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cost@2x.jpg" class="img-responsive" width="171" height="44">
          </a>

          <div class="search-block">
            <!-- 289-->
            <?php $recent = new WP_Query("page_id=318"); while($recent->have_posts()) : $recent->the_post();?>
              <?php the_content(); ?>
             <?php endwhile; ?>
          </div>
        </div>



        <nav class="navbar navbar-expand-lg navegacion">



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

              <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo get_home_url().'/index.php/grupo-multisectoria' ?>">grupo multisectorial</a>
              </li>-->

              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" href="#/" id="mnuPublicaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    grupo multisectorial
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="mnuPublicaciones">
                    <li><a href="<?php echo get_home_url().'/index.php/grupo-multisectoria'?>">grupo multisectorial</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/grupo-multisectorial-actual'?>">Consejo directivo 2018 - 2020</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/grupo-multisectorial-anterior'?>">Consejo directivo 2016 - 2018</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" href="#/" id="mnuPublicaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    PUBLICACIONES
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="mnuPublicaciones">
                    <li><a href="<?php echo get_home_url().'/index.php/investigaciones'?>">Investigaciones</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/descargas'?>">Descargas</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/informes'?>">Informes de Aseguramiento</a></li>
                  </ul>
                </div>
              </li>

              <!--<li class="nav-item"><a class="nav-link" href="/cost_wp/index.php/eventos/">Eventos</a></li>-->
              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" href="#/" id="mnuPublicaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    EVENTOS
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="mnuPublicaciones">
                    <li><a href="<?php echo get_home_url().'/index.php/eventos-presentaciones'?>">Presentaciones</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/eventos-capacitaciones'?>">Capacitaciones</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/eventos-charlas'?>">Charlas</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" href="#/" id="mnuRendicion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    RENDICIÓN DE CUENTAS
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="mnuRendicion">
                    <li><a href="<?php echo get_home_url().'/index.php/planes-trabajo'?>">Planes de Trabajo</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/proyectos-aprobados'?>">Proyectos Aprobados</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-default dropdown-toggle" href="#/" id="mnuRendicion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Empleos
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="mnuRendicion">
                    <li><a href="<?php echo get_home_url().'/index.php/empleos'?>">Listado de empleos</a></li>
                    <li><a href="<?php echo get_home_url().'/index.php/contacto-cv'?>">Enviar Curriculum</a></li>
                  </ul>
                </div>
              </li>
            <!--  <li class="nav-item">
                <a class="nav-link" href="/cost_wp/index.php/empleos">empleos</a>
              </li>-->
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
