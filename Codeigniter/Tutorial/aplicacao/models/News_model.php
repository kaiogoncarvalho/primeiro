<?php

class News_model extends CI_model{
	public function __construct(){
		$this->load->database();
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
		$this->load->helper('text');
		$slug = convert_accented_characters($this->input->post('title'));
		$slug = url_title($slug, 'dash', TRUE);				
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text'),
		);
		
		return $this->db->insert('news', $data);
	}
}