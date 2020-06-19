<?php

class EstadoProyecto {

  private $idEstadoProyecto;
  private $nombre;
  private $descripcion;

  	public function getIdEstadoProyecto(){
		return $this->idEstadoProyecto;
	}

	public function setIdEstadoProyecto($idEstadoProyecto){
		$this->idEstadoProyecto = $idEstadoProyecto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

 }


?>
