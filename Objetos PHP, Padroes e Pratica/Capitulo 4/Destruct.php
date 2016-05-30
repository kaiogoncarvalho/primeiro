<?php

class Person{
	private $name;
	private $age;
	private $id;
	
	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function __destruct(){
		echo "Salvando o cadastro";
	}
}

$person = new Person("Kaio", 22);
$person->setId(247);
unset($person);