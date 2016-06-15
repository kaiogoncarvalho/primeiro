<?php

class Comum extends CI_Controller{
	public function index(){
		$version = '7.0';
		$file = 'application/controllers/Welcome.php';
		if(is_php($version)){
			echo "Essa versão do php é maior ou igual a $version";
		}
		else{
			echo "essa versão do php é menor que a $version";
		}
		echo "<br>";
		if(is_really_writable($file)){
			echo "O arquivo $file aceita escrita";
		}else{
			echo "O arquivo $file não aceita escrita";
		}
	}
}