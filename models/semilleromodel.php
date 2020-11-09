<?php

require_once 'entities/Semillero.php';

class SemilleroModel extends Model
{

    private $semillero;

    public function __construct()
    {
        parent::__construct();
        $this->semillero = new Semillero();
    }

    public function insertar($semillero)
    {
        $query = $this->db->conexion()->prepare('INSERT INTO semillero (nombre,carrera_codigo_carrera,activo) VALUES (:nombre,:carrera,:activo)');
        try {
            $query->execute([
                'nombre' => $semillero->getNombre(),
                'carrera' => $semillero->getCarrera(),
                'activo' => 'a'
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtener($id)
    {
        $query = $this->db->conexion()->prepare('SELECT * FROM semillero WHERE idSemillero = :id');
        try {
            $query->execute([
                'id' => $id
            ]);
            while ($row = $query->fetch()) {
                $this->semillero->setIdSemillero($row['idSemillero']);
                $this->semillero->setNombre($row['nombre']);
                $this->semillero->setCarrera($row['carrera_codigo_carrera']);
            }
            return $this->semillero;
        } catch (PDOException $e) {
            print_r('Error de conexión', $e);
            return null;
        }
    }

    public function obtenerTodos()
    {
        $semilleros = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM semillero');
            while ($row = $query->fetch()) {
                $semillero = new Semillero();
                $semillero->setIdSemillero($row['idsemillero']);
                $semillero->setNombre($row['nombre']);
                $semillero->setCarrera($row['carrera_codigo_carrera']);
                array_push($semilleros, $semillero);
            }
            return $semilleros;
        } catch (PDOException $e) {
            return [];
        }
    }
}
