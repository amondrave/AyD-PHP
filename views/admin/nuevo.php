<?php
require_once 'views/templates/header.php';
?>

<h1>Crear nueva convocatoria</h1>
<div class="container">
<form action="<?=URL?>convocatoria/nuevo" method="POST">
  <div class="row">
    <div class="col">
    <label for="">Fecha de inicio</label>
      <input type="date" name="fecha_inicio" class="form-control" placeholder="fecha de inicio" required>
    </div>
    <div class="col">
      <label for="">Nombre de la convocatoria</label>
      <input type="text" name="nombre"class="form-control" placeholder="nombre convocatoria" required>
    </div>
  </div><br>
  <!--Segunda fila-->
  <div class="row">
     <div class="col">
       <label for="">Semestre</label>
       <select name="semestre" id="semestre" class="form-control" required>
         <?php
         foreach($semestres as $semestre){
         ?>
         <option value="<?=$semestre->getIdSemestre()?>">
            <?=$semestre->getAnio()."-".$semestre->getPeriodo()?>
         </option>
         <?php
         }
         ?>
       </select>
     </div>
     <div class="col">
       <label for="">Fecha de cierre</label>
       <input type="date" name="cierre" id="" class="form-control">
     </div>
  </div><br>
  <!--Tercera fila-->
  
   <label for="">Crear convocatoria</label><br>
   <button type="submit" class="btn btn-primary">Crear</button>
  
</form>
</div>

<?php
require_once 'views/templates/footer.php';
?>