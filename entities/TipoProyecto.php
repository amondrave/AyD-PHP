<?php

class TipoProyecto{

 private $idTipoProyecto;
 private $nombre;


    public function __construct($idTipoProyecto = null , $nombre = null){
		$this->idTipoProyecto = $idTipoProyecto;
		$this->nombre = $nombre;
	}

 	public function getIdTipoProyecto(){
		return $this->idTipoProyecto;
	}

	public function setIdTipoProyecto($idTipoProyecto){
		$this->idTipoProyecto = $idTipoProyecto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

}



?>
