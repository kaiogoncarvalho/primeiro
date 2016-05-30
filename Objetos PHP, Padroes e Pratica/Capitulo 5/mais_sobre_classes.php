<?php

class Principal{}
class Auxiliar extends Principal{}

$obj = new Principal;
$her = new Auxiliar;
echo get_class($obj);
echo "<br>";
if($her instanceof Principal){
	echo "A classe ".get_class($her)." é herança da classe ".get_class($obj);
}