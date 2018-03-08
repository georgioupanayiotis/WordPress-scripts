<?php
//Convert a date / timestamp to time ago for posts
//Just add this snippet to your single.php, index.php or any other template within the loop and you are good to go.

echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
?>
