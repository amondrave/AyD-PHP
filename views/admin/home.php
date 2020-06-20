<?php
require_once 'views/templates/header.php';
?>

<div class="container">
    <div class="page-header">
     <h1 class="all-tittles">convocatorias activas <small>encuentros de semilleros</small></h1>
    </div>

<!--Tabla de la convocatoria-->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">fecha inicio</th>
      <th scope="col">semestre</th>
      <th scope="col">descripcion</th>
    </tr>
  </thead>
  <tbody>
     <?php
      foreach($listaConvo as $convocatoria){
     ?>
        <tr>
             <th><?=$convocatoria->getIdConvocatoria()?></th>
             <th><?=$convocatoria->getNombre()?></th>
             <th><?=$convocatoria->getFechaInicio()?></th>
             <th><?=$convocatoria->getSemestre()?></th>
             <th><?=$convocatoria->getDescripcion()?></th> 
        </tr>
     <?php
      }
     ?>
  </tbody>
</table>
<!--Cierre de la tabla-->
</div>
<a href="<?=URL?>login/cerrar">Salir</a>


<?php
require_once 'views/templates/footer.php';
?>