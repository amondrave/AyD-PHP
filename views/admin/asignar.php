<?php
require_once 'views/templates/menu.php';
?>


<main class="main">
    <h2 class="titulo">Asigna al Docente</h2>
    <h5>Selecciona al docente, luego el proyecto y asignalos</h5><br>
    <form action="<?= URL ?>convocatoria/asignar" method="GET" class="bonitos">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Docente</label>
                <select id="inputState" class="form-control" name="profesor">
                    <?php
                    foreach ($profesores as $p) {
                    ?>
                        <option value="<?= $p->getDocumento() ?>">
                            <?= $p->getNombres() . " " . $p->getApellido1() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Proyecto</label>
                <select id="inputState" class="form-control" name="proyecto">
                    <?php
                    foreach ($proyectos as $pr) {
                    ?>
                        <option value="<?= $pr->getIdProyecto() ?>">
                            <?= $pr->getNombre() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="bonitodos">
            <input type="submit" class="btn btn-danger" value="Asignar docente" />
        </div>
    </form>


</main>

<?php
require_once 'views/templates/footer.php';
?>