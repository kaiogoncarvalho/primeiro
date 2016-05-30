<?php
class Cliente{
	private $nome;
	private $cpf;
	
	public function __construct($nome, $cpf){
		if($cpf != 123456789){
			throw new Exception('CPF inválido');
		}
		$this->nome = $nome;
		$this->cpf = $cpf;
	}
	
}

try{
	$cliente = new Cliente('Kaio', '39366223885');
}catch(Exception $error){
	die($error);
}

