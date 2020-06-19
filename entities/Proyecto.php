<?php

class Proyecto{

   private $idProyecto;
   private $nombre;
   private $tipoproyecto;
   private $semillero;
   private $convocatoria;
   private $fecha;
   private $estado;
   private $notaFinal;
  

   	public function getIdProyecto(){
		return $this->idProyecto;
	}

	public function setIdProyecto($idProyecto){
		$this->idProyecto = $idProyecto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getTipoproyecto(){
		return $this->tipoproyecto;
	}

	public function setTipoproyecto($tipoproyecto){
		$this->tipoproyecto = $tipoproyecto;
	}

	public function getSemillero(){
		return $this->semillero;
	}

	public function setSemillero($semillero){
		$this->semillero = $semillero;
	}

	public function getConvocatoria(){
		return $this->convocatoria;
	}

	public function setConvocatoria($convocatoria){
		$this->convocatoria = $convocatoria;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getNotaFinal(){
		return $this->notaFinal;
	}

	public function setNotaFinal($notaFinal){
		$this->notaFinal = $notaFinal;
	}
   


}




?>
