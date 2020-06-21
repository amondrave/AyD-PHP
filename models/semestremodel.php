<?php

require_once 'entities/Semestre.php';

class SemestreModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertar($semestre){
        $query = $this->db->coneion()->prepare('INSERT INTO semestre(periodo,anio ) VALUES (:periodo,:anio)');
        try {
            $query->execute([
                'periodo' => $semestre->getPeriodo(),
                'anio' => $semestre->getAnio()
            ]);
            return true;
        } catch (PDOException $e) {
            print_r("Error en la base de datos",$e);
            return false;
        }
    }

    public function obtenerTodos(){
        $semestres = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM semestre');
            while($row = $query->fetch()){
                $semestre = new Semestre();
                $semestre->setIdSemestre($row['idsemestre']);
                $semestre->setPeriodo($row['periodo']);
                $semestre->setAnio($row['anio']);
                array_push($semestres,$semestre);
            }
            return $semestres;
        } 
        catch (PDOException $e) {
            print_r('Error en la base de datos',$e);
            return [];
        }
    }

    public function buscarPorId($id){

        $query = $this->db->conexion()->prepare('SELECT * FROM semestre WHERE idsemestre = :id');
        try {
            $query->execute([
                'id' => $id
            ]);
            $semestre = new Semestre();

            while ($row = $query->fetch()) {
                $semestre->setIdSemestre($row['idsemestre']);
                $semestre->setAnio($row['anio']);
                $semestre->setPeriodo($row['periodo']);
            }
            return $semestre;
        } catch (PDOException $e) {
            print_r("Error en la base de datos",$e);
            return null;
        }

    }

}


?>