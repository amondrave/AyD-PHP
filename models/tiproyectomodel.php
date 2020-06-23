<?php

require_once 'entities/TipoProyecto.php';

class TipoProyectoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function obtenerTodos(){

        $tipos = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM tipo_proyecto');
            while($row = $query->fetch()){
                $tipo = new TipoProyecto();
                $tipo->setIdTipoProyecto($row['idtipo_proyecto']);
                $tipo->setNombre($row['nombre']);
                array_push($tipos, $tipo);
            }
        } catch (PDOException $e){
            print_r('ERROR EN LA BASE DE DATOS', $e);
            return null;
        }


    }


}


?>