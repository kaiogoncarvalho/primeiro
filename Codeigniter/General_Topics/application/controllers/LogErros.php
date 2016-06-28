<?php
class LogErros extends CI_Controller{
	public function error_404(){
		show_404('blog/index');
	}
	
	public function level($level = 'error', $message = 'Ocorreu um erro'){
		log_message($level,$message);
	}
	
	
}