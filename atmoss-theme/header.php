<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">

    <!-- FAVICONS
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()); ?>//favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>//site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- TAG MANAGER
    ================================================== -->

    <!-- SEO INFO
    ================================================== -->
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="ATMOSS es un despacho de arquitectura y construcción joven conformado por ingenieros y arquitectos que en conjunto buscamos revolucionar y mejorar la forma en que se construye y se diseña en México.">
    <meta name="keywords" content="atmoss constructora">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © <?php echo date('Y'); ?> ATMOSS, Despacho de arquitectura y construcción.">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- NAVBAR
================================================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/ui/atmoss-arquitectura-construccion-logo.png" alt="atmoss-arquitectura-construccion-logo" height="40px" width="auto">
        </a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'	          => 2, 
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1 navbar9',
                'menu_class'      => 'navbar-nav',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        <!-- <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo esc_url(home_url()); ?>">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">NOSOTROS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="servicios.html" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item px-2" href="servicios.html">DISEÑO ARQUITECTÓNICO</a>
                        <a class="dropdown-item px-2" href="servicios.html">SUPERVISIÓN Y CONSTRUCCIÓN</a>
                        <a class="dropdown-item px-2" href="servicios.html">RECORRIDOS VIRTUALES</a>
                        <a class="dropdown-item px-2" href="servicios.html">GESTORÍA DE PROYECTOS</a>
                        <a class="dropdown-item px-2" href="servicios.html">MAQUETAS PROFESIONALES</a>
                        <a class="dropdown-item px-2" href="servicios.html">AMPLIACIONES Y REMODELACIONES</a>
                        <a class="dropdown-item px-2" href="servicios.html">DISEÑO ESTRUCTURAL</a>
                        <a class="dropdown-item px-2" href="servicios.html">INMOBILIARIA</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DISEÑO BIM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proyectos.html">PROYECTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">CONTACTO</a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>