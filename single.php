<?php
$post = $wp_query->post;
if ( in_category( 'services' ) ) {
    include( TEMPLATEPATH.'/templates/single-services.php' );
} else if  ( in_category( 'products' ) ) {
    include( TEMPLATEPATH.'/templates/single-products.php' );
} else if  ( in_category( 'cases' ) ) {
    include( TEMPLATEPATH.'/templates/single-cases.php' );
} else if  ( in_category( 'anticases' ) ) {
    include( TEMPLATEPATH.'/templates/single-cases.php' );
} else if  ( in_category( 'news' ) ) {
    include( TEMPLATEPATH.'/templates/single-news.php' );
} else if  ( in_category( 'its' ) ) {
    include( TEMPLATEPATH.'/templates/single-its.php' );
} else if  ( in_category( 'learning' ) ) {
    include( TEMPLATEPATH.'/templates/single-learning.php' );
} else if  ( in_category( 'kassa' ) ) {
    include( TEMPLATEPATH.'/templates/single-kassa.php' );
} else if  ( in_category( 'statji' ) ) {
    include( TEMPLATEPATH.'/templates/single-articles.php' );
} else {
    include( TEMPLATEPATH.'/templates/single-default.php' );
};

?>
