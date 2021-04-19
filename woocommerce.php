<?php get_header('product'); ?>

<?php
if ( is_singular( 'product' ) ) {
    woocommerce_content();
}else{
    woocommerce_get_template( 'archive-product.php' );
}
?>

<?php get_footer();?>