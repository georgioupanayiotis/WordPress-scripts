<?php
/**
 * Copy the following code and paste it in your theme’s functions.php file
 */

function create_copyright() {
    $all_posts = get_posts( 'post_status=publish&order=ASC' );
    $first_post = $all_posts[0];
    $first_date = $first_post->post_date_gmt;
    _e( 'All rights reserved. &copy;' );
    if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
    echo date( 'Y' );
    } else {
    echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
    }
    echo ' <strong>' . get_bloginfo( 'name' ) . '</strong> ';
}

?>

/**
 * Open footer.php file Find the copyright information you already have in the theme (if there is one) and 
 * replace it with the following PHP code.
 */
 
 <?php create_copyright(); ?>
