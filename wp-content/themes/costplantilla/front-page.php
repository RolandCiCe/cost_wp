<?php get_header();?>

<section class="">
  <div id="costCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#costCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#costCarousel" data-slide-to="1"></li>
      <li data-target="#costCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-caption d-none d-md-block">
      <p>Pioneros de la transparencia</p>
      <h2 class="gotham-bold">en obras de infraestructura pública</h2>
      <h3>en el salvador</h3>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/imag_slide01.jpg' ;?>" alt="img01">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/imag_slide02.jpg' ;?>" alt="img02">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/imag_slide03.jpg' ;?>" alt="img03">
      </div>
    </div>
  </div>
</section>

<section class="bullets">

  <div class="text-center">
    <!--<h2 class="text-primary">BULLETS</h2>-->

    <small class="text-dark">SELECCIONA UNO DE LOS MENÚS.</small>
  </div>

  <div class="menu-menu-bullet-container"><ul id="menu-menu-bullet" class="bullets-row"><li id="menu-item-66" class="bullet bullet-a text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="/cost_wp/index.php/buenas-practicas/" class="no-text-transform">BUENAS PRACTICAS CoST</a></li>
  <li id="menu-item-65" class="bullet bullet-b text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="/cost_wp/index.php/dashboard-aseguramiento/" class="no-text-transform">MONITOREO DE PROYECTOS</a></li>
  </ul></div>
</section>

<div class="thick-ruler"></div>

<section class="eventos">
  <h2 class="text-center">EVENTOS</h2>

  <!--<div class="small-ruler"><div></div></div>-->

  <br /><br />

  <div class="events-list">
    <?php $i = 1; ?>
    <?php
     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query( array(
        'category_name' => 'eventos',
        'paged' => $paged
    ) );
    while( $query->have_posts() ): $query->the_post();

     ?>
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
                echo "<div class='item-hover'></div>";
              }
              else
              {
                echo "<div class='no-pic'></div><div class='item-hover'></div>";
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
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text' => sprintf( '<span>%1$s</span>', __( '<', 'text-domain' ) ),
            'next_text' => sprintf( '<span>%1$s</span>', __( '>', 'text-domain' ) ),
            'add_args'     => false,
           'add_fragment' => '',
      ));
    ?>
  </div>
</section>

<br />

<section class="historias-exito">
  <div class="text-center">
      <!--<h2>Historias de Éxito:</h2><br />

      <p class="italic"></p><br />

      <div><img class="thumbnail img-circle wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/generalidades/avatar.png' ;?>" alt="" width="96" height="96" /></div><br />

      <div class="small-ruler"><div></div></div>

      <span class="cost-sub">Gloria Lopez</span>
      <span class="cost-sub text-primary">Santa Tecla</span>-->

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
  <h2 style="text-align: center;">GRUPO MULTISECTORIAL</h2>

  <!--<div class="small-ruler"><div></div></div>-->

  <p class="text-center text-dark">Organismo rector de la iniciativa CoST El Salvador, integrado por academia, Sociedad Civil, Empresa privada y Gobierno.</p><br /><br />

  <div class="gms-row">
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 47@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 48@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 49@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/cades.png' ;?>" />
  </div>
  <br />
  <div class="gms-row">
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 51@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 52@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/Group 53@2x.png' ;?>" />
    <img class="" src="<?php echo get_template_directory_uri().'/img/front-page/logosgms/sacdel.png' ;?>" />
  </div>
</section>

<div class="thick-ruler"></div>

<section class="alianzas">
  <div class="container-fluid alianzas-container">

    <div class="alianzas-a text-center"><div class="container">
      <h3>ALIANZAS ESTRATÉGICAS</h3>

      <!--<div class="small-ruler"><div></div></div>-->

      <p>Alianzas para el fortalecimiento de la transparencia en la infraestructura pública de El Salvador.</p><br />

      <img class="aligncenter size-full wp-image-126" src="<?php echo get_template_directory_uri().'/img/front-page/logosaliest/baner_logos.jpg' ;?>" />
    </div></div>

    <div class="alianzas-b text-center"><div class="container">
      <!--<h3>COMPROMETIDOS CON</h3>-->

      <!--<div class="small-ruler"><div></div></div>-->

      <p></p><br />
    </div>

  </div>
</section>

<section class="contacto bg-light">
  <div class="row">
    <div class="col-xs-1 col-md-6">
      <div class="container"><?php get_template_part( 'templates/formulario', 'contacto' );?></div>
    </div>

    <div class="col-xs-1 col-md-6">
      <!--<?php get_template_part( 'templates/formulario', 'suscribe' );?> -->
      <?php $recent = new WP_Query("page_id=259"); while($recent->have_posts()) : $recent->the_post();?>
        <h2 class="text-light"><?php the_title(); ?></h2>
        <p></p>
        <p >Si quieres recibir en tu correo electrónico las últimas novedades que vaya publicando CoST El Salvador, favor escribe tu email.
</p>
        <p><?php the_content(); ?></p>
       <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer();?>
