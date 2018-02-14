<?php get_header();?>

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
