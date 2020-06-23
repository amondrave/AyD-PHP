<?php

require_once 'entities/EstadoProyecto.php';

class EstadoProyectoModel extends Model{

    public function __construct(){
        parent::__construct();
    }


    public function obtenerTodos(){
        $estados = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM estado_proyecto');
            while($row = $query->fetch()){
                $estado = new EstadoProyecto();
                $estado->setIdEstadoProyecto($row['idestado_proyecto']);
                $estado->setNombre($row['nombre']);
                $estado->setDescripcion($row['descripcion']);
                array_push($estados,$estado);
            }
            return $estados;
        } catch (PDOException $e) {
            //throw $th;
            return [];
        }
    }

    public function buscar($id){
        $query = $this->db->conexion()->prepare('SELECT * FROM estado_proyecto WHERE idestado_proyecto = :id');
        try {
            $query->execute(['id'=> $id] );
            while ($row = $query->fetch()) {
                $estado = new EstadoProyecto();
                $estado->setIdEstadoProyecto($row['idestado_proyecto']);
                $estado->setNombre($row['nombre']);
            }
            return $estado;
        } catch (PDOException $e) {
            //throw $th;
            print_r('Error en la base de datos',$e);
            return null;
        }

    }




}




?>