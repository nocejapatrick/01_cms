<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.css';?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
    <div class="container" style="padding:0 15px;">
        <div class="row align-items-center justify-content-between">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="" class="img-fluid">
            </div>
            <nav id="menu" class="row">
        <!-- <div id="search"><?php get_search_form(); ?></div> -->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <i class="fa fa-search" aria-hidden="true"></i>
            </nav>
        </div>
    </div>
</header>
<div id="container">