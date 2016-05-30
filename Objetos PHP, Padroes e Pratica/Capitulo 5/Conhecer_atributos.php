<?php

class Teste{
	public $publico;
	private $privado = 100;
	protected $protegido;
}

$obj = new Teste;
$obj->publico = "Teste";
$obj->novo = "Novo";

echo "<pre>";
print_r(get_class_vars('Teste'));
echo "</pre>";