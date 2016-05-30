<?php
function teste($hello){
	echo "Hello $hello";
}
class Filho{
	public function getId($name, $age){
		echo "O seu nome é $name e sua idade é $age anos";
	}
	
}
class Nova{
	private $objeto;
	
	public function __construct($obj){
		$this->objeto = $obj;
	}
	
	public function __call($method, $args){
		if(method_exists($this->objeto, $method)){
			call_user_func_array(array($this->objeto, $method), $args);
		}
	}
	
	public function hello(){
		echo "Hello World";
	}
	 public function metodo($arg1, $arg2){
		 echo "Os parametros são $arg1 e $arg2";
	 }
}
$obj = new Nova(new Filho);
call_user_func(array($obj,'hello'));
echo "<br>";
call_user_func('teste', "kaio");
echo "<br>";
call_user_func_array(array($obj,'metodo'), array('argumento1', 'argumento2'));
echo "<br>";
$obj->getId('Kaio', 22);
