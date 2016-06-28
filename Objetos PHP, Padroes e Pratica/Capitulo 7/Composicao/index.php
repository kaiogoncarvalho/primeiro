<?php
require_once('Seminar.php');
require_once('Lecture.php');
require_once('TimedCostStrategy.php');
require_once('FixedCostStrategy.php');

$lessons [] = new Seminar(4, new TimedCostStrategy);
$lessons [] = new Lecture(5, new FixedCostStrategy);

foreach($lessons as $lesson){
	print "lesson charge {$lesson->cost()}. <br>";
	print "Charge type {$lesson->chargeType()} <br>";
}