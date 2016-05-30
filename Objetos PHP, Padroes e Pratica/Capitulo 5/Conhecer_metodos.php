<?php

class CdProduct{
	public function getCd(){
		echo "CD do Raul";
		
	}
	protected function getID(){}
	private function getNumberSerie(){}
}

$obj = new CdProduct;
echo "<pre>";
print_r(get_class_methods('CdProduct'));
echo "<br>";
print_r(get_class_methods($obj));
echo "</pre>";



$method = "getCd";
$obj->$method();
echo "<br>";
if(is_callable(array($obj, $method), true)){
	echo "Metodo existe e é publico";
}
echo "<br>";
if(method_exists($obj, 'getID')){
	echo "Metodo existe";
}