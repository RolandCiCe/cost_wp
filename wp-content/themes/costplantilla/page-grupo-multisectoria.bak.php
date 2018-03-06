<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>

    <div class="hero" style="background-image:url(<?php echo get_template_directory_uri().'/img/MSG/destacada.png' ?>);">
      <div class="contenido-hero">
        <div class="texto-hero">
          <?php the_title('<h1>','</h1>'); ?>
        </div>
        <div class="">
          <p class="rojo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta mollis luctus. Vestibulum ullamcorper enim sagittis pharetra pretium. Suspendisse eros tellus, eleifend eu egestas eget, tempor quis sem. Nulla sit amet elementum turpis. Etiam at elit eleifend, hendrerit velit vitae, scelerisque erat. Fusce ac sem eu tortor ornare ornare. Sed elementum interdum turpis. Phasellus gravida ante ipsum, sit amet euismod felis facilisis sit amet. Etiam sit amet malesuada lectus. Pellentesque lobortis sagittis ex. Etiam vestibulum ut nisi ac iaculis. Donec nec blandit mi. Ut non rhoncus quam. Etiam non libero non felis vehicula posuere. Aliquam in ex massa. Quisque lobortis magna non nisi ultricies venenatis.</p>
        </div>
      </div>
    </div>

    <div class="principal contenedor">
      <main class="texto-centrado contenido-paginas">
          <?php the_content(); ?>
      </main>

    </div>
  <?php endwhile; ?>

<?php get_footer();?>
