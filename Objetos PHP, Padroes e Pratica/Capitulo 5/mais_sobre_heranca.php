<?php
interface Executar{
	public function execute();
}
class Principal implements Executar{
	public function execute(){}
	
}
class Auxiliar extends Principal{}

$prin = new Principal;
$aux = new Auxiliar;
$classe = "Auxiliar";
$superclasse = "Principal";
$interface = "Executar";
echo "<pre>";
echo "A classe $classe é subclasse da classse ".get_parent_class($classe)." - Teste com String\n";
echo "A classe $classe é subclasse da classse ".get_parent_class($aux)." - Teste com Objeto\n";
if(is_subclass_of($classe, $superclasse)){
	echo "A classe $classe é subclasse da classe $superclasse - Teste com String \n";
}
if(is_subclass_of($aux, $superclasse)){
	echo "A classe $classe é subclasse da classe $superclasse - Teste com Objeto \n";	
}
if($prin instanceof $interface){
	echo "A classe $superclasse implementa a interface $interface - Teste com objeto";
}