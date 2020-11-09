<?php
require_once 'views/templates/menu.php';
?>

<main class="main">
    <h2 class="titulo">Gestionar Convocatorias</h2>
    <h5>A continuación se visualiza una tabla de las convocatorias existentes, con toda su información.</h5><br>

    <div class="row">
        <div class="col-md-3"><a type="button" class="btn btn-danger btn-block" href="<?= URL ?>convocatoria/index">Crear Convocatoria</a></div>
        <div class="col-md-3"><a type="button" class="btn btn-danger btn-block" href="">Modificar Convocatoria</a></div>
        <div class="col-md-3"><a type="button" class="btn btn-danger btn-block" href="<?= URL ?>convocatoria/borrar">Eliminar Convocatoria</a></div>

    </div><br>
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
                foreach ($convocatoria as $convocatoria) {
                ?>
                    <tr class="table-secondary">
                        <th><input type="checkbox" name="id" value="<?= $convocatoria->getIdConvocatoria() ?>"></th>
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
    </div>
</main>

<?php
require_once 'views/templates/footer.php';
?>