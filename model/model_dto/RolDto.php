<?php 
	class RolDto{
		// Atributos
		private $codigoRol;
		private $nombreRol;
		// Métodos
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
		// Método Constructor
		public function __construct2($codigoRol,$nombreRol){
			$this->codigoRol = $codigoRol;
			$this->nombreRol = $nombreRol;
		}
		// Métodos SET Y GET
		// codigoRol
		public function setCodigoRol($codigoRol){
			$this->codigoRol = $codigoRol;
		}
		public function getCodigoRol(){
			return $this->codigoRol;
		}
		// nombreRol
		public function setNombreRol($nombreRol){
			$this->nombreRol = $nombreRol;
		}
		public function getNombreRol(){
			return $this->nombreRol;
		}
	}
?>