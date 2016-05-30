<?php
function __autoload($class){
	include_once("{$class}.php");
}

$teste = new Teste;