<?php $recent = new WP_Query(array( 'pagename' => 'inicio-historia-exito' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="historias-exito max-bg-img-width" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="text-center">
        <h2><?php echo the_field('titulo_1'); ?></h2><br />

        <p class="italic"></p><br />

        <div><img class="thumbnail img-circle wp-image-126" src="<?php echo the_field('imagen_1'); ?>" alt="" width="96" height="96" /></div><br />

        <!--<div class="small-ruler"><div></div></div>-->

        <span class="cost-sub"><?php echo the_field('titulo_2'); ?></span>
        <span class="cost-sub text-primary"><?php echo the_field('titulo_3'); ?></span>

    </div>
  </section>
<?php endwhile; ?>
