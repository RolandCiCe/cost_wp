<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>

    <div class="hero" style="background-image:url(<?php echo get_template_directory_uri().'/img/MSG/destacada.png' ?>);">
      <div class="contenido-hero">
        <div class="texto-hero">
          <h1>GRUPO MULTISECTORIAL</h1>
        </div>
        <div class="">
          <p class="rojo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta mollis luctus. Vestibulum ullamcorper enim sagittis pharetra pretium. Suspendisse eros tellus, eleifend eu egestas eget, tempor quis sem. Nulla sit amet elementum turpis. Etiam at elit eleifend, hendrerit velit vitae, scelerisque erat. Fusce ac sem eu tortor ornare ornare. Sed elementum interdum turpis. Phasellus gravida ante ipsum, sit amet euismod felis facilisis sit amet. Etiam sit amet malesuada lectus. Pellentesque lobortis sagittis ex. Etiam vestibulum ut nisi ac iaculis. Donec nec blandit mi. Ut non rhoncus quam. Etiam non libero non felis vehicula posuere. Aliquam in ex massa. Quisque lobortis magna non nisi ultricies venenatis.</p>
        </div>
      </div>
    </div>

    <div class="principal contenedor">
      <main class="texto-centrado contenido-paginas">
        <section>
          <div class="">
            <div class="">
              <p class="amarillo">OBJETIVO DEL PROGRAMA</p>

            </div>
            <div class="">
              <p class="marron">Curabitur at dolor orci. Quisque a aliquam urna. Donec quis sollicitudin neque. Curabitur varius odio eu enim dictum, eu commodo turpis scelerisque. Nullam sodales enim sit amet ultricies consequat. Donec ut quam rutrum eros imperdiet sodales. Nulla mi leo, pellentesque ornare molestie et, egestas sit amet diam. Cras placerat ipsum quis fermentum rhoncus. Proin volutpat turpis eu risus vestibulum fringilla.</p>

            </div>
          </div>
          <div class="">
            <div class="">
              <div class="">

              SECTOR PUBLICO

              </div>
            <div class=""><img src="<?php echo get_template_directory_uri().'/img/MSG/sector_publico.png' ; ?>" alt="" /></div>
            <div class="">
              <ul>
                <li>hola</li>
                <li>mundo</li>
                <li>esto</li>
              </ul>
            </div>
            </div>
          <div class="">
          <div class="">

          SECTOR PRIVADO

          </div>
          <div class=""><img src="<?php echo get_template_directory_uri().'/img/MSG/sector_privado.png' ; ?>" alt="" /></div>
          <div class="">
          <ul>
          <li>hola</li>
          <li>mundo</li>
          <li>esto</li>
          </ul>
          </div>
          </div>
          <div class="">
          <div class="">

          SOCIEDAD CIVIL

          </div>
          <div class=""><img src="<?php echo get_template_directory_uri().'/img/MSG/sociedad_civil.png' ; ?>" alt="" /></div>
          <div class="">
          <ul>
          <li>hola</li>
          <li>mundo</li>
          <li>esto</li>
          </ul>
          </div>
          </div>
          </div>
          <div class="">
          <div class="">

          SECTOR ACADEMICO

          </div>
          <div class=""><img src="<?php echo get_template_directory_uri().'/img/MSG/sector_academico.png' ; ?>" alt="" /></div>
          <div class="">
          <ul>
          <li>hola</li>
          <li>mundo</li>
          <li>esto</li>
          </ul>
          </div>
          </div>
          </section><section>
          <div class=""><img src="<?php echo get_template_directory_uri().'/img/MSG/consejo_directivo.png' ; ?>" alt="" /></div>
          <div class="">

          CONSEJO DIRECTIVO

          </div>
          <div class="">

          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra sit amet enim eu dapibus. Aliquam vestibulum condimentum risus in sodales. Fusce nec enim vitae mauris imperdiet lacinia. Nulla et maximus dolor. Vestibulum ut nulla sit amet velit accumsan laoreet sed ac felis. Sed feugiat elit et purus ultricies, nec venenatis orci bibendum. Donec nec dignissim risus, vel venenatis neque. Phasellus nec lorem feugiat, ultricies leo sed, rutrum ex. Nulla quis imperdiet libero, at blandit ligula:

          </div>
          </section><section>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active"><img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/MSG/consejo.png' ; ?>" alt="First slide" /></div>
          <div class="carousel-item"><img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/MSG/consejo.png' ; ?>" alt="Second slide" /></div>
          <div class="carousel-item"><img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/MSG/consejo.png' ; ?>" alt="Third slide" /></div>
          </div>
          <a class="carousel-control-prev" role="button" href="#carouselExampleIndicators" data-slide="prev">

          <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" role="button" href="#carouselExampleIndicators" data-slide="next">

          <span class="sr-only">Siguiente</span>
          </a>

          </div>
          </section>
      </main>

    </div>
  <?php endwhile; ?>

<?php get_footer();?>
