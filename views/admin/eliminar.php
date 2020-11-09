<?php
require_once 'views/templates/menu.php';
?>

<main class="main">
    <h1 class="titulo">Eliminar Convocatoria</h1>
    <p>Recuerde que solo puede eliminar convocatorias que no esten habilitadas ya que estas no contienen proyectos</p>

    <form action="<?= URL ?>convocatoria/eliminar" class="bonitos" method="GET">
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
            <button type="submit" class="btn btn-danger">Eliminar Convocatoria</button>
        </div>
    </form>

</main>


<?php
require_once 'views/templates/footer.php';
?>