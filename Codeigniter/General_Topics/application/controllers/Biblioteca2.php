<?php

class Biblioteca2 extends CI_Controller{
	public function index(){
		$this->load->library('Form_validation');
		$this->form_validation->teste();
	}
	
	public function outro(){
		$this->load->driver('teste_driver');
		$this->teste_driver->filha->teste('teste');
	}
	
	public function outro_denovo(){
		$this->input->teste();
	}
}