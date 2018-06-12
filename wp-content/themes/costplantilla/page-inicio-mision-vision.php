<?php $recent = new WP_Query(array( 'pagename' => 'inicio-mision-vision' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="mi-vi row bg-primary">
    <?php the_content(); ?>
  </section>
<?php endwhile; ?>
