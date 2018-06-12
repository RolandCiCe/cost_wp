<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-ganancia' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <h2 class="text-center"><?php echo the_field('titulo_1'); ?></h2>
<div style="font-weight:normal;text-align: justify;">
  <?php the_content(); ?>
</div>


<?php endwhile; ?>
