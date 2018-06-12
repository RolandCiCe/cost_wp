<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="contenido-hero single-header aseg aseg-desechos" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <h1><?php echo the_field('titulo_desechos'); ?></h1>
</div><br />
<a href="#/" class="no-text-transform" onclick="window.history.back();"><span class="fa fa-arrow-left"></span> Volver a página anterior</a>
<section class="events">
  <div class="dashboard-list container-fluid">
    <?php $i = 1; ?>
    <?php
     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query( array(
        'category_name' => 'Desechos',
        'paged' => $paged
    ) );

    if ( !$query->have_posts() )
    {
      echo '<h3 class="text-center">Por el momento no hay información para mostrar.</h3>';
    }

    while( $query->have_posts() ): $query->the_post();

     ?>
      <article class="entrada-dashboard-page entrada-<?php echo $i; ?>">
          <div class="dashboard-image">
            <?php
              if ( has_post_thumbnail(get_the_ID()) )
              {
                the_post_thumbnail();
              }
              else
              {
                echo "<div class='no-pic'></div>";
              }
            ?>
          </div>

          <div class="informacion-item">
            <div class="titulo-entrada">
              <!--<?php the_title( '<center><p class="dashboard-item-title"><b>', '</b></p></center>' ) ;?> -->
              <center><p class="dashboard-item-title"><b><?php echo title(20);  ?></b></p></center>
            </div>

            <div class="contenido-entrada text-justified">
              <?php echo excerpt(25); ?>
              <?php
                $faseproyecto = get_post_meta($post->ID, 'categoria_proyecto', true);
                $cadena = explode(" ", $faseproyecto);
                $texto = $cadena[0];
                $numero = $cadena[1];
              ?>

              <br />
              <center><p class="text-primary item-numero"><?php echo $numero ;?></p></center>
              <center><p class="item-texto"><?php echo $texto ;?></p></center>

              <br />
            </div>

              <div class="read-more-link">
                <a class="text-secondary event-permalink" href="<?php the_permalink(); ?>">Leer más...</a>
              </div>
          </div>
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
</section><br />
<?php endwhile; ?>
<?php get_footer(); ?>
