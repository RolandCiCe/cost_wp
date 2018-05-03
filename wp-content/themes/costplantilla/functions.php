<?php
function cost_setup (){
  add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'cost_setup');
function cost_styles(){
  //registrar estilos
wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css', array(),'5.0.0');
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array('normalize'),'4.0.0');
wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(''),'4.7.0');
wp_enqueue_style( 'iconicfont', get_template_directory_uri().'/css/iconmonstr-iconic-font.min.css', array(''),'1.3.0');
//wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(),'1.0.0');

wp_register_style( 'normalize', get_template_directory_uri().'/css/normalize.css',array(),'7.0.0');
wp_register_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css',array('normalize'),'4.7.0');
wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array('normalize','fontawesome'),'4.0.0');
//wp_register_style( 'style', get_template_directory_uri().'/style.css',array('normalize','fontawesome','bootstrap'),'1.0');
// Cargar el css de IE 9
//wp_enqueue_style( 'style-ie11', get_template_directory_uri(). "/ie11.css",array('normalize','fontawesome','bootstrap'),'1.0' );
// Añadir el condicional
//wp_style_add_data( 'style-ie11', 'conditional', 'lt IE 11' );

//Llamando estilos
wp_enqueue_style( 'normalize');
wp_enqueue_style('fontawesome');
wp_enqueue_style('bootstrap');
//wp_enqueue_style('style');
//resgistrando version actualizada Jquery
wp_deregister_script('jquery');
wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.min.js', false, '');
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'4.0.0',true);

}
add_action('wp_enqueue_scripts', 'cost_styles');
//cargando menus
register_nav_menus( array(
  'menu_principal' => __('Menu Principal','cost'),
  'menu_social' => __('Menu Social','cost'),
  'menu_bullets' => __('Menu Bullets', 'cost')
));
//widget

function cost_widgets (){
  register_sidebar(array(

  ) );
}

add_theme_support( 'post-thumbnails' );

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

function get_category_count($category_id)
{
  $category_data = get_category($category_id, ARRAY_A);

  return !empty($category_data) && isset($category_data['category_count']) ? (int)$category_data['category_count'] : NULL;
}

//limitar cantidad de palabras en el excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

//limitar cantidad de palabras en el titulo
function title($limit) {
  $title = explode(' ', get_the_title(), $limit);
  if (count($title)>=$limit) {
    array_pop($title);
    $title = implode(" ",$title).'...';
  } else {
    $title = implode(" ",$title);
  }
  $title = preg_replace('`\[[^\]]*\]`','',$title);
  return $title;
}
