<?php

class Biblioteca extends CI_Controller{
	public function index(){
		$this->load->library('someclass');
		$this->someclass->some_method();
		$this->load->library('example_library');
		$this->example_library->bar();
		$this->load->library('email');
	}
}