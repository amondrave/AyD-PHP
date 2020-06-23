<?php

class EstadoProyecto {

  private $idEstadoProyecto;
  private $nombre;
  private $descripcion;

    public function __construct($idEstadoProyecto = null , $nombre = null, $descripcion = null){
		$this->idEstadoProyecto = $idEstadoProyecto;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
	}

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
