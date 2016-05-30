<?php

class Interceptadores{
	private $privada;
	
	public function __get($propriedade){
		echo "A propriedade '$propriedade' não pode ser acessada ou não existe <br>";
	}
	
	public function __set($propriedade, $valor){
		echo "A propriedade '$propriedade' não existe ou não pode ser acessada, logo não é possível atribuir o valor '$valor' <br>";
	}
	public function __unset($propriedade){
		echo "A propriedade '$propriedade' não existe ou não pode ser acessada, logo não é possível exclui-la <br>";
	}
	public function __isset($propriedade){
		echo "A propriedade' $propriedade' não existe ou não pode ser acessada";
	}
	public function __call($metodo, $argumentos){
		echo "O método '$metodo' não pode ser acessado ou não existe";
	}
	
	private function privado($nome){
		echo $nome;
	}
}

$inter = new Interceptadores;

$inter->privada;

$inter->privado();

$inter->privada = 'Novo';

unset($inter->privada);

isset($inter->privada);