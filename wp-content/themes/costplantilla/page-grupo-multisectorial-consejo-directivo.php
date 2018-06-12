
<?php $recent = new WP_Query(array( 'pagename' => 'grupo-multisectorial-consejo-directivo' )); while($recent->have_posts()) : $recent->the_post(); ?>
<div class="thick-ruler"></div><br />

<section class="consejo bg-primary container-fluid text-center">

  <img class="consejo-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
    <?php the_content(); ?>
</section>
<?php endwhile; ?>
