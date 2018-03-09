<?php
// Adding this snippet to the functions.php of your wordpress theme will 
// add support for uploading SVG inside Wordpress Media Uploader
function wps_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'wps_mime_types' );
?>
