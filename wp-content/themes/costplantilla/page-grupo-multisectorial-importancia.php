
<?php $recent = new WP_Query(array( 'pagename' => 'grupo-multisectorial-importancia' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <h1 class=""><b><span class="text-dark"><?php echo the_field('titulo_parte_1'); ?></span><br /></b><span class="text-primary"><?php echo the_field('titulo_parte_2'); ?></span></h1>
  <br />
<?php the_content(); ?>
<?php endwhile; ?>
