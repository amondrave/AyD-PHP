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
        $query = $this->db->conexion()->prepare('INSERT INTO proyecto (idProyecto, nombre, tipo_proyecto_idtipo_proyecto, semillero, convocatoria_idconvocatoria, fecha, estado, nota_final) VALUES (:codigo, :nombre, :tipo, :semillero, :convocatoria, :fecha, :estado, :nota)');
        try {
            $query->execute([
                'codigo' => $proyecto->getIdProyecto(),
                'nombre' => $proyecto->getNombre(),
                'tipo' => $proyecto->getTipoproyecto(),
                'semillero' => $proyecto->getSemillero(),
                'convocatoria' => $proyecto->getConvocatoria(),
                'fecha' => $proyecto->getFecha(),
                'estado' => $proyecto->getEstado(),
                'nota' => $proyecto->getNotaFinal()
            ]);
            return true;
        } catch (PDOException $e) {
            echo ("Error base de datos" . $e);
            return false;
        }
    }
}
