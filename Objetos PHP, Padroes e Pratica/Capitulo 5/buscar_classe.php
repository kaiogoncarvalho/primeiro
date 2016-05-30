<?php
include_once('Teste.php');


if(isset($_GET['classe'])){
	$class = $_GET['classe'];
	if(class_exists($class)){
		$classe = new $class;
	}
	else{
		echo "Informe uma classe válida.";
		echo "<br>";
		echo "<ul> As classes disponíveis são: <br>";
		foreach(get_declared_classes() as $classe){
			echo " <li> $classe </li>";
		}
		echo "</ul>";
	}
}
else{
	echo "Informe o nome da classe por GET variável 'classe'";
}