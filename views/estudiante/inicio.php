<?php
require_once 'views/templates/estudiante/header.php';
?>
<p>
Hola bienvenido <?php $titulo?>
</p>

<a href="<?=URL?>estudiante/cerrar">Cerrar sesión</a>

<?php
 require_once 'views/templates/footer.php';
?>
