<?php

class Privada{
	public function index(){
		echo "Página Inicial";
	}
	
	public function _teste(){
		echo "Não foi possível acessar";
	}
	
	private function teste(){
		echo "Método Privado";
	}
	
	protected function protegido(){
		echo "Método Protegido";
	}
	
	public function publico(){
		echo "Método Público";
	}
}