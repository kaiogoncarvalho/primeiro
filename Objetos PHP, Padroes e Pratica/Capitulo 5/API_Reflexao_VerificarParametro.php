<?php
class Induct{}

class Teste{
	public function inducao(Induct $ind){
		
	}
	
	public function referencia(&$nome){
		
	}
}

$class = new ReflectionClass('Teste');
$method_ind = $class->getMethod('inducao');
$method_ref = $class->getMethod('referencia');
$params[] = $method_ind->getParameters()[0];
$params[] = $method_ref->getParameters()[0];

foreach($params as $param){
	echo "<pre>";
	echo argData($param);
	echo "\n";
	echo "</pre>";
}

function argData(ReflectionParameter $arg){
	$details = "";
	$name = $arg->getName();
	$classe = $arg->getClass();
	if(!empty($classe)){
		$classname = $classe->getName();
		$details .= "\$$name deve ser um objeto da classe $classname \n";
	}
	if($arg->isPassedByReference()){
		$details .= "\$$name é passado por referência\n";
	}
	return $details;
}