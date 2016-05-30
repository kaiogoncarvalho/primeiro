<?php
class Teste{
	
}

$booleano = false;
$inteiro = 100;
$double = 150.10;
$string = 'Kaio Gonçalves Carvalho';
$object = new Teste;
$array[] = 1;
$nulo = null;
$numerico = '1.00';

if(is_bool($booleano)){
	echo "Booleano \n";
}

if(is_integer($inteiro)){
	echo "Inteiro \n";
}

if(is_double($double)){
	echo "Decimal \n";
}

if(is_string($string)){
	echo "String \n";
}

if(is_object($object)){
	echo "Objeto \n";
}

if(is_array($array)){
	echo "Array \n";
}

if(is_null($nulo)){
	echo "Nulo \n";
}

if(is_numeric($numerico)){
	echo "Númerico";
}
