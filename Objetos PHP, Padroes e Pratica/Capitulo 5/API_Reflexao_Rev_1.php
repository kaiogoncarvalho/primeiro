<?php

abstract class Teste{
	public $publico;
	protected $privado;
	
	abstract function abastrato();
	public function publico(){}
	private function privado(){}
	protected function protegido(){}
	static function estatico(){}
}

$reflexao = new ReflectionClass('Teste');
echo "<pre>";
Reflection::export($reflexao);
echo "</pre>";