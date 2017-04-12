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
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}

	public function artikel(){
		$data['query'] = $this->adminmodel->read('artikel');

		$this->load->view('template/header');
		$this->load->view('admin/artikel',$data);
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
		$this->load->view('admin/artikel_insert',$data);
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
					echo '<script>alert("Data gagal ditambahkan");history.go(-1);</script>';		        }

				$data = array(
					'judul' => $judul,
					'isi'	=> $isi,
					'gambar'=> $gambar
					);

				$query = $this->adminmodel->create('artikel',$data);
				if (!$query) {
					echo '<script>alert("Data gagal ditambahkan");</script>';
				}else{
					redirect('admin/artikel');
				}
				return TRUE;
			}
		}
	}

	public function hapusartikel($id){
		if (isset($id)) {
			# code...
			$this->adminmodel->delete('artikel',$id);
			redirect('admin/artikel');
		}else{
			redirect('admin');
		}
	}

	public function hapusgalery($id){
		if (isset($id)) {
			# code...
			$this->adminmodel->delete('galery',$id);
			redirect('admin/galery');
		}else{
			redirect('admin');
		}
	}


	public function updateartikel($id){
		if (isset($id)) {
			$data['judul'] = "Update Artikel";
			$data['row'] = $this->adminmodel->read_by_id($id);
			$this->load->view('template/header');
			$this->load->view('admin/artikel_update',$data);
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

	public function galery(){
		$data['query'] = $this->adminmodel->read('galery');

		$this->load->view('template/header');
		$this->load->view('admin/galery',$data);
		$this->load->view('template/footer');
	}

	public function tambahgalery(){
		$data['judul'] = "Tambah Galery";

		$this->load->view('template/header');
		$this->load->view('admin/galery_insert',$data);
		$this->load->view('template/footer');
	}



	public function posting(){
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');

		$config['encrypt_name'] = true;
		
		if ($kategori == "gambar") {
			$config['upload_path'] = './images/';
	        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
	        $config['max_size'] = 5000;
	    }else{
	    	$config['upload_path'] = './video/';
	        $config['allowed_types'] = 'mp4|MP4';
	        $config['max_size'] = 200000;
		}

		$this->load->library('upload', $config);

		if($this->upload->do_upload('input_file')) {
			$upload = $this->upload->data();
			$file = $upload['file_name'];
			$data = array(
				'file'		=> $file,
				'deskripsi' => $deskripsi,
				'kategori'	=> $kategori,
			);

			$query = $this->adminmodel->create('galery',$data);
			if ($query) {
				redirect('admin/galery');
			}else{
				echo "<script>alert('Berhasil menambahkan postingan');</script>";
			}

		}else{
			echo "<script>alert('Gagal memposting data');history.go(-1)</script>";
		}

		
	}


}
