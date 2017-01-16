<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
		if (!$this->session->userdata('Login')) {
			redirect('user');
		}
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
		$this->load->library('form_validation');
		$config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png|bmp';
        $config['file_name'] = 'gambar_'.time();

        $this->load->library('upload', $config);
		$this->load->view('template/header');
		$this->load->view('content/artikel_insert',$data);
		$this->load->view('template/footer');

		if (isset($_POST['submit'])) {
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
			
			if ($this->form_validation->run() == FALSE) {
				echo '<script>alert("Data gagal ditambahkan");</script>';
				return FALSE;
			}else{
				$judul	= $this->input->post('judul');
				$isi	= $this->input->post('isi');

				if($this->upload->do_upload('gambar')) {
		                $upload = $this->upload->data();
		                $gambar = $upload['file_name'];
		        }else{
		        	$gambar = 'foto.jpg';
		        }

				$data = array(
					'judul' => $judul,
					'isi'	=> $isi,
					'gambar'=> $gambar
					);

				$query = $this->adminmodel->create($data);
				if (!$query) {
					echo '<script>alert("Data gagal ditambahkan");</script>';
				}else{
					echo '<script>alert("Data berhasil ditambahkan");</script>';
				}
				return TRUE;
			}
		}
	}

	public function hapusartikel($id){
		if (isset($id)) {
			# code...
			$this->adminmodel->delete($id);
			redirect('admin/artikel');
		}else{
			redirect('admin');
		}
	}

	public function updateartikel($id){
		if (isset($id)) {
			$data['judul'] = "Update Artikel";
			$data['row'] = $this->adminmodel->read_by_id($id);
			$this->load->view('template/header');
			$this->load->view('content/artikel_update',$data);
			$this->load->view('template/footer');

			$config['upload_path'] = './images/';
	        $config['allowed_types'] = 'gif|jpg|png|bmp';
	        $config['file_name'] = 'gambar_'.time();

            $this->load->library('upload', $config);

			if (isset($_POST['submit'])) {
				$judul = $this->input->post('judul');
				$isi = $this->input->post('isi');

	            if($this->upload->do_upload('gambar')) {
	                $upload = $this->upload->data();
	                $gambar = $upload['file_name'];
	            } else {
	                $gambar = $this->input->post('gambar_lama');
            	}

            	$data2 = array(
            		'judul' => $judul,
            		'isi' => $isi,
            		'gambar' => $gambar);

            	$this->adminmodel->update($id,$data2);
            	redirect('admin/artikel');
			}

		}else{
			redirect('admin');
		}
	}

	public function test(){
		var_dump($this->session->userdata('nama'));
	}


}
