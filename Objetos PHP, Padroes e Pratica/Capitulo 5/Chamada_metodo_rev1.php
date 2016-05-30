<?php
function testando(){
	echo "Teste do call_user_func em função \n";
}
class Teste{
	public function testando2(){
		echo "Teste do call_user_func em método \n";
	}
	public function testando3($arg){
		echo "Teste do call_user_func em método com parametros, '$arg' \n";
	}
	public function testando4($arg1, $arg2){
		echo "Teste do call_user_func_array em método com dois parametros '$arg1', '$arg2' \n";
	}
}

$objeto = new Teste;
echo "<pre>";
call_user_func('testando');
call_user_func(array($objeto, 'testando2'));
call_user_func(array($objeto, 'testando3'), 'Parametro 1');
call_user_func_array(array($objeto, 'testando4'),array('Parametro1', 'Parametro2'));
echo "</pre>";