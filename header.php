<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>

<a href="#maincontent" class="skip-link">Skip to main content</a>

<header class="header">
    <div class="wrapper">
        <div class="header__inner">
            <div class="header__logo">
                <a href="/">
                    <img src="<?=get_template_directory_uri() ?>/assets/img/Martindale-logo.webp" />
                </a>
            </div>
            <nav aria-label="Main Menu">
                <button class="open-button" aria-expanded="false" aria-haspopup="menu" aria-controls="main-menu" aria-label="Open Main Navigation">
                    <div class="hidden">Open Menu</div>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="main-menu">
                <div class="header__menu">
                    <?php wp_nav_menu( array('theme_location' => 'main-navigation') ); ?>
                </div>
            </nav>
        </div>
    </div>
</header>