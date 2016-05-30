<?php 
class Teste_API_Reflexao {
	public $publico;
	private $privado;
	protected $protegido;
	
	public function getPublico(){
		return $publico;
	}
	
	protected function getProtected(){
		return $protegido;
	}
}