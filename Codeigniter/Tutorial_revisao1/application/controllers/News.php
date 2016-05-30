<?php
class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}
	public function index(){
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Todas as Notícias";
		$this->load->view('templates/cabecalho', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/rodape');
	}
	public function view($slug = NULL){
		$data['news_item'] = $this->news_model->get_news($slug);
		if(empty($data['news_item'])){
			show_404();
		}
		$data['title'] = $data['news_item']['title'];
		$this->load->view('templates/cabecalho', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/rodape');
		
	}
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Criar um novo item de noticia';
		
		$this->form_validation->set_rules('title', 'Título', 'required');
		$this->form_validation->set_rules('text', 'Texto', 'required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/cabecalho', $data);
			$this->load->view('news/create');
			$this->load->view('templates/rodape');
		}else{
			$data['slug'] = $this->news_model->set_news();
			$this->load->view('news/success', $data);
		}
	}
}