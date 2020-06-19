<?php

class ProyectoProfesor{

  private $profesor;
  private $proyecto;
  private $notaCalificada;
  private $fechaCalificada;

  public function getProfesor(){
		return $this->profesor;
	}

	public function setProfesor($profesor){
		$this->profesor = $profesor;
	}

	public function getProyecto(){
		return $this->proyecto;
	}

	public function setProyecto($proyecto){
		$this->proyecto = $proyecto;
	}

	public function getNotaCalificada(){
		return $this->notaCalificada;
	}

	public function setNotaCalificada($notaCalificada){
		$this->notaCalificada = $notaCalificada;
	}

	public function getFechaCalificada(){
		return $this->fechaCalificada;
	}

	public function setFechaCalificada($fechaCalificada){
		$this->fechaCalificada = $fechaCalificada;
	}


}



?>
