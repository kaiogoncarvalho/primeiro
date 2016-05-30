<?php

class Pai{}
class Filho extends Pai{}
class Neto extends Filho{}

$pai = new Pai;
$filho = new Filho;
$neto = new Neto;
echo get_parent_class('Neto');
echo "<br>";
echo get_parent_class($filho);
echo "<br>";
if(is_subclass_of($neto, 'Pai')){
	echo "A classe Neto e herança da classe Pai";
	echo "<br>";
}
if(is_subclass_of('Filho', 'Pai')){
	echo "A classe Filho é herança da classe Pai";
}