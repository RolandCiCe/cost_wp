<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-historia' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <div class="texto-hero">
    <h2 class="text-center"><b><?php echo the_field('titulo_1'); ?></b></h2>
  </div>
  <br />
  <div class="hist-block text-justified">
    <img src="<?php echo the_field('imagen_1'); ?>" alt="" />

    <div class="hist-text">
      <h3 class="text-center text-primary"><b><?php echo the_field('titulo_2'); ?></b></h3>

      <div class="">
        <p class=""><?php echo the_field('texto_1'); ?></p>
      </div>
      <div class="">
        <p class=""><?php echo the_field('texto_2'); ?></p>
      </div>
    </div>
  </div>
  <div class="hist-text2 text-justified">
    <div class="">
      <div class="">
        <p class=""><?php echo the_field('texto_3'); ?></p>
      </div>
      <div class="">
        <p class="text-justified"></p>
      </div>
    </div>
  </div>
<?php endwhile; ?>
