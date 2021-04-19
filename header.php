<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head() ?>
</head>
<body>
    
<header>

<div id="main-nav">

<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<a href="'. esc_url( home_url() ) . ' "><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . ' " id="logo"></a>';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
} ?>


<?php wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
    )
); ?>

<?php wp_nav_menu(
    array(
        'theme_location' => 'mobile-top-menu',
    )
); ?>


<div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
</div>



</div>
<?php if ( get_header_image() ) : ?>
    <img src="<?php header_image();?>" id="header-image">
<?php endif; ?>

</header>