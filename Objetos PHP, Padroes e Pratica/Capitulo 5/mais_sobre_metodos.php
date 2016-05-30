<?php 
class Classe1{
	public function publico(){}
	private function privado(){}
	protected function protegido(){}
}

echo "<pre>";
print_r(get_class_methods('Classe1'));
$class = new Classe1;
print_r(get_class_methods($class));
echo "\n";
if(is_callable(array('Classe1', 'publico'))){
	echo "O método publico é um método da Classe1";
	echo "\n";
}
if(is_callable(array($class, 'publico'))){
	echo "O método publico é um método da Classe1";
	echo "\n";
}
if(is_callable(array($class, 'privado'))){
	echo "O método privado é um método da Classe1";
	echo "\n";
}
if(method_exists($class, 'privado')){
	echo "O método privado é um método da Classe1";
	echo "\n";
}
if(method_exists('Classe1', 'privado')){
	echo "O método privado é um método da Classe1";
	echo "\n";
}	
echo "</pre>";