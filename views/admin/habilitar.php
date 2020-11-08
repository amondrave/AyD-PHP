<?php
require_once 'views/templates/menu.php';
?>

<main class="main">

    <h1 class="titulo">Habilitar convocatoria</h1>
    <p>Seleccionar la convocatoria que piensa habilitar para que los alumnos puedan registrar proyectos</p>
    <div>
        <form action="<?= URL ?>convocatoria/activar" method="GET" class="bonito">
            <div class="form-row">
                <label for="inputState">convocatoria</label>
                <select id="inputState" class="form-control" name="convocatoria">
                    <?php
                    foreach ($convocatorias as $c) {
                    ?>
                        <option value="<?= $c->getIdConvocatoria() ?>">
                            <?= $c->getNombre() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div><br>
            <div class="form-row">
                <button type="submit" class="btn btn-danger">Habilitar Convocatoria</button>
            </div>
        </form>
    </div>

</main>

<?php
require_once 'views/templates/footer.php';
?>