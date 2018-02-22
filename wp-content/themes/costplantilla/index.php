
<div class="principal contentedor">
  <main class="texto-centrado contenido-paginas">
    <?php
    $args = array(
        'category_name' => 'eventos'
    );
    $eventos = new WP_Query($args);
    while($eventos->have_posts()): $eventos->the_post();
    ?>
      <article class="entrada-blog">
        <?php the_post_thumbnail(); ?>
        <header class="informacion-entrada clear">
          <div class="fecha">
            <time>
              <?php echo the_time('d'); ?>
              <span><?php the_time('M'); ?></span>
            </time>
          </div>
          <div class="titulo-entrada">
            <?php the_title( '<h2>', '</h2>' ) ;?>
            <p class="autor">
              <i class="fa fa-user" aria-hidden="true"><?php the_author(); ?></i>
            </p>
          </div>
        </header>
        <div class="contenido-entrada">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>"> Leer mas... </a>
        </div>
      </article>
    <?php endwhile; ?>
    <div class="paginacion">
      <?php echo paginate_links(); ?>

    </div>
  </main>
</div>
