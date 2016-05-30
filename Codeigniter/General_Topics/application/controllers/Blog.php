<?php
class Blog extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->load->database();
	}
	
	public function index(){
		$this->load->view('blogview');
	}
	
	public function comment($param = 'Não mudou'){
		echo "Olhe isto! $param";
	}
	
	public function _remap($method, $params = array()){
		if(method_exists($this, $method)){
			return call_user_func_array(array($this,$method),$params);
		}
		show_404();
	}
	
	public function _output($output){
		echo "NADA";
		echo $output;
	}
}