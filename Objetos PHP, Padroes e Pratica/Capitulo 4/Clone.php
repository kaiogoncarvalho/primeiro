<?php

class CopyMe{
	public $name;
	
	public function __construct($name = 'Vazio'){
		$this->name = $name;
	}
}

$first = new CopyMe('Kaio');
$second = $first;
$third = clone $second;
echo "<pre>";
var_dump($first);
var_dump($second);
var_dump($third);

$second->name = "Novo Kaio";
$third->name = 'Carvalho';

echo "{$first->name}\n{$second->name}\n{$third->name}";
echo "</pre>";