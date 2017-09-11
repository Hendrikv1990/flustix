<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <script>
        function hideAndPlay(){

            setTimeout(function(){



//                console.log("MORE THIS NOT THE END");
//                jQuery('#bgndVideo').YTPPlay();
//                jQuery('.big-background').css('background-image', 'url()');

            }, 3500);
        }
    </script>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

    <!-- ******************* The Navbar Area ******************* -->





    <!-- Your site title as branding in the menu -->
    <?php if ( ! has_custom_logo() ) { ?>

    <?php if ( is_front_page() && is_home() ) : ?>

        <a class="header-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></a>

    <?php else : ?>

        <a class="header-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

    <?php endif; ?>


    <?php } else {
        ?>

        <div class="">
       <?php the_custom_logo(); ?>
            </div>
            <?php
    } ?><!-- end custom logo -->

<?php //require get_template_directory() . '/menu.php'; ?>