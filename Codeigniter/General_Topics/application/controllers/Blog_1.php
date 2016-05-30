<?php
class Teste{
	public $title = '123';
	public $heading = 'novo';
}

class Blog_1 extends CI_Controller{
	public function index(){
		$data['title'] = 'Meu Título';
		$data['heading'] = 'Meu sub-título';
		
		$this->load->view('blog/blogview', $data);
	}
	public function novo(){
		$data['title'] = 'Título';
		$data['heading'] = 'Conteúdo';
		
		$this->load->view('blog/header', $data);
		$this->load->view('blog/content', $data);
	}
	
	public function index2(){

		$obj = new Teste;	
		$this->load->view('blog/blogview', $obj);
	}
	
}