<?php

require_once 'entities/Estudiante.php';
require_once 'entities/Persona.php';


class EstudianteModel extends Model{

    protected $estudiante;

    public function __construct(){
        parent::__construct();
        $this->estudiante = new Estudiante();
    }

    public function insertar($estudiante)
    {
        # Insertar en la base de datos a un estudiante
        $query = $this->db->conexion()->prepare('INSERT INTO estudiante(persona_documento,codigo_estudiante,carrera_codigo_carrera) VALUES(:documento,:codigo,:carrera)');
        //ejecuto query para insertar a la base de datos
        try {
              $query->execute([
                'documento' => $estudiante->getDocumento(),
                'codigo' => $estudiante->getCodigoEstudiante(),
                'carrera' => $estudiante->getCodigoCarrera()
              ]);
             return true;
        } catch (PDOException $e) {
            //throw $th;
            print_r('Ocurrio un fallo', $e);
            return false;
        }
    }


    public function obtener($documento)
    {
        $query = $this->db->conexion()->prepare('SELECT * FROM estudiante WHERE persona_documento = :documento');
        try{
            $query->execute([
                'documento' => $documento
            ]);
            while($row = $query->fetch()){
                $this->estudiante->setDocumento($row['persona_documento']);
                $this->estudiante->setCodigoEstudiante($row['codigo_estudiante']);
                $this->estudiante->setCodigoCarrera($row['carrera_codigo_carrera']);
            }
            return $this->estudiante;
        }catch(PDOException $e){
            return null;
        }         
    }

    public function obtenerPorCodigo($codigo)
    {
        $query = $this->db->conexion()->prepare('SELECT * FROM estudiante WHERE codigo_estudiante = :codigo');
        try{
            $query->execute([
                'codigo' => $codigo
            ]);
            while($row = $query->fetch()){
                $this->estudiante->setDocumento($row['persona_documento']);
                $this->estudiante->setCodigoEstudiante($row['codigo_estudiante']);
                $this->estudiante->setCodigoCarrera($row['carrera_codigo_carrera']);
            }
            return $this->estudiante;
        }catch(PDOException $e){
            return null;
        }  
    }

    public function ObtenerTodos()
    {
         $estudiantes = [];
         try {
             $query = $this->db->conexion()->query('SELECT * FROM estudiante');
             while($row = $query->fetch()){
                 $estudiante = new Estudiante();
                 $estudiante->setDocumento($row['persona_documento']);
                 $estudiante->setCodigoEstudiante($row['codigo_estudiante']);
                 $estudiante->setCodigoCarrera($row['carrera_codigo_carrera']);
                 array_push($estudiantes,$estudiante);
             }
             return $estudiantes;
         } catch (PDOException $e) {
             print_r('Error en la base de datos',$e);
             return [];
         }
    }

    public function obtenerPorCarrera($carrera)
    {
        $estudiantes = [];
        try {
            $query = $this->db->conexion()->prepare('SELECT * FROM estuiante WHERE carrera_codigo_carrera = :carrera');
            $query->execute([
                'carrera' => $carrera
            ]);
            while($row = $query->fetch()){
                $estudiante = new Estudiante();
                $estudiante->setDocumento($row['persona_documento']);
                $estudiante->setCodigoEstudiante($row['codigo_estudiante']);
                $estudiante->setCodigoCarrera($row['carrera_codigo_carrera']);
                array_push($estudiantes,$estudiante);
            }
            return $estudiantes;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

}


?>