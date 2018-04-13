<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>
    <div class="evento-img">
      <?php the_post_thumbnail('full'); ?>
    </div> <br />
<a href="#/" class="no-text-transform" onclick="window.history.back();"><span class="fa fa-arrow-left"></span> Volver a página anterior</a>
    <div class="container-fluid">
      <span class="date"><span class="im im-calendar text-primary"></span> <?php echo the_time('d M.y'); ?></span> <br /><br />

      <?php the_title('<h3 style="text-transform: uppercase; font-weight: 600;">','</h3>'); ?>

      <div class="principal contenedor text-justified">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>

<?php get_footer();?>
