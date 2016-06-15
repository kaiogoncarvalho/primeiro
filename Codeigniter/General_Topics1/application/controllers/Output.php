<?php

class Output extends CI_Controller{
	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function _output($output){
		echo "Teste";
		echo $output;
	}
}