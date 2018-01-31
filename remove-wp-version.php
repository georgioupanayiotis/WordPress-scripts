<?php
// Simply add this code snippet to your functions.php file. 
function wpb_remove_version() {
return '';
}
add_filter('the_generator', 'wpb_remove_version');
?>
