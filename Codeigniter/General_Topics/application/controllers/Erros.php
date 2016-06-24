<?php
//Simulando Conflito
//Outro conflito
class Erros extends CI_Controller{
	public function show_error(){
		show_error('Testando o erro', 500, 'Erro encontrado');
	}
}