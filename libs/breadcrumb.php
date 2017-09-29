<?php 
// Insertar Breadcrumb    
function the_breadcrumb() {  
    $url = get_bloginfo('url');
    $a = explode("/",$url);
    $b = explode("/",$_SERVER["REQUEST_URI"]);
    //intersección de arrays para poder quitar la URL
    $c = array_intersect($a, $b);
    $url_array = array_diff($b, $c);
    //quitamos el nombre del post del array
    array_pop($url_array);    
    //para quitar las "/page/2"
    if(preg_match('@(/page/)([0-9])@',$_SERVER["REQUEST_URI"])) {
        array_pop($url_array); //quitamos sacar el "/2"
        array_pop($url_array); //quitamos sacar el "/page"
    }
    echo 'Estás en <span class="raq">&raquo;</span><span class="raqa"><a href="'.$url.'/" rel="home">Inicio</a></span><span class="raqadd">&raquo;</span>';
    $dir = $url.'/';
    if(is_single() || is_category()) {
        //algoritmo para single.php
        $categoria = 'category';
        foreach($url_array as $folder) {
            if($folder != 'category'){
                $categoria .= '/'.$folder;
                //hay confusion con las categorias hijos
                $dir = $url.'/'.$categoria.'/';
                //con URL para que jale del URL al que pertenece
                echo ' <span class="raqadd">&raquo;</span> <a href="'.$dir.'" rel="categoria tag">'.ucwords(str_replace("-", " ", $folder)) . '</a><span class="raqadd">&raquo;</span>';
            }
        }
    } else {
        //para page.php y otros (archivos)
        foreach($url_array as $folder) {
            if($folder != 'tag' && $folder != 'author'){
                if(!is_numeric($folder)){
                    $dir = $dir.$folder.'/';//los folders se van acoplando
                    echo ' &raquo; <a href="'.$dir.'">'.ucwords(str_replace("-", " ", $folder)) . '</a><span class="raqspace">&raquo;</span>';
                }
            }
        }
    }
    echo wp_title();
}  
?>