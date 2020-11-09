<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>public/css/estilos.css">
</head>

<body>
    <div class="contenedor active" id="contenedor">
        <header class="header">
            <div class="contenedor-logo">
                <button id="boton-menu" class="boton-menu"><i class="fas fa-bars"></i></button>
                <a href="#" class="logo"><i class="fas fa-user-graduate"></i><span>ESTUDIANTE</span></a>
            </div>

            <div></div>

            <div class="botones-header">
                <a href="<?= URL ?>estudiante/cerrar" type="button"><i class="fas fa-power-off"></i></a>
                <span>Nombre estudiante</span>
                <a href="#" class="avatar"><img src="<?= URL ?>public/img/logostudent.png" alt=""></a>
            </div>
        </header>

        <nav class="menu-lateral">
            <a href="<?= URL ?>estudiante/home" class="active"><i class="fas fa-home"></i>Inicio</a>
            <hr>
            <a href="#"><i class="fas fa-folder-open"></i>Proyectos</a>
            <a href="#"><i class="fas fa-edit"></i>Registro de Proyectos</a>
            <a href="#"><i class="fas fa-search"></i>Busqueda de Proyectos</a>
            <hr>
        </nav>