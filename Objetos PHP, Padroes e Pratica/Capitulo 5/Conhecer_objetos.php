<?php

class Master{}

class Develop extends Master{}

$obj = new Master;

echo get_class($obj);

if($obj instanceof Master){
	echo "Pertence";
}