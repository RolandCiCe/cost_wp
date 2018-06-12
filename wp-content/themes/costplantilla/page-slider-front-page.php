<?php $recent = new WP_Query(array( 'pagename' => 'slider-front-page' )); while($recent->have_posts()) : $recent->the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; ?>
