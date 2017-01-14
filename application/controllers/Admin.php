<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/dashboard');
		$this->load->view('template/footer');
	}

	public function artikel(){
		$data['query'] = $this->adminmodel->read();

		$this->load->view('template/header');
		$this->load->view('content/artikel',$data);
		$this->load->view('template/footer');
	}

	public function tambahartikel(){
		$data['judul'] = "Tambah Artikel";
		$this->load->view('template/header');
		$this->load->view('content/artikel_insert',$data);
		$this->load->view('template/footer');

		if (isset($_POST['submit'])) {

			$a = $this->adminmodel->create();
			var_dump($a);
			exit(1);
		}
	}


}
