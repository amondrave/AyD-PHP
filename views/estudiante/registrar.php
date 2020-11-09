<?php
require_once 'views/templates/estudiante/header.php';
?>

<main class="main">
    <h2 class="titulo">Registrar Proyecto</h2>
    <div>
        <h5>A continuación se visualiza un formulario para la inscripción de proyectos a una convocatoria en especifico, por parte del estudiante, verificar bien los campos antes de habilitarlo. </h5>
    </div>
    <form action="" method="POST" class="bonito">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputEmail4">Codigo Proyecto</label>
                <input type="number" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre Proyecto</label>
                <input type="text" class="form-control" id="inputEmail4" name="nombre">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Documento Alumno</label>
                <input type="number" class="form-control" id="inputEmail4" name="documento">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">convocatoria</label>
                <select id="inputState" class="form-control" name="convocatoria">
                    <?php
                    foreach ($convocatoria as $c) {
                    ?>
                        <option value="<?= $c->getIdConvocatoria() ?>">
                            <?= $c->getNombre() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Tipo de Proyecto</label>
                <select id="inputState" class="form-control" name="tipo">
                    <?php
                    foreach ($tipo as $t) {
                    ?>
                        <option value="<?= $t->getIdTipoProyecto() ?>">
                            <?= $t->getNombre() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control">
                    <?php
                    foreach ($estado as $e) {
                    ?>
                        <option value="<?= $e->getIdEstadoProyecto() ?>">
                            <?= $e->getNombre() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </form>
</main>

<?php
require_once 'views/templates/footer.php';
?>