<?php

class Convocatoria {

  private $idConvocatoria;
  private $fechaInicio;
  private $fechaCreacion;
  private $nombre;
  private $descripcion;
  private $fechaCierre;
  private $semestre;
  private $habilitadas;

    public function __construct($idConvocatoria = null, $fechaInicio = null, $fechaCreacion=null, $nombre = null, $descripcion = null, $fechaCierre = null, $semestre = null, $habilitadas = 'N' ){
		$this->idConvocatoria = $idConvocatoria;
		$this->fechaInicio = $fechaInicio;
		$this->fechaCreacion = $fechaCreacion;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->fechaCierre = $fechaCierre;
		$this->semestre = $semestre;
		$this->habilitadas = $habilitadas;
	}

  	public function getIdConvocatoria(){
		return $this->idConvocatoria;
	}

	public function setIdConvocatoria($idConvocatoria){
		$this->idConvocatoria = $idConvocatoria;
	}

	public function getFechaInicio(){
		return $this->fechaInicio;
	}

	public function setFechaInicio($fechaInicio){
		$this->fechaInicio = $fechaInicio;
	}

	public function getFechaCreacion(){
		return $this->fechaCreacion;
	}

	public function setFechaCreacion($fechaCreacion){
		$this->fechaCreacion = $fechaCreacion;
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

	public function getFechaCierre(){
		return $this->fechaCierre;
	}

	public function setFechaCierre($fechaCierre){
		$this->fechaCierre = $fechaCierre;
	}

	public function getSemestre(){
		return $this->semestre;
	}

	public function setSemestre($semestre){
		$this->semestre = $semestre;
	}

	public function getHabilitadas(){
		return $this->habilitadas;
	}

	public function setHabilitadas($habilitadas){
		$this->habilitadas = $habilitadas;
	}

}



?>
