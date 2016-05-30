<?php

class Person{
	public function getName(){
		return "Bob";
	}
	public function getAge(){
		return 44;
	}
	
	public function __toString(){
		$desc = $this->getName();
		$desc .= " (age: {$this->getAge()})";
		return $desc;
	}
}

$person = new Person;
echo $person;