<?php

/**
 * Disable self pingbacks
 * 
 */
function evolution_no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}

add_action( 'pre_ping', 'evolution_no_self_ping' );
?>
