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

<section class="bullets">
  
  <div class="text-center">
    <h2 class="text-primary">BULLETS</h2>

    <small class="text-dark">SELECCIONA UNO DE LOS MENÚS.</small>
  </div>

  <div class="menu-menu-bullet-container"><ul id="menu-menu-bullet" class="bullets-row"><li id="menu-item-66" class="bullet bullet-a text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="http://localhost/cost_wp/index.php/buenas-practicas-cost/">BUENAS PRACTICAS CoST</a></li>
  <li id="menu-item-65" class="bullet bullet-b text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="http://localhost/cost_wp/index.php/monitoreo-de-proyectos/">MONITOREO DE PROYECTOS</a></li>
  </ul></div>
</section>

<div class="thick-ruler"></div>

<section class="eventos">
  <h2 class="text-center">EVENTOS</h2>

  <div class="small-ruler"><div></div></div>

  <br /><br />

  <div class="events-list">
    <?php $i = 1; ?>
    <?php while( have_posts() ): the_post(); ?>
      <article class="entrada-eventos entrada-<?php echo $i; ?>">
          <div class="event-image">
            <div class="the-date bg-primary text-center">
              <span class="the-day"><?php echo the_time('d'); ?></span><br />
              <span class="the-month"><?php the_time('M.y'); ?></span>
            </div>

            <?php
              if ( has_post_thumbnail(get_the_ID()) )
              {
                the_post_thumbnail(); 
              } 
            ?>
          </div>

          <header class="informacion-entrada clear">
            <div class="titulo-entrada">
              <?php the_title( '<p class="post-title"><b>', '</b></p>' ) ;?>

              <p class="autor text-muted">
                <span class="fa fa-user" aria-hidden="true"></span>&nbsp;<span><?php the_author(); ?></span>
              </p>
            </div>

            <div class="contenido-entrada">
              <?php the_excerpt(); ?>
              <div class="read-more-link"><a class="text-primary event-permalink" href="<?php the_permalink(); ?>">Leer más...</a></div>
            </div>
          </header>
      </article>
      <?php $i++; ?>
    <?php endwhile; ?>
  </div>

  <br />

  <div class="text-center events-pagination">
    <?php 
      echo paginate_links(array(
        'prev_text' => sprintf( '<span>%1$s</span>', __( '<', 'text-domain' ) ),
        'next_text' => sprintf( '<span>%1$s</span>', __( '>', 'text-domain' ) ),
      )); 
    ?>
  </div>
</section>

<br />

<section class="historias-exito">
  <div class="text-center">
      <h2>Historias de Éxito:</h2><br />

      <p class="italic"></p><br />

      <div><img class="thumbnail img-circle wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/generalidades/avatar.png' ;?>" alt="" width="96" height="96" /></div><br />

      <div class="small-ruler"><div></div></div>

      <span class="cost-sub">Gloria Lopez</span>
      <span class="cost-sub text-primary">Santa Tecla</span>

  </div>
</section>

<section class="mi-vi row bg-primary">
  <div class="mivi-item col-xs-1 col-sm-1 col-md-6">
      <h2>Misión</h2>
      
      <p>"Ser referente de incidencia en la transparencia de la obra pública."</p>
  </div>

  <div class="mivi-item col-xs-1 col-sm-1 col-md-6">
      <h2>Visión</h2>

      <p>"Promover una cultura de transparencia y ética en los procesos de construcción de la obra pública divulgando información sistematizada que morive la auditoría social y la rendicion de cuentas."</p>
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

<div class="thick-ruler"></div>

<section class="alianzas">
  <div class="container-fluid alianzas-container">

    <div class="alianzas-a text-center"><div class="container">
      <h3>ALIANZAS ESTRATÉGICAS</h3>

      <div class="small-ruler"><div></div></div>

      <p>Alianzas para el fortalecimiento de la transparencia en la infraestructura pública de El Salvador.</p><br />

      <img class="aligncenter size-full wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/logosaliest/iaip@2x.png' ;?>" />
    </div></div>

    <div class="alianzas-b text-center"><div class="container">
      <h3>COMPROMETIDOS CON</h3>

      <div class="small-ruler"><div></div></div>

      <p></p><br />
    </div>

  </div>
</section>

<section class="contacto bg-light">
  <div class="container-fluid">
    <div class="col-xs-1 col-md-6">
      <?php get_template_part( 'templates/formulario', 'contacto' ); ?>
    </div>
  </div>
</section>

<?php get_footer();?>
