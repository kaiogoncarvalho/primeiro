<?php
class Profiler extends CI_Controller{
	public function profile(){
		$sections = array(
			'config' => TRUE,
			'session_data' => TRUE
		);
		$this->output->set_profiler_sections($sections);
		$this->output->enable_profiler(TRUE);
	}
}