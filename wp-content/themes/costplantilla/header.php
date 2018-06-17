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
            <?php get_search_form();?>
          </div>
        </div>
<!-- MENU-->
          <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>


      </header>
