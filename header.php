<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @package iq3
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
    <?php wp_head();?>

</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <header class="header" id="header">
            <div class="wrapper">
                <?php the_custom_logo(); ?>
                <div class="main-nav-menu">
                    <div class="menu-toggle">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    <?php wp_nav_menu( [
                            'theme_location'  => 'header',
                            'depth'           => 2,
                            'container'       => 'nav',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'nav navbar-nav',
                            'fallback_cb'     => 'cdc\Navwalker::fallback',
                            'walker'          => new hmd\Navwalker(),
                    ] );?>
                </div>
            </div>
    </div>
    </header>