<!DOCTYPE html>
<html lang="es">
<head>
    <title><?=$titulo?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logoufps.png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/css/sweet-alert.css">
    <link rel="stylesheet" href="<?=URL?>public/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet" href="<?=URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?=URL?>public/css/style.css">
    <link rel="stylesheet" href="<?=URL?>public/css/login.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(<?=URL?>public/assets/img/ufps2.png);height: 800px;">
    <div class="form-container" style="
    height: 720px;
    width: 651px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-right: 20px;
    margin-top: 40px;
    margin-bottom: 10px;
    ">
        <p class="text-center" style="margin-top: -17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: -2px;">Introduce tus datos para registrarte</h4>
       <center><h5>Para visualizar los campos de registro de estudiante, presiona en el campo estudiante, para esconderlos presiona nuevamente</h5></center>
       <form>
        <p>
            <center><div>
            <a class="btn btn-outline-light" data-toggle="collapse" href="#estudiante" role="button" aria-expanded="false" aria-controls="collapseExample">
              estudiante
            </a>
            <button class="btn btn-outline-light" type="button">
              Docente
            </button>
            </div></center>
          </p>
        <div class="row">
            <div class="col">

                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="nombres" id="nombres">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
                </div><br>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" required="" maxlength="70" name="codigo" id="codigo">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Codigo docente o estudiante</label>
                </div><br>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="correo" id="correo">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Correo</label>
                </div><br>
                <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Tipo de documento</option>
                     <?php
                     foreach($documentos as $doc){
                     ?>
                     <option value="<?=$doc->getIdTipoDocumento()?>">
                     <?=$doc->getNombre()?>
                     </option>
                     <?php
                     }
                     ?>
                  </select><br>
            </div>
            <div class="col">
                
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" id="apellido" name="apellido">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Apellidos</label>
                </div><br>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="contrasena" id="contrasena">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div><br>
                <div class="collapse" id="estudiante">
                    <div class="group-material-login">
                        <input type="text" class="material-login-control" required="" maxlength="70" id="carrera" name="carrera">
                        <span class="highlight-login"></span>
                        <span class="bar-login"></span>
                        <label><i class="zmdi zmdi-account"></i> &nbsp; Codigo de carrera</label>
                    </div>   
                </div><br>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="documento" id="documento">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Documento</label>
                </div><br>
                
            </div> <br>
        </div>
        <div class="row">
           <div class="col-md-6">
               <div class="group-material-login">
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Fecha de nacimiento</label>
                    <input type="date" class="material-login-control" required="" name="fecha" id="fecha">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                </div><br>
           </div>
        </div>
        <div>
            <center><button type="button" class="botoncito btn btn-outline-light" style="padding: 0.5rem 8rem;">Registrarse</button></center>
        </div>  
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</body>
</html>