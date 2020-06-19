<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?=URL?>public/assets/icons/logoufps.png" />
    <script src="<?=URL?>public/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/css/sweet-alert.css">
    <link rel="stylesheet" href="<?=URL?>public/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet" href="<?=URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?=URL?>public/css/style.css">
    <link rel="stylesheet" href="<?=URL?>public/css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?=URL?>public/js/modernizr.js"></script>
    <script src="<?=URL?>public/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=URL?>public/js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/img/ufps2.png);">
    <div class="form-container">
        <p class="text-center" style="margin-top: -17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: -10px;">Introduce tus datos para registrarte</h4>
       <center><h5>Para visualizar los campos de registro de estudiante, presiona en el campo estudiante, para esconderlos presiona nuevamente</h5></center>
       <form>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Docente
            </label>
        </div>
        <div class="form-check">
            <input data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Estudiante
            </label>
        </div><br>
            <div class="collapse" id="collapseExample">
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Carrera</label>
                </div><br>
            </div>
            <div class="group-material-login">
              <input type="text" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre</label>
            </div><br>
            <div class="group-material-login">
                <input type="text" class="material-login-control" required="" maxlength="70">
                <span class="highlight-login"></span>
                <span class="bar-login"></span>
                <label><i class="zmdi zmdi-account"></i> &nbsp; Documento</label>
              </div><br>
            <div class="group-material-login">
                <input type="text" class="material-login-control" required="" maxlength="70">
                <span class="highlight-login"></span>
                <span class="bar-login"></span>
                <label><i class="zmdi zmdi-account"></i> &nbsp; codigo</label>
              </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <button class="btn-login btn-block" type="submit">Registrarse</button>
        </form>
    </div>  
</body>
</html>