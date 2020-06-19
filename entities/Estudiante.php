<?php

class Estudiante{

  private $documento;
  private $codigoEstudiante;
  private $codigoCarrera;


	public function __construct($documento = null, $codigoEstudiante = null, $codigoCarrera = null){
		$this->documento = $documento;
		$this->codigoCarrera = $codigoCarrera;
		$this->codigoEstudiante = $codigoEstudiante;
	}


  	public function getDocumento(){
		return $this->documento;
	}

	public function setDocumento($documento){
		$this->documento = $documento;
	}

	public function getCodigoEstudiante(){
		return $this->codigoEstudiante;
	}

	public function setCodigoEstudiante($codigoEstudiante){
		$this->codigoEstudiante = $codigoEstudiante;
	}

	public function getCodigoCarrera(){
		return $this->codigoCarrera;
	}

	public function setCodigoCarrera($codigoCarrera){
		$this->codigoCarrera = $codigoCarrera;
	}

}



?>
