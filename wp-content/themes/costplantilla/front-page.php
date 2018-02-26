<?php get_header();?>

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide1@2x.png' ;?>" alt="First slide">
     </div>
     <div class="carousel-item">
       <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide02@2x.png' ;?>" alt="Second slide">
     </div>
     <div class="carousel-item">
       <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/SLIDE/slide3@2x.png' ;?>" alt="Third slide">
     </div>
   </div>
  </div>
</section>
<section>
  <h2>Bullets</h2>
  <p>Selecciona uno de los menus. </p>
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu_bullets',
          ) );
         ?>
      </div>
    </div>
  </div>
</section>

<section style="width:100%; margin:30px; padding:30px;">
  <h2>Eventos</h2>
  <div class="">
    <?php get_template_part( 'page', 'blog' ); ?>
  </div>
</section>
<section class="principal contenedor">
    <main class="texto-cerrado contenido-paginas">
        <div class="historias-exito">
            <h2>historias de Exito</h2>
            <?php
                $args = array(
                    'posts_per_page' => 1,
                    'category_name' => 'HistoriaExito'
                );
                $historiaexitos = new WP_Query($args);
                while($historiaexitos->have_posts()): $historiaexitos->the_post();
                ?>
                <div class="historiaexitos-title">
                    <?php the_title(); ?>
                </div>
                <div class="historiaexitos-posts">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
        <div class="Mision">
            <h2>Mision</h2>
            <?php
                $argsm = array(
                    'posts_per_page' => 1,
                    'category_name' => 'mision'
                );
                $mision = new WP_Query($argsm);
                while($mision->have_posts()): $mision->the_post();
                ?>
                <div class="mision-title">
                    <?php the_title(); ?>
                </div>
                <div class="mision-posts">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; wp_reset_postdata();?>
        </div>
        <div class="Vision">
            <h2>Vision</h2>
            <?php
                $argsv = array(
                    'posts_per_page' => 1,
                    'category_name' => 'vision'
                );
                $vision = new WP_Query($argsv);
                while($vision->have_posts()): $vision->the_post();
                ?>
                <div class="vision-title">
                    <?php the_title(); ?>
                </div>
                <div class="vision-posts">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; wp_reset_postdata();?>
        </div>
    </main>

</section>

<section>
  <div>
    <h2 style="text-align: center;">GRUPO MULTISECTORIAL (GMS)</h2>
  </div>
  <div>
    <p style="text-align: center;">Organismo rector de la iniciativa CoST El Salvador, integrado por academia, Sociedad Civil, Empresa privada y Gobierno.</p>
  </div>
    <?php $url = get_page_by_title( "Galeria Logos Grupo Multisectorial"); ?>
    <?php echo get_post_gallery( $url->ID); ?>
    <div>
      <h2 style="text-align: center;">Alianzas Estrategicas</h2>
    </div>
    <div>
      <p style="text-align: center;">Alianzas para el fortalecimiento de la tranparencia en la infraestructura publica de El Salvador</p>
    </div>
      <?php $url = get_page_by_title( "alianzas"); ?>
      <?php echo get_post_gallery( $url->ID); ?>
      <div>
        <h2 style="text-align: center;">COMPROMETIDOS CON</h2>
      </div>
        <?php $url = get_page_by_title( "comprometidos"); ?>
        <?php echo get_post_gallery( $url->ID); ?>
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
