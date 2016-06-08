<?php

class Example_library {
	protected $CI;
	
	public function __construct(){
		$this->CI = & get_instance();
	}
	
	public function foo(){
		$this->CI->load->helper('url');
		redirect();
	}
	
	public function bar(){
		echo $this->CI->config->item('base_url');
	}
}