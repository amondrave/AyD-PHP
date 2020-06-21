<!DOCTYPE html>
<html lang="es">
<head>
    <title><?=$titulo?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?=URL?>public/assets/icons/logoufps.png" />
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
    <script>window.jQuery || document.write('<script src="<?=URL?>public/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?=URL?>public/js/modernizr.js"></script>
    <script src="<?=URL?>public/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=URL?>public/js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(<?=URL?>public/assets/img/ufps2.png);height: 780px;">
    <div class="form-container" style="
    height: 762px;
    width: 650px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-right: 20px;
    margin-top: 75px;
    margin-bottom: 10px;
    ">
        <p class="text-center" style="margin-top: -17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: -2px;">Introduce tus datos para registrarte</h4>
       <center><h5>Para visualizar los campos de registro de estudiante, presiona en el campo estudiante, para esconderlos presiona nuevamente</h5></center>
       <form action="<?=URL?>registro/insertar" method="post">
        <p>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1" value="profesor" ><br>
                        <label class="form-check-label" for="exampleRadios1">
                          Docente
                        </label>
                      </div>    
                      
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" id="exampleRadios2" value="estudiante" data-toggle="collapse" data-target="#estudiante" aria-expanded="false" aria-controls="collapseExample"><br>
                        <label class="form-check-label" for="exampleRadios2">
                          Estudiante
                        </label>
                      </div>

                </div>
            </div>
          </p>
        <div class="row">
            <div class="col">

                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="nombres">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
                </div><br>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" required="" maxlength="70" name="codigo">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-graduation-cap"></i> &nbsp; Codigo docente o estudiante</label>
                </div><br>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="correo">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-google"></i> &nbsp; Correo</label>
                </div><br>
                <select class="custom-select" id="validationTooltip04" required="" name="tipo_documento">
                    <option selected disabled value="">Tipo de documento</option>
                    <?php
                    foreach ($documentos as $doc) {
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
                    <input type="text" class="material-login-control" required="" maxlength="70" name="apellido1">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Apellidos</label>
                </div><br>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" required="" maxlength="70" name="contra">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div><br>
                <div class="collapse" id="estudiante">
                    <div class="group-material-login">
                        <input type="text" class="material-login-control"  maxlength="70" name="carrera">
                        <span class="highlight-login"></span>
                        <span class="bar-login"></span>
                        <label><i class="zmdi zmdi-account"></i> &nbsp; Codigo de carrera</label>
                    </div>   
                </div><br>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" required="" maxlength="70" name="documento">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account-box"></i> &nbsp; Documento</label>
                </div><br>
                <div class="group-material-login">
                    <input type="date" class="material-login-control" required maxlength="70" name="fecha_nacimiento">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                   -<!-- <label><i class="zmdi zmdi-calenda"></i> &nbsp; Fecha de nacimiento</label>-->
                </div>
            </div>  
        </div>
        <div>
            <center><input type="submit" class="botoncito btn btn-outline-light" style="padding: 0.5rem 8rem;" value="Registrese"></center>
        </div>  
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</body>
</html>