<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="wrapper">
        <div class="header__inner">
            <div class="header__logo">
                <a href="/">
                    <h2><span>Your Logo</span></h2>
                </a>
            </div>
            <nav aria-label="Main Menu">
                <div class="main-menu">
                    <?php wp_nav_menu( array('menu' => 'Main Menu') ); ?>
                </div>
            </nav>
        </div>
    </div>
</header>