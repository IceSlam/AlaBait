<?php
$post = $wp_query->post;
if ( in_category( 'services' ) ) {
    include( TEMPLATEPATH.'/templates/single-services.php' );
} else if  ( in_category( 'products' ) ) {
    include( TEMPLATEPATH.'/templates/single-products.php' );
} else {
    include( TEMPLATEPATH.'/templates/single-default.php' );
};

?>
