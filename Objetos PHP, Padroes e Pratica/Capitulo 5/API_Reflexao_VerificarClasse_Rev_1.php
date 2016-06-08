<?php

abstract class Teste{
	abstract public function testando();
}

final class Teste1{}

interface Modelo{}

function classData(ReflectionClass $classe){
	$details = "<pre>";
	$nome = $classe->getName();
	$details.= "A Classe $nome: \n";
	if($classe->isInternal()){
		$details.= "- É interna; \n";
	}
	
	if($classe->isUserDefined()){
		$details.= "- É definida pelo usuário \n";
	}
	
	if($classe->isAbstract()){
		$details.= "- É abstrata \n";
	}
	
	if($classe->isFinal()){
		$details.= "- É final \n";
	}
	
	if($classe->isInterface()){
		$details .= "- É uma interface \n";
	}
	
	if($classe->isInstantiable()){
		$details.= "- É instanciável \n";
	}
	$details.= "</pre>";
	return $details;
}

$classe = new ReflectionClass('Teste');
$classe2 = new ReflectionClass('Teste1');
$interface = new ReflectionClass('Modelo');
$classe3 = new ReflectionClass('PDO');
echo classData($classe);
echo classData($classe2);
echo classData($interface);
echo classData($classe3);