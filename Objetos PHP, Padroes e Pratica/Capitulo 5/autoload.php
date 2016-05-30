<?php
function __autoload($class){
	include_once($class.'.php');
}

$product = new ShopProduct;