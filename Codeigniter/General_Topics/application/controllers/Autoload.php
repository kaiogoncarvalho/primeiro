<?php
class Autoload extends CI_Controller{
	public function index(){
		$this->autoload_model->teste();
	}
}