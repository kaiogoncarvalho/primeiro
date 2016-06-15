<?php
class MY_Config extends CI_Config{
	public $CI;
	
	public function teste(){
		$this->CI = & get_instance();
		echo $this->CI->config->item('base_url');
	}
	
}