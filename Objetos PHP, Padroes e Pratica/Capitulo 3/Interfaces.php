<?php

interface Chargeable {
	public function getPrice();
}

interface Teste{
	public function getDiscount();
}

class ShopProduct implements Chargeable{
	private $price = 0;
	private $discount = 0;
	public function getPrice(){
		return ($this->price - $this->discount);
	}
}

class Test{
	public function prodInfo(ShopProduct $prod){
		echo "Funcionou";
	}	
	
	public function chargeInfo(Chargeable $prod){
		echo $prod->getPrice();
	}
}

class Counsultancy extends ShopProduct implements Chargeable,Teste{
	public function getPrice(){
		return ($this->price - $this->discount);
	}
	
	public function getDiscount(){
		return $this->discount;
	}
}

$produto = new ShopProduct;
$teste = new Test;
$teste->prodInfo($produto);
$teste->chargeInfo($produto);