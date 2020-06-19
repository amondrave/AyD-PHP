<?php 

class Profesor{

   private $codigo;
   private $documento;

   public function __construct($codigo = null, $documento = null){
		$this->codigo = $codigo;
		$this->documento = $documento;
   }

    public function getDocumento(){
		return $this->documento;
	}

	public function setDocumento($documento){
		$this->documento = $documento;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

}





?>
