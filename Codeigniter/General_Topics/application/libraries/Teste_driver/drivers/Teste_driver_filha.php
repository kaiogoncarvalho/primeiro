<?php
class Teste_driver_filha extends CI_Driver{
	public $nome;
	public function teste($nome){
		$this->nome = $nome;
		echo "$this->nome";
	}
}