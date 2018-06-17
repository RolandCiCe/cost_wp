<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-lema' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="lema" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    <div class="lema-block text-center bg-success">
        <br /><h2 text-center><?php echo the_field('titulo_1'); ?></h2>
        <p class="lema-text" style="font-weight:normal;"><?php echo the_field('texto_1'); ?></p>
      </div>
  </section>
<?php endwhile; ?>
