
<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-organigrama' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <h2 class="text-center"><b><?php echo the_field('titulo_1'); ?></h2><br />
  <center><img style="width: 100%;" src="<?php echo the_field('imagen_1'); ?>" alt="" /></center><br />
<?php endwhile; ?>
