<?php

class Persona{

  private $documento;
  private $nombres;
  private $apellido1;
  private $apellido2;
  private $correoElectronico;
  private $fechaNaciento;
  private $celular;
  private $tipoDocumento;
  private $contrasena;

    public function __construct($documento = null, $nombres = null, $apellido1=null, $apellido2=null, $correo = null , $fechaNaciento =null, $celular = null, $tipoDocumento = null, $contrasena = null){
		 $this->documento = $documento;
		 $this->nombres = $nombres;
		 $this->apellido1 = $apellido1;
		 $this->apellido2 = $apellido2;
		 $this->correoElectronico = $correo;
		 $this->fechaNaciento = $fechaNaciento;
		 $this->celular = $celular;
		 $this->tipoDocumento = $tipoDocumento;
		 $this->contrasena = $contrasena;
	}

    public function getDocumento(){
		return $this->documento;
	}

	public function setDocumento($documento){
		$this->documento = $documento;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getApellido1(){
		return $this->apellido1;
	}

	public function setApellido1($apellido1){
		$this->apellido1 = $apellido1;
	}

	public function getApellido2(){
		return $this->apellido2;
	}

	public function setApellido2($apellido2){
		$this->apellido2 = $apellido2;
	}

	public function getCorreoElectronico(){
		return $this->correoElectronico;
	}

	public function setCorreoElectronico($correoElectronico){
		$this->correoElectronico = $correoElectronico;
	}

	public function getFechaNaciento(){
		return $this->fechaNaciento;
	}

	public function setFechaNaciento($fechaNaciento){
		$this->fechaNaciento = $fechaNaciento;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getTipoDocumento(){
		return $this->tipoDocumento;
	}

	public function setTipoDocumento($tipoDocumento){
		$this->tipoDocumento = $tipoDocumento;
	}

	public function getContrasena(){
		return $this->contrasena;
	}

	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}


}



?>
