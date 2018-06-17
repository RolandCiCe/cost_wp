  <?php $recent = new WP_Query(array( 'pagename' => 'suscribirse' )); while($recent->have_posts()) : $recent->the_post();?>
    <div class="col-xs-1 col-md-6">
      <!--<?php get_template_part( 'templates/formulario', 'suscribe' );?> -->
        <h2 class="text-light"><?php the_title(); ?></h2>
        <p></p>
        <p><?php the_content(); ?></p>
    </div>
<?php endwhile; ?>
