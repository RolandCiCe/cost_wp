<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-divulgacion' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <br /><h1 class="text-center"><?php echo the_field('titulo_1'); ?></h1>

  <br />

  <div class="cards text-justified">
    <div class="divulgacion card">
      <div class="">
        <img class="card-img" src="<?php echo the_field('imagen_1'); ?>" alt="" />
      </div>
      <div class="text-center card-title">
        <h3><?php echo the_field('titulo_2'); ?></h3>
      </div>
      <div class="card-desc" style="font-weight:normal;">
        <?php the_content(); ?>
      </div>
      <div class="card-link">
        <a href="<?php echo get_home_url().'/index.php/divulgacion' ?>"><img class="card-link-img" src="<?php echo the_field('imagen_2'); ?>" alt="" /></a>
      </div>
    </div>
<?php endwhile; ?>
