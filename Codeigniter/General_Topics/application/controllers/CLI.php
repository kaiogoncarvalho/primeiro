<?php
class CLI extends CI_Controller{
	public function command_line($variavel = ''){
		echo "Funciona no CLI: $variavel";
	}
	
	public function _remap($method,$variavel){
		if(is_cli()){
			return call_user_func_array(array($this,$method), $variavel);
		}
		else{
			$this->redirecionado();
		}
	}
	
	private function redirecionado(){
		echo "Você não pode acessar esse controller pela URL.";
	}
	
}