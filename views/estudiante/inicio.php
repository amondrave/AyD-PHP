<?php
require_once 'views/templates/estudiante/header.php';
?>
<main class="main">
    <h2 class="titulo">Convocatorias activas</h2>
    <p>Revisa las convocatorias que estan activas para que registres tus proyectos</p>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Fecha de cierre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($convocatoria as $c) {
                ?>
                    <tr class="table-secondary">
                        <th><?= $c->getNombre() ?></th>
                        <th><?= $c->getDescripcion() ?></th>
                        <th><?= $c->getSemestre() ?></th>
                        <th><?= $c->getFechaCierre() ?></th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>




    <?php
    require_once 'views/templates/footer.php';
    ?>