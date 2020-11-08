<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?=URL?>public/assets/icons/logoufps.png" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?=URL?>public/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/css/carrousel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL?>public/css/sweet-alert.css">
    <link rel="stylesheet" href="<?=URL?>public/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet" href="<?=URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?=URL?>public/css/style.css">
    <link rel="stylesheet" href="<?=URL?>public/css/estilos.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=URL?>public/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?=URL?>public/js/modernizr.js"></script>
    <script src="<?=URL?>public/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=URL?>public/js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Administrador
            </div>
            <div class="full-reset" style="background-color:#fff; padding: 10px 0; color:#dd4b39;">
                <figure>
                    <img src="<?=URL?>public/assets/img/user01.png" alt="Biblioteca" class="img-responsive center-box" style="width:25%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Nombre administrador</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <div class="contenedor-menu">
                    <ul class="menu">
                        <li><a href="<?=URL?>estudiante/home"><i class = "icono izquierda zmdi zmdi-home"> </i>Inicio</a></li>
                        <li ><a href="#"><i class = "icono izquierda zmdi zmdi-account-add"> </i>Gestionar proyectos<i class="icono derecha zmdi zmdi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?=URL?>convocatoria/index"><i class="loguito zmdi zmdi-settings"></i>Registrar proyecto</a></li>
                                <li><a href="formulario.html"><i class="loguito zmdi zmdi-check-circle"></i>Ver convocatorias</a></li>
                            </ul>
                        </li>
                        <li ><a href="<?=URL?>convocatoria/proyectos"><i class = "icono izquierda zmdi zmdi-collection-folder-image"> </i>Mis proyectos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="<?=URL?>public/assets/img/user01.png" alt="user-picture" class="<?=URL?>public/img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Estudiante</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="<?=URL?>login/cerrar" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"><a href="<?=URL?>estudiante/cerrar"></a></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>