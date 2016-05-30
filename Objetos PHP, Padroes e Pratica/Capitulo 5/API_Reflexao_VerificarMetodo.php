<?php
abstract class ClasseAbstrata{
	abstract public function abstrato();
}

class TesteMetodos{
	public function publico(){
		$nome = 'teste';
		$valor = 22;
		
	}
	private function privado(){}
	final protected function &retornaValor(){}
	static function estatico(){}
	
}

class MetodosInternos extends PDO{};
$classe = new ReflectionClass('TesteMetodos');
$classe2 = new ReflectionClass('MetodosInternos');
$classe3 = new ReflectionClass('ClasseAbstrata');
$metodos = $classe->getMethods();
foreach($metodos as $metodo){
	echo "<pre>";
	echo methodLoad($metodo);
	echo "\n";
	
}
echo "\n";
echo methodLoad($classe2->getMethod('__construct'));
echo "\n";
echo methodLoad($classe3->getMethod('abstrato'));
echo "</pre>";

function methodLoad(ReflectionMethod $metodo){
	$nome = $metodo->getName();
	$detalhes = "";
	if($metodo->isInternal()){
		$detalhes .= "O Método $nome é interno do PHP \n";
	}
	if($metodo->isUserDefined()){
		$detalhes .= "O método $nome é definido pelo Usuário \n";
	}
	if($metodo->isConstructor()){
		$detalhes .= "O método $nome é um construtor \n";
	}
	if($metodo->isPublic()){
		$detalhes.= "O método $nome é público \n";
	}
	if($metodo->isPrivate()){
		$detalhes .= "O método $nome é privado \n";
	}
	if($metodo->isProtected()){
		$detalhes .= "O método $nome é protegido \n";
	}
	if($metodo->isFinal()){
		$detalhes .= "O método $nome é Final \n";
	}
	if($metodo->isAbstract()){
		$detalhes .= "O método $nome é Abstrato \n";
	}
	if($metodo->isStatic()){
		$detalhes .= "O método $nome é estático";
	}
	if($metodo->returnsReference()){
		$detalhes .= "O método $nome retorna referência";
	}
	
	return $detalhes;
}

class ReflectionUtil{
	static function getSourceCode(ReflectionMethod $metodo){
		$caminho = $metodo->getFileName();
		$linhas = @file($caminho);
		$de = $metodo->getStartLine();
		$ate = $metodo->getEndLine();
		$len = $ate-$de+1;
		return implode(array_slice($linhas, $de-1, $len));
	}
}

echo ReflectionUtil::getSourceCode($classe->getMethod('Publico'));