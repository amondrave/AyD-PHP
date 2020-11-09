<?php
require_once 'views/templates/menu.php';
?>


<div class="main">
  <h1>Crear nueva convocatoria</h1>
  <form action="<?= URL ?>convocatoria/nuevo" method="POST" class="bonito">
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="">Fecha de inicio</label>
        <input type="date" name="fecha_inicio" class="form-control" placeholder="fecha de inicio" required>
      </div>
      <div class="form-group col-md-6">
        <label for="">Nombre de la convocatoria</label>
        <input type="text" name="nombre" class="form-control" placeholder="nombre convocatoria" required>
      </div>
    </div>
    <!--Segunda fila-->
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="">Semestre</label>
        <select name="semestre" id="semestre" class="form-control" required>
          <?php
          foreach ($semestres as $semestre) {
          ?>
            <option value="<?= $semestre->getIdSemestre() ?>">
              <?= $semestre->getAnio() . "-" . $semestre->getPeriodo() ?>
            </option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label for="">Fecha de cierre</label>
        <input type="date" name="cierre" id="" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label for="">Estado</label>
        <select name="estado" id="">
          <option value="N">No habilitada</option>
          <option value="A">Habilitada</option>
        </select>
      </div>
    </div><br>
    <div class="form-row">
      <label for="">Descripción</label>
      <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
    </div>
    <!--Tercera fila-->

    <label for="">Crear convocatoria</label><br>
    <button type="submit" class="btn btn-primary">Crear</button>

  </form>
</div>

<?php
require_once 'views/templates/footer.php';
?>