<?php
class Pai{}
Class Teste extends Pai{
	public $publico;
	private $privado;
	protected $protegido;
	
	private function getPrivate($privado){
		$this->privado = $privado;
	}
	
	protected function getProtected($protegido){
		$this->protegido = $protegido;
	}
	
	public function getPublic($publico, $protegido = null, $privado = null){
		$this->getPrivate($privado);
		$this->getProtected($protegido);
		$this->publico = $publico;
	}
}

$class = new ReflectionClass('Teste');
$pdo = new ReflectionClass('PDO');
echo "<pre>";
Reflection::export($class);
echo "\n";
Reflection::export($pdo);
echo "</pre>";