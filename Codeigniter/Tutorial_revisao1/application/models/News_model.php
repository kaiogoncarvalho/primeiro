<?php

class News_model extends CI_Model{
	public function __construct(){
		$this->load->database();
		parent::__construct();
	}
	
	public function get_news($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
	
	public function set_news(){
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'slug' => $slug,
			'title' => $this->input->post('title'),
			'text' => $this->input->post('text'),
		);
		
		$this->db->insert('news', $data);
		return $slug;
	}
}