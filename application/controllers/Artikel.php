<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function index(){
		
		$data['query'] = $this->M_artikel->get_data();

		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public function tambah(){
		if ($this->session->userdata('Login')) {
			$this->load->view('header');
			$this->load->view('tambah');
			$this->load->view('footer');

			if (isset($_POST['submit'])) {

			$judul = $_POST['judul'];
			$artikel= $_POST['artikel'];

			$this->db->set('judul',$judul);
			$this->db->set('artikel',$artikel);

			$query = $this->db->insert('artkel');

				if (!$query) {
					echo '<script>alert("Data gagal ditambahkan");</script>';
				}else{
					echo '<script>alert("Data berhasil ditambahkan");</script>';
				}

			}
		}else{
			redirect('user');
		}
	}

	public function update($id){
		$data['query'] = $this->M_artikel->read_by_id($id);
		$this->load->view('header');
		$this->load->view('update',$data);
		$this->load->view('footer');

		if (isset($_POST['submit'])) {

		$judul = $_POST['judul'];
		$artikel= $_POST['artikel'];

		$data = array(
			'judul' => $judul,
			'artikel' => $artikel);

		$this->db->where('id',$id);
		$query = $this->db->update('artkel',$data);

		if (!$query) {
			echo '<script>alert("Data gagal diupdate");</script>';
		}else{
			redirect(base_url());
			echo '<script>alert("Data berhasil diupdate");</script>';

		}
	}
	}

	public function delete($id){
			$this->M_artikel->delete($id);
			redirect('artikel');
	}
}
?>