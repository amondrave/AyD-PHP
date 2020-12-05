<?php
require_once 'views/templates/estudiante/header.php';
?>

<main class="container">
    <h3 class="titulo">Proyectos registrados</h3>
    <p>Revisa los proyectos que has registrado en el sistema</p>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr class="table-danger">
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Convocatoria</th>
                    <th>Semillero</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($proyectos as $p) {
                ?>
                    <tr class="table-secondary">
                        <th><?= $p->getIdProyecto() ?></th>
                        <th><?= $p->getNombre() ?></th>
                        <th><?= $p->getConvocatoria() ?></th>
                        <th><?= $p->getSemillero() ?></th>
                        <th><?= $p->getEstado() ?></th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php
require_once 'views/templates/footer.php';
?>