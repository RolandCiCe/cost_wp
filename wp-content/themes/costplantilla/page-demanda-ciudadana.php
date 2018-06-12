<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<section class="qs-titulo demanda" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="qs-div">
    <div class="negro">
      <img src="<?php echo the_field('imagen_extra_1'); ?>" alt="" />
    </div> <br />
    <div class="texto-hero">
      <?php the_title('<h2>','</h2>'); ?>
    </div><br />
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer();?>
