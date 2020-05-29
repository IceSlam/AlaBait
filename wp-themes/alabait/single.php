<?php
$post = $wp_query->post;
if ( in_category( 'services' ) ) {
    include( TEMPLATEPATH.'/templates/single-services-item.php' );
} else {
    include( TEMPLATEPATH.'/templates/single-default.php' );
}
?>
