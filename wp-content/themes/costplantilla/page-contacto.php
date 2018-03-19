
  <?php while(have_posts()): the_post(); ?>
    <div class="principal contenedor">
      <main class="texto-centrado contenido-paginas">
          <?php the_content(); ?>
      </main>
    </div>
  <?php endwhile; ?>
