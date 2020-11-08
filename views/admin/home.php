<?php
require_once 'views/templates/menu.php';
?>

<div class="container">
  <div class="page-header">
    <h1 class="titulo">convocatorias creadas <small>encuentros de semilleros</small></h1>
  </div>

  <!--Tabla de la convocatoria-->

  <div>
    <table class="table table-bordered">
      <thead>
        <tr class="table-danger">
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Semestre</th>
          <th scope="col">Fecha de inicio</th>
          <th scope="col">Fecha de Cierre</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($listaConvo as $convocatoria) {
        ?>
          <tr class="table-secondary">
            <th><?= $convocatoria->getIdConvocatoria() ?></th>
            <th><?= $convocatoria->getNombre() ?></th>
            <th><?= $convocatoria->getSemestre() ?></th>
            <th><?= $convocatoria->getFechaInicio() ?></th>
            <th><?= $convocatoria->getFechaCierre() ?></th>
            <th><?= $convocatoria->getHabilitadas() ?></th>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!--Cierre de la tabla-->
</div>



<?php
require_once 'views/templates/footer.php';
?>