<?php $recent = new WP_Query(array( 'pagename' => 'inicio-alianzas' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="alianzas">
    <div class="container-fluid alianzas-container">

      <div class="alianzas-a text-center"><div class="container">
        <h3><?php echo the_field('titulo_1'); ?></h3>

        <!--<div class="small-ruler"><div></div></div>-->

        <p><?php echo the_field('titulo_2'); ?></p><br />

        <img class="aligncenter size-full wp-image-126" src="<?php echo the_field('imagen_1'); ?>" />
      </div></div>

      <div class="alianzas-b text-center"><div class="container">
        <h3><?php echo the_field('titulo_3'); ?></h3>
          <img class="aligncenter size-full wp-image-126" src="<?php echo the_field('imagen_2'); ?>" />
        <!--<div class="small-ruler"><div></div></div>-->

        <p></p><br />
      </div>

    </div>
  </section>
<?php endwhile; ?>
