<?php
abstract class Lesson{
	private $costStrategy;
	private $duration;
	public function __construct($duration,CostStrategy $costStrategy){
		$this->costStrategy = $costStrategy;
		$this->duration = $duration;
	}
	
	public function cost(){
		return $this->costStrategy->cost($this);
	}
	
	public function chargeType(){
		return $this->costStrategy->chargeType();
	}
	
	public function getDuration(){
		return $this->duration;
	}
	
}