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
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

    <!-- ******************* The Navbar Area ******************* -->


    <header>
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 760.157px;"><div class="inner slimScrollable" style="overflow: hidden; width: auto; height: 760.157px;">
                <i class="close icon-Danger"></i>

                <div class="logo">
                    <a href="http://flustix.com/" style="">
                        <img class="aligncenter" src="http://flustix.com/wp-content/themes/duality/img/logo_dark.png" alt="Duality">
                    </a>
                </div>

                <form class="search-form" method="get" role="search" action="http://flustix.com/">
                    <input class="input-line" type="text" name="s" id="s" placeholder="Search on site ...">
                    <button type="submit" class="submit-btn"><i class="icon-arrow-right"></i></button>
                </form>


                <nav class="main-nav">
                    <ul class="menu clean-list">
                        <li class="page_item page-item-2"><a href="http://flustix.com/beispiel-seite/">Beispiel-Seite</a></li>
                        <li class="page_item page-item-50"><a href="http://flustix.com/blog/">Blog</a></li>
                        <li class="page_item page-item-5 current_page_item"><a href="http://flustix.com/">Home</a></li>
                        <li class="page_item page-item-13"><a href="http://flustix.com/worum-gehts/">Worum Geht’s</a></li>
                    </ul>
                </nav>

                <ul class="socials clean-list">
                </ul>

            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 760px;"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </header>
    <div class="menu-trigger white">
        <span class="icon white"></span>
        <span>Menu</span>
    </div>

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