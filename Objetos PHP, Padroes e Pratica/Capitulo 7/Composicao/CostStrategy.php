<?php
abstract class CostStrategy{
	abstract public function cost(Lesson $lesson);
	abstract public function chargeType();
}