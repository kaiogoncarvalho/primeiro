<?php
class Teste{}
abstract class Abstrata{}
interface Padrao{}
final class Classe_Final{}

function classData(ReflectionClass $class){
	$details = $class->getName()."\n";
	if($class->isUserDefined()){
		$details .= "\t * É uma classe definida pelo usuário; \n";
	}
	if($class->isInternal()){
		$details .= "\t * É uma classe interna do PHP; \n ";
	}
	if($class->isInterface()){
		$details .= "\t * É uma Interface; \n ";
	}
	if($class->isAbstract()){
		$details .= "\t * É uma Classe abstrata; \n ";
	}
	if($class->isFinal()){
		$details .= "\t * É uma Classe final; \n ";
	}
	if($class->isInstantiable()){
		$details .= "\t * É uma classe que pode ser instanciada; \n";
	}
	else{
		$details .= "\t * É uma classe que não pode ser instanciada; \n";
	}
	
	return $details;
}

echo "<pre>";
echo classData(new ReflectionClass('Teste'));
echo classData(new ReflectionClass('Abstrata'));
echo classData(new ReflectionClass('Padrao'));
echo classData(new ReflectionClass('Classe_Final'));
echo classData(new ReflectionClass('PDO'));
echo "</pre>";