<?php

class Blog_controller extends CI_Controller{
	public function blog(){
		$this->load->model('blog_model', 'modelo');
		$data['query'] = $this->modelo->get_last_ten_entries();
		$this->load->view('blog',$data);
	}
}