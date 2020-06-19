<?php

class Semillero {

 private $idSemillero;
 private $nombre;
 private $carrera;
 private $activo;

	public function __construct($idSemillero = null, $nombre = null , $carrera = null , $activo = null){
		$this->idSemillero = $idSemillero;
		$this->nombre = $nombre;
		$this->carrera = $carrera;
		$this->activo = $activo;
	}

 	public function getIdSemillero(){
		return $this->idSemillero;
	}

	public function setIdSemillero($idSemillero){
		$this->idSemillero = $idSemillero;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCarrera(){
		return $this->carrera;
	}

	public function setCarrera($carrera){
		$this->carrera = $carrera;
	}

	public function getActivo(){
		return $this->activo;
	}

	public function setActivo($activo){
		$this->activo = $activo;
	}


}




?>
