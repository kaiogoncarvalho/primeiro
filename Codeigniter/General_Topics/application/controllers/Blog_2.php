<?php

class Blog_2 extends CI_Controller{
	public function index(){
		$data['todo_list'] = array('Valor1', 'Valor2', 'Valor3');
		$data['title'] = 'Título';
		$data['heading'] = 'Conteúdo';
		
		$this->load->view('blog/todo', $data);
	}
	
	public function index2(){
		$data['todo_list'] = array('Valor1', 'Valor2', 'Valor3');
		$data['title'] = 'Título';
		$data['heading'] = 'Conteúdo';
		
		$string = $this->load->view('blog/todo', $data, TRUE);
		echo "TESTANDO $string";
	}
}