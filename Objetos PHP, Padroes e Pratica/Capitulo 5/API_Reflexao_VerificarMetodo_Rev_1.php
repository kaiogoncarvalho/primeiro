<?php
class Teste{
	public function &publico($teste){
		return $teste;
	}
	private function privado(){
		
	}
	protected function protegido(){
		
	}
	static function estatico(){
		
	}
	
	final function finaliza(){
		
	}
	
	public function __construct(){}
	
}

$classe = new ReflectionClass('Teste');
$metodos = $classe->getMethods();
foreach($metodos as $metodo){
	echo showMethod($metodo);
}
$estatico = $classe->getMethod('estatico');
echo showMethod($estatico);

function showMethod(ReflectionMethod $method){
	$name = $method->getName();
	$caminho = $method->getFileName();
	$primeira = $method->getStartLine();
	$ultima = $method->getEndLine();
	
	
	$details = "<ul>Classe: <b>$name </b></ul>";
	$details .= "<li> Caminho: $caminho </li>";
	$details .= "<li>Primeira linha: $primeira, Última Linha: $ultima </li>";
	if($method->isInternal()){
		$details .= "<li> Definido interna do php</li>";
	}
	if($method->isUserDefined()){
		$details .= "<li> Definido pelo usuário </li>";
	}
	if($method->isStatic()){
		$details .= "<li> Estático </li>";
	}
	if($method->isProtected()){
		$details .= "<li> Protegido </li>";		
	}
	if($method->isPublic()){
		$details .= "<li> Público </li>";		
	}
	if($method->isPrivate()){
		$details .= "<li> Privado </li>";
	}
	if($method->returnsReference()){
		$details .= "<li>Retorna referência</li>";		
	}
	if($method->isAbstract()){
		$details .= "<li>Abstrato</li>";
	}
	if($method->isFinal()){
		$details .= "<li>Final</li>";
	}
	if($method->isConstructor()){
		$details .= "<li>Construtor</li>";
	}
	
	$details .= '</ul>';
	return $details;
}