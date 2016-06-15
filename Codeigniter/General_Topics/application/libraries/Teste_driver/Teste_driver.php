<?php

class Teste_driver extends CI_Driver_Library{
	public $nome;
	
	public function __construct(){
		$this->valid_drivers = array('filha');
	}
}

