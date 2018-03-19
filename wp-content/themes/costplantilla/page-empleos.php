<?php get_header(); ?>
<div class="contenido-hero single-header empleos">
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( array(
   'category_name' => 'Empleos',
   'paged' => $paged
) );  ?>

</div>


<div class="hist-block">
  <!--<img src="<?php echo get_template_directory_uri().'/img/descargas/imag03.png' ; ?>" alt="" />-->
</div> <br />
<?php
  $cat_count = $wpdb->get_var( "SELECT tax.count FROM wp_term_taxonomy tax
                                  LEFT JOIN wp_terms term ON term.term_id = tax.term_id
                                  WHERE tax.taxonomy = 'category'
                                  and term.slug = 'empleos'
                                  ORDER BY tax.count DESC" );

?>
<?php if($cat_count != 0): ?>

    <section class="eventos">
      <div class="events-list container-fluid">
        <?php $i = 1; ?>
        <?php

        while( $query->have_posts() ): $query->the_post();

         ?>
          <article class="entrada-eventos entrada-<?php echo $i; ?>">
              <div class="event-image">
                <div class="the-date bg-primary text-center">
                  <span class="the-day"><?php echo the_time('d'); ?></span><br />
                  <span class="the-month"><?php the_time('M.y'); ?></span>
                </div>
                <?php
                  if ( has_post_thumbnail(get_the_ID()) )
                  {
                    the_post_thumbnail();
                  }
                ?>
              </div>

              <header class="informacion-entrada clear">
                <div class="titulo-entrada">
                  <?php the_title( '<p class="post-title"><b>', '</b></p>' ) ;?>

                  <p class="autor text-muted">
                    <span class="fa fa-user" aria-hidden="true"></span>&nbsp;<span><?php the_author(); ?></span>
                  </p>
                </div>

                <div class="contenido-entrada">
                  <!--<?php the_excerpt(); ?>-->
                  <div class="read-more-link"><a class="text-primary event-permalink" href="<?php the_permalink(); ?>">Leer más...</a></div>
                </div>
              </header>
          </article>
          <?php $i++; ?>
        <?php endwhile; ?>
      </div>

      <br />

      <div class="text-center events-pagination">
        <?php
          echo paginate_links(array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $query->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
            'prev_text' => sprintf( '<span>%1$s</span>', __( '<', 'text-domain' ) ),
            'next_text' => sprintf( '<span>%1$s</span>', __( '>', 'text-domain' ) ),
            'add_args'     => false,
               'add_fragment' => '',
          ));
        ?>
      </div>
    <?php else:
      echo "<p>Por el momento CoST El Salvador no cuenta con empleos disponible.</p>";
    ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
