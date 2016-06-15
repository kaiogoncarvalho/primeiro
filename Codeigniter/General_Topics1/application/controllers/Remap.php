<?php
class Remap extends CI_Controller{
	public function metodo($valor){
		echo "Metodo $valor";
	}
	public function metodo_padrao(){
		echo "Padrão";
	}
	
	public function _remap($method,$params = array()){
		if(method_exists($this, $method)){
			call_user_func_array(array($this, $method), $params);
		}
		else{
			$this->metodo_padrao();
		}
	}
}