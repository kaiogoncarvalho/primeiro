<?php
require('Teste_API_Reflexao.php');
class ReflectionUtil{
	static function getClassSource(ReflectionClass $class){
		$path = $class->getFileName();
		$lines = @file($path);
		$from = $class->getStartLine();
		$to = $class->getEndLine();
		$len = $to-$from+1;
		return implode(array_slice($lines, $from-1, $len));
	}
}
$reflexao = new ReflectionClass('Teste_API_Reflexao');
echo "<pre>";
echo ReflectionUtil::getClassSource($reflexao);
echo "\n\n\n";
echo $reflexao->getFileName()."\n";
echo $reflexao->getStartLine()."\n";
echo $reflexao->getEndLine()."\n";
echo "</pre>";

