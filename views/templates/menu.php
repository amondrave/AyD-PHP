<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/css/estilos.css">
</head>

<body>
    <div class="contenedor active" id="contenedor">
        <header class="header">
            <div class="contenedor-logo">
                <button id="boton-menu" class="boton-menu"><i class="fas fa-bars"></i></button>
                <a href="" class="logo"><i class="fas fa-user-graduate"></i><span>ADMINISTRADOR</span></a>
            </div>

            <div></div>

            <div class="botones-header">
                <a href="<?= URL ?>login/cerrar"><i class="fas fa-power-off"></i></a>
                <span>Nombre Admin</span>
                <a href="<?= URL ?>login/cerrar" class="avatar"><img src="<?= URL ?>public/img/logostudent.png" alt=""></a>
            </div>
        </header>

        <nav class="menu-lateral">
            <a href="<?= URL ?>login/home"><i class="fas fa-home"></i>Inicio</a>
            <hr>
            <a href="<?= URL ?>convocatoria/index"><i class="fas fa-folder-open"></i>Gestionar Convocatorias</a>
            <a href="<?= URL ?>convocatoria/habilitar"><i class="fas fa-edit"></i>Habilitar Formulario</a>
            <a href="generarReportes.html"><i class="fas fa-file-download"></i>Generar Reportes</a>
            <a href="generarCriterios.html"><i class="fas fa-clipboard-list"></i>Asignar Criterios</a>
            <hr>
        </nav>