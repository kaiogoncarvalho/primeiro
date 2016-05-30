<?php

class Teste{
	public function __destruct(){
		echo 'Destruida';
	}
}

$obj = new Teste;

unset($obj);