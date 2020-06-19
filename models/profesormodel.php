<?php

require_once 'entities/Profesor.php';

class ProfesorModel extends Model{

    protected $profesor;
    

    public function __construct(){
        parent::__construct();
        $this->profesor = new Profesor();
        //$this->db = new Database();
    }

    public function insertar($profesor){
        $query = $this->db->conexion()->prepare('INSERT INTO profesor(codigo_profesor, persona_documento) VALUES(:codigo,:documento)');
        try {
            $query->execute([
                'codigo' => $profesor->getCodigo(),
                'documento' => $profesor->getDocumento()
            ]);
        } catch (PDOException $e) {
            print_r('Error de base de datos',$e);
            return false;
        }
    }

    public function buscar($codigo){
        $query = $this->db->conexion()->prepare('SELECT * FROM profesor WHERE codigo_profesor = :codigo');
        try {
            $query->execute([
                'codigo' => $codigo
            ]);
            while ($row = $query->fetch()) {
                $this->profesor->setCodigo($row['codigo_profesor']);
                $this->profesor->setDocumento($row['persona_documento']);
            }
            return $this->profesor;
        } catch (PDOException $e) {
            echo $e;
            return null;
        }
    }

    public function obtenerTodos(){
        $profesores = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM profesor');
            while ($row = $query->fetch()) {
                $profesor = new Profesor();
                $profesor->setCodigo($row['codigo_profesor']);
                $profesor->setDocumento($row['persona_documento']);
                array_push($profesores,$profesor);
            }
            return $profesores;
        } catch (PDOException $e) {
            return [];
        }
    }

}


?>