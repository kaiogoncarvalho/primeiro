<?php
include 'Teste_API_Reflexao.php';

class ReflectionUtil{
	static function getClassSource(ReflectionClass $classe){
		$path = $classe->getFileName();
		$lines = @file($path);
		$from = $classe->getStartLine();
		$to = $classe->getEndLine();
		$len = $to-$from+1;
		return implode(array_slice($lines, $from-1, $len));
		}
}
echo "<pre>";
echo ReflectionUtil::getClassSource(new ReflectionClass('Teste_API_Reflexao'));
echo "</pre>";