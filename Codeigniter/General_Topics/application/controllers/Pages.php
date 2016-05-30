<?php

class Pages extends CI_Controller{
	public function index(){
		$data['title'] = 'Seu título';
		$this->load->view('cabecalho');
		$this->load->view('menu');
		$this->load->view('conteudo', $data);
		$this->load->view('rodape');
	}
}