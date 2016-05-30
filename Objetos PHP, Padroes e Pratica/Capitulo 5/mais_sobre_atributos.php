<?php

class Atributos{
	public $publico;
	private $privado;
	protected $protegido;
}

$objeto = new Atributos;

echo "<pre>";
print_r(get_class_vars('Atributos'));
echo "</pre>";