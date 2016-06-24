<?php

class MetodoPrivado{
	public function _privado1(){
		echo "Teste";
	}
	
	protected function protegido(){
		echo "Protegido";
	}
	
	private function privado(){
		echo 'Privado';
	}
	
	public function index(){
		echo 'INDEX';
	}
	
	
	
}