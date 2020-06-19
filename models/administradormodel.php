<?php

require_once 'entities/Administrador.php';

class AdministradorModel extends Model{

    public function __construct(){
        parent::__construct();
    }


    public function existe($id){
         $admin = false;
         $query = $this->db->conexion()->prepare('SELECT * FROM administrador WHERE persona_documento = :documento');
         try {
             $query->execute([
                 'documento' => $id
             ]);
             while($row = $query->fetch()){
                $admins = new Administrador();
                $admins->setDocumento($row['persona_documento']);
             }
             $admin = true;
         } catch (PDOException $e) {
             return false;
         }
         return $admin;
    }

}





?>