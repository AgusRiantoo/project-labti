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
		$data['query'] = $this->usermodel->read_by_id('artikel',$id);
		$this->load->view('header');
		$this->load->view('view',$data);
		$this->load->view('footer');
	}

	// public function galery($id){
	// 	$data['query'] = $this->usermodel->read_by_id('galery',$id);
	// 	$this->load->view('header');
	// 	$this->load->view('view',$data);
	// 	$this->load->view('footer');
	// }

	public function team(){
		$this->load->view('header');
		$this->load->view('team');
		$this->load->view('footer');
	}

	public function berita(){
		$data['query'] = $this->usermodel->read('artikel');
		$this->load->view('header');
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}

	public function galery($id = ''){
		if ($id) {
			$data['query'] = $this->usermodel->read_by_id('galery',$id);
			$this->load->view('header');
			$this->load->view('galery_detail',$data);
			$this->load->view('footer');
		}else{
			$data['query'] = $this->usermodel->read('galery');
			$this->load->view('header');
			$this->load->view('galery',$data);
			$this->load->view('footer');
		}
	}


	public function api($username = '',$password = ''){
		// var_dump($username);
		// var_dump($password);
		if ($username === '' && $password === '') {
			$data = $this->usermodel->api($username);
			$e = array('error'=>true,'data'=>'masukan email dan password');
		}{
			$data = $this->usermodel->api($username);
			$e = array('error'=>false,'data'=> $data);
		}
		echo json_encode($e);
	}
}
?>