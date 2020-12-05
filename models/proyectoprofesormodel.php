<?php

require_once 'entities/ProyectoProfesor.php';


class ProyectoProfesorModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($documento, $codigo)
    {
        $query = $this->db->conexion()->prepare('INSERT INTO proyecto_profesor (profesor_persona_documento,	proyecto_idproyecto, nota_calificada) VALUES (:documento, :codigo, :nota)');
        try {
            $query->execute([
                'documento' => $documento,
                'codigo' => $codigo,
                'nota' => 0
            ]);
            return true;
        } catch (PDOException $th) {
            print_r($th);
            return false;
        }
    }
}
