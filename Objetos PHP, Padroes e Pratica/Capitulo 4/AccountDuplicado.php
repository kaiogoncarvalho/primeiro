<?php 
class Account{
	public $balance;
	
	public function __construct($balance){
		$this->balance = $balance;
	}
}
class Person{
	private $name;
	private $age;
	private $id;
	public $account;
	
	public function __construct($name, $age, Account $account){
		$this->name = $name;
		$this->age = $age;
		$this->account = $account;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function __clone(){
		$this->id = 0;
		$this->account = clone $this->account;
	}
}

$person = new Person('Kaio', 22, new Account(6774));
$person2 = clone $person;
$person2->account->balance = 10000;
echo $person->account->balance;