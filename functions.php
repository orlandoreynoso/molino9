<?php 
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
//define('HOME',bloginfo('url' ));
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );
/*========== incluyendo los estilo que uso ===============*/

include (TEMPLATEPATH. '/inc/estilos.php');
include (TEMPLATEPATH. '/inc/filtros.php');
include (TEMPLATEPATH. '/inc/paginacioncpt.php');

//add_image_size( $name, $width, $height, $crop );
the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles 
the_post_thumbnail('medium',300,300, true);          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('large');
the_post_thumbnail('pastorales', 751, 422, true);
the_post_thumbnail('comunidades', 1100, 404, true);
the_post_thumbnail('full'); // La resolución original
//set_post_thumbnail_size(1024,1024,true );


 require_once(TEMPLATEPATH.'/libs/wp_bootstrap_navwalker.php'); 


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

/*
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
*/

function showMenuboostrap(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );
    wp_nav_menu($args);
}

function showMenu(){

    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );
    wp_nav_menu($args);
}


// Register custom navigation walker

/*
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
    'walker' => new wp_bootstrap_navwalker())
);
*/

function logo(){
$logo = IMAGES.'/santuario.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Misioneros del sagrado Corazón de Jesús"></a>
<?php
}

function logoMsc(){
$logo = IMAGES.'/logomsc.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Misioneros del sagrado Corazón de Jesús"></a>
<?php
}

function logoMovil(){
$logo = IMAGES.'/logomsc.png'; ?>
<a class="logo navbar-brand text-left" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Misioneros del sagrado Corazón de Jesús"></a>
<?php
}

/*
function logo(){
    $logo = IMAGES.'/santarita.png';
    echo '<a class="logo" href="';
    echo bloginfo('url');
    echo '"><img src="'.$logo.'" alt="Misioneros del sagrado Corazón de Jesús"></a>';
} */
function slogan(){
    echo '<a href="';
    echo bloginfo('url');
    echo '" id="slogan"><h1>Santuario</h1><h2>nuestra señora del sagrado corazón</h2></a>';
}

include (TEMPLATEPATH . '/inc/contenidos.php');
include (TEMPLATEPATH . '/libs/entradas.php'); 
include (TEMPLATEPATH . '/libs/totop.php'); 
include (TEMPLATEPATH . '/libs/breadcrumb.php'); 
include (TEMPLATEPATH . '/files/bread.php');
include (TEMPLATEPATH . '/files/paginacioncustom.php');

/*==== n Widget=====*/
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar'
    ));
}
include (TEMPLATEPATH . '/libs/paginacion.php'); 
paginacion();
?>
