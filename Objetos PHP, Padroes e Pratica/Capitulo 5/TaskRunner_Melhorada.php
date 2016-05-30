<?php
$className = "Task";
$path = "{$className}.php";

if(! file_exists($path)){
	throw new Exception("Arquivo $path não existe");
}
require_once($path);

if(! class_exists($className)){
	throw new Exception("Classe $className não existe");
}
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";
