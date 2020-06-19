<?php

  class Carrera {

   private $codigoCarrera;
   private $nombreCarrera;

    public function __construct($codigoCarrera = null, $nombreCarrera = null){
		$this->codigoCarrera = $codigoCarrera;
		$this->nombreCarrera = $nombreCarrera;
    }


    public function getCodigoCarrera(){
		return $this->codigoCarrera;
	}

	public function setCodigoCarrera($codigoCarrera){
		$this->codigoCarrera = $codigoCarrera;
	}

	public function getNombreCarrera(){
		return $this->nombreCarrera;
	}

	public function setNombreCarrera($nombreCarrera){
		$this->nombreCarrera = $nombreCarrera;
	}  

 }


?>
