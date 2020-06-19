<?php


 class Semestre {

  private $idSemestre;
  private $periodo;
  private $anio;


    public function __construct($idSemestre = null,$periodo = null,$anio = nul){
		$this->idSemestre = $idSemestre;
		$this->periodo = $periodo;
		$this->anio = $anio;
	}


  	public function getIdSemestre(){
		return $this->idSemestre;
	}

	public function setIdSemestre($idSemestre){
		$this->idSemestre = $idSemestre;
	}

	public function getPeriodo(){
		return $this->periodo;
	}

	public function setPeriodo($periodo){
		$this->periodo = $periodo;
	}

	public function getAnio(){
		return $this->anio;
	}

	public function setAnio($anio){
		$this->anio = $anio;

    }

}

?>
