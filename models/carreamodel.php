<?php

require_once 'entities/Carrera.php';

class CarreraModel extends Model{


    public function __construct(){
         parent::__construct();
    }



    public function insertar($carrera)
    {
        # Preparo la query de insersión 
        $query = $this->db->conexion()->prepare('INSERT INTO carrera(codigo_carrera, nombre_carrera) VALUES(:codigo, :nombre)');
        try {
              //ejecuto query e inserto en la base de datos
              $query->execute([
                'codigo' => $carrera->getCodigoCarrera(),
                'nombre' => $carrera->getNombreCarrea()
              ]);
              return true;
        } catch (PDOException $e) {
            //Error en la consulta
            print_r('Error en la conexión',$e);
            return  false;
        }
    }


    public function obtenerTodos()
    {
        $carreras = [];
        # Hago la consulta para traer todas las carreas de mi base de datos
        try {
            $query = $this->db->conexion()->query('SELECT * FROM carrera');
            while($row = $query->fecth()){
                $carrera = new Carrera();
                $carrera->setCodigoCarrera($row['codigo_carrera']);
                $carrera->setNombreCarrera($row['nombre_carrera']);
                array_push($carreras,$carrera);
            }
            return $carreras;
        } catch ( PDOException $e) {
            //error de base
            print_r('error de conexión',$e);
            return [];
        }
    }

    /**
     * Metodo para eliminar un registro de la base de datos
     * @param $codigo que es el codigo de una carrera 
     * @return true si se elimino correctamente sino retorna false
     */
    public function eliminar($codigo){
         #preparo query para eliminar el objeto de la base de datos
         $query = $this->db->conexion()->prepare('DELETE FROM carrera WHERE codigo_carrera = :codigo');
         try {
             //Ejecuto consulta
             $query->execute([
                  'codigo' => $codigo
             ]);
             return true;
         } catch (PDOException  $th) {
             //throw $th;
             return false;
         }
    }

    public function obtenerCodigo($nombre){
        $codigo = 0;
        $query = $this->db->conexion()->prepare('SELECT codigo_carrera FROM carrera WHERE nombre_carrera = :nombre');
        try {
             $query->execute([
                 'nombre' => $nombre
             ]);
             while($row = $query->fetch()){
                $codigo = $row['codigo_carrera'];
             }
            if($codigo != 0) return $codigo;
            else return -1;
        } catch (PDOException $e) {
            print_r('error en la base de datos', $e);
            return null;
        }
    }


}




?>