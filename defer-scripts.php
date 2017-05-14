<?php 
/**
 * 
 * Defer scripts by handle
 * 
 * @param $tag
 * @param $handle
 * @return mixed
 */
function add_defer_attribute($tag, $handle) {
 // add script handles to the array below
 $scripts_to_defer = array('jquery', 'handle-2');

 foreach($scripts_to_defer as $defer_script) {
    if ($defer_script === $handle) {
     return str_replace('></script>', 'defer></script>', $tag);
    }
 }
 return $tag;
}

add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
?>
