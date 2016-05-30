<?php

class Person{
	private $_name;
	private $_age;
	private $writer;
	
	public function __construct(PersonWriter $writer){
		$this->writer = $writer;
	}
	
	public function __get($property){
		$method = "get{$property}";
		if( method_exists($this, $method)){
			return $this->$method();
		}
	}
	
	public function getName(){
		return "Bob";
	}
	
	public function getAge(){
		return 44;
	}
	
	public function __set($property, $value){
		$method = "set{$property}";
		if(method_exists( $this, $method)){
			return $this->$method($value);
		}
	}
	
	public function setName($value){
		$this->_name = $value;
	}
	
	public function setAge($value){
		$this->_age = $value;
	}
	
	public function __unset($property){
		$method = "set{$property}";
		if( method_exists( $this, $method)){
			return $this->$method(null);
		}
	}
	
	public function __isset($property){
		$method = "get{$property}";
		if( method_exists($this, $method)){
			return $this->$method();
		}
	}
	
	public function __call($method, $args){
		if( method_exists($this->writer, $method)){
			return $this->writer->$method($this);
		}
	}
}

class PersonWriter{
	public function writeName(Person $p){
		print $p->getName()."\n";
	}
	public function writeAge(Person $p){
		print $p->getAge()."\n";
	}
}

$p = new Person (new PersonWriter);
$p->writeName();
echo "<br>";
if(isset($p->name)){
	echo $p->name;
}
$p->name = 'Kaio';
echo "<br>";
var_dump($p);
echo "<br>";
unset($p->name);
var_dump($p);