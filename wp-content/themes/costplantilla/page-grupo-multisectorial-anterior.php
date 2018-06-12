<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="contenido-hero single-header gsm-anterior" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
</div><br />
<p></p>

<section class="consejo-carousel">
  <p></p>
  <p></p>
  <br />
  <div id="consejoCarousel" class="carousel slide" data-ride="carousel">

        <img class="d-block w-100" src="<?php echo the_field('imagen_extra_1'); ?>" alt="img01">
  </div>
  <div class="texto-hero">
    <?php the_content(); ?>
  </div><br />
</section>
  <?php endwhile; ?>
<?php get_footer();?>
