<?php

require_once 'entities/TipoDocumento.php';

Class TipoDocumentoModel extends Model{
      
       
    public function __construct(){
        parent::__construct();
    }

    public function insertar($tipo){
         $query = $this->db->conexion()->prepare("INSERT INTO tipo_documento (nombre) VALUES (:nombre)");

         try {
             //insertar en la base 
             $query->execute([
                 'nombre' => $tipo.getNombre()
             ]);
             return true;
         } catch ( PDOException $e) {
             //throw $th;
             print_r ('Error en la conexión',$e);
             return false;
         }
    }

    public function obtenerTodos(){

        $tipos = [];
        try {
           //preparo la consulta 
           $query = $this->db->conexion()->query("SELECT * FROM tipo_documento");
           while($row = $query->fetch()) {
               # creación de los objetos tipo de documento
               # se agregan esos objetos al array
               $tipoDocumento = new TipoDocumento();
               $tipoDocumento->setIdTipoDocumento($row['idtipo_documento']);
               $tipoDocumento->setNombre($row['nombre']);
               array_push($tipos,$tipoDocumento);
           }
           return $tipos;
        } catch (PDOException  $e) {
            //throw $th;
            
            return [];
        }


    }

}



?>