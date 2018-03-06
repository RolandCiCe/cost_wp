<?php get_header(); ?>

<div class="gms-hero hero">
  <div class="contenido-hero">
    <h2><b>GRUPO</b> MULTISECTORIAL</h2>

    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta mollis luctus. Vestibulum ullamcorper enim sagittis pharetra pretium. Suspendisse eros tellus, eleifend eu egestas eget, tempor quis sem. Nulla sit amet elementum turpis. Etiam at elit eleifend, hendrerit velit vitae, scelerisque erat. Fusce ac sem eu tortor ornare ornare. Sed elementum interdum turpis. Phasellus gravida ante ipsum, sit amet euismod felis facilisis sit amet. Etiam sit amet malesuada lectus. Pellentesque lobortis sagittis ex. Etiam vestibulum ut nisi ac iaculis. Donec nec blandit mi. Ut non rhoncus quam. Etiam non libero non felis vehicula posuere. Aliquam in ex massa. Quisque lobortis magna non nisi ultricies venenatis.</p>
  </div>
</div>

<section class="objetivo">
  <div class="obj-desc">
    <h1 class=""><b><span class="text-dark">OBJETIVO DEL</span><br /></b><span class="text-primary">PROGRAMA</span></h1>
    <br />
    <p class="">Curabitur at dolor orci. Quisque a aliquam urna. Donec quis sollicitudin neque. Curabitur varius odio eu enim dictum, eu commodo turpis scelerisque. Nullam sodales enim sit amet ultricies consequat. Donec ut quam rutrum eros imperdiet sodales. Nulla mi leo, pellentesque ornare molestie et, egestas sit amet diam. Cras placerat ipsum quis fermentum rhoncus. Proin volutpat turpis eu risus vestibulum fringilla.</p>
  </div>

  <div class="obj-secciones">
    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br />PÚBLICO</h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_publico.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Hola</li>
          <li>Mundo</li>
          <li>Esto</li>
        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br />PRIVADO</h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_privado.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Hola</li>
          <li>Mundo</li>
          <li>Esto</li>
        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SOCIEDAD</b><br />CIVIL</h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sociedad_civil.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Hola</li>
          <li>Mundo</li>
          <li>Esto</li>
        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br />ACADÉMICO</h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_academico.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Hola</li>
          <li>Mundo</li>
          <li>Esto</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<div class="thick-ruler"></div><br />

<section class="consejo bg-primary container-fluid text-center">

  <img class="consejo-img" src="<?php echo get_template_directory_uri().'/img/GMS/consejo_directivo.png' ; ?>" alt="" />

  <h1>CONSEJO<br /><b>DIRECTIVO</b></h1>

  <br />

  <p class="container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra sit amet enim eu dapibus. Aliquam vestibulum condimentum risus in sodales. Fusce nec enim vitae mauris imperdiet lacinia. Nulla et maximus dolor. Vestibulum ut nulla sit amet velit accumsan laoreet sed ac felis. Sed feugiat elit et purus ultricies, nec venenatis orci bibendum. Donec nec dignissim risus, vel venenatis neque. Phasellus nec lorem feugiat, ultricies leo sed, rutrum ex. Nulla quis imperdiet libero, at blandit ligula</p>
</section>

<section class="consejo-carousel">
  <div id="consejoCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#consejoCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#consejoCarousel" data-slide-to="1"></li>
      <li data-target="#consejoCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/GMS/consejo.png' ;?>" alt="img01">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/GMS/consejo.png' ;?>" alt="img02">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/img/GMS/consejo.png' ;?>" alt="img03">
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
