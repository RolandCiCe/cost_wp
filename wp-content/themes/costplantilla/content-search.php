<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
  <a class="text-primary event-permalink" href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">','</h1>' ); ?></a>
  <?php if( has_post_thumbnail()): ?>
    <div class="pull-left">
      <?php the_post_thumbnail( 'thumbnail' ); ?>
    </div>
  <?php endif; ?>
<div class="text-justified">
  <?php the_excerpt(); ?>
</div>

</article>
