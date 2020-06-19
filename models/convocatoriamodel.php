<?php

require_once 'entities/Convocatoria.php';

class ConvocatoriaModel extends Model{

    protected $convocatoria;

   public function __construct(){
       parent::__construct();
       $this->convocatoria = new Convocatoria();
   }


   public function insertar($convocatoria){
        $query = $this->db->conexion()->prepare('INSERT INTO convocatoria (fecha_inicio,fecha_creacion,nombre_convocatoria,descripcion,fecha_cierre,semestre,habilitadas) VALUES(:fechaIni,:fecha,:nombre,:descr,:fechaCie,:semestre,:habilitadas)');
        try {
            
            $query->execute([
                'fechaIni' => $convocatoria->getFechaInicio(),
                'fecha' => getdate("Y-m-d"),
                'nombre' => $convocatoria->getNombre(),
                'descr' => 'Descripción general',
                'fecfaCie' => null,
                'semestre' => $convocatoria->getSemestre(),
                'habilitadas' => 'N'
            ]);
            return true;
        } catch (PDOException $e) {
            print_r('Error en la base de datos',$e);
            return false;
        }
   }

   public function editar($convocatoria){

   }

   public function eliminar($id){
        $query = $this->db->conexion()->prepare('DELETE FROM convocatoria WHERE idConvocatoria = :id');
        try{
            $query->execute($id);
            return true;
        }catch(PDOException $e){
            return false;
        }
   }


   public function buscar($id){
        $convocatoria = new Convocatoria();
        $query = $this->db->conexion()->prepare('SELECT * FROM convocatroia WHERE idConvocatoria = :id');
        try {
            $query->execute($id);
            while($row = $query->fetch()){
              $convocatoria->setIdConvocatoria($row['idConvocatoria']);
              $convocatoria->setFechaInicio($row['fecha_inicio']);
              $convocatoria->setFechaCreacion($row['fecha_creacion']);
              $convocatoria->setNombre($row['nombre']);
              $convocatoria->setDescripcion($row['descripcion']);
              $convocatoria->fechaCierre($row['fecha_cierre']);
              $convocatoria->setSemestre($row['semestre']);
            }
            return $convocatoria;
        } catch (PDOException $e) {
            return null;
        }
   }

   public function obtenerTodos(){
      $convocatorias = [];
      try {
          $query = $this->db->conexion()->query('SELECT * FROM convocatoria');
          while ($row = $query->fetch()) {
              $con = new Convocatoria();
              $con->setIdConvocatoria($row['idConvocatoria']);
              $con->setFechaInicio($row['fecha_inicio']);
              $con->setFechaCreacion($row['fecha_creacion']);
              $con->setNombre($row['nombre']);
              $con->setDescripcion($row['descripcion']);
              $con->fechaCierre($row['fecha_cierre']);
              $con->setSemestre($row['semestre']);
              array_push($convocatorias,$con);
          }
          return $convocatorias;
      } catch (PDOException $e) {
          return [];
      }
   }

}



?>