<?php get_header(); ?>

<div class="gms-hero hero">
  <div class="contenido-hero">
    <h2><b>GRUPO</b> MULTISECTORIAL</h2>

    <p class="text-justified">CoST es liderado por un Grupo Multisectorial (MSG, por sus siglas en inglés, Multi- Stakeholder Group) que reúne a diferentes actores de la sociedad en cada país, con la función de tomar decisiones sobre la estrategia del Programa. En El Salvador Las acciones del programa se ejecutan bajo el liderazgo de un Grupo Multisectorial conformado por diferentes sectores como: sector público, privado, sociedad civil y académico. La representación de cada sector se conforma por: </p>
  </div>
</div>

<section class="objetivo">
  <div class="obj-desc">
    <h1 class=""><b><span class="text-dark">OBJETIVO DEL</span><br /></b><span class="text-primary">PROGRAMA</span></h1>
    <br />
    <p class="text-justified">Es incrementar el valor de la infraestructura pública en todo el mundo, al aumentar la transparencia con la que se ejecutan los proyectos, además de fomentar la demanda ciudadana de rendición de cuentas. </p>
  </div>

  <div class="obj-secciones text-justified">
    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br /><span style="font-size: 60%;">PÚBLICO</span></h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_publico.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Ministerio de Obras Públicas, Transporte y de Vivienda y Desarrollo Urbano, MOPTVDU </li>
          <li>Fondo de Conservación Vial, FOVIAL</li>
        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br /><span style="font-size: 60%;">PRIVADO</span></h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_privado.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Cámara Salvadoreña de la Industria de la Construcción, CASALCO</li>
          <li>Colegio de Arquitectos de El Salvador, CADES</li>

        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SOCIEDAD</b><br /><span style="font-size: 60%;">CIVIL</span></h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sociedad_civil.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Iniciativa Social para la democracia, ISD</li>
          <li>Sistema de Asesoría y Capacitación para el Desarrollo Local, SACDEL</li>

        </ul>
      </div>
    </div>

    <div class="obj-seccion">
      <div class="seccion-titulo bg-primary">
        <h2><b>SECTOR</b><br /><span style="font-size: 60%;">ACADÉMICO</span></h2>
      </div>

      <div class="seccion-img"><img class="img-obj" src="<?php echo get_template_directory_uri().'/img/GMS/sector_academico.png' ; ?>" alt="" /></div>

      <div class="seccion-lista">
        <ul>
          <li>Universidad de El Salvador, UES</li>
          <li>Universidad Tecnológica de El Salvador, UTEC</li>
          <li>Universidad Politécnica de El Salvador, UES</li>
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

  <p class="container"><b>E</b>l consejo Directivo de CoST El Salvador, es electo entre los miembros del Grupo Multisectorial de CoST en pleno por mayoría calificada; CoST El Salvador eligió su Consejo Directivo el día <b>jueves 11 de enero de 2018</b>, el cual está conformado de la siguiente manera:</p>
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
