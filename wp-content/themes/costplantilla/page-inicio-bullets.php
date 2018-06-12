<?php $recent = new WP_Query(array( 'pagename' => 'inicio-bullets' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="bullets">
    <style type="text/css">
      .bullet-a:before {
                        content: '';
                        background: url(<?php echo the_field('imagen_1'); ?>);
                        width: 80px;
                        height: 80px;
                        display: block;
                        background-size: 100% 100%;
                        left: 50px;
                        position: relative;
                        top: 20px;
                      }
      .bullet-b:before {
                        content: '';
                        background: url(<?php echo the_field('imagen_2'); ?>);
                        width: 80px;
                        height: 80px;
                        display: block;
                        background-size: 100% 100%;
                        left: 50px;
                        position: relative;
                        top: 20px;
                      }
    </style>
    <div class="text-center">
      <!--<h2 class="text-primary">BULLETS</h2>-->

      <small class="text-dark"><?php echo the_field('titulo_1'); ?></small>
    </div>

    <div class="menu-menu-bullet-container"><ul id="menu-menu-bullet" class="bullets-row"><li id="menu-item-66" class="bullet bullet-a text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="<?php echo get_home_url().'/index.php/buenas-practicas' ?>" class="no-text-transform"><?php echo the_field('titulo_2'); ?></a></li>
    <li id="menu-item-65" class="bullet bullet-b text-center menu-item menu-item-type-post_type menu-item-object-page menu-item-65" ><a href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento' ?>" class="no-text-transform"><?php echo the_field('titulo_3'); ?></a></li>
    </ul></div>
  </section>

<?php endwhile; ?>
