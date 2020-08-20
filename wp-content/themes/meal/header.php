<!doctype html>
<html lang="en">
<head>
    <title>Meal &mdash; Free Template for Restaurants by Free-Template.co</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co"/>
    <meta name="keywords" content="free template, free bootstrap, free website template"/>
    <meta name="author" content="Free-Template.co"/>

    <?php wp_head();?>


</head>
<!--<body class="bg-light">-->

<body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

<div class="site-wrap">

    <nav class="site-menu" id="ftco-navbar-spy">
        <?php
            echo wp_nav_menu( array(
                'container_class' => 'site-menu-inner',
                'container_id'    => 'ftco-navbar',
                'location'        => 'primary',
                'menu_class'      => 'list-unstyled'
            ) );
        ?>
    </nav>

    <header class="site-header">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">

            </div>
            <div class="col-2 col-md-6 text-center site-logo-wrap">
                <a href="<?php echo home_url(); ?>" class="site-logo">M</a>
            </div>
            <div class="col-5 col-md-3 text-right menu-burger-wrap">
                <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

            </div>
        </div>

    </header> <!-- site-header -->