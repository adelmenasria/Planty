<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header" class="header" role="banner">
        <a class="header__logo" href="http://localhost:8888/planty/">
            <img src="http://localhost:8888/planty/wp-content/uploads/2023/05/Logo-2.png" width="201" height="19" alt="Logo Planty">
        </a>
        <div class="nav-wrapper">
            <nav id="menu" role="navigation" class="header__nav" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(); ?>
            </nav>
            <button class="header__button" onclick="window.location.href='http://localhost:8888/planty/order';">Commander</button>
        </div>
    </header>
    <div id="container">
        <main id="content" role="main">