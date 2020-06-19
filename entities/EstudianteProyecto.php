<?php

 class EstudianteProyecto{
   
  private $idRegistro;
  private $proyecto;
  private $fecha;
  private $estudiante;

  public function getIdRegistro(){
		return $this->idRegistro;
	}

	public function setIdRegistro($idRegistro){
		$this->idRegistro = $idRegistro;
	}

	public function getProyecto(){
		return $this->proyecto;
	}

	public function setProyecto($proyecto){
		$this->proyecto = $proyecto;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getEstudiante(){
		return $this->estudiante;
	}

	public function setEstudiante($estudiante){
		$this->estudiante = $estudiante;
	}
}


?>
