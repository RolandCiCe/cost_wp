<article class="card my-4 col-xs-12 col-sm-12 col-md-4" id="post-<?php the_ID(); ?>" style="border-color: transparent!important; padding:15px!important;" >
  <?php if( has_post_thumbnail()): ?>
    <img class="card-img-top" src="<?php get_the_post_thumbnail_url(); ?>" alt="Card image cap">
  <?php else: ?>
  	<img class=' card-img-top' src="<?php echo get_template_directory_uri().'/img/no_disp.png' ?>" />
  <?php endif; ?>
  <div class="card-body">
    <h1 class="text-primary"><?php echo title(20);?></h1>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <a class="text-success event-permalink" href="<?php the_permalink(); ?>">Read more...</a>
  </div>
</article>