<?php

require_once 'entities/Proyecto.php';

class ProyectoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function insertar($proyecto)
    {
        $query = $this->db->conexion()->prepare('INSERT INTO proyecto (idProyecto, nombre, tipo_proyecto_idtipo_proyecto, semillero, convocatoria_idconvocatoria, fecha, estado) INTO (:codigo, :nombre, :tipo, :semillero, :convocatoria, :fecha, :estado)');
        try {
            $query->execute([
                'codigo' => $proyecto->getIdProyecto(),
                'nombre' => $proyecto->getNombre(),
                'tipo' => $proyecto->getTipoproyecto(),
                'semillero' => $proyecto->getSemillero(),
                'convocatoria' => $proyecto->getConvocatoria(),
                'fecha' => null,
                'estado' => $proyecto->getEstado()
            ]);
            return true;
        } catch (PDOException $e) {
            print_r('Error de base de datos', $e);
            return false;
        }
    }
}
