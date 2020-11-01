<!DOCTYPE html>
<html lang="es">
<head>
    <title><?=$titulo?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logoufps.png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?= URL?>public/css/sweet-alert.css">
    <link rel="stylesheet" href="<?= URL?>public/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= URL?>public/css/normalize.css">
    <link rel="stylesheet" href="<?= URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL?>public/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?= URL?>public/css/style.css">
    <link rel="stylesheet" href="<?= URL?>public/css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= URL?>public/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?= URL?>public/js/modernizr.js"></script>
    <script src="<?= URL?>public/js/bootstrap.min.js"></script>
    <script src="<?= URL?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= URL?>public/js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(<?=URL?>public/assets/img/ufps.jpeg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">ingresa tus datos para iniciar sesión</h4>
       <form action="<?=URL?>estudiante/login" method="POST">
            <div class="group-material-login">
              <input type="text" class="material-login-control" required="" maxlength="70" name="codigo">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Codigo</label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control" required="" maxlength="70" name="documento">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Documento</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="70" name="contrasena">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div><br>
            <button class="btn-login btn-block" type="submit">Iniciar sesión</button>  
            <a href="<?=URL?>index/registro" class="btn btn-loginn zmdi zmdi-arrow-right">Registrate</a>
        </form><br>
        <div class="text-center">
            <a href="<?=URL?>index/admin" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Docente">
                <img src="<?=URL?>public/assets/icons/jefe.png" class="rounded mx-auto d-block">
            </a>
        </div>
    </div>  
</body>
</html>