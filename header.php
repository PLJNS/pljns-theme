<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PLJNS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding  text-center">
                <?php
			the_custom_logo();
				?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php

			$pljns_description = get_bloginfo( 'description', 'display' );
			if ( $pljns_description || is_customize_preview() ) :
				?>
                <p class="site-description">
                    <?php echo $pljns_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation ">
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					
				),
				
			);
			?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->