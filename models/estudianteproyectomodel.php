<?php

require 'entities/EstudianteProyecto.php';

class EstudianteProyectoModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($proyecto, $estudiante)
    {
        $query = $this->db->conexion()->prepare('INSERT INTO estudiante_en_proyecto(proyecto_idproyecto,fecha,estudiante_persona_documento) VALUES (:proyecto,:fecha,:estudiante)');
        try {
            $query->execute([
                'proyecto' => $proyecto,
                'fecha' => null,
                'estudiante' => $estudiante
            ]);
            return true;
        } catch (PDOException $e) {
            print_r($e);
            return  false;
        }
    }

    public function obtenerProyecto($documento)
    {
        $proyectos = [];
        $query = $this->db->conexion()->prepare('SELECT proyecto_idproyecto FROM estudiante_en_proyecto WHERE estudiante_persona_documento = :documento');
        try {
            $query->execute([
                'documento' => $documento
            ]);
            //Retornamos todos los códigos de los proyectos de ese alumno
            while ($row = $query->fetch()) {
                array_push($proyectos, $row['proyecto_idproyecto']);
            }
            return $proyectos;
        } catch (PDOException $e) {
            print_r('Error al momento de consultar ' . $e);
            return [];
        }
    }
}
