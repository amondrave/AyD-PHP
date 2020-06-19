<?php

class TipoDocumento{
  private $idTipoDocumento;
  private $nombre;

 
	public function __construct($id = null, $nombre = null){
		$this->idTipoDocumento = $id;
		$this->nombre = $nombre;
	}

    public function getIdTipoDocumento(){
		return $this->idTipoDocumento;
	}

	public function setIdTipoDocumento($idTipoDocumento){
		$this->idTipoDocumento = $idTipoDocumento;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	} 

}


?>
