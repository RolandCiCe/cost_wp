<?php get_header(); ?>
<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <?php get_template_part('page','quienes-somos-encabezado' );?>
<section class="hist">
<<<<<<< HEAD
  <?php get_template_part('page','quienes-somos-historia' );?>
=======
  <div class="texto-hero">
    <h2 class="text-center"><b>HISTORIA</b></h2>
  </div>

  <!--<div class="small-ruler"><div></div></div>-->

  <br />

  <div class="hist-block text-justified">
    <img src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/imag01.jpg' ; ?>" alt="" />

    <div class="hist-text">
      <h3 class="text-center text-primary"><b>CoST</b></h3>

      <div class="">
        <p class="">Nace para mejorar la transparencia y la rendición de cuentas en la ejecución de proyectos de construcción en el sector público.</p>
      </div>
      <div class="">
        <p class="">El programa, surgió en 2007 el Reino Unido impulsada por el Departamento de Desarrollo Internacional como parte de una serie de iniciativas de transparencia enfocadas en sectores específicos de los Estados y caracterizadas por la adopción de modalidades de cooperación entre actores públicos, privados y sociedad civil. En 2008, se inició con una experiencia piloto en varios países del mundo, incluyendo Guatemala de la región centroamericana, logrando establecer un enfoque de dirección, procedimientos técnicos y de gobernabilidad. El lanzamiento oficial se realizó en 2012 y, desde entonces la metodología ha sido adoptada por 17 países que se adhieren formalmente al programa.</p>
      </div>
    </div>
  </div>
  <div class="hist-text2 text-justified">
    <div class="">
      <div class="">
        <p class="">La experiencia de CoST en Guatemala motivó al Ex-Ministro de Obras Públicas, Transporte, Vivienda y Desarrollo Urbano de El Salvador, Señor Gerson Martínez, a establecer contacto con el Secretariado Internacional de CoST (IS, por sus siglas en inglés, International Secretariat). Iniciando en marzo de 2013 el proceso de adhesión a la iniciativa. En mayo de 2013, se suscribió un Memorando de Entendimiento con el IS de CoST, para formalizar el establecimiento del Programa en el país.</p>
      </div>
      <div class="">
        <p class="text-justified"></p>
      </div>
    </div>

    <!--<img src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/imag02.png' ; ?>" alt="" />-->
  </div>
>>>>>>> 669df89db48143a230aa1d1a8b3024ecb48e6b02
</section>
<section>
  <?php get_template_part('page','quienes-somos-organigrama' );?>
</section>
<br />
<<<<<<< HEAD
  <?php get_template_part('page','quienes-somos-procesos' );?>
  <?php get_template_part('page','quienes-somos-lema' );?>
<?php endwhile; ?>
=======

<section class="procs">
  <br /><h1 class="text-center">Procesos esenciales de CoST</h1>

  <br />

  <div class="cards text-justified">
    <div class="divulgacion card">
      <div class="">
        <img class="card-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/icono_divulgacion.png' ; ?>" alt="" />
      </div>
      <div class="text-center card-title">
        <h3>Divulgación</h3>
      </div>
      <div class="card-desc">
        <p class="rojo">Proceso mediante el cual, CoST realiza una exigencia formal a las instituciones para que divulguen la información sobre los proyectos que construyen.</p>
      </div>
      <div class="card-link">
        <a href="<?php echo get_home_url().'/index.php/divulgacion' ?>"><img class="card-link-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/iconomas.png' ; ?>" alt="" /></a>
      </div>
    </div>

    <div class="aseguramiento card">
      <div class="">
        <img class="card-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/icono_aseguramiento.png' ; ?>" alt="" />
      </div>
      <div class="text-center card-title">
        <h3>Aseguramiento</h3>
      </div>
      <div class="card-desc">
        <p class="rojo">Proceso diseñado para mejorar la calidad de la información divulgada por las instituciones. CoST supervisa técnicamente que las instituciones estén divulgando la información producida sobre los proyectos, esta información se valida y se traduce a un lenguaje sencillo.</p>
      </div>
      <div class="card-link">
        <a href="<?php echo get_home_url().'/index.php/aseguramiento' ?>"><img class="card-link-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/iconomas.png' ; ?>" alt="" /></a>
      </div>

    </div>

    <div class="demanda-ciudadana card">
      <div class="">
        <img class="card-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/icono_demanda_ciudadana.png' ; ?>" alt="" />
      </div>
      <div class="text-center card-title">
        <h3>Demanda Ciudadana de Rendición de Cuentas</h3>
      </div>
      <div class="card-desc">
        <p class="rojo">Implica fortalecer las capacidades y facilitar información comprensible para que la ciudadanía pueda exigir cuentas a las instituciones, con el fin de avanzar en los indicadores de transparencia.
</p>
      </div>
      <div class="card-link">
        <a href="<?php echo get_home_url().'/index.php/demanda-ciudadana' ?>"><img class="card-link-img" src="<?php echo get_template_directory_uri().'/img/quienes_somos/home_quienes_somos/iconomas.png' ; ?>" alt="" /></a>
      </div>
    </div>
  </div>

  <br />

  <h2 class="text-center">¿QUÉ GANA NUESTRO PAÍS CON EL TRABAJO DE CoST EL SALVADOR?</h2>

  <p class="rojo text-justified">CoST ha desarrollado procedimientos para recopilar, verificar y divulgar información sobre proyectos de construcción con financiamiento público. La expectativa es que la divulgación incremente la transparencia y la rendición de cuentas, y por lo tanto, a largo plazo, ayude en el mejoramiento del valor del dinero de las inversiones realizadas en infraestructura. Existen evidencias de que este proceso ya ha generado un impacto positivo. Por ejemplo, en algunos países ha ocasionado cambios en los procedimientos gubernamentales, mientras que otros han integrado los procedimientos CoST a sus marcos de trabajo institucionales.</p>
</section>

<section class="lema">
  <div class="lema-block text-center bg-success">
      <br /><h2 text-center>Nuestro Lema:</h2>

      <p class="lema-text">Incrementar el valor del dinero invertido en la infraestructura pública al incrementar la transparencia con la que se entregan los proyectos de construcción.</p>
    </div>
</section>

>>>>>>> 669df89db48143a230aa1d1a8b3024ecb48e6b02
<?php get_footer();?>
