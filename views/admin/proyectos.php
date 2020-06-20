<?php
require_once 'views/templates/header.php';
?>


<div class="card">
  <div class="card-header">
    <?=$mensaje?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?=$titulo?></h5>
     <form action="">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="">Seleccione la convocatoria</label>
          <select name="convocatoria" id="con" class="form-control">
            <?php
              foreach($lista as $con){
            ?>
                <option value="<?=$con->getIdConvocatoria()?>">
                   <?=$con->getNombre()?>
                </option>
            <?php
              }
            ?>
          </select>
       </div>
       <div class="form-group col-md-6">
          <label for="">Presione el boton para buscar</label>
          <input type="submit" value="Buscar" class="form-control btn btn-primary">
       </div>
        </div>
     </form>
  </div>
</div>
<!--Termina el primer card--->
<div class="card">
  <h5 class="card-header"><?=$titulo?></h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php
 require_once 'views/templates/footer.php';
?>

