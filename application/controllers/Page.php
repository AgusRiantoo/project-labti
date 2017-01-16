<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function view($id){
		$data['query'] = $this->usermodel->read_by_id($id);
		$this->load->view('header');
		$this->load->view('view',$data);
		$this->load->view('footer');
	}

	public function team(){
		$this->load->view('header');
		$this->load->view('team');
		$this->load->view('footer');
	}

	public function berita(){
		$data['query'] = $this->usermodel->read();
		$this->load->view('header');
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}
}
?>