<?php
require_once('CostStrategy.php');
class FixedCostStrategy extends CostStrategy {
	public function cost(Lesson $lesson){
		return 30;
	}
	
	public function chargeType(){
		return 'fixed rate';
	}
}