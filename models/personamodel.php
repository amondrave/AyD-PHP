<?php

require_once 'entities/Persona.php';
require_once 'interfaces/daointerfaz.php';


Class PersonaModel extends Model {

    //protected $db;
    protected $person;

    public function __construct(){
        parent::__construct();
        $this->person = new Persona();
        
    }
    
    
    public function insertar($persona){
        //Preparo la inserción de datos
        $query = $this->db->conexion()->prepare('INSERT INTO persona(documento,nombres,apellido1,apellido2,correo_electronico,fecha_nacimiento,celular,tipo_documento_idtipo_documento,contraseña) 
        
        VALUES(:docu,:nom,:ape1,:ape2,:email,:fecha,:celular,:tipo,:contra)');

        try {
            //Ejecuto la query
            $query->execute([
                'docu' => $persona->getDocumento(),
                'nom'  => $persona->getNombres(),
                'ape1' => $persona->getApellido1(),
                'ape2' => $persona->getApellido2(),
                'email'=> $persona->getCorreoElectronico(),
                'fecha'=> $persona->getFechaNaciento(),
                'celular'=>$persona->getCelular(),
                'tipo' => $persona->getTipoDocumento(),
                'contra' => $persona->getContrasena()
            ]);
            return true;
        } catch (PDOException $e) {
            //Si la consulta sale mal
            print_r("Error en la bd",$e);
            return false;
        }
    }

    public function obtenerTodos(){
       
    }

    public function buscar($documento){
         $query = $this->db->conexion()->prepare('SELECT * FROM persona WHERE documento = :documento');

         try {
             $query->execute(['documento'=>$documento]);
             $persona = new Persona();
             //Retornar los datos de la persona
             while($row = $query->fetch()){
                $persona ->setDocumento($row['documento']);
                $persona ->setNombres($row['nombres']);
                $persona ->setApellido1($row['apellido1']);
                $persona ->setApellido2($row['apellido2']);
                $persona ->setCorreoElectronico($row['correo_electronico']);
                $persona ->setFechaNaciento('fecha_nacimiento');
                $persona ->setCelular($row['celular']);
                $persona ->setTipoDocumento($row['tipo_documento_idtipo_documento']);
             }
             if($persona->getDocumento() != null){
                 return $persona;
             }else{
                 return null;
             }
         } catch ( PDOException $e) {
             //throw $th;
             print_r("Error en la conexion");
             return false;
         }
    }

    public function existe($documento,$contra){
        $query = $this->db->conexion()->prepare('SELECT documento FROM persona WHERE documento = :documento AND contraseña = :contra');
        try {
            $query->execute([
                'documento' => $documento,
                'contra' => $contra
            ]);
            if($query->rowCount()>0){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            print_r('Error en la base de datos',$e);
        }
    }

    

}
