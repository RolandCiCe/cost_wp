<?php $recent = new WP_Query(array( 'pagename' => 'inicio-logosgms' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="">
    <?php the_content(); ?>
  </section>
<?php endwhile; ?>
