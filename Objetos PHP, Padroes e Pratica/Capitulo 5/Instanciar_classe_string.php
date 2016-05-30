<?php

function __autoload($class){
	include_once("{$class}.php");
}

if(isset($_GET['classe'])){
	$class = $_GET['classe'];
	if(class_exists($class)){
		$classe = new $class;
	}
	else{
		echo "Informe uma classe válida.";
	}
}
else{
	echo "Informe o nome da classe por GET variável 'classe'";
}