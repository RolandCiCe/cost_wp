<?php get_header();?>

<section class="">
  <div id="costCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#costCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#costCarousel" data-slide-to="1"></li>
      <li data-target="#costCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-caption d-none d-md-block">
      <p>pioneros de la transparencia</p>
      <h1 class="gotham-bold">en obras de infraestructura</h1>
      <h3>en el salvador</h3>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide1@2x.png' ;?>" alt="img01">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide02@2x.png' ;?>" alt="img02">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide3@2x.png' ;?>" alt="img03">
      </div>
    </div>
  </div>
</section>

<section>
  <h2>Bullets</h2>
  <p>Selecciona uno de los menus. </p>
  <div class="">
    <div class="col-sm-12">
      <div class="">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu_bullets',
          ) );
         ?>
      </div>
    </div>
  </div>
</section>

<div class="thick-ruler"></div>

<section>
  <h2>Eventos</h2>
  <div class="">



        <div class="principal contenedor">
          <main class="texto-centrado contenido-paginas">
            <?php while(have_posts()): the_post(); ?>
              <article class="entrada-eventos">
                  <?php the_post_thumbnail(); ?>
                  <header class="informacion-entrada clear">

                    <div class="titulo-entrada">
                      <?php the_title( '<h2>', '</h2>' ) ;?>
                      <p class="autor">
                        <i class="fa fa-user" aria-hidden="true"><?php the_author(); ?></i>
                      </p>
                    </div>
                    <div class="fecha">
                      <time>
                        <?php echo the_time('d'); ?>
                        <span><?php the_time('M'); ?></span>
                      </time>
                    </div>
                  </header>
                  <div class="contenido-entrada">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>"> Leer mas... </a>
                  </div>
              </article>
            <?php endwhile; ?>
            <?php echo paginate_links( array(
              'prev_text'    => sprintf( '<i></i> %1$s', __( 'Anterior', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Siguiente', 'text-domain' ) ),)

            ); ?>
          </main>

        </div>


  </div>
</section>

<section class="historias-exito">
  <div class="text-center">
      <h2>Historias de Éxito:</h2><br />

      <p class="italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac condimentum sem, eget laoreet sem. Maecenas euismod efficitur quam, vel viverra felis mollis in. </p><br />

      <div><img class="thumbnail img-circle wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/generalidades/avatar.png' ;?>" alt="" width="96" height="96" /></div><br />

      <div class="small-ruler"><div></div></div>

      <span class="cost-sub">Gloria Lopez</span>
      <span class="cost-sub text-primary">Santa Tecla</span>

  </div>
</section>

<section class="mi-vi row bg-primary">
  <div class="mivi-item col-xs-1 col-sm-1 col-md-6">
      <h2>Misión</h2>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac condimentum sem, eget laoreet sem. Maecenas euismod efficitur quam, vel viverra felis mollis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas sit amet gravida enim, ornare mattis enim. Praesent cursus purus ex, at ultrices libero aliquet vitae. Phasellus nec mi id mi accumsan pellentesque. Sed sodales libero pharetra leo commodo auctor. Cras eu consequat purus. Nullam convallis augue id lobortis feugiat. Suspendisse vehicula blandit faucibus. Vestibulum eget augue lacinia, fringilla lorem ut, faucibus odio.</p>
  </div>

  <div class="mivi-item col-xs-1 col-sm-1 col-md-6">
      <h2>Visión</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac condimentum sem, eget laoreet sem. Maecenas euismod efficitur quam, vel viverra felis mollis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas sit amet gravida enim, ornare mattis enim. Praesent cursus purus ex, at ultrices libero aliquet vitae. Phasellus nec mi id mi accumsan pellentesque. Sed sodales libero pharetra leo commodo auctor. Cras eu consequat purus. Nullam convallis augue id lobortis feugiat. Suspendisse vehicula blandit faucibus. Vestibulum eget augue lacinia, fringilla lorem ut, faucibus odio.</p>
  </div>
</section>

<section class="gms">
  <h2 style="text-align: center;">GRUPO MULTISECTORIAL (GMS)</h2>

  <div class="small-ruler"><div></div></div>

  <p class="text-center text-dark">Organismo rector de la iniciativa CoST El Salvador, integrado por academia, Sociedad Civil, Empresa privada y Gobierno.</p><br /><br />

  <div class="gms-row">
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 47@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 48@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 49@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 50@2x.png' ;?>" />
  </div>
  <br />
  <div class="gms-row">
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 51@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 52@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 53@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/sacdel@2x.png' ;?>" />
  </div>
</section>

<section>
      <div class="">
        
        
      </div>
    </div>

    <div class="thick-ruler"></div>

    <div class="alianzas">

    <div>
      <h2 style="text-align: center;">Alianzas Estrategicas</h2>
    </div>
    <div>
      <p style="text-align: center;">Alianzas para el fortalecimiento de la tranparencia en la infraestructura publica de El Salvador</p>
    </div>
    <div class="">
      <img class="aligncenter size-full wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/logosaliest/iaip@2x.png' ;?>" alt="" width="58" height="58" />
    </div>
    </div>
    <div class="comprometidos">
      <div>
        <h2 style="text-align: center;">COMPROMETIDOS CON</h2>
      </div>
      <div class="">
        <img class="aligncenter size-full wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/compr/iaip@2x.png' ;?>" alt="" width="58" height="58" />
      </div>
    </div>


</section>
<section>

</section>
<section class="contacto">
  <div class="container">
    <div class="columnas2-4">
      formulario aqui
    </div>
    <div class="columnas2-4">
      <?php get_template_part( 'templates/formulario', 'contacto' ); ?>
    </div>
  </div>
</section>

<?php get_footer();?>
